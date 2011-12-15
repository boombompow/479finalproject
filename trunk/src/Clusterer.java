import net.sf.javaml.core.Dataset;
import net.sf.javaml.core.Instance;
import net.sf.javaml.core.DefaultDataset;
import java.util.HashMap;
import java.io.FileWriter;
import java.io.IOException;

public class Clusterer {

	HashMap<String, Integer> dictionary = new HashMap<String, Integer>();
	SparseInstance biggest = new SparseInstance();
	HashMap<String, SparseInstance> docVectors = new HashMap<String, SparseInstance>();
        String PATH = "/home/natalie/Desktop/";
	
	private void newDoc(String docID) {
	    docVectors.put(docID, new SparseInstance(docID));
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
		System.out.println("\nBegin clustering " + data.size() + " documents for " + dictionary.size() + " words");
		int numberOfClusters = (int) Math.floor(Math.sqrt(data.size()));
		KMeans km = new KMeans(numberOfClusters, 5, dictionary.size(), biggest, new SparseInstance(dictionary.size(), 0.0));
		Dataset[] clusters = km.cluster(data);
		System.out.println(clusters.length + " clusters");
		for(Dataset cluster : clusters) {
			log("Cluster:\n");
		    for(Instance vec : cluster) {
		    	SparseInstance v = (SparseInstance) vec;
				log(v.docName);		    	
		    }
		}
		for(Dataset cluster : clusters) {
			System.out.println("Cluster:\n");
		    for(Instance vec : cluster) {
		    	SparseInstance v = (SparseInstance) vec;
				System.out.println(v.docName);		    	
		    }
		}
	}
    private void log(String msg) {
    	FileWriter logger;
    	try {
    	    logger = new FileWriter(PATH + "clusters", true);
    	    logger.write(msg + "\n");
                logger.close();
    	}
    	catch (IOException e) {
    	    System.err.println("IO Exception");
    	    e.printStackTrace();
    	}
        }
}
