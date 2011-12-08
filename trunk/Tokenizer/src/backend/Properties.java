
package backend;

/*
 * Properties class: Holds a set of static properties to be accessed by various classes in the system.
 */

public class Properties {

	// Data directories
	public static final String OUTPUT_FOLDER = ".\\output\\";
	public static final String FILE_FOLDER = ".\\files\\";

	public static final double MEMORY_SIZE = 5000000; // ~5mb-ish
	public static final double USABLE_MEMORY_FRACTION = 0.75; // Fraction of memory to use
	
	// Queries that will appear in the GUI
	public static final String[] QUERIES = new String[]
	{
		"fig",
		"1982",
		"spread",
		"black AND white",
		"black OR white",
		"black NOT white",
		"Ronald Reagan",
		"black Monday"
	};
}