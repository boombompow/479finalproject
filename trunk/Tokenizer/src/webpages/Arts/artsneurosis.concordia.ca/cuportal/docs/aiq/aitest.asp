
<!--
    Project: Academic Integrity Quiz
    ' Class: aitest.asp
    ' Author: James Phillips
    ' Date: August 15, 2007
    ' Version: 3.0.5.2
    ' Description: The user is presented an on-line
    ' multiple choice test where one question at a time
    ' is posted back to the user, revealing
    ' whether the answer is correct or wrong.
-->
<html xmlns="http://www.w3.org/1999/xhtml" >
    <head>
        <link href="http://neurosis.concordia.ca/cuportal/docs/aiq/css/aiq.css" type="text/css" rel="stylesheet" />
        <title>Academic Integrity Quiz</title>
        <!-- Form validation -->
        <script type="text/javascript" src="http://neurosis.concordia.ca/cuportal/docs/aiq/aiqscript.js" language="javascript1.3"></script>
       
    </head>
    <!-- body onload="backButtonOverrideBody();" -->
    <body onunload="doClose();">
        <div class="container" >
        
            <div class="roundtop">
	         <img src="http://neurosis.concordia.ca/cuportal/docs/aiq/images/tlblack.gif" alt="" class="corner" />
           </div>
           
            <div class="header">
               <img src="http://neurosis.concordia.ca/cuportal/docs/aiq/images/CU_TOP_HEADER_15.gif" alt="My Concordia Portal" />
               <!-- span id="date" >
                   Thursday, December 01, 2011
               </span -->
               <img src="http://neurosis.concordia.ca/cuportal/docs/aiq/images/CU_MIDDLE_HEADER_16.jpg" alt="" width="100%" />
                <span id="title" >
                   Academic Integrity Quiz<sup>1</sup>
               </span>
               <span id="date" >
                   Thursday, December 01, 2011
               </span>
            </div>
            
            <div class="leftpane">
            </div>
            
             <div class="main">
                
                <form id="form1" action="aitest.asp" method="post" name="form1" onsubmit="return validateForm(document.form1.question);">
                
                    <!-- Hidden values that are passed back to form itself -->
                    <input id="Hidden1" name="FRM_QUEST_INDEX" type="hidden" value="0" />
                    <input id="Hidden2" name="FRM_CORRECT_ANSW_CNT" type="hidden" value="" /><br />
                    <input id="Hidden3" name="FRM_ISCONTROLS_VISIBLE" type="hidden" value="true" />
                    <input id="Hidden4" name="FRM_REFERING_PAGE" type="hidden" value="" /><br />
                    <input id="Hidden5" name="FRM_STUD_ID" type="hidden" value="" />
                    <input id="Hidden6" name="FRM_IS_INSERTED" type="hidden" value="false" />
                    <input id="FRM_IS_INCLOSING" name="FRM_IS_INCLOSING" type="hidden"   />
                    
                    <!-- Display of questions/answers, radio buttons, and buttons -->
                    <p class='messageToStudent' >&quot;Dear Student:<br></br>The following academic integrity test is composed of ten simple questions and will take five minutes of your time. It will familiarize you with the Academic Code of Conduct and help you avoid academic misconduct and problems. Upon completion of the test, you will be allowed to access the portal.Thank you for your collaboration!&quot;</p><br></br>1) A 10 page essay is assigned in class.  Jack has included the outside sources he used in the body of his paper and in the reference page at the end of his paper.  Jack did not use quotation marks around text he used word&#045;for&#045;word from a secondary source but did make sure to write the author's name and publication date at the end of the sentence.  Is Jack guilty of plagiarism?<hr >
                    <br /><br/>
                    
                    <!-- This will display the test buttons until the last question is answered. -->
                    
                    Yes<input id="Radio1" type="radio" name="question" value="true" />
                    No<input id="Radio2" type="radio" name="question" value="false" />
                    <br />
                    <br />
                    
                    
                    <div style="text-align: center">
                        <br /><br /><br />
                        
                        <input id="Button1" type="submit" value="Submit" />&nbsp;
                        <input id="ContinueLaterButton" type="button" value="Continue Test Later" onclick="onclickContinueLater();"  />
                        
                          <br /><br />
                    </div>
                    
                </form>
            </div>
            
            <div class="rightpane" >
            </div>
            
           
            
            <div class="footer">
                <span class="footerstripe"><sup>1</sup>Created by the Student Advocate Program, Advocacy & Support Services. Concordia University
                        July 09, 2007
                </span>
               
            </div>
            
             <div class="roundbottom">
               
	            <img src="http://neurosis.concordia.ca/cuportal/docs/aiq/images/blblack.gif" alt="" class="corner" />
            </div>
            
        </div>
        
    </body>
   
    
</html>