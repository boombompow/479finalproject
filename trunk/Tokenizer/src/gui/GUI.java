
package gui;

import javax.swing.*;
import javax.swing.GroupLayout.Group;
import javax.swing.text.BadLocationException;
import javax.swing.text.DefaultHighlighter;
import javax.swing.text.Highlighter;

import backend.IndexSearch;
import backend.Properties;
import backend.SPIMI;
import backend.SearchResult;

import java.awt.*;
import java.awt.event.ActionEvent;
import java.awt.event.ActionListener;
import java.awt.event.WindowAdapter;
import java.awt.event.WindowEvent;
import java.io.File;
import java.io.FileNotFoundException;
import java.io.IOException;
import java.text.DateFormat;
import java.text.SimpleDateFormat;
import java.util.Date;
import java.util.List;

/*
 * GUI class: Makes the GUI for the SPIMI Searcher program. Also acts as a sort of controller
 * by handling events and creating behaviour on the interface.
 */

public class GUI extends JFrame implements ActionListener {

	// GUI Objects
    private JButton jButton1;
    private JButton jButton2;
    private JComboBox jComboBox1;
    private JLabel jLabel1;
    private JLabel jLabel2;
    private JLabel jLabel3;
    private JLabel jLabel4;
    private JSeparator jSeparator1;
    private JScrollPane jScrollPane1;
    private JToggleButton jToggleButton1;
    private JToggleButton jToggleButton2;
    private JToggleButton jToggleButton3;
    private JToggleButton jToggleButton4;

    // GUI Objects needed in some static calls
    private static JButton jButton3;
    private static JButton jButton4;
    private static JLabel jLabel5;
    private static JLabel jLabel6;
    private static JTextArea jTextArea1;
    
    // Objects and primitive types used to make the GUI functional
	private static boolean _caseFolding = false;
	private static List<SearchResult> _results;
	private static int _currentResult = 0;

    public GUI()
    {
        initComponents();
    }

    private void initComponents()
    {
    	// Instantiate the elements
        jScrollPane1 = new JScrollPane();
        jTextArea1 = new JTextArea();
        jLabel1 = new JLabel();
        jLabel2 = new JLabel();
        jToggleButton1 = new JToggleButton();
        jToggleButton2 = new JToggleButton();
        jToggleButton3 = new JToggleButton();
        jToggleButton4 = new JToggleButton();
        jSeparator1 = new JSeparator();
        jLabel3 = new JLabel();
        jComboBox1 = new JComboBox();
        jButton1 = new JButton();
        jButton2 = new JButton();
        jButton3 = new JButton();
        jButton4 = new JButton();
        jLabel4 = new JLabel();
        jLabel5 = new JLabel();
        jLabel6 = new JLabel();

        // Link buttons to event handlers
        jButton1.setActionCommand("search");
        jButton1.addActionListener(this);
        jButton2.setActionCommand("index");
        jButton2.addActionListener(this);
        jButton3.setActionCommand("previous");
        jButton3.addActionListener(this);
        jButton4.setActionCommand("next");
        jButton4.addActionListener(this);

        setDefaultCloseOperation(WindowConstants.EXIT_ON_CLOSE);

        // More setting up
        jTextArea1.setColumns(20);
        jTextArea1.setRows(5);
        jScrollPane1.setViewportView(jTextArea1);

        jLabel1.setFont(new Font("Tahoma", 0, 18));
        jLabel1.setText("SPIMI Searcher");

        jLabel2.setFont(new Font("Tahoma", 1, 11));
        jLabel2.setText("Indexing Options:");

        jToggleButton1.setText("No Numbers");
        jToggleButton1.setBackground(Color.WHITE);
        jToggleButton2.setText("Case Folding");
        jToggleButton2.setBackground(Color.WHITE);
        jToggleButton3.setText("Stop Words");
        jToggleButton3.setBackground(Color.WHITE);
        jToggleButton4.setText("Stemming");
        jToggleButton4.setBackground(Color.WHITE);
        jToggleButton4.setEnabled(false);

        jLabel3.setFont(new Font("Tahoma", 1, 11));
        jLabel3.setText("Search Options:");

        jComboBox1.setModel(new DefaultComboBoxModel(Properties.QUERIES));
        
        jComboBox1.setBackground(Color.WHITE);

        jButton1.setText("Search");
        jButton1.setBackground(Color.GRAY);
        jButton1.setForeground(Color.WHITE);
        jButton2.setText("Index");
        jButton2.setBackground(Color.GRAY);
        jButton2.setForeground(Color.WHITE);
        jButton3.setText("<< Previous");
        jButton3.setBackground(Color.WHITE);
        jButton3.setEnabled(false);
        jButton4.setText("Next >>");
        jButton4.setBackground(Color.WHITE);
        jButton4.setEnabled(false);

        jLabel4.setFont(new Font("Tahoma", 1, 11));
        jLabel4.setText("Search Results:");     

        // Create the set of groups to be added to form the GUI horizontal and vertical grids
        GroupLayout layout = new GroupLayout(getContentPane());
        getContentPane().setLayout(layout);
        
        Group _stopWords = layout.createParallelGroup(GroupLayout.Alignment.LEADING, false)
		        .addComponent(jToggleButton4, GroupLayout.DEFAULT_SIZE, GroupLayout.DEFAULT_SIZE, Short.MAX_VALUE)
		        .addComponent(jToggleButton3, GroupLayout.DEFAULT_SIZE, 113, Short.MAX_VALUE);
        
        Group _numsAndCaseFolding = layout.createParallelGroup(GroupLayout.Alignment.TRAILING, false)
		        .addComponent(jButton2, GroupLayout.Alignment.LEADING, GroupLayout.DEFAULT_SIZE, GroupLayout.DEFAULT_SIZE, Short.MAX_VALUE)
                .addComponent(jToggleButton2, GroupLayout.Alignment.LEADING, GroupLayout.DEFAULT_SIZE, GroupLayout.DEFAULT_SIZE, Short.MAX_VALUE)
                .addComponent(jToggleButton1, GroupLayout.Alignment.LEADING, GroupLayout.DEFAULT_SIZE, 112, Short.MAX_VALUE);
        
        Group _resultsArea = layout.createSequentialGroup()
                .addComponent(jScrollPane1, GroupLayout.DEFAULT_SIZE, 683, Short.MAX_VALUE)
                .addPreferredGap(LayoutStyle.ComponentPlacement.RELATED);
        
        Group _indexOptionsHeader = layout.createParallelGroup(GroupLayout.Alignment.LEADING)
                .addComponent(jSeparator1, GroupLayout.DEFAULT_SIZE, 706, Short.MAX_VALUE)
                .addGroup(GroupLayout.Alignment.TRAILING, _resultsArea)
                .addComponent(jLabel1);

        Group _searchQueryHeader = layout.createParallelGroup(GroupLayout.Alignment.LEADING)
                .addComponent(jLabel2);

        Group _searchResultsHeader = layout.createParallelGroup(GroupLayout.Alignment.LEADING)
                .addComponent(jLabel4);
        
        Group _labels = layout.createParallelGroup(GroupLayout.Alignment.BASELINE)
                .addComponent(jLabel2)
                .addComponent(jLabel3)
                .addComponent(jLabel4);
        
        Group _query = layout.createParallelGroup(GroupLayout.Alignment.LEADING, false)
                .addComponent(jLabel3)
                .addComponent(jButton1, GroupLayout.DEFAULT_SIZE, GroupLayout.DEFAULT_SIZE, Short.MAX_VALUE)
                .addComponent(jComboBox1, GroupLayout.PREFERRED_SIZE, 205, GroupLayout.PREFERRED_SIZE);
        
        Group _scrollPane = layout.createParallelGroup(GroupLayout.Alignment.LEADING)
                .addComponent(jScrollPane1, GroupLayout.Alignment.TRAILING, GroupLayout.DEFAULT_SIZE, 369, Short.MAX_VALUE);
        
        Group _caseFoldingAndStopWords = layout.createParallelGroup(GroupLayout.Alignment.LEADING, false)
                .addComponent(jToggleButton2)
                .addComponent(jToggleButton4);
        
        Group _noNumsAndStopWords = layout.createParallelGroup(GroupLayout.Alignment.LEADING, false)
                .addComponent(jToggleButton1, GroupLayout.DEFAULT_SIZE, GroupLayout.DEFAULT_SIZE, Short.MAX_VALUE)
                .addComponent(jToggleButton3, GroupLayout.DEFAULT_SIZE, GroupLayout.DEFAULT_SIZE, Short.MAX_VALUE);
        
        Group _stemmingAndIndexButton = layout.createParallelGroup(GroupLayout.Alignment.LEADING)
                .addComponent(jButton2, GroupLayout.DEFAULT_SIZE, GroupLayout.DEFAULT_SIZE, Short.MAX_VALUE);
        
        Group _queries = layout.createParallelGroup(GroupLayout.Alignment.LEADING)
                .addComponent(jComboBox1, GroupLayout.DEFAULT_SIZE, 23, Short.MAX_VALUE);
        
        Group _searchResultsBtns = layout.createParallelGroup(GroupLayout.Alignment.BASELINE, false)
		        .addComponent(jButton3)
		        .addComponent(jButton4);
        
        // Set the horizontal grid
        layout.setHorizontalGroup(
            layout.createParallelGroup(GroupLayout.Alignment.LEADING)
            .addGroup(layout.createSequentialGroup()
                .addContainerGap()
                .addGroup(_indexOptionsHeader
                    .addGroup(layout.createSequentialGroup()
                        .addGroup(_searchQueryHeader
                            .addGroup(layout.createSequentialGroup()
                                .addGroup(_numsAndCaseFolding)
                                .addPreferredGap(LayoutStyle.ComponentPlacement.RELATED)
                                .addGroup(_stopWords)))
                        .addGap(29, 29, 29)
                        .addGroup(_query)
                        .addGap(27, 27, 27)
                        .addGroup(_searchResultsHeader
                        	.addComponent(jLabel5)
                            .addGroup(layout.createSequentialGroup()
                                    .addComponent(jButton3)
                                    .addPreferredGap(LayoutStyle.ComponentPlacement.RELATED)
                                    .addComponent(jButton4))
                                	.addComponent(jLabel6))))
                .addContainerGap())
        );
        
        // Set the vertical grid
        layout.setVerticalGroup(
            layout.createParallelGroup(GroupLayout.Alignment.LEADING)
            .addGroup(layout.createSequentialGroup()
                .addContainerGap()
                .addComponent(jLabel1)
                .addPreferredGap(LayoutStyle.ComponentPlacement.RELATED)
                .addComponent(jSeparator1, GroupLayout.PREFERRED_SIZE, 2, GroupLayout.PREFERRED_SIZE)
                .addPreferredGap(LayoutStyle.ComponentPlacement.RELATED)
                .addGroup(_labels)
                .addPreferredGap(LayoutStyle.ComponentPlacement.RELATED)
                .addGroup(layout.createParallelGroup(GroupLayout.Alignment.LEADING)
                    .addGroup(_noNumsAndStopWords)
                	.addGroup(_queries)
                	.addComponent(jLabel5))
                .addPreferredGap(LayoutStyle.ComponentPlacement.RELATED)
                .addGroup(layout.createParallelGroup(GroupLayout.Alignment.LEADING)
                    .addGroup(_caseFoldingAndStopWords)
                    .addComponent(jButton1)
                    .addGroup(_searchResultsBtns))
                .addPreferredGap(LayoutStyle.ComponentPlacement.RELATED)
                .addGroup(layout.createParallelGroup(GroupLayout.Alignment.LEADING)
                	.addGroup(_stemmingAndIndexButton)
                	.addComponent(jLabel6))
                .addPreferredGap(LayoutStyle.ComponentPlacement.RELATED)
                .addGroup(_scrollPane)
                .addContainerGap())
        );

        pack();
    }
    
    // Function to handle events
    public void actionPerformed(ActionEvent e)
    {
    	// If the event is indexing
    	if(e.getActionCommand().equals("index"))
    	{
    		// Reset components
    		jButton3.setEnabled(false);
    		jButton4.setEnabled(false);	
            jLabel5.setText("");
            jLabel6.setText("");
            _caseFolding = jToggleButton2.isSelected();
            _results = null;
        	_currentResult = 0;
            
        	// GUI output
    		DateFormat dateFormat = new SimpleDateFormat("HH:mm:ss");
    		Date date = new Date();
	    	setTextArea("\n" + dateFormat.format(date) + ": Indexing started.\n", true);
	    	
	    	// Instantiate the SPIMI indexer and try to index the files using the GUI's options
			SPIMI tokenizer = new SPIMI(
					jToggleButton1.isSelected(),
					jToggleButton2.isSelected(),
					jToggleButton3.isSelected()
				);
			
			try
			{
				tokenizer.SPIMIInvert();
			}
			catch(FileNotFoundException exc)
			{
				setTextArea(exc.getMessage(), true);
			}
			catch(IOException exc)
			{
				setTextArea(exc.getMessage(), true);
			}
			catch(ClassNotFoundException exc)
			{
				setTextArea(exc.getMessage(), true);
			}
    	}

    	// If the event is searching
    	if(e.getActionCommand().equals("search"))
    	{
    		// Reset components
    		jButton3.setEnabled(false);
    		jButton4.setEnabled(false);	
            jLabel5.setText("");
            jLabel6.setText("");
            // Initiate the search with the selected query and the indexing options
    		IndexSearch.find((String)jComboBox1.getSelectedItem(), _caseFolding);
    	}
    	
    	// If the event is going to the previous search result
    	if(e.getActionCommand().equals("previous"))
    	{
    		_currentResult--;
			jButton4.setEnabled(true);
			
    		if(_currentResult == 0)
    				jButton3.setEnabled(false);
    		
    		_loadResult();
    	}
    	
    	// If the event is going to the next search result
    	if(e.getActionCommand().equals("next"))
    	{
    		_currentResult++;
			jButton3.setEnabled(true);
			
    		if(_currentResult == _results.size() - 1)
    				jButton4.setEnabled(false);
    		
    		_loadResult();
    	}
    }
    
    // Function to output a message to the GUI
    public static void setTextArea(String text, boolean clear)
    {
    	// If the message pass needs to clear the text area
    	if(clear)
    			GUI.jTextArea1.setText(text);
    	else // If not, append the message
    			GUI.jTextArea1.setText(text + jTextArea1.getText());
    	jTextArea1.setCaretPosition(0);
    	jTextArea1.paintImmediately(jTextArea1.getBounds());
    }
    
    // Function to receive a set of search results
    public static void setResults(List<SearchResult> results)
    {
    	_results = results;
    	_currentResult = 0;
    	
    	// If there are no results, or only 1 result, disable "next" and "previous"
    	if(results == null || results.size() == 1)
    	{
    		jButton3.setEnabled(false);
    		jButton4.setEnabled(false);
    	}
    	else // If not, enable "next"
    	{
    		jButton3.setEnabled(false);
    		jButton4.setEnabled(true);	
    	}
    	
    	if(results != null)
    	{
    		_loadResult();
    	}
    }
    
    // Function to load a result into the text area
    private static void _loadResult()
    {
    	// Set the file name for the result, the result number, and the file text in the textarea
        jLabel5.setText(_results.get(_currentResult).getFileName());
        jLabel6.setText("Result " + (_currentResult + 1) + " / " + _results.size());
		setTextArea(_results.get(_currentResult).getText(), true);
		
		//Highlight the query term in the textarea, and focus on its location
		Highlighter h = jTextArea1.getHighlighter();
		try
		{
			h.addHighlight(_results.get(_currentResult).getStartIndex(),
					_results.get(_currentResult).getEndIndex(),
					new DefaultHighlighter.DefaultHighlightPainter(Color.YELLOW)
			);
		}
		catch (BadLocationException e) {
			setTextArea(e.getMessage(), true);
		}
		
		jTextArea1.setCaretPosition(_results.get(_currentResult).getStartIndex());
	}

    // Function to remove all indexing data from disk on program exit(to avoid problems)
	private static void _clearOutputFolder()
    {
		File outputDir = new File(Properties.OUTPUT_FOLDER);
		String[] blockNames = outputDir.list();
		
		for(int i=0;i<blockNames.length;i++)
		{
			File toDelete = new File(Properties.OUTPUT_FOLDER + blockNames[i]);
			toDelete.delete();
		}
    }

	// Driver: creates a GUI
	public static void main(String[] args)
	{
		GUI gui = new GUI();
		gui.setVisible(true);
    	gui.addWindowListener(new WindowAdapter() {
    		public void windowClosing(WindowEvent e) {
    			_clearOutputFolder();
    			System.exit(0);
    		}
    	});
	}
}