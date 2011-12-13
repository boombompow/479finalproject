<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"><!-- InstanceBegin template="/Templates/insidepage_xml.dwt.php" codeOutsideHTMLIsLocked="true" -->
<!-- Contact Sothea Nim, snim@alcor.concordia.ca, if you have any questions about the university template -->


<head>

	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<title>Homepage - Engineering &amp; Computer Science - Concordia University - Montreal, Quebec, Canada</title>
	<meta name="description" content="This is a site description" />
	<meta name="keywords" content="concordia university research montreal quebec canada, Concordia, university, montreal, quebec, canada" />
	<meta name="hidden" content="" />
	<meta name="owner" content="Engineering &amp; Computer Science" />
	<meta name="author" content="Concordia University" />
	<meta name="copyright" content="Concordia University" />
	<meta name="meta_tag_generator" content="" />
	<meta name="robots" content="all,index" />
	<meta name="resource-type" content="document" />
	<meta name="distribution" content="global" />
	<meta name="classification" content="" />
	<meta name="rating" content="general" />
	<meta name="language" content="en-ca" />
	
	<link rel="alternate" type="application/rss+xml" title="RSS" href="../Documentsfeeds.feedburner.com/encs" />

	<link rel="shortcut icon" href="http://globalmk.concordia.ca/favicon.ico" />
	<link rel="stylesheet" href="http://globalmk.concordia.ca/extmembers/stylesheets/common.php" type="text/css" media="all" charset="UTF-8" />
	<link rel="stylesheet" href="http://globalmk.concordia.ca/extmembers/stylesheets/announcement_alert.php" type="text/css" media="all" charset="UTF-8" />

<style type="text/css">
#banner{background-image:url(images/banner-8.jpg)!important;}
</style>


	<link rel="stylesheet" href="http://www.encs.concordia.ca/stylesheets/custom.php?secure=&version=1.7.3" type="text/css" media="all" charset="UTF-8" />
	
	<link rel="stylesheet" href="http://www.encs.concordia.ca/stylesheets/home.css" type="text/css" media="all" charset="UTF-8" />

	<!--[if lt IE 7]>
	<link rel="stylesheet" href="stylesheets/ie6.css" type="text/css" media="all" charset="UTF-8" />
	<link rel="stylesheet" href="http://globalmk.concordia.ca/extmembers/stylesheets/ie6.css" type="text/css" media="all" charset="UTF-8" />
	<![endif]-->
	<!--[if IE 7]>
	<link rel="stylesheet" href="stylesheets/ie7.css" type="text/css" media="all" charset="UTF-8" />
	<link rel="stylesheet" href="http://globalmk.concordia.ca/extmembers/stylesheets/ie7.css" type="text/css" media="all" charset="UTF-8" />
	<![endif]-->
	<!--[if IE 8]>
	<link rel="stylesheet" href="stylesheets/ie8.css" type="text/css" media="all" charset="UTF-8" />
	<link rel="stylesheet" href="http://globalmk.concordia.ca/extmembers/stylesheets/ie8.css" type="text/css" media="all" charset="UTF-8" />
	<![endif]-->
	<link rel="stylesheet" href="http://www.encs.concordia.ca/stylesheets/m.css" type="text/css" media="all" charset="UTF-8" title="text_m" />
	<link rel="alternate stylesheet" type="text/css" href="http://www.encs.concordia.ca/stylesheets/l.css" media="all" charset="UTF-8" title="text_l" />
	<link rel="alternate stylesheet" type="text/css" href="http://www.encs.concordia.ca/stylesheets/xl.css" media="all" charset="UTF-8" title="text_xl" />


	<script src="http://globalmk.concordia.ca/extmembers/plugins/conuni/maintrigger.php" type="text/javascript"></script>
	<script src="http://globalmk.concordia.ca/extmembers/scripts/styleswitcher.php" type="text/javascript" charset="UTF-8"> </script>
	<script src="http://globalmk.concordia.ca/extmembers/scripts/domeffects.php" type="text/javascript" charset="UTF-8"> </script>
	

<script type="text/javascript">
//<![CDATA[
	window.addEvent('domready', function(){
		activesearch(); queryclick(); sizebuttons(); styleswitcher(); queryclick_media(); tablelinks(); showbookmarks(); alternateRows();
				
	});
	//]]>
</script>


	<script src="http://globalmk.concordia.ca/extmembers/scripts/swfobject.php" type="text/javascript" charset="UTF-8"> </script>

<!-- AZ INDEX SUGGESTIONS-->
	<script src="http://globalmk.concordia.ca/extmembers/scripts/jquery.php" type="text/javascript"></script>

<script type="text/javascript">
//<![CDATA[
		if (!window.opera) {
		$(document).ready( function() {
			textsizeactive(); main_trigger();
						replace_localtools('www.encs.concordia.ca','%2Findex.php','Homepage', '/');
					});
	}
	domainname = "www.encs.concordia.ca";
//]]>
</script>

<script type="text/javascript" src="http://www.encs.concordia.ca/modules/jquery/jquery-1.3.2.min.js"></script>
<script type="text/javascript">
//<![CDATA[
jQuery(function() {

	var past_software_content = $('#collapsable_1').html();
	
	if (past_software_content != '' && past_software_content != '&nbsp;')
	{
		$('#past_software_controls').html('[<a id="btn_expand">Show</a><a id="btn_collapse" style="display:none;">Hide</a>]');
		//$('#past_software_controls').html('<a id="btn_expand"></a><a id="btn_collapse" style="display:none;"></a>');

		$('#btn_expand').click(function()
		{
			//$('#collapsable_1').slideDown();
			$('#collapsable_1').show();
			$('#btn_expand').hide();
			$('#btn_collapse').show();
		});
		
		$('#btn_collapse').click(function()
		{
			//$('#collapsable_1').slideUp();
			$('#collapsable_1').hide();
			$('#btn_expand').show();
			$('#btn_collapse').hide();
		});
		
	}

	$('.researchchair p').hide();
	
	$('.researchchair div').click(function() {
		
		if($(this).hasClass('open'))
		{
			$(this).removeClass('open');
			$(this).next().slideUp(200);
		}
		else
		{
			$(this).addClass('open');
			$(this).next().slideDown(200);
		}
	
	});
	
});
//]]>
</script>



</head>



<body  class="home"  >
<!-- Contribute/DW & Template System Version 1.7.3 or help contact Sothea Nim (snim@alcor.concordia.ca) -->
<div id="top"></div>
<div id="globaltools">
  <div id="globaltools_bg">
    <div class="globaltools_pagewidth">
      <h2 class="hide">Accessibility Tools</h2>
      <ul class="accesstools">
        <li><a href="http://www.encs.concordia.ca/index.php#maincontent" accesskey="s">Skip to Content</a></li>
        <li><a href="accessibility.php" accesskey="0">Accessibility</a></li>
        <li id="textsize_li">Text Size: <span id="textsizetools"><a href="http://www.encs.concordia.ca/accessibility.php#textsize_faq">N/A</a></span></li>
		<li><a href="../Documentsfeeds.feedburner.com/encs" class="rssfeed">RSS Feed</a></li>		
      </ul>  
	<h3 class="hide">Breadcrumb</h3>	  
      <ul class="globalbreadcrumb">
        <li><a href="../Documentswww.concordia.ca/index.html" accesskey="h">Concordia Home</a><img src="http://www.encs.concordia.ca/images/common/globaltoolbar_arrow_white.gif" alt=">" class="globaltools_arrow" /></li>
				
		<li><a href="index.html">Engineering &amp; Computer Science Home</a></li>
	  </ul>
	  <div class="clear">&nbsp;</div>
    </div>
  </div>
</div>
<div id="emergency_alert">&nbsp;</div><div id="page">
  <div id="banner">


	<span id="nameblock"></span>

<h3 class="hide">Search</h3>
<div id="search" class="search">
<form id="search_toplevel" action="http://globalmk.concordia.ca/search/searchredirect.php" method="post">
        <ul class="li_thissite" id="search_option_list">
 		  <li><a href="../Documentswww.google.ca/search_hl_en_q_site_3Ahttp___www.encs.concordia.ca__btnG_Search_meta_" id="li_thissite">ENCS</a></li>
          <li><a href="http://www.google.ca/search?hl=en&q=site%3Ahttp%3A%2F%2Fwww.concordia.ca&btnG=Search&meta=" id="li_entire">All of Concordia</a></li>
          <li><a href="http://www.concordia.ca/directory/" id="li_staff">Staff &amp; Faculty Directory</a></li>
          <!--<li><a href="http://news.concordia.ca/" id="li_news">News</a></li>
          <li><a href="http://www3.concordia.ca/events/" id="li_events">Events</a> </li>-->
        </ul>
        <div id="search_toplevel_tools">
		  <label for="search_toplevel_query" class="hide">Search Query</label>
		  <input id="search_toplevel_query" name="query" value="Enter your query here" type="text" accesskey="4" onkeyup="getResult(this.value, 'suggest_hint')" />
          <input type="submit" value="Search" id="search_toplevel_submit"/>
          <input id="search_selected" name="li_thissite" value="1" type="hidden" />
		  <input id="search_sitename" name="sitename" value="Engineering &amp; Computer Science" type="hidden" />
		  <input id="search_googleraw" name="googleraw" value="cx=006658531582020549846:usdvagrzimk&amp;amp;cof=FORID%3A11&amp;amp;sa=Search" type="hidden" />
		  <input id="javascript_enabled" name="javascript_enabled" value="0" type="hidden" />
		  <input id="siteroot" name="siteroot" value="/" type="hidden" />
		  <input id="siteurl" name="siteurl" value="www.encs.concordia.ca" type="hidden" />
        </div>
      </form>
      <div id="suggest_hint">&nbsp;</div>
    </div>
<h2 class="hide">Main Menu</h2>
<div id="mainmenu">
<ul class="themainmenu"> <li id="li_mainmenu_future-students_1" >
<a class="li_mainmenu_future-students_1_a" href="future-students/">
Future students </a>
</li>
<li id="li_mainmenu_current-students_1" >
<a class="li_mainmenu_current-students_1_a" href="current-students/">
Current students </a>
</li>
<li id="li_mainmenu_administration-and-governance_1" >
<a class="li_mainmenu_administration-and-governance_1_a" href="administration-and-governance/">
Administration<br />&amp; governance </a>
</li>
<li id="li_mainmenu_research_1" >
<a class="li_mainmenu_research_1_a" href="research/">
Research </a>
</li>
<li id="li_mainmenu_resources_1" >
<a class="li_mainmenu_resources_1_a" href="resources/">
Resources </a>
</li>
<li id="li_mainmenu_policies-and-procedures_1" >
<a class="li_mainmenu_policies-and-procedures_1_a" href="policies-and-procedures/">
Policies &amp;<br />procedures </a>
</li>
<li id="li_mainmenu_news-and-events_1" >
<a class="li_mainmenu_news-and-events_1_a" href="news-and-events/">
News &amp; events </a>
</li></ul>
</div>

</div>
  	<div id="maincontent"  class="topgutter"  >
		<div class="insidecontent ">

		  
	  <div id="localtools_wrapper">&nbsp;</div>
    <h1 >Homepage</h1>
		<div class="page-title-hline">&nbsp;</div>

















<!-- MAIN CONTENT AREA - START -->




	<div class="halfwidth">
		<br class="hide" />
<!-- InstanceBeginEditable name="maincontent" --><!-- FCKEDITOR_maincontent --><!-- /FCKEDITOR_maincontent -->


<h2 class="notopmargin">Featured news</h2>
<div id="featured-news-item">
  <h3>
    <a href="http://www.encs.concordia.ca/news-and-events/entry.php?a=2011/12/mcqueen-launches-new-book.php">McQueen launches new book</a>
  </h3>

  
    

  <div class="dropshadow small">
<a href="http://www.encs.concordia.ca/news-and-events/entry.php?a=2011/12/mcqueen-launches-new-book.php"><img src="http://newsfeed.encs.concordia.ca/encs_test/mcqueen-lowy.jpg" alt="McQueen launches new book" width="94" class="framed" /></a></div>

      
    
  

  <p>On December 5, Professor Emeritus Hugh McQueen launched a new book entitled Hot Deformation and Processing of Aluminum Alloys. </p>
</div>
<div class="textright"><a href="http://www.encs.concordia.ca/news-and-events/entry.php?a=2011/12/mcqueen-launches-new-book.php">Read the whole story &raquo;</a></div>
<div class="clear">&nbsp;</div>




<h3>Recent News:</h3>




  

  
<ul id="recent_news">
  


  <li><a href="http://www.encs.concordia.ca/news-and-events/entry.php?a=2011/12/december-6---encs-remembers.php">December 6 - ENCS remembers</a></li>

  


  

  


  <li><a href="http://www.encs.concordia.ca/news-and-events/entry.php?a=2011/11/adriq-recognizes-partnership-between-concordia-and-ericsson.php">ADRIQ recognizes partnership between Concordia and Ericsson</a></li>

  


  

  


  <li><a href="http://www.encs.concordia.ca/news-and-events/entry.php?a=2011/11/xavier-henri-herve-honoured-alongside-new-graduates-at-fall-convocation.php">Xavier-Henri Hervé honoured alongside students at convocation</a></li>

  
</ul>
  




<!-- InstanceEndEditable -->
<!-- <#MAINCONTENT> -->
<!-- InstanceBeginEditable name="MainContent" -->

<!-- InstanceEndEditable -->	</div>
	<div class="halfwidth leftpadding leftborder">
		<br class="hide" />
<!-- InstanceBeginEditable name="upperright" --><!-- FCKEDITOR_upperright --><!-- /FCKEDITOR_upperright -->

<h2 class="notopmargin">Featured events</h2>








  
<ul id="featured_events">
  

    

  <li><a href="news-and-events/events__event-43/index.html">Exams</a>

    <br /><span class="date">Exams will be held from December 7 through 22, 2011<br /></span>

  </li>

  



  

    

  <li><a href="http://www.encs.concordia.ca/news-and-events/events/#event-437">University closure</a>

    <br /><span class="date">Concordia will be closed December 24, 2011 through January 2, 2012.<br /></span>

  </li>

  



  

    

  <li><a href="http://www.encs.concordia.ca/news-and-events/events/#event-438">Important dates - January</a>

    <br /><span class="date">Don't miss these important dates and deadlines!<br /></span>

  </li>

  
</ul>
  





  <p>View all <a href="http://www.encs.concordia.ca/news-and-events/events/">events</a>.</p>



<!-- 
<h2>Featured events</h2>
	  <ul id="featured_events">
        <li><a href="http://encs.concordia.ca/News/2009/vanschoik.html">North American Eventualities</a><br />
          <span class="date">Lecture on October 30</span>
        </li>
        <li><a href="http://encs.concordia.ca/News/2009/privacy.html">Security, Surveilance, &amp; the end of Privacy</a><br />
          <span class="date">President's Conference on November 4</span>
          <br />
        </li>
	    <li><a href="http://encs.concordia.ca/News/2009/facshow.html">Faculty Showcase&nbsp;</a><br />
	      <span class="date">Lecture Series on November 7</span>
	    </li>
        <li><a href="http://encs.concordia.ca/News/2009/SERA2010.html">8th IEEE/ACIS International Conference</a><br />
          <span class="date">May 2010 at Concordia</span>
        </li>
    </ul>
 -->

    
	  <!-- <p>View all <a href="news-and-events/events-calendar/">events</a>.</p> -->



<!-- InstanceEndEditable -->
<!-- <#UPPERRIGHT> -->
<!-- InstanceBeginEditable name="UpperRight" -->


	  <!-- InstanceEndEditable --><br class="hide" />
	</div>
	<div class="clear">&nbsp;</div>

	<div class="divider">&nbsp;</div>
	<div class="halfwidth">
		<br class="hide" />
<!-- InstanceBeginEditable name="lowerleft" --><!-- FCKEDITOR_lowerleft --><!-- /FCKEDITOR_lowerleft --> <!-- InstanceEndEditable -->
<!-- <#LOWERLEFT> -->
<!-- InstanceBeginEditable name="LowerLeft" -->
	
    <h2 class="notopmargin">Mission and Vision</h2>
	  <p>The Faculty of Engineering and Computer Science is dedicated to providing high-quality and comprehensive undergraduate and graduate curricula, to promoting high-caliber research, and to the development of the profession of engineering and computer science in an ethical and socially responsible manner. We strive to prepare graduates to solve real world problems with excellent professional skills leading to superior career opportunities.</p>
	  <p> The Faculty's vision is to be recognized  globally for excellence in innovative, applied, and socially relevant research  and for excellence in academic programs for both undergraduate and graduate  students.</p>
	  <p>Download our <a href="http://www.encs.concordia.ca/documents/Strategic-Plan.pdf">Strategic Action Plan</a> to find out more.</p>
<h3>Accreditation</h3>
	  <p>All of Concordia's Engineering programs are fully accredited by the 
   <a href="http://www.engineerscanada.ca/e/pr_accreditation.cfm">Canadian Engineering Accreditation Board</a>. 
   Computer Science programs are accredited by the <a href="http://www.encs.concordia.ca/<http://www.cips.ca/">Canadian Information 
   Processing Society</a>.</p>

   <p>ENCS Faculty members are invited to visit the members-only 
   <a href="https://accreditation.encs.concordia.ca/">Accreditation website</a>, where they 
   will find all relevant documents and materials in preparation for the re-accreditation process in 2011. Faculty members can now record their assessment of CEAB graduate attributes using the 
<a href="https://fis.encs.concordia.ca/aas/">Attribute Assessment System</a> in selected courses. Students can also archive selected work from their courses in the <a href="https://fis.encs.concordia.ca/eps/">eportfolio system</a>. </p>


  <p> These accreditation initiatives are led by <a href="http://www.encs.concordia.ca/administration-and-governance/associate-deans-and-special-advisor/academic-programs/index.content.php">Dr. Lata Narayanan</a>, 
   Associate Dean of Academic Programs.</p>

</p>
	<!-- InstanceEndEditable --><br class="hide" />
	</div>
	<div class="halfwidth leftborder">
		<br class="hide" />
<!-- InstanceBeginEditable name="lowerright" --><!-- FCKEDITOR_lowerright --><!-- /FCKEDITOR_lowerright --> <!-- InstanceEndEditable -->
<!-- <#LOWERRIGHT> -->
<!-- InstanceBeginEditable name="LowerRight" -->
	
	  <h2 class="notopmargin">Departments and Research</h2>
	  <h3>Departmental websites </h3>
	  <ul>
        <li><a href="http://encs.concordia.ca/bce/"> Building, Civil and Environmental Engineering</a> </li>
	    <li> <a href="http://www.encs.concordia.ca/ces">Centre for Engineering in Society</a></li>
	    <li><a href="http://www.cse.concordia.ca/">Computer Science and Software Engineering </a></li>
	    <li> <a href="http://ciadi.concordia.ca/"> Concordia Institute of Aerospace Design and Innovation</a></li>
	    <li><a href="http://www.ciise.concordia.ca/">Concordia Institute for Information Systems Engineering </a></li>
	    <li> <a href="http://www.ece.concordia.ca/">Electrical and Computer Engineering</a></li>
	    <li><a href="http://www.me.concordia.ca/"> Mechanical and Industrial Engineering</a></li>
    </ul>
	  <h3>Research activities</h3>
	  <ul>
        <li><a href="research/faculty-expertise-guide/">Faculty expertise guide</a></li>
	    <li><a href="research/centres/">Research centres</a></li>
	    <li><a href="http://www.encs.concordia.ca/research/chairs-and-awards/">Research chairs and awards</a></li>
    </ul>
    <h3>Focus on Aerospace</h3>
      <p>The <a href="http://ciadi.concordia.ca/">Concordia Institute of Aerospace Design and Innovation</a> aims to become Canada&rsquo;s preeminent provider of aerospace education and research. For more on the institute, take a look at our <a href="http://www.encs.concordia.ca/administration-and-governance/associate-deans-and-special-advisor/aerospace/aerospace-activities/">activites in aerospace</a>, and meet Dr. Robert Fews, <a href="http://www.encs.concordia.ca/administration-and-governance/associate-deans-and-special-advisor/aerospace/">Aerospace Special Advisor</a>, and Director of CIADI.</p>
<hr>
	  <h2>Find out more</h2>
<iframe width="340" height="222" src="http://www.youtube.com/embed/JcnP9d4oXok?rel=0" frameborder="0" allowfullscreen></iframe>
	  <!-- InstanceEndEditable --><br class="hide" />
	</div>
	<div class="clear">&nbsp;</div>
	</div>
	<div class="sidebar">
		<br class="hide" />
<!-- InstanceBeginEditable name="sidebar" --><!-- FCKEDITOR_sidebar --><!-- /FCKEDITOR_sidebar --> <!-- InstanceEndEditable -->
<!-- <#SIDEBAR> -->
<!-- InstanceBeginEditable name="Sidebar" -->
    <h2>Faculty Magazine</h2>
    <p><a href="http://www.encs.concordia.ca/news-and-events/faculty-magazine/"><img src="http://www.encs.concordia.ca/images/FQ-Cover-F11.jpg" width="250" height="324"></a></p>

    <h2>Student resources
         </h2>
    <ul>
      <li><strong><a href="http://www.encs.concordia.ca/documents/F11EXAMsch-1.pdf"><em>Fall 2011 Final Grad Exam Schedule</em></a></strong><br />
        <br />
      </li>
      <li><a href="http://www.encs.concordia.ca/administration-and-governance/administrative-units/student-academic-services/">  Student Academic Services</a></li>
	      <li><a href="http://www.encs.concordia.ca/resources/tutors-on-duty/">Tutors on Duty</a></li>
	      <li><a href="resources/schedules/">Course and lab schedules</a></li>
	      <li><a href="http://www.encs.concordia.ca/current-students/undergraduate-program-requirements/writing-test">Engineering Writing Test</a></li>
	      <li><a href="http://www.encs.concordia.ca/current-students/forms-and-procedures">Forms and procedures</a><br />
	        <br />
          </li>
	      <li><a href="http://registrar.concordia.ca/calendar/">Undergraduate Calendar</a></li>
	      <li><a href="http://www.encs.concordia.ca/current-students/undergraduate-program-requirements">Undergraduate program advising</a></li>
	      <li><a href="http://www.encs.concordia.ca/current-students/undergraduate-program-requirements/course-sequences">Undergraduate course sequences</a></li>
      <li><a href="http://www.encs.concordia.ca/documents/ENCS-Registration-Guide.pdf">Undergraduate Registration Guide</a></li>
      <li><a href="http://www.encs.concordia.ca/future-students/undergraduate-education/programs/co-op-programs">Co-op program</a><br />
        <br />
      </li>
	      <li><a href="../Documentswww.concordia.ca/publications/graduatecalendar/">Graduate Calendar</a></li>
	      <li><a href="http://www.encs.concordia.ca/current-students/graduate-program-requirements">Graduate program advising</a></li>
	      <li><a href="http://www.encs.concordia.ca/documents/Graduate_Registration-Dates.pdf">Graduate registration dates</a><br />
          </li>
	      <li><a href="http://www.encs.concordia.ca/documents/Gradcalendar2010-11_v2.pdf">Graduate registration guide </a><br />
	      </li>
    </ul>
<h2>Get Connected</h2>
      <h3>Keep in touch via our:</h3>
      <p><a href="http://www.facebook.com/pages/Concordia-Engineering/173867583143" class="icon_facebook">Facebook page</a><br />
        <a href="http://twitter.com/encsconcordia" class="icon_twitter">Twitter feed</a><br />
        <a href="http://www.flickr.com/photos/encs-concordia/" class="icon_flickr">Flickr account</a></p>
      <h3>Network with alumni</h3>
      <ul>
        <li><a href="http://alumni.concordia.ca/chapters/faculty/EC/">Alumni chapter</a></li>
        <li><a href="http://www.facebook.com/ConcordiaUniversity#/group.php?gid=4813699997">Alumni Facebook group</a></li>
        <li><a href="../Documentswww.concordia.ca/">Giving to Concordia</a></li>
      </ul>
      <h3>Student associations</h3>
      <ul>
        <li><a href="http://www.ecaconcordia.ca/">ECA</a> (undergrad)</li>
        <li><a href="http://users.encs.concordia.ca/~ecsga/">ECSGA</a> (grad) </li>
      </ul>
      <p>More about <a href="http://www.encs.concordia.ca/news-and-events/get-connected/">getting connected</a>.</p>
      <h2>Faculty &amp; Staff</h2>
<p><a href="resources/faculty-and-staff-directory/">Faculty &amp; staff directory</a></p>
	  <p>Policies &amp; procedures for: </p>
	  <ul><li><a href="http://www.encs.concordia.ca/policies-and-procedures/academic-personnel/">academic personnel issues</a>
	    </li>
        <li><a href="http://www.encs.concordia.ca/policies-and-procedures/budget-and-finance/">budget and finance</a></li>
        <li><a href="policies-and-procedures/research-support/">research support</a></li>
        <li><a href="http://www.encs.concordia.ca/policies-and-procedures/teaching/">teaching</a> </li>
    </ul>
	  <h2>General resources</h2>
	  <ul>
	    <li><a href="https://mail.encs.concordia.ca/horde/imp/">Webmail</a></li>
        <li><a href="https://calendar.encs.concordia.ca/login.php">Web calendar</a></li>
        <li><a href="http://www.encs.concordia.ca/resources/help-desk/">AITS Help Desk</a></li>
        <li><a href="http://www.encs.concordia.ca/news-and-events/announcements/">AITS announcements</a></li>
        <li><a href="http://www.encs.concordia.ca/msdnaa/">MSDN Academic Alliance Program</a></li>
        <li><a href="http://www.encs.concordia.ca/resources/room-bookings/">Room bookings</a></li>
        <li><a href="http://ironring.encs.concordia.ca/">Iron ring ceremony</a></li>
    </ul>
    
	  <h2>Employment opportunities</h2>
<p>Find out about <a href="http://www.encs.concordia.ca/administration-and-governance/jobs/">working at Concordia's Faculty of Engineering and Computer Science.</a></p>
	<!-- InstanceEndEditable --><br class="hide" />
	</div>
	<div class="clear">&nbsp;</div>
	</div>
	


	

	<!-- MAIN CONTENT AREA - END -->


		<div id="announcement">&nbsp;</div>
<h2 class="hide">Concordia University</h2>
<div id="footer">
  <div id="footer_links">
    <h2 class="hide">Tools &amp; Quicklinks</h2>
    <ul style="margin-bottom: 0;"><li><a href="http://www.concordia.ca/azindex/">A-Z Index</a></li>
      <li><a href="http://www.concordia.ca/directory/">Directory</a></li>
      <li><a href="http://www.concordia.ca/about/campusmaps/">Campus Map</a> </li>
      <li><a href="http://www.concordia.ca/busschedule.php">Shuttle Bus Schedule</a></li>
      <li><a href="http://myconcordia.ca">MyConcordia</a></li>
      <li><a href="https://mail.encs.concordia.ca/horde/imp/">ENCS Webmail</a></li>
      <li><a href="http://library.concordia.ca">Libraries</a></li>
      <li><a href="http://encs.concordia.ca/administration-and-governance/jobs/">Jobs</a></li>
      <li><a href="../Documentswww.concordia.ca/index.html">Giving to Concordia</a></li>
      <li><a href="http://encs.concordia.ca/resources/help-desk/">Helpdesk</a></li>
    </ul>
  </div>
 
 <div class="clear">&nbsp;</div>
  <div class="contactinfo"> <a href="../Documentswww.concordia.ca/index.html"><img src="http://www.encs.concordia.ca/images/common/concordialogo_bottom.gif" alt="Concordia University Logo" /></a>
    <div id="footer_address" class="vcard">
      <p style="margin-bottom: 0"><strong> <span class="fn">Concordia University - <strong><span class="fn">Engineering &amp; Computer Science</span></strong></span></strong><br />
        <span class="adr"><span class="street-address">1455 de Maisonneuve Blvd. W, </span><span class="locality">Montreal</span>, <span class="region">Quebec</span>, <span class="country-name">Canada</span> <span class="postal-code">H3G 1M8</span></span><br />
        Telephone <span class="tel">(1) 514-848-2424</span> <br />
        <a href="http://www.encs.concordia.ca/contactus.php" class="url">Contact Us</a> | <a href="http://www.concordia.ca/about/contactus/">University Mailing Address</a> | <a href="http://www.encs.concordia.ca/aboutthissite.php">About This Site</a><br />
      Copyright &copy; 2011 <span class="org">Concordia University</span> | <a href="http://www.encs.concordia.ca/legalnotice.php">Legal Notice</a></p>
    </div>
  </div>
  <div id="backtotop">
    <p style="margin-bottom: 0"><a href="http://www.encs.concordia.ca/index.php#top">Back to Top</a></p>
  </div>
  <div class="url">
    <h2>Page Info</h2>
    <p><strong>Page Title</strong>: Homepage - Concordia University - Montreal, Quebec, Canada</p>
    <p><strong>Page URL</strong>:http://www.encs.concordia.ca/index.php ...</p>
    <p style="margin-bottom: 0;"><strong>Date Printed</strong>: Tue December 13, 2011</p>
  </div>
  <div class="clear">&nbsp;</div>
</div>

<script src="http://globalmk.concordia.ca/extmembers/scripts/replace_localtools.php" type="text/javascript"></script>
<script src="http://globalmk.concordia.ca/extmembers/plugins/suggestion/get_suggestion.php" type="text/javascript"></script>
<script src="http://globalmk.concordia.ca/extmembers/scripts/localtools.php" type="text/javascript"> </script>
<script type="text/javascript">
secure_suffix = "";
domain = "www.encs.concordia.ca";
siteroot = "/";
relative_path = "";
data_path = "custom/";
</script>


<script type="text/javascript">
var gaJsHost = (("https:" == document.location.protocol) ? "https://ssl." : "http://www.");
document.write(unescape("%3Cscript src='" + gaJsHost + "google-analytics.com/ga.js' type='text/javascript'%3E%3C/script%3E"));
</script>
<script type="text/javascript">
try {

/* Concordia Global Tracking Account */
var pageTracker = _gat._getTracker("UA-2729211-1");
pageTracker._setDomainName(".concordia.ca");
pageTracker._trackPageview();

/* Sub-domain Tracking Account */
var rollupTracker = _gat._getTracker("UA-12491794-1");
rollupTracker._setDomainName("encs.concordia.ca");
rollupTracker._trackPageview();

} catch(err) {}</script>


</div>
</body>
<!-- InstanceEnd --></html>
                                                                                                                                                                                                                                                                                                                                                                                      