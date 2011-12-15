//import net.sf.javaml.clustering.*;
import net.sf.javaml.core.Dataset;
import net.sf.javaml.core.SparseInstance;
import net.sf.javaml.core.DefaultDataset;
import java.util.HashMap;
import java.util.Map;

public class Clusterer {

	HashMap<String, Integer> dictionary = new HashMap<String, Integer>();
	SparseInstance biggest = new SparseInstance();
	HashMap<String, SparseInstance> docVectors = new HashMap<String, SparseInstance>();
	
	private void newDoc(String docID) {
	    docVectors.put(docID, new SparseInstance());
	    SparseInstance vector = docVectors.get(docID);
	    //initialize all dimensions/words to 0.0
	    for(Integer index : dictionary.values()) {
	      vector.put(index, 0.0);
	    }
	}
	
	public void addToDocVector(String word, String docID) {
	    if(!docVectors.containsKey(docID)) { //new document?
	        newDoc(docID);
	    }
	    SparseInstance vector = docVectors.get(docID);
	    
	    if(dictionary.containsKey(word)) {
	        Integer index = dictionary.get(word);
	        Double currentWordCount = vector.get(index);
	        
	        //increment vector's count for this word
	        vector.put(index, currentWordCount + 1);
	        
	        //if this vector now has the highest count for this word, update the max values instance
	        if (vector.get(index) > biggest.get(index)) {
	        	biggest.put(index, vector.get(index));
	        }
	    }
	    else { //new word?
	    	
	    	//add word to dictionary, doc vector, and max values vector
	        dictionary.put(word, dictionary.size());
	        vector.put(dictionary.get(word), 1.0);
	        biggest.put(dictionary.get(word), 1.0);
	        
	        //add this word to all other doc vectors, with count 0
	        for(SparseInstance vec : docVectors.values()) {
	          vec.put(dictionary.get(word), 0.0);
	        }
	    }
    }
	
	public void makeClusters() {
		
		Dataset data = new DefaultDataset();
		data.addAll(docVectors.values());
		System.out.println("Begin clustering" + data.size() + " documents");
		System.out.println("for " + dictionary.size() + " words");
		System.out.println(biggest.toString());
		//KMeans km = new KMeans(3, 5, dictionary.size(), biggest, new SparseInstance(dictionary.size(), 0.0));
		KMeansOriginal km = new KMeansOriginal(15, 2);
		Dataset[] clusters = km.cluster(data);
		System.out.println("Length: " + clusters.length);
	}
}
