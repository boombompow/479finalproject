
package backend;

/*
 * SearchResult class: Object to hold information regarding a search result found by the IndexSearch class.
 */

public class SearchResult implements Comparable<SearchResult> {

	private String _fileName;
	private String _text;
	private int _startIndex;
	private int _endIndex;
	
	public SearchResult(String fileName, String text, int startIndex, int endIndex)
	{
		this._fileName = fileName;
		this._text = text;
		this._startIndex = startIndex;
		this._endIndex = endIndex;
	}
	
	// Getters
	public String getFileName()
	{
		return this._fileName;
	}
	
	public String getText()
	{
		return this._text;
	}
	
	public int getStartIndex()
	{
		return this._startIndex;
	}
	
	public int getEndIndex()
	{
		return this._endIndex;
	}

	// Implementation of the Comparable interface (to properly sort the SearchResults in order within their List)
	public int compareTo(SearchResult sr)
	{
	    int fileCompare = _fileName.compareTo(sr.getFileName());
	    return ((fileCompare == 0) ? (_startIndex - sr.getStartIndex()) : fileCompare);
	}
}
