package backend;

import gui.GUI;

import java.io.*;
import java.io.File;
import java.io.FileInputStream;
import java.io.FileNotFoundException;
import java.io.IOException;
import java.io.ObjectInputStream;
import java.util.ArrayList;
import java.util.Collections;
import java.util.HashSet;
import java.util.List;
import java.util.Map;
import java.util.TreeMap;
import java.util.TreeSet;

/*
 * IndexSearch class: Retrieves the set of matching documents and indexes in those documents
 * for the terms in a given query.
 */

public class IndexSearch {
	
	private static List<SearchResult> _results;
	static File dir = new File("webpages");
	
	
	private static ArrayList<String> makeFileList(File dir){
		ArrayList<String> files = new ArrayList<String>();
                if(dir.isFile()) {
                    files.add(dir.getName());
                    System.out.println(dir.getName());
                    return files;
                }
                else if(dir.isDirectory()) {
                    File[] children = dir.listFiles();
                    for(File f : children) {
                        files.addAll(makeFileList(f));
                    }
                    return files;
                }
                else {
                    return files;
                }
	}

        public static void main(String[] args) {
            ArrayList<String> files = makeFileList(dir);
            for(String fname : files) {
                System.out.println(fname);
            }
        }

	
	private static String[] _fileNames;
	
	// Finds one word queries and two word queries separated by " ", " AND ", " OR ", or " NOT "
	public static void find(String query, boolean caseFolding)
	{
		ArrayList<String> temp_fileNames = makeFileList(dir);
		_fileNames = new String[temp_fileNames.size()];
		for(int i = 0; i < temp_fileNames.size(); i++)
		{
			_fileNames[i] = temp_fileNames.get(i);
		}
		ObjectInputStream indexFile;
		
		try
		{
			// Open the index and read it in as a TreeSet
			indexFile = new ObjectInputStream(new FileInputStream(Properties.OUTPUT_FOLDER + "index.dat"));
			Map<String, TreeSet<Integer>> index = (TreeMap<String, TreeSet<Integer>>)indexFile.readObject();
			boolean and = false;
			boolean or = false;
			boolean not = false;
			boolean twoWord = false;
			String[] queryTerms = null;
			TreeSet<Integer> occurences = null;
			
			// Depending on the type of query, split (or not) the query and set a bool to true
			// Then, get the query's doc list(s) from the index, and possibly intersect/union/diff
			// them to get the set of documents that the entire query is in
			if(query.contains(" AND "))
			{
				and = true;
				queryTerms = (caseFolding ? query.toLowerCase().split(" and ") : query.split(" AND "));
				occurences = _intersectTrees(index.get(queryTerms[0]), index.get(queryTerms[1]));
			}
			else if(query.contains(" OR "))
			{
				or = true;
				queryTerms = (caseFolding ? query.toLowerCase().split(" or ") : query.split(" OR "));
				occurences = _unionTrees(index.get(queryTerms[0]), index.get(queryTerms[1]));
			}
			else if(query.contains(" NOT "))
			{
				not = true;
				queryTerms = (caseFolding ? query.toLowerCase().split(" not ") : query.split(" NOT "));
				occurences = _differenceTrees(index.get(queryTerms[0]), index.get(queryTerms[1]));
			}
			else if(query.contains(" "))
			{
				twoWord = true;
				queryTerms = (caseFolding ? query.toLowerCase().split(" ") : query.split(" "));
				occurences = _intersectTrees(index.get(queryTerms[0]), index.get(queryTerms[1]));
			}
			else
			{
				queryTerms = new String[] {(caseFolding ? query.toLowerCase() : query)};
				occurences = index.get(queryTerms[0]);
			}
			query = (caseFolding) ? query.toLowerCase() : query;
			
			// Get all the files that were indexed
			File fileDir = new File(Properties.FILE_FOLDER);
			_fileNames = fileDir.list();
			_results = new ArrayList<SearchResult>();
			
			if(occurences != null)
			{
				// For each document that the query is in, find all locations where it is found and
				// add them to the _results (which is the search results holder)
				for(Integer doc : occurences)
				{
					if(and || or)
					{
				        _results.addAll(_findTermResults(doc, queryTerms[0], caseFolding));
				        _results.addAll(_findTermResults(doc, queryTerms[1], caseFolding));
					}
					else if(not)
		        		_results.addAll(_findTermResults(doc, queryTerms[0], caseFolding));
					else
		        		_results.addAll(_findTermResults(doc, query, caseFolding));
				}
			}

			// If there are no results, return
			if(_results.size() == 0)
			{
				// GUI output
				GUI.setResults(null);
				GUI.setTextArea("Query was not found!", true);
				return;
			}
			
			// Remove duplicates and sort
			HashSet<SearchResult> hash = new HashSet<SearchResult>();
			hash.addAll(_results);
			_results.clear();
			_results.addAll(hash);
			Collections.sort(_results);
			
			GUI.setResults(_results);			
			indexFile.close();
		}
		catch (FileNotFoundException exc)
		{
			GUI.setTextArea("You need to index the files before searching them!\n\n", true);
		}
		catch (IOException exc)
		{
			GUI.setTextArea(exc.getMessage() + "\n\n", true);
		}
		catch (ClassNotFoundException exc)
		{
			GUI.setTextArea(exc.getMessage() + "\n\n", true);
		}
	}
	
	// Function to return all occurences of a query in a document as a List of SearchResult objects
	private static List<SearchResult> _findTermResults(int doc, String query, boolean caseFolding) throws IOException
	{
		// Load the file as a byte array, then convert to a String
		File file = new File(Properties.FILE_FOLDER + _fileNames[doc-1]);
		FileInputStream stream = new FileInputStream(file);
		byte fileByte[] = new byte[(int)file.length()];
		stream.read(fileByte);
        String fileString = new String(fileByte);
        
		int lastIndex = 0;
        String searchString = fileString;
        String searchQuery = query;
		if(caseFolding)
				searchString = searchString.toLowerCase();
		List<SearchResult> results = new ArrayList<SearchResult>();
        
		// While we still haven't run out of occurences of the query, look for the next one
		while(lastIndex != -1)
		{
			lastIndex = searchString.indexOf(searchQuery, lastIndex + searchQuery.length());

			// If it is still an occurence, and it is not within a larger word (ex: tea in teacher)
			// Make a SearchResult out of it and add it to the return
		    if(lastIndex != -1 
		    		&& !searchString.substring(lastIndex - 1, lastIndex).matches("([a-zA-Z])|([0-9])")
		    		&& !searchString.substring(lastIndex + query.length(), lastIndex + searchQuery.length() + 1).matches("([a-zA-Z])|([0-9])")
		    )
		    {
		    	SearchResult r = new SearchResult(_fileNames[doc-1], fileString, lastIndex, lastIndex + searchQuery.length());
		    	results.add(r);
		    }
		}
		
		return results;
	}
	
	// Function to find the intersect of two TreeSets
	private static TreeSet<Integer> _intersectTrees(TreeSet<Integer> tree1, TreeSet<Integer> tree2)
	{
		if(tree1 == null)
				return tree2;
		if(tree2 == null)
				return null;
		
		TreeSet<Integer> returnTree = new TreeSet<Integer>();
		
		for(int i : tree1)
		{
			if(tree2.contains(i))
					returnTree.add(i);
		}
		
		return returnTree;
	}

	// Function to find the union of two TreeSets
	private static TreeSet<Integer> _unionTrees(TreeSet<Integer> tree1, TreeSet<Integer> tree2)
	{
		if(tree1 == null)
				return tree2;
		if(tree2 == null)
				return tree1;
		
		tree1.addAll(tree2);
		return tree1;
	}

	// Function to find the difference of two TreeSets
	private static TreeSet<Integer> _differenceTrees(TreeSet<Integer> tree1, TreeSet<Integer> tree2)
	{
		if(tree1 == null)
				return null;
		if(tree2 == null)
				return tree1;
		
		tree1.removeAll(tree2);
		return tree1;
	}
}
