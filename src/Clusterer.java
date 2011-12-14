import net.sf.javaml.clustering.KMeans;
import net.sf.javaml.core.Dataset;
import net.sf.javaml.core.DefaultDataset;
import net.sf.javaml.core.SparseInstance;
import java.util.HashMap;
import java.util.Map;

public class Clusterer {

	HashMap<String, Integer> dictionary = new HashMap<String, Integer>();
	HashMap<String, SparseInstance> docVectors = new HashMap<String, SparseInstance>();
	
	private void newDoc(String docID) {
		//System.out.println("adding " + docID);
	    docVectors.put(docID, new SparseInstance());
	    SparseInstance vector = docVectors.get(docID);
	    /*for(Integer index : dictionary.values()) {
	      //System.out.println("index " + index);
	      vector.put(index, 0.0);
	    }*/
	}
	
	public void addToDocVector(String word, String docID) {
	    //System.out.println(word + " " + docID);
	    if(!docVectors.containsKey(docID)) {
	        newDoc(docID);
	    }
	    SparseInstance vector = docVectors.get(docID);
	    
	    if(dictionary.containsKey(word)) {
			//System.out.println("THERE");
	        Integer index = dictionary.get(word);
	        Double currentWordCount = vector.get(index);
	        vector.put(index, currentWordCount + 1);
	    }
	    else {
			//System.out.println("HERE");
	        dictionary.put(word, dictionary.size());
	        vector.put(dictionary.get(word), 1);
	    }
    }
	
	public void makeClusters() {
		System.out.println("HERE");
		Dataset data = new DefaultDataset();
		data.addAll(docVectors.values());
		KMeans km = new KMeans();
		Dataset[] clusters = km.cluster(data);
		System.out.println("Length: " + clusters.length);
	}
}
