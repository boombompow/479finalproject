
package backend;

import gui.GUI;

import java.io.File;
import java.io.FileWriter;
import java.io.BufferedWriter;
import java.io.FilenameFilter;
import java.io.FileInputStream;
import java.io.FileOutputStream;
import java.io.ObjectInputStream;
import java.io.ObjectOutputStream;
import java.text.DateFormat;
import java.text.DecimalFormat;
import java.text.SimpleDateFormat;
import java.util.Date;
import java.util.Map;
import java.util.TreeMap;
import java.util.TreeSet;
import java.util.Iterator;
import java.io.FileNotFoundException;
import java.io.IOException;

/*
 * SPIMI class: Performs SPIMI tokenizing of documents words into blocks and 
 * merging of blocks to create a postings list.
 */

public class SPIMI {

	private boolean _noNumbers;
	private boolean _caseFolding;
	private boolean _stopWords;
	
	private DateFormat _dateFormat = new SimpleDateFormat("HH:mm:ss");
	private Date _date;
	
	public SPIMI(boolean noNumbers, boolean caseFolding, boolean stopWords)
	{
		this._noNumbers = noNumbers;
		this._caseFolding = caseFolding;
		this._stopWords = stopWords;
	}
	
	// Function to do the blocking and merging of documents
	public void SPIMIInvert() throws FileNotFoundException, IOException, ClassNotFoundException
	{
		// GUI output
		_date = new Date();
		GUI.setTextArea("\n" + _dateFormat.format(_date) + ": Memory size: " + new DecimalFormat("#.##").format((Properties.MEMORY_SIZE/1048576)) + "mb, " +
				"Alloted fraction: " + Properties.USABLE_MEMORY_FRACTION,
				false
		);

		int nextDocument = 0;
		double blockSize = 0;
		int blockID = 1;

		File fileDir = new File(Properties.FILE_FOLDER);
		String[] fileNames = fileDir.list();
		
		// While there are still documents left to index, make blocks
		while(nextDocument < fileNames.length)
		{
			// GUI output
			_date = new Date();
			GUI.setTextArea("\n" + _dateFormat.format(_date) + ": Tokenizing block " + blockID + "...\n" +
					"------------------------------------------------------------------------------------------------------",
					false
			);
			
			// Holds the current block's postings list
			Map<String, TreeSet<Integer>> words = new TreeMap<String, TreeSet<Integer>>();
			
			// Index documents until you reach memory limits (a.k.a. make a block)
	        for(int i=nextDocument; i<fileNames.length; i++)
	        {
	        	File nextFile = new File(Properties.FILE_FOLDER + fileNames[i]);
	        	
	        	// If this file doesn't even fit in memory, skip it (for now)
	        	if(nextFile.length() > (Properties.MEMORY_SIZE * Properties.USABLE_MEMORY_FRACTION))
	        	{
	        		_date = new Date();
	        		GUI.setTextArea("\n" + _dateFormat.format(_date) + ": File " + i + " doesn't fit in memory! It was skipped.", false);
	        		
	        		i++;
	        		nextDocument++;
		        	nextFile = new File(Properties.FILE_FOLDER + fileNames[i]);
	        	}
	        	
	        	// If there's still room left in memory for the next document, process it
	        	if(blockSize + nextFile.length() < (Properties.MEMORY_SIZE * Properties.USABLE_MEMORY_FRACTION))
	        	{
					nextDocument++;
					blockSize += nextFile.length();

					// GUI output
					_date = new Date();
					GUI.setTextArea("\n" + _dateFormat.format(_date) + ": Processing file " + (i+1), false);
					
					// Open the file as a byte array, convert to String, split by line
					File file = new File(Properties.FILE_FOLDER + fileNames[i]);
					FileInputStream stream = new FileInputStream(file);
					byte fileByte[] = new byte[(int)file.length()];
					stream.read(fileByte);
			        String fileString = new String(fileByte);
			        String[] fileLines = fileString.split("\n");
			        
			        for(String line : fileLines)
			        {
				        // Take out <___> tags, &___; codes, digits (optionally), and punctuation
			        	if(_noNumbers)
	        					line = line.replaceAll("(<.*?\\>)|((\\&.*?\\;)+)|(\\d+)|(\\p{Punct})", " ");
			        	else
			        			line = line.replaceAll("(<.*?\\>)|((\\&.*?\\;)+)|(\\p{Punct})", " ");
			        	
			        	// Split by word
				        String[] lineWords = line.split(" ");
				        
				        for(String fileWord : lineWords)
				        {
				        	// Unnecessarily fancy trim()
				        	fileWord = fileWord.replaceAll("(^\\s+)|(\\s+$)", "");
				        	
				        	if(_caseFolding)
				        			fileWord = fileWord.toLowerCase();
	
				        	// If the word being processed is not "" and is not a stop word
				        	if(fileWord.length() > 0 && !fileWord.matches("\\s+") &&
				        			(!_stopWords || (_stopWords && !StopWords.has(fileWord)))
				        	)
				        	{
				        		// If the token is already in the postings list, 
				        		// but this document isn't in its entries, add it
				        		if(words.get(fileWord) != null)
				        		{
					        		if(!words.get(fileWord).contains(i+1))
					        				words.get(fileWord).add(i+1);
				        		}
				        		else // If it's just not in the list, add the new entry
				        		{
					        		TreeSet<Integer> fileWordDocIDList = new TreeSet<Integer>();
					        		fileWordDocIDList.add(i+1);
					        		words.put(fileWord, fileWordDocIDList);
				        		}
				        	}
				        }
					}					
	        	} else break; // No more room, the block is done
	        }
    		
			// GUI output
			_date = new Date();
			GUI.setTextArea("\n" + _dateFormat.format(_date) + ": Block " + blockID + " is full." +
					" Block size: " + new DecimalFormat("#.##").format((blockSize/1048576)) + "mb",
					false
			);

	        // Write the block to disk
			ObjectOutputStream oos = new ObjectOutputStream(new FileOutputStream(Properties.OUTPUT_FOLDER + "block" + blockID + ".dat"));
            oos.writeObject(words);
            oos.close();
	        
			blockID++;
			blockSize = 0;
		}

		// GUI output
		_date = new Date();
		GUI.setTextArea("\n" + _dateFormat.format(_date) + ": Starting the merging...\n" + 
			_dateFormat.format(_date) + ": Tokenizing is complete!\n" +
			"------------------------------------------------------------------------------------------------------",
			false
		);
		
		_mergeBlocks();

		// GUI output
		_date = new Date();
		GUI.setTextArea(_dateFormat.format(_date) + ": Merging complete! Files indexed.\n", false);
	}
	
	// Function to merge all the blocks written into a single mega index
	private void _mergeBlocks() throws FileNotFoundException, IOException, ClassNotFoundException
	{
		File outputDir = new File(Properties.OUTPUT_FOLDER);
		// This filter only returns files starting with "block"
		FilenameFilter filter = new FilenameFilter() {
		    public boolean accept(File file, String name) {
		        return name.startsWith("block");
		    }
		};
		String[] blockNames = outputDir.list(filter);
		
		// This TreeSet holds the mega index
		Map<String, TreeSet<Integer>> index = new TreeMap<String, TreeSet<Integer>>();
		
		// While there are still blocks left to merge, merge them
		for(int i=0;i<blockNames.length;i++)
		{
			// GUI output
			_date = new Date();
			GUI.setTextArea("\n" + _dateFormat.format(_date) + ": Merging block " + (i+1) + " into final index...", false);
			
			// Read the current block in as an object and merge it into the mega index. Then, delete the block.
			ObjectInputStream blockFile = new ObjectInputStream(new FileInputStream(Properties.OUTPUT_FOLDER + blockNames[i]));
			Map<String, TreeSet<Integer>> blockIndex = (TreeMap<String, TreeSet<Integer>>)blockFile.readObject();
			blockFile.close();
			index = _mergeBlocks(index, blockIndex);
			File toDelete = new File(Properties.OUTPUT_FOLDER + blockNames[i]);
			toDelete.delete();
		}
		
		// Write the mega index to disk
		ObjectOutputStream oos = new ObjectOutputStream(new FileOutputStream(Properties.OUTPUT_FOLDER + "index.dat"));
        oos.writeObject(index);

		// GUI output
        double indexSize = new File(Properties.OUTPUT_FOLDER + "index.dat").length();
		_date = new Date();
		GUI.setTextArea(_dateFormat.format(_date) + ": Number of terms: " + index.size() + 
				", Final index size: " + new DecimalFormat("#.##").format((indexSize/1048576)) + "mb",
				false
		);
		
        oos.close();
		
        // For a human readable index on the side (mostly for testing purposes)
    	FileWriter outputFile = new FileWriter(Properties.OUTPUT_FOLDER + "index.txt");
    	BufferedWriter output = new BufferedWriter(outputFile);
        for(Map.Entry<String, TreeSet<Integer>> word : index.entrySet())
        		output.write(word.getKey() + " " + word.getValue().toString() + "\n");
    	output.close();
	}
	
	// Function to merge two TreeMaps together
	private Map<String, TreeSet<Integer>> _mergeBlocks(Map<String, TreeSet<Integer>> block1, Map<String, TreeSet<Integer>> block2)
	{
		// If either one is empty, return the other
		if(block1.isEmpty())
				return block2;
		if(block2.isEmpty())
				return block1;

		// Iterate over the first tree
		Iterator<String> block1KeyIterator = block1.keySet().iterator();
		Iterator<TreeSet<Integer>> block1ValueIterator = block1.values().iterator();
		
		while(block1KeyIterator.hasNext())
		{
			String key = (String)block1KeyIterator.next();
			TreeSet<Integer> value = (TreeSet<Integer>)block1ValueIterator.next();
			
			// If the entry is in block two, merge their doc lists
			if(block2.containsKey(key))
					block2.get(key).addAll(value);
			else // If not, add the entry to block two
        			block2.put(key, value);
		}
		
		return block2;
	}
}
