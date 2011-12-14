import java.io.BufferedReader;
import java.io.FileInputStream;
import java.io.IOException;
import java.io.InputStreamReader;
import java.io.ObjectInputStream;
import java.util.HashSet;
import java.util.Map;
import java.util.Set;

public class Search {

    public static void main(String[] args) throws IOException {
        while (true) {
            System.out.println("Enter the term you would like to search for: ");

            BufferedReader br = new BufferedReader(new InputStreamReader(
                    System.in));
            String wordToSearchFor = null;

            wordToSearchFor = br.readLine();

            if (Index.caseFolding) {
                wordToSearchFor = wordToSearchFor.toLowerCase();
            }

            Set<String> resultWebPages = new HashSet<String>();

            try {
                //load merged index from disk
                FileInputStream fis = new FileInputStream(Index.PATH
                        + "\\merged.index");
                ObjectInputStream ois = new ObjectInputStream(fis);
                Map<String, HashSet<String>> indexMap = (Map<String, HashSet<String>>) ois
                        .readObject();
                ois.close();

                resultWebPages = indexMap.get(wordToSearchFor);
            } catch (Exception e1) {
                e1.printStackTrace();
            }

            // no results were found
            if (resultWebPages == null || resultWebPages.isEmpty()) {
                System.out
                        .println("Sorry! The term you are looking for is not found");
                System.exit(0);

            } else {
                System.out.println("The word " + wordToSearchFor
                        + " was found in " + resultWebPages.size()
                        + " webpages: " + resultWebPages);
            }

            // for each webpage, open the file
            // then print out the content
            System.out.println("Pages Found:");
            for (String webPage : resultWebPages) {
                String currFile = Index.getFileContent(webPage).toString();
                System.out.println("Page: " + webPage);
                System.out.println(currFile + "\n\n");
            }
        }

    }
}
