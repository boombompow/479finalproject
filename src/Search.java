import java.io.BufferedReader;
import java.io.FileInputStream;
import java.io.IOException;
import java.io.InputStreamReader;
import java.io.ObjectInputStream;
import java.util.Collections;
import java.util.Comparator;
import java.util.HashMap;
import java.util.HashSet;
import java.util.Iterator;
import java.util.LinkedHashMap;
import java.util.LinkedList;
import java.util.List;
import java.util.Map;
import java.util.Map.Entry;
import java.util.Set;

public class Search {


	public static void main(String[] args) throws IOException {

		// total number of documents
		double N = 0;

		// document score
		double docWeight;

		// number of documents that contain term t
		double dft = 0;

		// term frequency in document d
		double tftd = 0;

		Map<String, Map<String, Integer>> totalMap = null;
		// use the final merged block file
		try {
			FileInputStream fis = new FileInputStream(Index.PATH
					+ "\\merged.index");
			ObjectInputStream ois = new ObjectInputStream(fis);
			totalMap = (Map<String, Map<String, Integer>>) ois.readObject();
			ois.close();
			
			//calculate N
			Set<String> setOfFiles = new HashSet<String>();
			for (Map<String, Integer> entry : totalMap.values()) {
				setOfFiles.addAll(entry.keySet());
			}
			N = setOfFiles.size();
			System.out.println("N="+N);

		} catch (Exception e) {
			e.printStackTrace();
		}

		while (true) {
			try {
				System.out
						.println("Enter the query you would like to search for: ");

				BufferedReader br = new BufferedReader(new InputStreamReader(
						System.in));
				String queryToSearchFor = null;

				queryToSearchFor = br.readLine();

				if (Index.caseFolding) {
					queryToSearchFor = queryToSearchFor.toLowerCase();
				}

				Map<String, Double> docWeights = new HashMap<String, Double>();

				Map<String, Integer> resultWebpages = new HashMap<String, Integer>();

				for (String wordToSearchFor : queryToSearchFor.split("\\s")) {

					resultWebpages = totalMap.get(wordToSearchFor);

					// no results were found
					if (resultWebpages == null || resultWebpages.isEmpty()) {
						continue;
					}

					// there were some results
					dft = resultWebpages.size();

					// calculate the weight for each document
					for (Entry<String, Integer> page : resultWebpages
							.entrySet()) {

						tftd = page.getValue();

						docWeight = (1+ Math.log(tftd))*(Math.log(N/dft));

						Double currWeight = docWeights.get(page.getKey());
						if (currWeight != null) {
							docWeight += currWeight;
						}

						docWeights.put(page.getKey(), docWeight);
					}

				}

				Map<String, Double> sorted_map = sortByValue(docWeights);

				// for each page, open the file
				// and print it out
				System.out.println("Webpages Found:");

				for (Entry<String, Double> entry : sorted_map.entrySet()) {
					String webPage = entry.getKey();
					String currFile = Index.getFileContent(webPage).toString();
					System.out.println("Page: " + webPage);
					System.out.println("Ranking: " + entry.getValue());
					System.out.println(currFile + "\n\n");
				}
				
			} catch (Exception e1) {
				e1.printStackTrace();
			}

		}
	}

	static Map<String, Double> sortByValue(Map<String, Double> map) {
		List list = new LinkedList(map.entrySet());
		Collections.sort(list, new Comparator() {
			public int compare(Object o1, Object o2) {
				return (-1)
						* ((Comparable) ((Map.Entry) (o1)).getValue())
								.compareTo(((Map.Entry) (o2)).getValue());
			}
		});
		// logger.info(list);
		Map<String, Double> result = new LinkedHashMap<String, Double>();
		for (Iterator it = list.iterator(); it.hasNext();) {
			Map.Entry<String, Double> entry = (Map.Entry<String, Double>) it
					.next();
			result.put(entry.getKey(), entry.getValue());
		}
		return result;
	}

}
