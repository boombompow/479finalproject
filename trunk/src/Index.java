import java.io.BufferedReader;
import java.io.File;
import java.io.FileInputStream;
import java.io.FileOutputStream;
import java.io.FileReader;
import java.io.IOException;
import java.io.ObjectInputStream;
import java.io.ObjectOutputStream;
import java.util.Arrays;
import java.util.HashMap;
import java.util.HashSet;
import java.util.Map;
import java.util.Map.Entry;
import java.util.Set;

import org.xml.sax.helpers.DefaultHandler;

public class Index extends DefaultHandler {

	// path to reuters files
	public static final String PATH = "C:\\Users\\NADA\\Documents\\Eman\\school\\Fall_2011\\COMP479\\Project1\\Reuters";

	// 30 stopwords in an array
	private static final String _30_elements[] = { "a", "an", "and", "any",
			"are", "at", "be", "because", "but", "by", "can", "do", "for",
			"from", "has", "he", "in", "is", "it", "its", "of", "on", "that",
			"the", "to", "was", "were", "what", "will", "with" };

	// 150 stopwords in an array
	private static final String _150_elements[] = { "a", "about", "after",
			"again", "against", "all", "almost", "alone", "along", "also",
			"although", "always", "am", "among", "an", "and", "another", "any",
			"are", "around", "as", "aside", "at", "away", "be", "because",
			"been", "before", "behind", "being", "below", "between", "both",
			"but", "by", "can", "cannot", "could", "deep", "did", "do", "does",
			"doing", "done", "down", "during", "each", "either", "else",
			"enough", "even", "ever", "every", "far", "few", "for", "from",
			"get", "got", "had", "has", "have", "her", "here", "herself",
			"him", "himself", "his", "how", "however", "i", "if", "in",
			"indeed", "instead", "into", "is", "it", "its", "just", "kept",
			"many", "maybe", "might", "mine", "more", "most", "much", "must",
			"near", "no", "none", "nor", "not", "nothing", "of", "often", "on",
			"only", "or", "other", "our", "ours", "out", "over", "please",
			"plus", "quite", "rather", "really", "said", "seem", "she",
			"should", "since", "so", "some", "than", "that", "the", "their",
			"theirs", "them", "then", "there", "therefore", "these", "they",
			"this", "those", "through", "to", "together", "too", "under", "up",
			"very", "was", "well", "were", "what", "when", "where", "which",
			"while", "who", "will", "with", "would", "your" };

	// create a hash set and put the array elements in it
	private static final Set<String> _150_StopWords = new HashSet<String>(
			Arrays.asList(_150_elements));

	private static final Set<String> _30_StopWords = new HashSet<String>(
			Arrays.asList(_30_elements));

	private static boolean removeNumbers = true;
	public static boolean caseFolding = true;
	private static boolean use30StopWords = false;
	private static boolean use150StopWords = true;

	public static void main(String[] args) throws IOException {
		// create a hashmap for the dictionary
		// key: a word
		// value: list of postings (where the word occurred)
		Map<String, Map<String,Integer>> dictionary = new HashMap<String, Map<String,Integer>>();

		System.out.println("Start!");

		long startTime = System.currentTimeMillis();

		Set<String> fileNames = getFileNamesFromDir(PATH, ".sgm");

		int noFiles = 1;
		int block = 0;
		int noDistinctWords = 0;
		int totalNoOfWords = 0;

		// this file will contain the file to article mapping to be used later
		// during the search
		Map<String, Map<String, Integer>> fileToArticlesMap = new HashMap<String, Map<String, Integer>>();

		// loop on each file
		for (String file : fileNames) {

			// change the number here to decide how many files are in each
			// block
			// this acts as an artificial memory constraint
			if (++noFiles % 10 == 0) {
				// file limit reached for this block...write to disk
				System.out.println("Saving block: " + block);
				saveBlockToDisk(dictionary, block);
				dictionary.clear();
				block++;
			}

			//contains articleId and no of terms in article
			Map<String, Integer> mapOfArticlesInFile = new HashMap<String, Integer>();

			System.out.println("Processing file " + file + "\n");

			// load the file
			String currFile = getFileContent(file).toString();

			// look for the REUTERS tag, which contains the NEWID attribute
			int reuters = currFile.indexOf("<REUTERS");

			// if the index is -1, it means we are at the end of the file
			while (reuters > -1) {
				currFile = currFile.substring(reuters);

				// get the article id
				int startOfId = currFile.indexOf("NEWID=\"") + 7;
				currFile = currFile.substring(startOfId);
				int endOfId = currFile.indexOf("\"");
				String articleId = currFile.substring(0, endOfId);

				// find the article text
				int startOfText = currFile.indexOf("<TEXT") + 5;
				currFile = currFile.substring(startOfText);
				int endOfText = currFile.indexOf("</TEXT>");
				String text = currFile.substring(0, endOfText);

				// Remove html stuff from the text section to avoid indexing it
				text = text
						.replaceAll(
								"(@)?(href=')?(HREF=')?(HREF=\")?(href=\")?(http://|https://)?[a-zA-Z_0-9\\-]+(\\.\\w[a-zA-Z_0-9\\-]+)+(/[#&\\n\\-=?\\+\\%/\\.\\w]+)?",
								" ");

				// remove extra tags to avoid indexing them
				text = text.replaceAll("<TITLE>", "");
				text = text.replaceAll("</TITLE>", "");
				text = text.replaceAll("<DATELINE>", "");
				text = text.replaceAll("</DATELINE>", "");
				text = text.replaceAll("<BODY>", "");
				text = text.replaceAll("</BODY>", "");

				// remove punctuation to avoid indexing it
				text = text.replaceAll("[\\p{Punct}]", " ");

				// remove numbers if the flag is true
				if (removeNumbers) {
					text = text.replaceAll("[\\d]", " ");
				}

				// split based on space or new line
				String[] words = text.split("[\\s]");

				// put the article id in the file to article mapping file
				mapOfArticlesInFile.put(articleId, words.length);
				
				// loop on each token in the current article
				for (String word : words) {
					// if this word is basically a space, go to the next word
					if (word.trim().equals(""))
						continue;

					if (caseFolding) {
						word = word.toLowerCase();
					}

					// apply stop words
					if (use30StopWords
							&& _30_StopWords.contains(word.toLowerCase())) {
						continue;
					} else if (use150StopWords
							&& _150_StopWords.contains(word.toLowerCase())) {
						continue;
					}

					totalNoOfWords++;

					Map<String, Integer> postings;

					// check if dictionary already has word
					if (dictionary.containsKey(word)) {
						// add the index to the postings for that term
						postings = dictionary.get(word);
						Integer noOfOcc = postings.get(articleId);
						if(noOfOcc != null) {
							noOfOcc += 1;
						} else {
							noOfOcc = 1;	
						}
						postings.put(articleId, noOfOcc);
						dictionary.put(word, postings);
					} else {
						noDistinctWords++;
						// create a new entry in the dictionary for that
						// term
						postings = new HashMap<String, Integer>();
						postings.put(articleId, 1);
						dictionary.put(word, postings);
					}
				}

				reuters = currFile.indexOf("<REUTERS");
			}

			fileToArticlesMap.put(file, mapOfArticlesInFile);

		}

		saveFileToArticlesToDisk(fileToArticlesMap);

		// completed last file..now save the current block to disk
		System.out.println("Saving block: " + block);
		saveBlockToDisk(dictionary, block);

		// merge all blocks
		Map<String, Map<String,Integer>> finalDictionary = new HashMap<String, Map<String,Integer>>();
		Set<String> blockFiles = getFileNamesFromDir(PATH, ".blk");
		for (String blockFile : blockFiles) {
			System.out.println("processing block file " + blockFile);
//			Map<String,Integer> resultPostings = new HashMap<String,Integer>();
			String word = "";
			try {

				FileInputStream fis = new FileInputStream(blockFile);
				ObjectInputStream ois = new ObjectInputStream(fis);
				Map<String, Map<String, Integer>> currBlock = (Map<String, Map<String, Integer>>) ois
						.readObject();
				ois.close();

				for (Entry<String, Map<String, Integer>> currBlockEntry : currBlock
						.entrySet()) {

					word = currBlockEntry.getKey();
					
					Map<String,Integer> resultPostings = currBlockEntry.getValue();
//					resultPostings.putAll(currBlockEntry.getValue());

					Map<String, Integer> finalPostings;
					if (finalDictionary.containsKey(word)) {
						finalPostings = finalDictionary.get(word);
						finalPostings.putAll(resultPostings);
						finalDictionary.put(word, finalPostings);
					} else {
						finalDictionary.put(word, resultPostings);
					}
				}

			} catch (Exception e1) {
				e1.printStackTrace();
			}

		}

		System.out.println("saving merged blocks to disk...");

		// commented out to save time
		saveMergedBlockToDisk(finalDictionary);

		long endTime = System.currentTimeMillis();

		System.out.println("This process took: " + (endTime - startTime)
				+ " ms!");
		System.out.println("The distinct number of words indexed is: "
				+ noDistinctWords);
		System.out.println("The total number of words indexed is: "
				+ totalNoOfWords);

	}

	private static void saveBlockToDisk(Map<String, Map<String, Integer>> dictionary,
			int block) {
		try {

			FileOutputStream fos = new FileOutputStream(PATH + "\\" + block
					+ ".blk");
			ObjectOutputStream oos = new ObjectOutputStream(fos);
			oos.writeObject(dictionary);
			oos.close();
		} catch (Exception e) {// Catch exception if any
			System.err.println("Error: " + e.getMessage());
		}
	}

	private static void saveFileToArticlesToDisk(
			Map<String, Map<String, Integer>> fileToArticlesMap) {
		try {

			FileOutputStream fos = new FileOutputStream(PATH
					+ "\\articles.file");
			ObjectOutputStream oos = new ObjectOutputStream(fos);
			oos.writeObject(fileToArticlesMap);
			oos.close();

		} catch (Exception e) {// Catch exception if any
			System.err.println("Error: " + e.getMessage());
		}
	}

	private static void saveMergedBlockToDisk(
			Map<String, Map<String, Integer>> finalDictionary) {
		try {

			FileOutputStream fos = new FileOutputStream(PATH + "\\merged.index");
			ObjectOutputStream oos = new ObjectOutputStream(fos);
			oos.writeObject(finalDictionary);
			oos.close();
		} catch (Exception e) {// Catch exception if any
			System.err.println("Error: " + e.getMessage());
		}
	}

	// Returns file names in the directory (filePath) that end with extension
	// (extension)
	public static Set<String> getFileNamesFromDir(String filePath,
			String extension) {

		Set<String> fileNames = new HashSet<String>();
		File file = new File(filePath);

		if (!file.exists()) {
			System.out.println("Wrong path: " + filePath
					+ "\nPlease check your path");
			return fileNames;
		}

		if (file.isDirectory()) {
			String[] fileNameList = file.list();
			for (String fileName : fileNameList) {
				if (fileName.endsWith(extension)) {
					fileNames.add(file.getPath() + "/" + fileName);
				}
			}
		}
		return fileNames;
	}

	public static StringBuffer getFileContent(String file) {
		StringBuffer contents = new StringBuffer();
		try {
			BufferedReader input = new BufferedReader(new FileReader(file));
			String line = null;
			while ((line = input.readLine()) != null)
				contents.append(line).append(
						System.getProperty("line.separator"));
			input.close();
		} catch (Exception e) {
			e.printStackTrace();
		}
		return contents;
	}

}
