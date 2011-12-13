
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="en" xml:lang="en"><head>
	<title>ECACCarrieres.com</title>
<meta name="title" content="ECAC Carrières">
<meta name="description" content="Réseau de recrutement d'ingénieurs et de professionnels du génie unique au Québec: ECACCarrieres.com">
<meta name="keywords" content="Carrière,Ingénieur,Génie,Emploi,ECAC Carrères,univerité Concordia,recrutement,ingénieurs,Association des diplômés,Salon Génie,Candidats,Expérience,RHR Expert,transition de carrière,Chimie,Civil,Électrique,Mécanique">
<meta name="verify-v1" content="c2PzoPDcPZmdHzKJa6WIVE+JYBGbPrKDlBBHlXFZ7G0=" />
<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1" />
<meta http-equiv="Content-Language" content="fr" />
<script src="http://partner.googleadservices.com/gampad/google_service.js" language="javascript" type="text/javascript"></script>
<script language="javascript" type="text/javascript">
GS_googleAddAdSenseService('ca-pub-1570074118270923');GS_googleEnableAllServices();
</script>
<script language="javascript" type="text/javascript">
GA_googleAddAttr('lang','en');GA_googleAddAttr('site','ecac');GA_googleAddAttr('enviro','prod');
</script>
<script language="javascript" type="text/javascript">
GA_googleAddSlot('ca-pub-1570074118270923','top');GA_googleAddSlot('ca-pub-1570074118270923','sky');
</script>
<script language="javascript" type="text/javascript">
GA_googleFetchAds();
</script>
<script language="javascript" type="text/javascript">
var _gaq=_gaq||[];
_gaq.push(['_setAccount','UA-5712649-4']);
_gaq.push(['_setDomainName','none']);
_gaq.push(['_trackPageview']);
(function(){
var ga=document.createElement('script');ga.type='text/javascript';ga.async=true;
ga.src=('https:'==document.location.protocol?'https://ssl':'http://www')+'.google-analytics.com/ga.js';
var s=document.getElementsByTagName('script')[0];s.parentNode.insertBefore(ga,s);
})();
</script>

<script language="JavaScript" type="text/javascript">
function GetHttpRequest()
{
  http_request = false;
  if (window.XMLHttpRequest)
  { // Mozilla, Safari,...
    http_request = new XMLHttpRequest();
    if (http_request.overrideMimeType)
    {
      // set type accordingly to anticipated content type
      //http_request.overrideMimeType('text/xml');
      http_request.overrideMimeType('text/html');
    }
  }
  else if (window.ActiveXObject)
  { // IE
    try
    {
      http_request = new ActiveXObject("Msxml2.XMLHTTP");
    }
    catch (e)
    {
      try
      {
        http_request = new ActiveXObject("Microsoft.XMLHTTP");
      }
      catch (e)
      {}
    }
  }
  if (!http_request)
  {
    alert('Cannot create XMLHTTP instance');
    return false;
  }
  else
    return http_request;
}

function PostRequest(con, param)
{
  con.open('POST', 'HTTP://www.ecaccarrieres.com/rhr_php.php', true);
  con.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
  con.setRequestHeader("Content-length", param.length);
  con.setRequestHeader("Connection", "close");
  con.send(param);
}

function CheckLogin(USERNAME, PASSWORD, UserType)
{
  param = 'AJAX=1&LANGUAGE=1&FUNCTION=CheckLogin'+ '&USERNAME=' + encodeURIComponent(USERNAME)+ '&PASSWORD=' + encodeURIComponent(PASSWORD)+ '&UserType=' + encodeURIComponent(UserType);
  if (UserType == 1 || UserType == 3)
    ElementId = 'DIPLOME_CODE_FAILED';
  else if (UserType == 2)
    ElementId = 'CLIENT_CODE_FAILED';
  document.getElementById(ElementId).innerHTML = '<b>Password validation in progress...</b>';
  con = GetHttpRequest();
  con.onreadystatechange = 
  function()
  {
    if (con.readyState == 4) 
    {
      if (con.status == 200) 
      {
        if (con.getResponseHeader("result") == '<EXCEPTION>')
          alert('Error occured during execution');
        else 
        {
if (con.getResponseHeader("result") == '<OK>')
{
  document.diplome.method = "POST";
  document.diplome.action = con.getResponseHeader("path");
  document.diplome.submit();
}
else
  document.getElementById(ElementId).innerHTML = con.responseText;
        }
      }
    	else 
      {
    	  alert('There was a problem with the request: ' + con.statusText);
      }
    }
  }
  PostRequest(con, param);
}

</script>
<script type="text/javascript">
<!--
function MM_displayStatusMsg(msgStr) { //v1.0
  window.status=msgStr;
  document.MM_returnValue = true;
}
//-->
</script>

 <link href="http://www.ecaccarrieres.com/css/menu_horizontal.css" rel="stylesheet" type="text/css" />
 <style type="text/css">
<!--

#contenu1 {	font-size: 12px;
	background-color: #FFFFFF;
	padding-top: 3px;
	padding-right: 3px;
	padding-left: 3px;
	text-align: center;
	font-weight: bold;
	color: #424242;
}
#contenu5 {	font-size: 12px;
	line-height: 15px;	
}
#contenu6 {	font-size: 12px;
	line-height: 15px;	
}
#contenu7 {	font-size: 12px;
	line-height: 15px;	
}
#contenu8 {	font-size: 12px;
	line-height: 15px;	
}
#contenu2 {	font-size: 12px;
	line-height: 13px;
	background-color: #FFFFFF;
	padding-top: 3px;
	padding-right: 3px;
	padding-left: 3px;
	text-align: center;
	font-weight: bold;
	
}

#contenuC contenuB contenuC {{
	border-top-width: 1px;
	border-top-style: dotted;
	border-top-color: #517BA7;
}

-->
 </style>
<head>
   <title>ECAC Careers</title>
 <link href="http://www.ecaccarrieres.com/css/main-lu10.css" rel="stylesheet" type="text/css" />
 <link href="http://www.ecaccarrieres.com/css/menu_gauche-lu10.css" rel="stylesheet" type="text/css" />
 <link href="http://www.ecaccarrieres.com/css/contenu_accueil-lu10.css" rel="stylesheet" type="text/css" />
 </head>

 <body>
<div id="top_header"><div id="coin"></div></div>
<div id="header"><div id="phraseHaut">The Career Management Portal for the 12,000 Engineering &amp; Computer Science Alumni of Concordia University</div>
<div id="logo_header1"><a href="../index_en.php"><img src="http://www.ecaccarrieres.com/img_pres/logo_header_en.gif" alt="ECACcarrieres" border="0" usemap="#Map" />
 
</a><a href="http://www.ecaccarrieres.com/en/index.php"></a> 
<map name="Map" id="Map">
    <area shape="rect" coords="139,43,312,99" href="../index_en.php" target="_blank" />
  </map></div>
<div id="logo_header2"><img src="http://www.ecaccarrieres.com/img_pres/logo_header_2.gif" alt="ECAC-Carrieres.com" /></div>
<div id="sous_logo1"	><!-- --></div>
<div id="sous_logo2">Useful links : <a href="http://alumni.concordia.ca/chapters/faculty/EC/" target="_blank">Alumni Relations </a>| <a href="../../Documentswww.concordia.ca/index.php" target="_blank">Concordia University </a>| <a href="http://www.ecaccarrieres.com/index.php">Fran&ccedil;ais</a></div>
<div id="menu_horizontal">
  <ul>
    <li><a href="../index_en.php">Home</a></li>
    <li><a href="http://www.ecaccarrieres.com/en/employers.php">Employers</a></li>
    <li class="visited" ><a href="candidates.php">Candidates </a></li>
  <li><a href="http://www.ecaccarrieres.com/en/useful_links.php">Useful Links</a></li>

    <li><a href="http://www.ecaccarrieres.com/en/contact.php">Contact us</a></li>
  </ul>
</div></div>
<div id="banner"><div id="830"><div id="zone_728">
<script type="text/javascript">
/*<![CDATA[*/
GA_googleFillSlot('top');
/*]]>*/
</script></div>
<div id="heure">Tuesday 13 December </div></div></div>
<div id="title"> 
  <p>Candidates</p>
  </div>
<div id="main" class="clearfix"><div id="col_employ">
<div align="center">
  <script src="http://www.ecaccarrieres.com/Scripts/AC_RunActiveContent.js" type="text/javascript"></script>
<div align="center"><img src="http://www.ecaccarrieres.com/img/haut_menu.gif" alt="Menu" width="185" height="20" /><br />
    <img src="http://www.ecaccarrieres.com/img/FeaturedEmployers.gif" alt="employeurs vedette" width="185" height="30" />
  <div><script type="text/javascript">
AC_FL_RunContent( 'codebase','http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=9,0,28,0','width','180','height','130','title','Employeurs vedettes','src','../img/employeur_vedette','quality','high','pluginspage','http://www.adobe.com/shockwave/download/download.cgi?P1_Prod_Version=ShockwaveFlash','movie','../img/employeur_vedette' ); //end AC code
</script><object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=9,0,28,0" width="180" height="130" title="Employeurs vedettes">
    <param name="movie" value="../img/employeur_vedette.swf" />
    <param name="quality" value="high" />
    <embed src="http://www.ecaccarrieres.com/img/employeur_vedette.swf" quality="high" pluginspage="http://www.adobe.com/shockwave/download/download.cgi?P1_Prod_Version=ShockwaveFlash" type="application/x-shockwave-flash" width="180" height="130"></embed></object></noscript></div>
  <br />
  
<div id="ferique_en"></div><div id="ferique2_en"></div>
<table width="180" border="0" cellpadding="0" cellspacing="0">
  <tr>
    <td><div align="center"><strong>Events in the spotlight</strong></div></td>
  </tr>
</table>
<br />
</div>
<br />
<br />
<br />
<br />
<br />
<br />
<br />
<br />
<br />
<br />
<br />
<br />
<br />
<br />
<br />
<br />
<br />
<br />
<br />
<br />
<br />
<br />
<br />
<br />
<br />
<br />
<br />
<br />
<br />
<br />
<br />
<br />
<br />
<br />
<br />
<br />
<br />
<br />
<br />

<img src="http://www.ecaccarrieres.com/img/bas_menu.gif" alt="Bas" width="185" height="18" />
    </div>
</div>
  <div id="contenu_fr"><img src="http://www.ecaccarrieres.com/img/welcome.gif" alt="bienvenue" width="341" height="26" /><br />
    <p>Please enter your username and password to access your profile.<br />
      <br />
 </p>
  <div id="bienvenue"><form name="diplome" action="http://www.ecaccarrieres.com/en/en/graduates/graduates-welcome.php" method="POST">
  <div id="DIPLOME_CODE_FAILED"></div>
     <br />
     <table width="380" border="0" align="center" cellpadding="0" cellspacing="1">
       <tr>
         <td width="178"><div align="center">Username<br />
             <input id="DIPLOME_CODE" name="DIPLOME_CODE" type="text" size="13">
            </div></td>
         <td width="229"><div align="center">Password<br />
             <input id="DIPLOME_PW" name="DIPLOME_PW" type="password" size="13" onKeyPress="if (event.keyCode == 13) CheckLogin(document.getElementById('DIPLOME_CODE').value, document.getElementById('DIPLOME_PW').value, 1);">
         </div></td>
         </tr>
       <tr>
         <td align="center" valign="middle">
    
<input type="checkbox" name="sauvegarder" id="sauvegarder" />
            Save</td>
         <td align="center" valign="middle"><p align="center" class="form_right2"><img src="http://www.ecaccarrieres.com/img/spacer.gif" alt="/" width="5" height="10" /><a href="http://www.ecaccarrieres.com/en/candidates.php#" onclick="CheckLogin(document.getElementById('DIPLOME_CODE').value, document.getElementById('DIPLOME_PW').value, 1);  return false;" type="image"><br />
           <img src="http://www.ecaccarrieres.com/img/bt_submit.gif" alt="soumettre" width="81" height="18" border="0" /></a></td>
         </tr>
       <tr>
         <td height="30" align="center"><a href="candidates-registration.php"><img src="http://www.ecaccarrieres.com/img/bt_registration.gif" alt="inscription" width="142" height="18" border="0" align="" /></a>
         
         <td height="30" align="center"><a href="http://www.ecaccarrieres.com/en/candidates-forgot.php">I do not remember my password</a><a href="http://www.ecaccarrieres.com/en/candidates-forgot.php"></a></td>
       </tr>
     </table>
<br />
     <div >
     </div>
   </form>
         


  </div>  
 <br />
 <img src="http://www.ecaccarrieres.com/img/puce.gif" alt="puce" width="16" height="20" />
 <a href="javascript:afficheId('contenuA')"> I am a <span class="Style4">new graduate </span>from Concordia University (I graduated less <span class="Style4">than two years ago</span>).</a><br />
 <br />

    <div style="display:none" id="contenuA">
      
      <div align="right" ><a href="javascript:cacheId('contenuA');" class="Style3">Close</a> </div>
      If you are a student or a new graduate, you are invited to contact your employment service centre by clicking on the following link <a href="../../Documentswww.concordia.ca/" target="_blank">Career and Placement Services of Concordia University</a>.
      <br />
      <br />
    </div>
    <img src="http://www.ecaccarrieres.com/img/puce.gif" alt="puce" width="16" height="20" /> 
    <a href="javascript:afficheId('contenuB')">I am a graduate from Concordia University (with <span class="Style4">more than two years</span> of work experience).</a><br /><div style="display:none" id="contenuB">
      
      <div align="right" ><a href="javascript:cacheId('contenuB');" class="Style3">Close</a> </div>
      ECAC Careers provides free career management services to graduates from Concordia University who have more than two years of work experience. The primary goal of this service is to support Concordia University graduates at any time during their career, whether that are employed or unemployed. To benefit from the services listed below, please sign in.<br />
      <br />
    </div>
    <br />  
    <img src="http://www.ecaccarrieres.com/img/puce.gif" alt="puce" width="16" height="20" /> 
    <a href="javascript:afficheId('contenuC')">I am not a graduate from Concordia University</a>
    <div id="contenuC"  style="display:none"><div align="right"><a href="javascript:cacheId('contenuC');" class="Style3">Fermer</a> </div>
      If you are not a graduate from Concordia University you can still browse through the job offers and even apply by registering at the <a href="candidates.php" target="_blank">Engineering Career Network</a> job portal.<br />
    
  </div>
    <br /><br /><img src="http://www.ecaccarrieres.com/img/free.gif" alt="gratuit" width="263" height="22" /><br />
    <div id="outils"><script>
function afficheId(baliseId)
  {
  if (document.getElementById && document.getElementById(baliseId) != null)
    {
    document.getElementById(baliseId).style.visibility='visible';
    document.getElementById(baliseId).style.display='block';
    }
  }

function cacheId(baliseId)
  {
  if (document.getElementById && document.getElementById(baliseId) != null)
    {
    document.getElementById(baliseId).style.visibility='hidden';
    document.getElementById(baliseId).style.display='none';
    }
  }

cacheId('contenu');
// si JavaScript est disponible, cache le contenu dès le
// chargement de la page. Sans JavaScript, le contenu sera
// affiché.
</script>
      <div id="contenu1"  style="display:none">
        <div align="right"><a href="javascript:cacheId('contenu1');" class="Style3">Close</a> </div>
        <a href="candidates-registration.php">Open a session</a> and access our free services.</div>
        <ul><li><a href="javascript:afficheId('contenu1')">In-person or telephone interview with one of our HR experts;</a></li>
          <li><a href="javascript:afficheId('contenu1')">Help with writing your r&eacute;sum&eacute;;</a></li>
          <li><a href="javascript:afficheId('contenu1')">Expert advice on the job market, employment possibilities, current salaries, etc.</a></li>
          <li><a href="javascript:afficheId('contenu1')">Exclusive access to a secured Job Portal;</a></li>
          <li><a href="javascript:afficheId('contenu1')">Possibility of receiving Job Alerts or Conference Announcements;</a></li>
          <li><a href="javascript:afficheId('contenu1')">Preferred rate to attend our career management conferences throughout the year.</a></li>
        </ul>
    </div>
    <div align="center"><br />
    <img src="http://www.ecaccarrieres.com/img/open.gif" alt="ouvrez" width="420" height="45" /> </div>
    <div id="outils">
      <script>
function afficheId(baliseId)
  {
  if (document.getElementById && document.getElementById(baliseId) != null)
    {
    document.getElementById(baliseId).style.visibility='visible';
    document.getElementById(baliseId).style.display='block';
    }
  }

function cacheId(baliseId)
  {
  if (document.getElementById && document.getElementById(baliseId) != null)
    {
    document.getElementById(baliseId).style.visibility='hidden';
    document.getElementById(baliseId).style.display='none';
    }
  }

cacheId('contenu');
// si JavaScript est disponible, cache le contenu d&egrave;s le
// chargement de la page. Sans JavaScript, le contenu sera
// affich&eacute;.
    </script>
      <ul>
        <li><a href="javascript:afficheId('contenu6')">Build your contact network through reference interviews</a></li>
        <div class="contenant" id="contenu6" style="display:none">
          <div class="clicCacher"> <a href="javascript:cacheId('contenu6');">Close</a> </div>
          <p>Reference interviews with decision-makers represent the best resource for finding positions that can be, and most likely will be, filled without any competition. In addition, these meetings help avoid the frustration of traditional methods that involve intense competition, i.e., Career pages, Internet, recruitment firms.</p>
          <p>You will use the reference interview to keep building your contact network by requesting one or more references. When people have understood who you are, what you can do, and where you are headed, the will want to help you achieve your goal. In most cases, you will leave the interview with the names of other people you can contact and with suggestions on how to pursue your marketing campaign. </p>
          <p>Exceptionally, the interviewer might consider your candidacy for a position in his or her company.</p>
          <p>The progress of your marketing campaign will depend largely on your effectiveness in the five steps in each reference interview.</p>
          <ul>
            <li>Establish      contact and summarize the goal of the interview and how it is conducted</li>
            <li>Provide      your vis-&agrave;-vis with information on your professional experience</li>
            <li>Facilitate      dialogue</li>
            <li>Conclude      the interview and decide on the next step</li>
            <li>Follow-up;      draft a thank you letter.</li>
          </ul>
          <div align="left">
            <div align="left">
              <ol>
                <li><span class="titres_bleu">Establish contact and how the interview will be conducted.</span><br />
                  The first step in the reference interview consists in making contact and establishing the content of the meeting, followed by the goal. During a business meeting, the chair usually prepares and distributes the agenda and begins the meeting by specifying the goal of the meeting and the issues to be addressed. In the reference interview, you should prepare a similar approach by providing at the beginning an overview of your experience and the purpose of the meeting. Be prepared to recognize that your vis-&agrave;-vis might be unsure, even uneasy, about this meeting since he or she does not know your motivation and does not know what is going to happen. Explain your intentions to him, your plan, and your expectations so that he fully understands what the meeting means to you and how it will be conducted. <br />
                  <br />
                </li>
                <li><span class="titres_bleu">Provide information.</span><br />
                  The second step in the reference interview consists in providing information. In a business meeting, the chair or a delegate will usually begin by reading the minutes of the last meeting, by summarizing what has been accomplished, and providing an update on the latest developments. That provides an operational perspective, especially for those who have just joined the group.<br />
                  <br />
                  Before the reference interview, you probably sent your vis-&agrave;-vis a r&eacute;sum&eacute; and a cover letter, but you should take the time, early in the meeting, to provide details about yourself and your goals. Summarize your career goal and your relevant success factors, your experience, your training, and your achievements. Explain that you have targeted certain industries and that you are studying the options available to you. Say that you have met other people to learn about their vision and that you are now seeking advice to gather additional information and ideas regarding your career path. <br />
                  <span class="empDetailTitle"><br />
                  </span></li>
                <li><span class="titres_bleu">Facilitate dialogue. </span><br />
                  Facilitating dialogue represents the third step in the reference interview. In a business meeting, the chair&rsquo;s role is to lead the forum by stimulating dialogue, inviting comments, and encouraging full discussion of important issues. The meeting is a success when the objectives are met in an environment of free communication.<br />
                  The reference interview has two goals: <em>provide and receive information</em>. You should facilitate a rich dialogue during which information is exchanged. If it appears to you that the information is flowing towards you and that there is little reciprocity, the interview might not yield serious results.<br />
                  Since the reference interview is a meeting aimed at gathering information and advice for your marketing campaign and your career development, the logical starting point of a conversation is your career goal and then your areas of expertise. Most people whom you meet would like to know what you have done and what your objective is. Talk about the achievements presented in your r&eacute;sum&eacute; to illustrate your areas of expertise. <br />
                  When you are sure that your vis-&agrave;-vis has understood your goal, ask your other questions. Ask short clear questions and be sure to leave enough time for a reply. By prompting people to talk, you also prompt them to think about and get involved in your marketing campaign.<br />
                  <br />
                </li>
                <li><span class="titres_bleu">Conclude the interview and decide on the next step. </span><br />
                  The fourth step in the reference interview consists in concluding and deciding on the next step. Before the end of a business meeting, the manager reviews the action to be taken, by whom and by when. Your reference interview should follow the same model.<br />
                  <br />
                  To conclude the interview on a positive note that leads to action, ask your vis-&agrave;-vis to suggest one or two people to whom you can talk to obtain more information and advice about your marketing campaign. Your success here will depend usually on the dynamism and quality of the earlier stages in the interview. If it is appropriate, ask for references within your areas of interest. The references should be requested only at the end of the interview. Once again, it should be remembered that we all achieve our goals with the help of others. Professionals in all walks of life recognize that fact. Simply by meeting and talking with you, they are implicitly showing that they are willing to help you. <br />
                  <br />
                </li>
                <li><span class="titres_bleu">Follow-up</span><br />
                  At the end of each reference interview, ask your vis-&agrave;-vis for permission to keep you informed about your marketing campaign. They will surely agree, but the idea will be appreciated. Each interviewer, now that he or she is a member of your network, will be interested in your success. Everybody likes the idea of helping others succeed. With time, the people you have consulted will keep reflecting and might have other ideas to share with you, that is as long as you have established a good tie and communication links with them. To start up the exchange, you must take the time to write a thank you letter within 24 hours of the interview.</li>
              </ol>  
              <p class="empDetailTitle">Useful resources:</p>
            <br />
            <br />
            <p><a href="http://www.ecaccarrieres.com/en/useful_links.php#1">Professional Associations</a></p>
            <p><a href="http://www.ecaccarrieres.com/en/useful_links.php#2">Employers Associations</a></p>
			<p><a href="http://www.ecaccarrieres.com/en/useful_links.php#3">Technical Societies</a></p>
            <p><a href="http://www.ecaccarrieres.com/en/useful_links.php#4">Other Organizations</a></p>
            </div>
          </div>
        </div>
        <li><a href="javascript:afficheId('contenu7')">How to write your r&eacute;sum&eacute;</a></li>
        <div class="contenant" id="contenu7" style="display:none">
          <div class="clicCacher"> <a href="javascript:cacheId('contenu7');">Closes</a> </div>
          <p>Your r&eacute;sum&eacute; is often the first document or the first element used to make yourself known to a possible employer.</p>
          <p>It is your calling card. In marketing terms, it is your promotional brochure. It is a sales tool that should introduce you and explain how you can help the company to achieve its corporate goals.<br />
            Your r&eacute;sum&eacute; should indicate what you believe is necessary to achieve your goal. Avoid exaggeration and put yourself in the place of the person who reads it.</p>
          <p>There is some discussion about r&eacute;sum&eacute; length. The trend is to aim for a r&eacute;sum&eacute; of no more than two pages. If you have just left university, a two-page r&eacute;sum&eacute; is likely to be enough. If you have twenty years of experience, it is perfectly normal to use three to five pages to present your professional career. Here are the broad principles that should guide you in preparing your r&eacute;sum&eacute;:</p>
          <ol>
            <li>
              <div align="left">Include only the information relevant to the position you are applying for;</div>
            </li>
            <li>Begin with your career objectives and then in a short paragraph with what distinguishes you, i.e., your main skills and aptitudes;<br />
            </li>
            <li>
              <div align="left">Present your experience chronologically starting with the most recent.  If you have acquired many years of experience, leave your first employment experience out or condense it into a short paragraph. Hear is how your experience could be presented: 
                Company name (month and year you started and month and year you left)
                Your title
                Your role and responsibilities
                Your achievements <br />
              </div>
            </li>
            <li>
              <div align="left">If you have little experience, indicate your education at the beginning of your r&eacute;sum&eacute;, otherwise present your education at the end and complete it with your complementary training;<br />
              </div>
            </li>
            <li>
              <div align="left">If you present your experience as supplementary information, add an appendix.<br />
                Example: You can chose to present your experience by areas of expertise or areas of activity. You should realize that it does not help to give in to trends and try to follow a r&eacute;sum&eacute; model blindly. The best approach is to adapt this personalized document to your specific needs. </div>
            </li>
          </ol>  <p class="empDetailTitle">Useful resources:</p>
            <br />
            <br />
            <p><a href="http://www.ecaccarrieres.com/en/useful_links.php#1">Professional Associations</a></p>
            <p><a href="http://www.ecaccarrieres.com/en/useful_links.php#2">Employers Associations</a></p>
			<p><a href="http://www.ecaccarrieres.com/en/useful_links.php#3">Technical Societies</a></p>
            <p><a href="http://www.ecaccarrieres.com/en/useful_links.php#4">Other Organizations</a></p>
        </div>
        <li><a href="javascript:afficheId('contenu5')">The strategy behind your job search</a></li>
        <div class="contenant" id="contenu5" style="display:none">
          <div class="clicCacher"> <a href="javascript:cacheId('contenu5');">Close</a> </div>
          <p>Your job search can be compared to a business seeking customers for its product. As a candidate, you are a commodity product on the employment market. Understanding and accepting that will help you in your search and to rationalize something that could potentially become too emotional.<br />
            It is also important to understand that an employer is above all a person who will try to place you within a network of known reference points. Most operate in the same manner. They have positions to fill and they try to determine which position you will fit into. They also tend to analyze your candidacy based on their own vision of the world and on the broad lines presented in your r&eacute;sum&eacute;. You must be very clear and quickly promote your strengths, knowledge, and areas of expertise to the person you meet.<br />
            <br />
            <span class="titres_bleu"><strong>1. You are a commodity</strong></span><br />
            With this premise in mind, you should know the features of the commodity. This crucial stage will drive all the other stages in your job-hunting activities. <br />
            <br />
            <span class="titres_bleu"><strong>2. Features of your commodity</strong></span><br />
            You should take time to establish clearly who you are, what motivates you, and what you like. In other words, knowing yourself better will determine what kind of environment you wish to work in and the type of position that appeals to you. You should also know your strengths, your areas of expertise, and the type of work that will enable you to make the most of them. <br />
            <br />
            <span class="titres_bleu"><strong>3. Target market</strong></span><br />
            As with any market positioning, the target market has to be identified. You can take a horizontal approach to target a position level amongst all companies and all market sectors. You can also target appealing companies in certain market sectors and then determine which positions in those companies you can hope to be hired for. <br />
            <br />
            <span class="titres_bleu"><strong>4. Your professional marketing brochure</strong></span><br />
            Your r&eacute;sum&eacute; is your foremost marketing document to introduce yourself to a potential employer. It must therefore present as accurately as possible the features of your commodity and be devised as a function of the market you have targeted. This aspect is dealt with under another heading entitled &ldquo;How to develop your r&eacute;sum&eacute;&rdquo; and is also available on this website. <br />
            <br />
            <span class="titres_bleu"><strong>5. Your sales campaign</strong></span><br />
            Once you have established your target market, you must determine how to approach it. There are two ways. The first consists in replying to job offers (job postings). This way can provide results but it is very impersonal and can often lead to frustration because of the lack of replies to the interest you show for the job.&nbsp; The second way is to use your network of contacts to reach people who do the hiring. This way can be very effective and, above all, less frustrating. For this method, you have to take part in reference interviews that are not employment interviews in that your contact is under no commitment. However, they do make it possible for your contact person to refer you to others. This will enable you to enhance your network exponentially and reach people who might otherwise have been inaccessible. </p>
          <p>These two approaches are not mutually exclusive. In some cases, they should be combined so as to increase your chances of being recruited. </p>  <p class="empDetailTitle">Useful resources:</p>
            <br />
            <br />
            <p><a href="http://www.ecaccarrieres.com/en/useful_links.php#1">Professional Associations</a></p>
            <p><a href="http://www.ecaccarrieres.com/en/useful_links.php#2">Employers Associations</a></p>
			<p><a href="http://www.ecaccarrieres.com/en/useful_links.php#3">Technical Societies</a></p>
            <p><a href="http://www.ecaccarrieres.com/en/useful_links.php#4">Other Organizations</a></p>
        </div>
        <li><a href="javascript:afficheId('contenu2')">Salary negotiation: do&rsquo;s and don&rsquo;ts</a></li>
        <div id="contenu2"  style="display:none">
          <div align="right"><a href="javascript:cacheId('contenu2');" class="Style3">Close</a> </div>
          <a href="candidates-registration.php">Open a session</a> and access our career management tools.</div>
        <li> <a href="javascript:afficheId('contenu8')">Six basic principles when preparing for an interview</a></li>
        <div class="contenant" id="contenu8" style="display:none">
          <div class="clicCacher"> <a href="javascript:cacheId('contenu8');">Close</a> </div>
          <p>Every interviewer aims to assess the candidate&rsquo;s attitude, personality, and behaviour. The interview is not a catechism but rather an opportunity to distinguish oneself. There are as many possible answers as there are people. Once again, be yourself. Respond in accordance with your own personality, your way of communicating, your strengths, and your experience. To help create the best impression and minimize the difficulties that might arise as a result of careless answers, remember the following basic principles:<br />
            &nbsp;<br />
            <strong class="titres_bleu">1. LISTEN</strong><br />
            Listen to the question or statement. Understand exactly what is being asked. If you have any doubts, ask for a clarification.<br />
            <br />
            <strong class="titres_bleu">2. ANALYSIS</strong><br />
            Take time to think about all the facts that apply to your response.<br />
            <br />
            <strong class="titres_bleu">3. AUTHENTICITY</strong><br />
            Provide POSITIVIE INFORMATION in direct replies and get straight to the point. Only address facts that are relevant to the subject under discussion so as not to open debate on delicate issues. Be authentic, but without feeling obliged to provide unsolicited information that could clash with the image you wish to project.&nbsp; <br />
            &nbsp;<br />
            <strong class="titres_bleu">4.  STRATEGY</strong><br />
            Keep in mind this useful strategy: your answers don&rsquo;t have to be perfect; they only have to be accepted by the interviewer and do not have to put you in a difficult situation. <br />
            <br />
            <strong class="titres_bleu">5.  SUCCESS</strong><br />
            Try to emphasize and draw attention to your success factors and related achievements. Show how they will be useful in the position you are applying for. Remember that the interviewer seeks above all to reply to the basic question: &ldquo;How can this person provide added value to may business?&rdquo;<br />
            <br />
            <strong class="titres_bleu">6. EXPERIENCE</strong><br />
            Consider this model response (applicable in all interview situations): competence &ndash; application &ndash; achievement. If you apply this model, you build a bridge between the question asked and your talent, you will reinforce the value of your experience and you enhance your credibility level.</p>  <p class="empDetailTitle">Useful resources:</p>
            <br />
            <br />
            <p><a href="http://www.ecaccarrieres.com/en/useful_links.php#1">Professional Associations</a></p>
            <p><a href="http://www.ecaccarrieres.com/en/useful_links.php#2">Employers Associations</a></p>
			<p><a href="http://www.ecaccarrieres.com/en/useful_links.php#3">Technical Societies</a></p>
            <p><a href="http://www.ecaccarrieres.com/en/useful_links.php#4">Other Organizations</a></p>
        </div>
      </ul>
    </div>
    <p><br />
    </p>
    <p>For personalized coaching in career management, please contact us: <strong>514.858.6333. ext.222.</strong></p>

    <img src="http://www.ecaccarrieres.com/img/Tools.gif" alt="outils" width="306" height="45" />
    <div id="list">
      <script>
function afficheId(baliseId)
  {
  if (document.getElementById && document.getElementById(baliseId) != null)
    {
    document.getElementById(baliseId).style.visibility='visible';
    document.getElementById(baliseId).style.display='block';
    }
  }

function cacheId(baliseId)
  {
  if (document.getElementById && document.getElementById(baliseId) != null)
    {
    document.getElementById(baliseId).style.visibility='hidden';
    document.getElementById(baliseId).style.display='none';
    }
  }

cacheId('contenu');
// si JavaScript est disponible, cache le contenu d&egrave;s le
// chargement de la page. Sans JavaScript, le contenu sera
// affich&eacute;.
    </script>
      <div class="clicTitre" >
        <div align="left"><a href="javascript:afficheId('contenu')">Steps to obtain an Engineer&rsquo;s Permit if you graduated in a foreign country </a> </div>
      </div>
      <div class="contenant" id="contenu" style="display:none" align="left">
        <div class="clicCacher"> <a href="javascript:cacheId('contenu');">Close</a> </div>
        <p>The Ordre des ing&eacute;nieurs du Qu&eacute;bec in collaboration with several organisations can help you have your qualification recognised in order to obtain a permit that will allow you to practice as an engineer in Quebec. Here is an overview of the information that you will have to submit with your application:<br />
        </p>
        <ul>
          <li>A copy      of your birth certificate;</li>
          <li>A      recent passport-sized photo (5 cm X 7 cm), bearing your signed      certification that it is of you;</li>
          <li>All      university degrees supporting the application or certification of their      award;</li>
          <li>Official      transcripts for each of the degrees submitted in support of your      application; </li>
          <li>A      detailed summary of your relevant on-the-job experiences since the      completion of studies leading to the engineering degree, as well as      certifications for each such experience;</li>
          <li>Certifications      of participation in training or professional development activities since      you were awarded your engineering degree.<br />
          </li>
        </ul>
        <p>To obtain more information, please visit the website of the Ordre des ing&eacute;nieurs du Qu&eacute;bec by clicking on the following link:<br />
          <a href="http://www.oiq.qc.ca/practice/permits/junior-permits/degree-canada.html">http://www.oiq.qc.ca/practice/permits/junior-permits/degree-canada.html</a></p>
      </div>
      <br />
      <div class="clicTitre" > <a href="javascript:afficheId('contenu3')"> Organizations that have standards and accreditation procedures</a><br />
      </div>
      <div class="contenant" id="contenu3" style="display:none" align="left">
        <div class="clicCacher"> <a href="javascript:cacheId('contenu3');">Close</a> </div>
        Please find below a list of organizations that have standards and accreditation procedures:<br />
        <br />
        <ul>
          <li>
            <p>Commission des titres d'ing&eacute;nieurs (France)</p>
          </li>
          <li>
            <p>Accreditation Board for Engineering and Technology (United States)</p>
          </li>
          <li>
            <p>Engineering Council of South Africa (degree holders as of 1999)<br />
              The Engineering Council (United Kingdom) (degree holders as of 1989)</p>
          </li>
          <li>
            <p>The Hong Kong Institution of Engineers (degree holders as of 1995)</p>
          </li>
          <li>
            <p>The Institution of Engineers (Australia) (degree holders as of 1989)</p>
          </li>
          <li>
            <p>The Institution of Engineers of Ireland (degree holders as of 1989)</p>
          </li>
          <li>
            <p>The Institution of Professional Engineers (New Zealand) (degree holders as of 1989)</p>
          </li>
        </ul>
        *Source: Ordre des ing&eacute;nieurs du Qu&eacute;bec </div>
    </div>
  </div>
  <div align="left"></div>

  <div id="sky"><div class="banner_sky">
<script type="text/javascript">
/*<![CDATA[*/
GA_googleFillSlot('sky');
/*]]>*/
</script></div>
</div>
	<div id="footer">
	  <a href="confidentiality_policy.php" class="footer_lien">Confidentiality Policy</a> - Copyright &copy; ECAC Careers  </div>
</div>

</body>
</html>

                                                                                     