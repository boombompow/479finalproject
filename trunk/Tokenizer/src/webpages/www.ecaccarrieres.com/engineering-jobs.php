<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="en" xml:lang="en">
<head>
	<title>Home  Welcome to engineers and employers</title>
	<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1" />
<meta http-equiv="Content-Language" content="en" />
<meta name="description" content="A unique network of engineer and engineering professionals recruiting in Quebec. Looking for an engineer? You're an engineer looking for a job? Engineering Career is for you!">
<meta name="keywords" content="engineer jobs, engineer work, career engineer, engineer careers, engineer employment, quality engineer jobs, engineering careers, engineer recruitment, engineering career, engineer recruiting, engineer job search, engineer job openings">
<link href="http://dev.rhrexpert.com/assets/css/test/common.css" rel="stylesheet" type="text/css" />

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
  con.open('POST', 'HTTP://www.reseaugeniecarrieres.com/rhr_php.php', true);
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
<script language="JavaScript" type="text/javascript">
    function ChangeLoginLocation(sender)
    {
      var loginblock = document.getElementById('inscri_visible');
      sender.parentNode.offsetParent.parentNode.appendChild(loginblock);
      loginblock.style.display = '';
      var loginnode = document.getElementById('LOGIN_ID');
      if (loginnode != null)
      {
        loginnode.value = sender.parentNode.offsetParent.id;
      }
    }
    
    function HideLoginLocation()
    {
      var loginblock = document.getElementById('inscri_visible');
      loginblock.style.display = 'none';
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
<script src="http://partner.googleadservices.com/gampad/google_service.js" language="javascript" type="text/javascript"></script>
<script language="javascript" type="text/javascript">
GS_googleAddAdSenseService('ca-pub-1570074118270923');GS_googleEnableAllServices();
</script>
<script language="javascript" type="text/javascript">
GA_googleAddAttr('lang','en');GA_googleAddAttr('site','rgc');GA_googleAddAttr('enviro','prod');
</script>
<script language="javascript" type="text/javascript">
GA_googleAddSlot('ca-pub-1570074118270923','top');GA_googleAddSlot('ca-pub-1570074118270923','sky');
</script>
<script language="javascript" type="text/javascript">
GA_googleFetchAds();
</script>
<script language="javascript" type="text/javascript">
var _gaq=_gaq||[];
_gaq.push(['_setAccount','UA-5712649-6']);
_gaq.push(['_setDomainName','none']);
_gaq.push(['_trackPageview']);
(function(){
var ga=document.createElement('script');ga.type='text/javascript';ga.async=true;
ga.src=('https:'==document.location.protocol?'https://ssl':'http://www')+'.google-analytics.com/ga.js';
var s=document.getElementsByTagName('script')[0];s.parentNode.insertBefore(ga,s);
})();
</script>
	
	<link href="http://www.reseaugeniecarrieres.com/css/main-lu10.css" rel="stylesheet" type="text/css" />
	<link href="http://www.reseaugeniecarrieres.com/css/contenu_accueil-lu10.css" rel="stylesheet" type="text/css" />
	<link href="http://www.reseaugeniecarrieres.com/css/menu_horizontal.css" rel="stylesheet" type="text/css" />
</head>

<body>

<div id="top_header"><div id="coin"></div></div>

<div id="header">
	<div id="logos">
		<div id="logo_header1"><a href="index_en.php"><img src="http://www.ReseauGenieCarrieres.com/img_pres/logo_header_en.gif" alt="Engineering career  your resource for engineers jobs" border="0" /></a></div>
		<div id="logo_header2"><img src="http://www.ReseauGenieCarrieres.com/img_pres/logo_header_2.gif" alt="Engineering career  your resource for engineers jobs" /></div>
		<div id="sous_logo1"><!-- --></div>
		<div id="sous_logo2">Links  : <a href="http://www.engineerscanada.ca/e/index.cfm" target="_blank">Engineers Canada</a>  |  <a href="http://www.ferique.com/public/Section/About/ShowHTMLContent.aspx?sectionName=LandingPage&pageName=CareerChange&Lang=en" target="_blank">F&Eacute;RIQUE Funds</a> | <a href="http://www.ReseauGenieCarrieres.com/index.php">Fran&ccedil;ais</a>
				</div>
  </div>
	<div id="menu_horizontal"><ul>
    	<li class="visited"><a href="engineering-jobs.php">Home</a></li>
    	<li><a href="http://www.ReseauGenieCarrieres.com/en/engineering-employers.php">Employers</a></li>
    	<li><a href="http://www.ReseauGenieCarrieres.com/en/engineer-candidates.php">Job Seekers </a></li>
    	<li><a href="http://www.ReseauGenieCarrieres.com/en/engineering-career-network.php">Our Network</a></li>
    	<li><a href="http://www.ReseauGenieCarrieres.com/en/events.php">Events</a></li>
         <li><a href="http://www.ReseauGenieCarrieres.com/en/engineering_career_fair.php">Engineering Career Fair</a></li>
    	<li><a href="http://www.ReseauGenieCarrieres.com/en/engineering-links.php">Useful Links</a></li>
    	<li><a href="http://www.ReseauGenieCarrieres.com/en/contact.php">Contact us</a></li>
	</ul>
  </div>
</div>

<div id="banner"><div id="830"><div id="zone_728">
<script type="text/javascript">
/*<![CDATA[*/
GA_googleFillSlot('top');
/*]]>*/
</script></div>
<div id="heure">Tuesday 13 December </div></div></div>
<div id="title">
	<h1>Home  jobs for engineers</h1>
	</div>
<div id="main" class="clearfix">
	<div id="col_employ">
		<div align="center">
			<script src="http://dev.rhrexpert.com/assets/Scripts/AC_RunActiveContent.js" type="text/javascript"></script>
<div align="center"><img src="http://www.reseaugeniecarrieres.com/img/haut_menu.gif" alt="Menu" width="185" height="20" /><br />
  <img src="http://www.reseaugeniecarrieres.com/img/Employersspotlight.gif" alt="employeurs vedette" width="185" height="30" />
<div>
  <script type="text/javascript">
AC_FL_RunContent( 'codebase','http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=9,0,28,0','width','180','height','130','title','Employeurs vedettes','src','img/employeur_vedette-en','quality','high','pluginspage','http://www.adobe.com/shockwave/download/download.cgi?P1_Prod_Version=ShockwaveFlash','movie','img/employeur_vedette-en' ); //end AC code
</script><noscript><object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=9,0,28,0" width="180" height="130" title="Employeurs vedettes">
    <param name="movie" value="img/employeur_vedette-en.swf" />
    <param name="quality" value="high" />
    <embed src="http://www.reseaugeniecarrieres.com/img/employeur_vedette-en.swf" quality="high" pluginspage="http://www.adobe.com/shockwave/download/download.cgi?P1_Prod_Version=ShockwaveFlash" type="application/x-shockwave-flash" width="180" height="130"></embed>
  </object>
</noscript></div>
<a href="http://www.ferique.com/public/Home.aspx" target="_blank"><img src="http://www.reseaugeniecarrieres.com/img/logo-ferique.gif" alt="ferique" width="181" height="67" border="0" /></a>
<br />
<br />
<img src="http://www.reseaugeniecarrieres.com/img/separation.gif" alt="separation" width="160" height="1" /><br />
<img src="http://www.reseaugeniecarrieres.com/img/eventsspotlight.gif" alt="events" width="185" height="30" /> <br />
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
			<img src="http://www.reseaugeniecarrieres.com/img/bas_menu.gif" alt="Bas" width="185" height="18" />
		</div>
	</div>
	<div id="login_dip">
		
				
		<img src="http://www.reseaugeniecarrieres.com/img/ourjob.jpg" alt="Offres d'emplois pour ingénieurs" width="453" height="51" />
<div id="postes">
		<table class="titres">
			<tr>
				<th width="165px">Title</th>
				<th width="120px">Employer</th>
				<th width="50px">Region</th>
				<th>Posting Date</th>
			</tr>
		</table>
		<div class="scroll">
			<table>
				<col id="first" />
				<col id="second" />
				<col id="third" />
				<col id="forth" />
							<tr id="couleurFicheDeux">
					<td><a href="http://www.ReseauGenieCarrieres.com/en/job-detail.php?/financial_markets_specialists/&v=OWppbWdl">Financial Markets Specialists</a></td>
					<td><a href="http://www.ReseauGenieCarrieres.com/en/job-detail.php?/financial_markets_specialists/&v=OWppbWdl">Autorité des marchés financiers</a></td>
					<td><a href="http://www.ReseauGenieCarrieres.com/en/job-detail.php?/financial_markets_specialists/&v=OWppbWdl">Montreal</a></td>
					<td><a href="http://www.ReseauGenieCarrieres.com/en/job-detail.php?/financial_markets_specialists/&v=OWppbWdl">13/12/2011</a></td>
				</tr>
							<tr id="couleurFicheUn">
					<td><a href="http://www.ReseauGenieCarrieres.com/en/job-detail.php?/directeur_de_l%27entretien_et_soutien_a_l%27exploitation/&v=MWlwbWdl">Directeur de l'entretien et soutien à l'exploitation</a></td>
					<td><a href="http://www.ReseauGenieCarrieres.com/en/job-detail.php?/directeur_de_l%27entretien_et_soutien_a_l%27exploitation/&v=MWlwbWdl">La Régie des Installations Olympiques</a></td>
					<td><a href="http://www.ReseauGenieCarrieres.com/en/job-detail.php?/directeur_de_l%27entretien_et_soutien_a_l%27exploitation/&v=MWlwbWdl">Montreal</a></td>
					<td><a href="http://www.ReseauGenieCarrieres.com/en/job-detail.php?/directeur_de_l%27entretien_et_soutien_a_l%27exploitation/&v=MWlwbWdl">12/12/2011</a></td>
				</tr>
							<tr id="couleurFicheDeux">
					<td><a href="http://www.ReseauGenieCarrieres.com/en/job-detail.php?/project_manager/&v=OG5tbGdl">Project Manager</a></td>
					<td><a href="http://www.ReseauGenieCarrieres.com/en/job-detail.php?/project_manager/&v=OG5tbGdl">Solarcan</a></td>
					<td><a href="http://www.ReseauGenieCarrieres.com/en/job-detail.php?/project_manager/&v=OG5tbGdl">Longueuil</a></td>
					<td><a href="http://www.ReseauGenieCarrieres.com/en/job-detail.php?/project_manager/&v=OG5tbGdl">08/12/2011</a></td>
				</tr>
							<tr id="couleurFicheUn">
					<td><a href="http://www.ReseauGenieCarrieres.com/en/job-detail.php?/civil_engineer/&v=OG1ra2dl">Civil Engineer</a></td>
					<td><a href="http://www.ReseauGenieCarrieres.com/en/job-detail.php?/civil_engineer/&v=OG1ra2dl">Goldcorp</a></td>
					<td><a href="http://www.ReseauGenieCarrieres.com/en/job-detail.php?/civil_engineer/&v=OG1ra2dl">Northern Quebec</a></td>
					<td><a href="http://www.ReseauGenieCarrieres.com/en/job-detail.php?/civil_engineer/&v=OG1ra2dl">07/12/2011</a></td>
				</tr>
							<tr id="couleurFicheDeux">
					<td><a href="http://www.ReseauGenieCarrieres.com/en/job-detail.php?/chief_matallurgist/&v=Mmhsa2dl">Chief Matallurgist</a></td>
					<td><a href="http://www.ReseauGenieCarrieres.com/en/job-detail.php?/chief_matallurgist/&v=Mmhsa2dl">Goldcorp</a></td>
					<td><a href="http://www.ReseauGenieCarrieres.com/en/job-detail.php?/chief_matallurgist/&v=Mmhsa2dl">Northern Quebec</a></td>
					<td><a href="http://www.ReseauGenieCarrieres.com/en/job-detail.php?/chief_matallurgist/&v=Mmhsa2dl">07/12/2011</a></td>
				</tr>
							<tr id="couleurFicheUn">
					<td><a href="http://www.ReseauGenieCarrieres.com/en/job-detail.php?/programmer_analyst/&v=NGpsa2dl">Programmer Analyst</a></td>
					<td><a href="http://www.ReseauGenieCarrieres.com/en/job-detail.php?/programmer_analyst/&v=NGpsa2dl">OACIQ</a></td>
					<td><a href="http://www.ReseauGenieCarrieres.com/en/job-detail.php?/programmer_analyst/&v=NGpsa2dl">Brossard</a></td>
					<td><a href="http://www.ReseauGenieCarrieres.com/en/job-detail.php?/programmer_analyst/&v=NGpsa2dl">07/12/2011</a></td>
				</tr>
							<tr id="couleurFicheDeux">
					<td><a href="http://www.ReseauGenieCarrieres.com/en/job-detail.php?/mechanical%2Felectrical%2Fcivil_engineer/&v=N2lra2Rl">Mechanical/Electrical/Civil Engineer</a></td>
					<td><a href="http://www.ReseauGenieCarrieres.com/en/job-detail.php?/mechanical%2Felectrical%2Fcivil_engineer/&v=N2lra2Rl">Enercon</a></td>
					<td><a href="http://www.ReseauGenieCarrieres.com/en/job-detail.php?/mechanical%2Felectrical%2Fcivil_engineer/&v=N2lra2Rl">Matane or Montreal</a></td>
					<td><a href="http://www.ReseauGenieCarrieres.com/en/job-detail.php?/mechanical%2Felectrical%2Fcivil_engineer/&v=N2lra2Rl">06/12/2011</a></td>
				</tr>
							<tr id="couleurFicheUn">
					<td><a href="http://www.ReseauGenieCarrieres.com/en/job-detail.php?/project_manager_-_installation_%26_technical_support/&v=NG1uamdl">Project Manager - Installation & Technical Support</a></td>
					<td><a href="http://www.ReseauGenieCarrieres.com/en/job-detail.php?/project_manager_-_installation_%26_technical_support/&v=NG1uamdl">Eocycle Technologies inc.</a></td>
					<td><a href="http://www.ReseauGenieCarrieres.com/en/job-detail.php?/project_manager_-_installation_%26_technical_support/&v=NG1uamdl">Montreal / Lévis</a></td>
					<td><a href="http://www.ReseauGenieCarrieres.com/en/job-detail.php?/project_manager_-_installation_%26_technical_support/&v=NG1uamdl">06/12/2011</a></td>
				</tr>
							<tr id="couleurFicheDeux">
					<td><a href="http://www.ReseauGenieCarrieres.com/en/job-detail.php?/programmer_analyst_asp.net/&v=MWJkaGdl">Programmer Analyst ASP.NET</a></td>
					<td><a href="http://www.ReseauGenieCarrieres.com/en/job-detail.php?/programmer_analyst_asp.net/&v=MWJkaGdl">SNC-Lavalin</a></td>
					<td><a href="http://www.ReseauGenieCarrieres.com/en/job-detail.php?/programmer_analyst_asp.net/&v=MWJkaGdl">Montreal</a></td>
					<td><a href="http://www.ReseauGenieCarrieres.com/en/job-detail.php?/programmer_analyst_asp.net/&v=MWJkaGdl">02/12/2011</a></td>
				</tr>
							<tr id="couleurFicheUn">
					<td><a href="http://www.ReseauGenieCarrieres.com/en/job-detail.php?/project_manager_-_engineer/&v=M2dnaGdl">Project Manager - Engineer</a></td>
					<td><a href="http://www.ReseauGenieCarrieres.com/en/job-detail.php?/project_manager_-_engineer/&v=M2dnaGdl">École Polytechnique de Montréal</a></td>
					<td><a href="http://www.ReseauGenieCarrieres.com/en/job-detail.php?/project_manager_-_engineer/&v=M2dnaGdl">Montreal</a></td>
					<td><a href="http://www.ReseauGenieCarrieres.com/en/job-detail.php?/project_manager_-_engineer/&v=M2dnaGdl">02/12/2011</a></td>
				</tr>
							<tr id="couleurFicheDeux">
					<td><a href="http://www.ReseauGenieCarrieres.com/en/job-detail.php?/buildings_mechanical_engineer/&v=MGdqaGdl">Buildings Mechanical Engineer</a></td>
					<td><a href="http://www.ReseauGenieCarrieres.com/en/job-detail.php?/buildings_mechanical_engineer/&v=MGdqaGdl">Borea Construction</a></td>
					<td><a href="http://www.ReseauGenieCarrieres.com/en/job-detail.php?/buildings_mechanical_engineer/&v=MGdqaGdl">Province de Québec</a></td>
					<td><a href="http://www.ReseauGenieCarrieres.com/en/job-detail.php?/buildings_mechanical_engineer/&v=MGdqaGdl">02/12/2011</a></td>
				</tr>
							<tr id="couleurFicheUn">
					<td><a href="http://www.ReseauGenieCarrieres.com/en/job-detail.php?/inventory_specialist/&v=M2xrZ2dl">Inventory Specialist</a></td>
					<td><a href="http://www.ReseauGenieCarrieres.com/en/job-detail.php?/inventory_specialist/&v=M2xrZ2dl">Hewitt Équipement Limitée</a></td>
					<td><a href="http://www.ReseauGenieCarrieres.com/en/job-detail.php?/inventory_specialist/&v=M2xrZ2dl">Pointe-Claire</a></td>
					<td><a href="http://www.ReseauGenieCarrieres.com/en/job-detail.php?/inventory_specialist/&v=M2xrZ2dl">01/12/2011</a></td>
				</tr>
							<tr id="couleurFicheDeux">
					<td><a href="http://www.ReseauGenieCarrieres.com/en/job-detail.php?/project_manager_-_industrial_11-548/&v=N3BrZ2dl">Project Manager - Industrial 11-548</a></td>
					<td><a href="http://www.ReseauGenieCarrieres.com/en/job-detail.php?/project_manager_-_industrial_11-548/&v=N3BrZ2dl">Hewitt Équipement Limitée</a></td>
					<td><a href="http://www.ReseauGenieCarrieres.com/en/job-detail.php?/project_manager_-_industrial_11-548/&v=N3BrZ2dl">Pointe-Claire</a></td>
					<td><a href="http://www.ReseauGenieCarrieres.com/en/job-detail.php?/project_manager_-_industrial_11-548/&v=N3BrZ2dl">01/12/2011</a></td>
				</tr>
							<tr id="couleurFicheUn">
					<td><a href="http://www.ReseauGenieCarrieres.com/en/job-detail.php?/internal_representative%2C_energy_division/&v=OXJrZ2dl">Internal Representative, Energy Division</a></td>
					<td><a href="http://www.ReseauGenieCarrieres.com/en/job-detail.php?/internal_representative%2C_energy_division/&v=OXJrZ2dl">Hewitt Équipement Limitée</a></td>
					<td><a href="http://www.ReseauGenieCarrieres.com/en/job-detail.php?/internal_representative%2C_energy_division/&v=OXJrZ2dl">Pointe-Claire</a></td>
					<td><a href="http://www.ReseauGenieCarrieres.com/en/job-detail.php?/internal_representative%2C_energy_division/&v=OXJrZ2dl">01/12/2011</a></td>
				</tr>
							<tr id="couleurFicheDeux">
					<td><a href="http://www.ReseauGenieCarrieres.com/en/job-detail.php?/engineer_in_automated_production_%28or_electric%29/&v=MmNiZmdl">Engineer in automated production (or electric)</a></td>
					<td><a href="http://www.ReseauGenieCarrieres.com/en/job-detail.php?/engineer_in_automated_production_%28or_electric%29/&v=MmNiZmdl">Bathium Canada inc.</a></td>
					<td><a href="http://www.ReseauGenieCarrieres.com/en/job-detail.php?/engineer_in_automated_production_%28or_electric%29/&v=MmNiZmdl">Boucherville</a></td>
					<td><a href="http://www.ReseauGenieCarrieres.com/en/job-detail.php?/engineer_in_automated_production_%28or_electric%29/&v=MmNiZmdl">29/11/2011</a></td>
				</tr>
							<tr id="couleurFicheUn">
					<td><a href="http://www.ReseauGenieCarrieres.com/en/job-detail.php?/engineer_-_process_design/&v=NGViZmdl">Engineer - Process Design</a></td>
					<td><a href="http://www.ReseauGenieCarrieres.com/en/job-detail.php?/engineer_-_process_design/&v=NGViZmdl">Bathium Canada inc.</a></td>
					<td><a href="http://www.ReseauGenieCarrieres.com/en/job-detail.php?/engineer_-_process_design/&v=NGViZmdl">Boucherville</a></td>
					<td><a href="http://www.ReseauGenieCarrieres.com/en/job-detail.php?/engineer_-_process_design/&v=NGViZmdl">29/11/2011</a></td>
				</tr>
							<tr id="couleurFicheDeux">
					<td><a href="http://www.ReseauGenieCarrieres.com/en/job-detail.php?/adviser_%96_innovation_%26_development/&v=OGtkZmdl">Adviser  Innovation & Development</a></td>
					<td><a href="http://www.ReseauGenieCarrieres.com/en/job-detail.php?/adviser_%96_innovation_%26_development/&v=OGtkZmdl">Société de transport de Montréal</a></td>
					<td><a href="http://www.ReseauGenieCarrieres.com/en/job-detail.php?/adviser_%96_innovation_%26_development/&v=OGtkZmdl">Montreal</a></td>
					<td><a href="http://www.ReseauGenieCarrieres.com/en/job-detail.php?/adviser_%96_innovation_%26_development/&v=OGtkZmdl">29/11/2011</a></td>
				</tr>
							<tr id="couleurFicheUn">
					<td><a href="http://www.ReseauGenieCarrieres.com/en/job-detail.php?/project_manager_-_construction/&v=MGZvbWZl">Project Manager - Construction</a></td>
					<td><a href="http://www.ReseauGenieCarrieres.com/en/job-detail.php?/project_manager_-_construction/&v=MGZvbWZl">Hydroméga Services</a></td>
					<td><a href="http://www.ReseauGenieCarrieres.com/en/job-detail.php?/project_manager_-_construction/&v=MGZvbWZl">Montreal</a></td>
					<td><a href="http://www.ReseauGenieCarrieres.com/en/job-detail.php?/project_manager_-_construction/&v=MGZvbWZl">25/11/2011</a></td>
				</tr>
							<tr id="couleurFicheDeux">
					<td><a href="http://www.ReseauGenieCarrieres.com/en/job-detail.php?/r%26d_engineer/&v=N2hqbWZl">R&D Engineer</a></td>
					<td><a href="http://www.ReseauGenieCarrieres.com/en/job-detail.php?/r%26d_engineer/&v=N2hqbWZl">Gestion Claude Alarie</a></td>
					<td><a href="http://www.ReseauGenieCarrieres.com/en/job-detail.php?/r%26d_engineer/&v=N2hqbWZl">Laval</a></td>
					<td><a href="http://www.ReseauGenieCarrieres.com/en/job-detail.php?/r%26d_engineer/&v=N2hqbWZl">24/11/2011</a></td>
				</tr>
							<tr id="couleurFicheUn">
					<td><a href="http://www.ReseauGenieCarrieres.com/en/job-detail.php?/civil_engineer/&v=M2dtbWZl">Civil Engineer</a></td>
					<td><a href="http://www.ReseauGenieCarrieres.com/en/job-detail.php?/civil_engineer/&v=M2dtbWZl">Progestion MEC</a></td>
					<td><a href="http://www.ReseauGenieCarrieres.com/en/job-detail.php?/civil_engineer/&v=M2dtbWZl">Laval</a></td>
					<td><a href="http://www.ReseauGenieCarrieres.com/en/job-detail.php?/civil_engineer/&v=M2dtbWZl">24/11/2011</a></td>
				</tr>
							<tr id="couleurFicheDeux">
					<td><a href="http://www.ReseauGenieCarrieres.com/en/job-detail.php?/technical_representative/&v=NmptbWZl">Technical Representative</a></td>
					<td><a href="http://www.ReseauGenieCarrieres.com/en/job-detail.php?/technical_representative/&v=NmptbWZl">Interfax Systems inc</a></td>
					<td><a href="http://www.ReseauGenieCarrieres.com/en/job-detail.php?/technical_representative/&v=NmptbWZl">Montreal</a></td>
					<td><a href="http://www.ReseauGenieCarrieres.com/en/job-detail.php?/technical_representative/&v=NmptbWZl">24/11/2011</a></td>
				</tr>
							<tr id="couleurFicheUn">
					<td><a href="http://www.ReseauGenieCarrieres.com/en/job-detail.php?/director_-_organizational_performance/&v=MGZubGZl">Director - Organizational Performance</a></td>
					<td><a href="http://www.ReseauGenieCarrieres.com/en/job-detail.php?/director_-_organizational_performance/&v=MGZubGZl">PM de la Fontaine Inc.</a></td>
					<td><a href="http://www.ReseauGenieCarrieres.com/en/job-detail.php?/director_-_organizational_performance/&v=MGZubGZl">Gatineau</a></td>
					<td><a href="http://www.ReseauGenieCarrieres.com/en/job-detail.php?/director_-_organizational_performance/&v=MGZubGZl">23/11/2011</a></td>
				</tr>
							<tr id="couleurFicheDeux">
					<td><a href="http://www.ReseauGenieCarrieres.com/en/job-detail.php?/mechanical_project_engineer/&v=OGtnbWpk">Mechanical Project Engineer</a></td>
					<td><a href="http://www.ReseauGenieCarrieres.com/en/job-detail.php?/mechanical_project_engineer/&v=OGtnbWpk">Bombardier Produits Récréatifs</a></td>
					<td><a href="http://www.ReseauGenieCarrieres.com/en/job-detail.php?/mechanical_project_engineer/&v=OGtnbWpk">Estrie-Valcourt</a></td>
					<td><a href="http://www.ReseauGenieCarrieres.com/en/job-detail.php?/mechanical_project_engineer/&v=OGtnbWpk">18/11/2011</a></td>
				</tr>
							<tr id="couleurFicheUn">
					<td><a href="http://www.ReseauGenieCarrieres.com/en/job-detail.php?/automation_and_control_supervisor/&v=NGpraWZl">Automation and Control Supervisor</a></td>
					<td><a href="http://www.ReseauGenieCarrieres.com/en/job-detail.php?/automation_and_control_supervisor/&v=NGpraWZl">Les Industries Spectra/Premium Inc.</a></td>
					<td><a href="http://www.ReseauGenieCarrieres.com/en/job-detail.php?/automation_and_control_supervisor/&v=NGpraWZl">Boucherville</a></td>
					<td><a href="http://www.ReseauGenieCarrieres.com/en/job-detail.php?/automation_and_control_supervisor/&v=NGpraWZl">18/11/2011</a></td>
				</tr>
							<tr id="couleurFicheDeux">
					<td><a href="http://www.ReseauGenieCarrieres.com/en/job-detail.php?/manufacturing_engineer/&v=NWtraWZl">Manufacturing Engineer</a></td>
					<td><a href="http://www.ReseauGenieCarrieres.com/en/job-detail.php?/manufacturing_engineer/&v=NWtraWZl">Les Industries Spectra/Premium Inc.</a></td>
					<td><a href="http://www.ReseauGenieCarrieres.com/en/job-detail.php?/manufacturing_engineer/&v=NWtraWZl">Boucherville</a></td>
					<td><a href="http://www.ReseauGenieCarrieres.com/en/job-detail.php?/manufacturing_engineer/&v=NWtraWZl">18/11/2011</a></td>
				</tr>
							<tr id="couleurFicheUn">
					<td><a href="http://www.ReseauGenieCarrieres.com/en/job-detail.php?/project_manager_-_sept-iles/&v=M2VoamZl">Project Manager - Sept-Îles</a></td>
					<td><a href="http://www.ReseauGenieCarrieres.com/en/job-detail.php?/project_manager_-_sept-iles/&v=M2VoamZl">Pomerleau</a></td>
					<td><a href="http://www.ReseauGenieCarrieres.com/en/job-detail.php?/project_manager_-_sept-iles/&v=M2VoamZl">Sept-Îles</a></td>
					<td><a href="http://www.ReseauGenieCarrieres.com/en/job-detail.php?/project_manager_-_sept-iles/&v=M2VoamZl">18/11/2011</a></td>
				</tr>
							<tr id="couleurFicheDeux">
					<td><a href="http://www.ReseauGenieCarrieres.com/en/job-detail.php?/senior_project_manager_%96_civil_works/&v=NGZoamZl">Senior Project Manager  Civil Works</a></td>
					<td><a href="http://www.ReseauGenieCarrieres.com/en/job-detail.php?/senior_project_manager_%96_civil_works/&v=NGZoamZl">Pomerleau</a></td>
					<td><a href="http://www.ReseauGenieCarrieres.com/en/job-detail.php?/senior_project_manager_%96_civil_works/&v=NGZoamZl">Montreal</a></td>
					<td><a href="http://www.ReseauGenieCarrieres.com/en/job-detail.php?/senior_project_manager_%96_civil_works/&v=NGZoamZl">18/11/2011</a></td>
				</tr>
							<tr id="couleurFicheUn">
					<td><a href="http://www.ReseauGenieCarrieres.com/en/job-detail.php?/director_-_construction_projects/&v=NGpnZWZl">Director - Construction Projects</a></td>
					<td><a href="http://www.ReseauGenieCarrieres.com/en/job-detail.php?/director_-_construction_projects/&v=NGpnZWZl">Réseau de transport de Longueuil</a></td>
					<td><a href="http://www.ReseauGenieCarrieres.com/en/job-detail.php?/director_-_construction_projects/&v=NGpnZWZl">Longueuil</a></td>
					<td><a href="http://www.ReseauGenieCarrieres.com/en/job-detail.php?/director_-_construction_projects/&v=NGpnZWZl">17/11/2011</a></td>
				</tr>
							<tr id="couleurFicheDeux">
					<td><a href="http://www.ReseauGenieCarrieres.com/en/job-detail.php?/investigator%2Fanalyst%2C_materials/&v=MmhqaGZl">Investigator/Analyst, Materials</a></td>
					<td><a href="http://www.ReseauGenieCarrieres.com/en/job-detail.php?/investigator%2Fanalyst%2C_materials/&v=MmhqaGZl">Pratt & Whitney Canada</a></td>
					<td><a href="http://www.ReseauGenieCarrieres.com/en/job-detail.php?/investigator%2Fanalyst%2C_materials/&v=MmhqaGZl">Longueuil</a></td>
					<td><a href="http://www.ReseauGenieCarrieres.com/en/job-detail.php?/investigator%2Fanalyst%2C_materials/&v=MmhqaGZl">16/11/2011</a></td>
				</tr>
							<tr id="couleurFicheUn">
					<td><a href="http://www.ReseauGenieCarrieres.com/en/job-detail.php?/engineer_-_electrical_design/&v=M2praGZl">Engineer - Electrical Design</a></td>
					<td><a href="http://www.ReseauGenieCarrieres.com/en/job-detail.php?/engineer_-_electrical_design/&v=M2praGZl">Premier Tech</a></td>
					<td><a href="http://www.ReseauGenieCarrieres.com/en/job-detail.php?/engineer_-_electrical_design/&v=M2praGZl">Rivière-du-Loup</a></td>
					<td><a href="http://www.ReseauGenieCarrieres.com/en/job-detail.php?/engineer_-_electrical_design/&v=M2praGZl">16/11/2011</a></td>
				</tr>
							<tr id="couleurFicheDeux">
					<td><a href="http://www.ReseauGenieCarrieres.com/en/job-detail.php?/project_manager/&v=OHBrZ2Zl">Project Manager</a></td>
					<td><a href="http://www.ReseauGenieCarrieres.com/en/job-detail.php?/project_manager/&v=OHBrZ2Zl">Adaptaide inc.</a></td>
					<td><a href="http://www.ReseauGenieCarrieres.com/en/job-detail.php?/project_manager/&v=OHBrZ2Zl">Le Gardeur</a></td>
					<td><a href="http://www.ReseauGenieCarrieres.com/en/job-detail.php?/project_manager/&v=OHBrZ2Zl">15/11/2011</a></td>
				</tr>
							<tr id="couleurFicheUn">
					<td><a href="http://www.ReseauGenieCarrieres.com/en/job-detail.php?/senior_consultant%2Fconsultant_-_logistic/&v=MWpsZ2Zl">Senior Consultant/Consultant - Logistic</a></td>
					<td><a href="http://www.ReseauGenieCarrieres.com/en/job-detail.php?/senior_consultant%2Fconsultant_-_logistic/&v=MWpsZ2Zl">Raymond Chabot Grant Thornton</a></td>
					<td><a href="http://www.ReseauGenieCarrieres.com/en/job-detail.php?/senior_consultant%2Fconsultant_-_logistic/&v=MWpsZ2Zl">Montreal</a></td>
					<td><a href="http://www.ReseauGenieCarrieres.com/en/job-detail.php?/senior_consultant%2Fconsultant_-_logistic/&v=MWpsZ2Zl">15/11/2011</a></td>
				</tr>
							<tr id="couleurFicheDeux">
					<td><a href="http://www.ReseauGenieCarrieres.com/en/job-detail.php?/ingenieur_mecanique%5C_responsable_de_projets_en_capitaux/&v=NG1sZ2Zl">Ingénieur mécanique\ Responsable de projets en capitaux</a></td>
					<td><a href="http://www.ReseauGenieCarrieres.com/en/job-detail.php?/ingenieur_mecanique%5C_responsable_de_projets_en_capitaux/&v=NG1sZ2Zl">ArcelorMittal Mines Canada</a></td>
					<td><a href="http://www.ReseauGenieCarrieres.com/en/job-detail.php?/ingenieur_mecanique%5C_responsable_de_projets_en_capitaux/&v=NG1sZ2Zl">Port-Cartier</a></td>
					<td><a href="http://www.ReseauGenieCarrieres.com/en/job-detail.php?/ingenieur_mecanique%5C_responsable_de_projets_en_capitaux/&v=NG1sZ2Zl">15/11/2011</a></td>
				</tr>
							<tr id="couleurFicheUn">
					<td><a href="http://www.ReseauGenieCarrieres.com/en/job-detail.php?/mechanical_engineer/&v=OWtmaGZl">Mechanical Engineer</a></td>
					<td><a href="http://www.ReseauGenieCarrieres.com/en/job-detail.php?/mechanical_engineer/&v=OWtmaGZl">Trans-F-Air</a></td>
					<td><a href="http://www.ReseauGenieCarrieres.com/en/job-detail.php?/mechanical_engineer/&v=OWtmaGZl">St-Hubert</a></td>
					<td><a href="http://www.ReseauGenieCarrieres.com/en/job-detail.php?/mechanical_engineer/&v=OWtmaGZl">15/11/2011</a></td>
				</tr>
							<tr id="couleurFicheDeux">
					<td><a href="http://www.ReseauGenieCarrieres.com/en/job-detail.php?/manager%2C_industrial_engineering/&v=OGxlampk">Manager, Industrial Engineering</a></td>
					<td><a href="http://www.ReseauGenieCarrieres.com/en/job-detail.php?/manager%2C_industrial_engineering/&v=OGxlampk">Prévost Car</a></td>
					<td><a href="http://www.ReseauGenieCarrieres.com/en/job-detail.php?/manager%2C_industrial_engineering/&v=OGxlampk">Quebec</a></td>
					<td><a href="http://www.ReseauGenieCarrieres.com/en/job-detail.php?/manager%2C_industrial_engineering/&v=OGxlampk">09/11/2011</a></td>
				</tr>
							<tr id="couleurFicheUn">
					<td><a href="http://www.ReseauGenieCarrieres.com/en/job-detail.php?/project_manager/&v=M2ppZmVj">Project Manager</a></td>
					<td><a href="http://www.ReseauGenieCarrieres.com/en/job-detail.php?/project_manager/&v=M2ppZmVj">Société d'habitation et de développement de Montréal</a></td>
					<td><a href="http://www.ReseauGenieCarrieres.com/en/job-detail.php?/project_manager/&v=M2ppZmVj">Montreal</a></td>
					<td><a href="http://www.ReseauGenieCarrieres.com/en/job-detail.php?/project_manager/&v=M2ppZmVj">08/11/2011</a></td>
				</tr>
							<tr id="couleurFicheDeux">
					<td><a href="http://www.ReseauGenieCarrieres.com/en/job-detail.php?/technicien_en_electro-controle/&v=OW5ubGVl">Technicien en électro-contrôle</a></td>
					<td><a href="http://www.ReseauGenieCarrieres.com/en/job-detail.php?/technicien_en_electro-controle/&v=OW5ubGVl">Plad Équipement ltée.</a></td>
					<td><a href="http://www.ReseauGenieCarrieres.com/en/job-detail.php?/technicien_en_electro-controle/&v=OW5ubGVl">Bois des Filion</a></td>
					<td><a href="http://www.ReseauGenieCarrieres.com/en/job-detail.php?/technicien_en_electro-controle/&v=OW5ubGVl">07/11/2011</a></td>
				</tr>
							<tr id="couleurFicheUn">
					<td><a href="http://www.ReseauGenieCarrieres.com/en/job-detail.php?/designer/&v=MGFpa2Vl">Designer</a></td>
					<td><a href="http://www.ReseauGenieCarrieres.com/en/job-detail.php?/designer/&v=MGFpa2Vl">Novacentre Technologie Ltée</a></td>
					<td><a href="http://www.ReseauGenieCarrieres.com/en/job-detail.php?/designer/&v=MGFpa2Vl">Boucherville</a></td>
					<td><a href="http://www.ReseauGenieCarrieres.com/en/job-detail.php?/designer/&v=MGFpa2Vl">04/11/2011</a></td>
				</tr>
							<tr id="couleurFicheDeux">
					<td><a href="http://www.ReseauGenieCarrieres.com/en/job-detail.php?/system_specialist/&v=NWlsa2Vl">System Specialist</a></td>
					<td><a href="http://www.ReseauGenieCarrieres.com/en/job-detail.php?/system_specialist/&v=NWlsa2Vl">Assistance Système LD Inc</a></td>
					<td><a href="http://www.ReseauGenieCarrieres.com/en/job-detail.php?/system_specialist/&v=NWlsa2Vl">Boucherville</a></td>
					<td><a href="http://www.ReseauGenieCarrieres.com/en/job-detail.php?/system_specialist/&v=NWlsa2Vl">04/11/2011</a></td>
				</tr>
							<tr id="couleurFicheUn">
					<td><a href="http://www.ReseauGenieCarrieres.com/en/job-detail.php?/charge_de_projets_-_ingenierie_et_construction/&v=NmZnamVl">Chargé de projets - Ingénierie et construction</a></td>
					<td><a href="http://www.ReseauGenieCarrieres.com/en/job-detail.php?/charge_de_projets_-_ingenierie_et_construction/&v=NmZnamVl">Agence Métropolitaine de Transport</a></td>
					<td><a href="http://www.ReseauGenieCarrieres.com/en/job-detail.php?/charge_de_projets_-_ingenierie_et_construction/&v=NmZnamVl">Montréal</a></td>
					<td><a href="http://www.ReseauGenieCarrieres.com/en/job-detail.php?/charge_de_projets_-_ingenierie_et_construction/&v=NmZnamVl">03/11/2011</a></td>
				</tr>
							<tr id="couleurFicheDeux">
					<td><a href="http://www.ReseauGenieCarrieres.com/en/job-detail.php?/planificateur%2C_entretien/&v=MWZqaGVl">Planificateur, Entretien</a></td>
					<td><a href="http://www.ReseauGenieCarrieres.com/en/job-detail.php?/planificateur%2C_entretien/&v=MWZqaGVl">Aluminerie Alouette</a></td>
					<td><a href="http://www.ReseauGenieCarrieres.com/en/job-detail.php?/planificateur%2C_entretien/&v=MWZqaGVl">Sept-Îles</a></td>
					<td><a href="http://www.ReseauGenieCarrieres.com/en/job-detail.php?/planificateur%2C_entretien/&v=MWZqaGVl">01/11/2011</a></td>
				</tr>
							<tr id="couleurFicheUn">
					<td><a href="http://www.ReseauGenieCarrieres.com/en/job-detail.php?/engineer_%2F_mechanical_design/&v=M2dnZmVl">Engineer / Mechanical Design</a></td>
					<td><a href="http://www.ReseauGenieCarrieres.com/en/job-detail.php?/engineer_%2F_mechanical_design/&v=M2dnZmVl">Automation Machine Design RC inc.</a></td>
					<td><a href="http://www.ReseauGenieCarrieres.com/en/job-detail.php?/engineer_%2F_mechanical_design/&v=M2dnZmVl">Saint-Hubert</a></td>
					<td><a href="http://www.ReseauGenieCarrieres.com/en/job-detail.php?/engineer_%2F_mechanical_design/&v=M2dnZmVl">28/10/2011</a></td>
				</tr>
							<tr id="couleurFicheDeux">
					<td><a href="http://www.ReseauGenieCarrieres.com/en/job-detail.php?/ingenieur_en_optique/&v=MmdnZWVl">Ingénieur en Optique</a></td>
					<td><a href="http://www.ReseauGenieCarrieres.com/en/job-detail.php?/ingenieur_en_optique/&v=MmdnZWVl">ABB Canada</a></td>
					<td><a href="http://www.ReseauGenieCarrieres.com/en/job-detail.php?/ingenieur_en_optique/&v=MmdnZWVl">Quebec City</a></td>
					<td><a href="http://www.ReseauGenieCarrieres.com/en/job-detail.php?/ingenieur_en_optique/&v=MmdnZWVl">27/10/2011</a></td>
				</tr>
							<tr id="couleurFicheUn">
					<td><a href="http://www.ReseauGenieCarrieres.com/en/job-detail.php?/software_engineer/&v=M2hnZWVl">Software Engineer</a></td>
					<td><a href="http://www.ReseauGenieCarrieres.com/en/job-detail.php?/software_engineer/&v=M2hnZWVl">ABB Canada</a></td>
					<td><a href="http://www.ReseauGenieCarrieres.com/en/job-detail.php?/software_engineer/&v=M2hnZWVl">Quebec City</a></td>
					<td><a href="http://www.ReseauGenieCarrieres.com/en/job-detail.php?/software_engineer/&v=M2hnZWVl">27/10/2011</a></td>
				</tr>
							<tr id="couleurFicheDeux">
					<td><a href="http://www.ReseauGenieCarrieres.com/en/job-detail.php?/embeded_software_engineer/&v=NGlnZWVl">Embeded Software Engineer</a></td>
					<td><a href="http://www.ReseauGenieCarrieres.com/en/job-detail.php?/embeded_software_engineer/&v=NGlnZWVl">ABB Canada</a></td>
					<td><a href="http://www.ReseauGenieCarrieres.com/en/job-detail.php?/embeded_software_engineer/&v=NGlnZWVl">Quebec City</a></td>
					<td><a href="http://www.ReseauGenieCarrieres.com/en/job-detail.php?/embeded_software_engineer/&v=NGlnZWVl">27/10/2011</a></td>
				</tr>
							<tr id="couleurFicheUn">
					<td><a href="http://www.ReseauGenieCarrieres.com/en/job-detail.php?/ingenieur_electronique_analogique_senior/&v=NWpnZWVl">Ingénieur Électronique Analogique Sénior</a></td>
					<td><a href="http://www.ReseauGenieCarrieres.com/en/job-detail.php?/ingenieur_electronique_analogique_senior/&v=NWpnZWVl">ABB Canada</a></td>
					<td><a href="http://www.ReseauGenieCarrieres.com/en/job-detail.php?/ingenieur_electronique_analogique_senior/&v=NWpnZWVl">Quebec City</a></td>
					<td><a href="http://www.ReseauGenieCarrieres.com/en/job-detail.php?/ingenieur_electronique_analogique_senior/&v=NWpnZWVl">27/10/2011</a></td>
				</tr>
							<tr id="couleurFicheDeux">
					<td><a href="http://www.ReseauGenieCarrieres.com/en/job-detail.php?/ingenieur_mecanique_senior%2C_groupe_optomecanique/&v=NmtnZWVl">Ingénieur mécanique sénior, Groupe Optomécanique</a></td>
					<td><a href="http://www.ReseauGenieCarrieres.com/en/job-detail.php?/ingenieur_mecanique_senior%2C_groupe_optomecanique/&v=NmtnZWVl">ABB Canada</a></td>
					<td><a href="http://www.ReseauGenieCarrieres.com/en/job-detail.php?/ingenieur_mecanique_senior%2C_groupe_optomecanique/&v=NmtnZWVl">Quebec City</a></td>
					<td><a href="http://www.ReseauGenieCarrieres.com/en/job-detail.php?/ingenieur_mecanique_senior%2C_groupe_optomecanique/&v=NmtnZWVl">27/10/2011</a></td>
				</tr>
							<tr id="couleurFicheUn">
					<td><a href="http://www.ReseauGenieCarrieres.com/en/job-detail.php?/ingenieur_%2F_scientifique_senior%2C_groupe_ingenierie_systeme/&v=OG5oZWVl">Ingénieur / Scientifique sénior, Groupe Ingénierie système</a></td>
					<td><a href="http://www.ReseauGenieCarrieres.com/en/job-detail.php?/ingenieur_%2F_scientifique_senior%2C_groupe_ingenierie_systeme/&v=OG5oZWVl">ABB Canada</a></td>
					<td><a href="http://www.ReseauGenieCarrieres.com/en/job-detail.php?/ingenieur_%2F_scientifique_senior%2C_groupe_ingenierie_systeme/&v=OG5oZWVl">Quebec City</a></td>
					<td><a href="http://www.ReseauGenieCarrieres.com/en/job-detail.php?/ingenieur_%2F_scientifique_senior%2C_groupe_ingenierie_systeme/&v=OG5oZWVl">27/10/2011</a></td>
				</tr>
							<tr id="couleurFicheDeux">
					<td><a href="http://www.ReseauGenieCarrieres.com/en/job-detail.php?/engineer_-_mechanical_design/&v=NWllZGVl">Engineer - Mechanical Design</a></td>
					<td><a href="http://www.ReseauGenieCarrieres.com/en/job-detail.php?/engineer_-_mechanical_design/&v=NWllZGVl">Bathium Canada inc.</a></td>
					<td><a href="http://www.ReseauGenieCarrieres.com/en/job-detail.php?/engineer_-_mechanical_design/&v=NWllZGVl">Boucherville</a></td>
					<td><a href="http://www.ReseauGenieCarrieres.com/en/job-detail.php?/engineer_-_mechanical_design/&v=NWllZGVl">26/10/2011</a></td>
				</tr>
							<tr id="couleurFicheUn">
					<td><a href="http://www.ReseauGenieCarrieres.com/en/job-detail.php?/mechanical_design_engineer_%28malp-14%29/&v=M2RjZWVl">Mechanical Design Engineer (MALP-14)</a></td>
					<td><a href="http://www.ReseauGenieCarrieres.com/en/job-detail.php?/mechanical_design_engineer_%28malp-14%29/&v=M2RjZWVl">Premier Tech</a></td>
					<td><a href="http://www.ReseauGenieCarrieres.com/en/job-detail.php?/mechanical_design_engineer_%28malp-14%29/&v=M2RjZWVl">Drummondville</a></td>
					<td><a href="http://www.ReseauGenieCarrieres.com/en/job-detail.php?/mechanical_design_engineer_%28malp-14%29/&v=M2RjZWVl">26/10/2011</a></td>
				</tr>
							<tr id="couleurFicheDeux">
					<td><a href="http://www.ReseauGenieCarrieres.com/en/job-detail.php?/project_manager_%2F_industrial_equipments/&v=NWZjZWVl">Project Manager / Industrial Equipments</a></td>
					<td><a href="http://www.ReseauGenieCarrieres.com/en/job-detail.php?/project_manager_%2F_industrial_equipments/&v=NWZjZWVl">Premier Tech</a></td>
					<td><a href="http://www.ReseauGenieCarrieres.com/en/job-detail.php?/project_manager_%2F_industrial_equipments/&v=NWZjZWVl">Rivière-du-Loup</a></td>
					<td><a href="http://www.ReseauGenieCarrieres.com/en/job-detail.php?/project_manager_%2F_industrial_equipments/&v=NWZjZWVl">26/10/2011</a></td>
				</tr>
							<tr id="couleurFicheUn">
					<td><a href="http://www.ReseauGenieCarrieres.com/en/job-detail.php?/project_manager/&v=M2RiZGVl">Project Manager</a></td>
					<td><a href="http://www.ReseauGenieCarrieres.com/en/job-detail.php?/project_manager/&v=M2RiZGVl">Soprema Inc.</a></td>
					<td><a href="http://www.ReseauGenieCarrieres.com/en/job-detail.php?/project_manager/&v=M2RiZGVl">Drummondville</a></td>
					<td><a href="http://www.ReseauGenieCarrieres.com/en/job-detail.php?/project_manager/&v=M2RiZGVl">25/10/2011</a></td>
				</tr>
							<tr id="couleurFicheDeux">
					<td><a href="http://www.ReseauGenieCarrieres.com/en/job-detail.php?/energy_advisor/&v=MmRjZGVl">Energy Advisor</a></td>
					<td><a href="http://www.ReseauGenieCarrieres.com/en/job-detail.php?/energy_advisor/&v=MmRjZGVl">SNC-Lavalin</a></td>
					<td><a href="http://www.ReseauGenieCarrieres.com/en/job-detail.php?/energy_advisor/&v=MmRjZGVl">Montréal</a></td>
					<td><a href="http://www.ReseauGenieCarrieres.com/en/job-detail.php?/energy_advisor/&v=MmRjZGVl">25/10/2011</a></td>
				</tr>
							<tr id="couleurFicheUn">
					<td><a href="http://www.ReseauGenieCarrieres.com/en/job-detail.php?/automation_engineer_a.b./&v=NGhsamRl">Automation Engineer A.B.</a></td>
					<td><a href="http://www.ReseauGenieCarrieres.com/en/job-detail.php?/automation_engineer_a.b./&v=NGhsamRl">Serti informatique Inc.</a></td>
					<td><a href="http://www.ReseauGenieCarrieres.com/en/job-detail.php?/automation_engineer_a.b./&v=NGhsamRl">Montreal</a></td>
					<td><a href="http://www.ReseauGenieCarrieres.com/en/job-detail.php?/automation_engineer_a.b./&v=NGhsamRl">19/10/2011</a></td>
				</tr>
							<tr id="couleurFicheDeux">
					<td><a href="http://www.ReseauGenieCarrieres.com/en/job-detail.php?/programmer_analyst/&v=MGVtamRl">Programmer Analyst</a></td>
					<td><a href="http://www.ReseauGenieCarrieres.com/en/job-detail.php?/programmer_analyst/&v=MGVtamRl">Logiciel LOC</a></td>
					<td><a href="http://www.ReseauGenieCarrieres.com/en/job-detail.php?/programmer_analyst/&v=MGVtamRl">Laval</a></td>
					<td><a href="http://www.ReseauGenieCarrieres.com/en/job-detail.php?/programmer_analyst/&v=MGVtamRl">19/10/2011</a></td>
				</tr>
							<tr id="couleurFicheUn">
					<td><a href="http://www.ReseauGenieCarrieres.com/en/job-detail.php?/representant_des_ventes_externes%2C_ingenieurs_conseils/&v=M2ptaGRl">Représentant des ventes externes, ingénieurs conseils</a></td>
					<td><a href="http://www.ReseauGenieCarrieres.com/en/job-detail.php?/representant_des_ventes_externes%2C_ingenieurs_conseils/&v=M2ptaGRl">Le Groupe Master S.E.C.</a></td>
					<td><a href="http://www.ReseauGenieCarrieres.com/en/job-detail.php?/representant_des_ventes_externes%2C_ingenieurs_conseils/&v=M2ptaGRl">Montreal</a></td>
					<td><a href="http://www.ReseauGenieCarrieres.com/en/job-detail.php?/representant_des_ventes_externes%2C_ingenieurs_conseils/&v=M2ptaGRl">18/10/2011</a></td>
				</tr>
							<tr id="couleurFicheDeux">
					<td><a href="http://www.ReseauGenieCarrieres.com/en/job-detail.php?/specialist%2C_report_production/&v=NmtsaWRl">Specialist, Report Production</a></td>
					<td><a href="http://www.ReseauGenieCarrieres.com/en/job-detail.php?/specialist%2C_report_production/&v=NmtsaWRl">CAE</a></td>
					<td><a href="http://www.ReseauGenieCarrieres.com/en/job-detail.php?/specialist%2C_report_production/&v=NmtsaWRl">Montreal</a></td>
					<td><a href="http://www.ReseauGenieCarrieres.com/en/job-detail.php?/specialist%2C_report_production/&v=NmtsaWRl">18/10/2011</a></td>
				</tr>
							<tr id="couleurFicheUn">
					<td><a href="http://www.ReseauGenieCarrieres.com/en/job-detail.php?/engineer%2C_senior_project_manager/&v=N2xraGRl">Engineer, Senior Project Manager</a></td>
					<td><a href="http://www.ReseauGenieCarrieres.com/en/job-detail.php?/engineer%2C_senior_project_manager/&v=N2xraGRl">Molson 1</a></td>
					<td><a href="http://www.ReseauGenieCarrieres.com/en/job-detail.php?/engineer%2C_senior_project_manager/&v=N2xraGRl">Montreal</a></td>
					<td><a href="http://www.ReseauGenieCarrieres.com/en/job-detail.php?/engineer%2C_senior_project_manager/&v=N2xraGRl">17/10/2011</a></td>
				</tr>
							<tr id="couleurFicheDeux">
					<td><a href="http://www.ReseauGenieCarrieres.com/en/job-detail.php?/quality_assurance_supervisor/&v=MGZsaGRl">Quality assurance supervisor</a></td>
					<td><a href="http://www.ReseauGenieCarrieres.com/en/job-detail.php?/quality_assurance_supervisor/&v=MGZsaGRl">Guru Cycles Inc.</a></td>
					<td><a href="http://www.ReseauGenieCarrieres.com/en/job-detail.php?/quality_assurance_supervisor/&v=MGZsaGRl">Laval</a></td>
					<td><a href="http://www.ReseauGenieCarrieres.com/en/job-detail.php?/quality_assurance_supervisor/&v=MGZsaGRl">17/10/2011</a></td>
				</tr>
							<tr id="couleurFicheUn">
					<td><a href="http://www.ReseauGenieCarrieres.com/en/job-detail.php?/staff_engineer%2Fanalyst%2C_mechanical/&v=MWhtaGRl">Staff Engineer/Analyst, Mechanical</a></td>
					<td><a href="http://www.ReseauGenieCarrieres.com/en/job-detail.php?/staff_engineer%2Fanalyst%2C_mechanical/&v=MWhtaGRl">Pratt & Whitney Canada</a></td>
					<td><a href="http://www.ReseauGenieCarrieres.com/en/job-detail.php?/staff_engineer%2Fanalyst%2C_mechanical/&v=MWhtaGRl">Longueuil</a></td>
					<td><a href="http://www.ReseauGenieCarrieres.com/en/job-detail.php?/staff_engineer%2Fanalyst%2C_mechanical/&v=MWhtaGRl">17/10/2011</a></td>
				</tr>
							<tr id="couleurFicheDeux">
					<td><a href="http://www.ReseauGenieCarrieres.com/en/job-detail.php?/assistant_district_manager_%2F_technico-commercial/&v=NGhpZ2Rl">Assistant District Manager / Technico-Commercial</a></td>
					<td><a href="http://www.ReseauGenieCarrieres.com/en/job-detail.php?/assistant_district_manager_%2F_technico-commercial/&v=NGhpZ2Rl">Sodexo</a></td>
					<td><a href="http://www.ReseauGenieCarrieres.com/en/job-detail.php?/assistant_district_manager_%2F_technico-commercial/&v=NGhpZ2Rl">Montreal or Quebec</a></td>
					<td><a href="http://www.ReseauGenieCarrieres.com/en/job-detail.php?/assistant_district_manager_%2F_technico-commercial/&v=NGhpZ2Rl">14/10/2011</a></td>
				</tr>
							<tr id="couleurFicheUn">
					<td><a href="http://www.ReseauGenieCarrieres.com/en/job-detail.php?/applications_engineer%2C_industrial_it/&v=N2tnZWRl">Applications Engineer, Industrial IT</a></td>
					<td><a href="http://www.ReseauGenieCarrieres.com/en/job-detail.php?/applications_engineer%2C_industrial_it/&v=N2tnZWRl">Global Automation Partners</a></td>
					<td><a href="http://www.ReseauGenieCarrieres.com/en/job-detail.php?/applications_engineer%2C_industrial_it/&v=N2tnZWRl">Montreal</a></td>
					<td><a href="http://www.ReseauGenieCarrieres.com/en/job-detail.php?/applications_engineer%2C_industrial_it/&v=N2tnZWRl">13/10/2011</a></td>
				</tr>
							<tr id="couleurFicheDeux">
					<td><a href="http://www.ReseauGenieCarrieres.com/en/job-detail.php?/applications_engineer%2C_automation/&v=OGxnZWRl">Applications Engineer, Automation</a></td>
					<td><a href="http://www.ReseauGenieCarrieres.com/en/job-detail.php?/applications_engineer%2C_automation/&v=OGxnZWRl">Global Automation Partners</a></td>
					<td><a href="http://www.ReseauGenieCarrieres.com/en/job-detail.php?/applications_engineer%2C_automation/&v=OGxnZWRl">Montreal</a></td>
					<td><a href="http://www.ReseauGenieCarrieres.com/en/job-detail.php?/applications_engineer%2C_automation/&v=OGxnZWRl">13/10/2011</a></td>
				</tr>
							<tr id="couleurFicheUn">
					<td><a href="http://www.ReseauGenieCarrieres.com/en/job-detail.php?/it_management_%26_support_specialist/&v=OW1nZWRl">IT Management & Support Specialist</a></td>
					<td><a href="http://www.ReseauGenieCarrieres.com/en/job-detail.php?/it_management_%26_support_specialist/&v=OW1nZWRl">Global Automation Partners</a></td>
					<td><a href="http://www.ReseauGenieCarrieres.com/en/job-detail.php?/it_management_%26_support_specialist/&v=OW1nZWRl">Montreal</a></td>
					<td><a href="http://www.ReseauGenieCarrieres.com/en/job-detail.php?/it_management_%26_support_specialist/&v=OW1nZWRl">13/10/2011</a></td>
				</tr>
							<tr id="couleurFicheDeux">
					<td><a href="http://www.ReseauGenieCarrieres.com/en/job-detail.php?/quality_assurance_coordinator/&v=OXFrZWRl">Quality Assurance Coordinator</a></td>
					<td><a href="http://www.ReseauGenieCarrieres.com/en/job-detail.php?/quality_assurance_coordinator/&v=OXFrZWRl">Les Aciers Richelieu</a></td>
					<td><a href="http://www.ReseauGenieCarrieres.com/en/job-detail.php?/quality_assurance_coordinator/&v=OXFrZWRl">Sorel-Tracy</a></td>
					<td><a href="http://www.ReseauGenieCarrieres.com/en/job-detail.php?/quality_assurance_coordinator/&v=OXFrZWRl">13/10/2011</a></td>
				</tr>
							<tr id="couleurFicheUn">
					<td><a href="http://www.ReseauGenieCarrieres.com/en/job-detail.php?/system_engineer-production_process/&v=MGZqZWNl">System Engineer-Production process</a></td>
					<td><a href="http://www.ReseauGenieCarrieres.com/en/job-detail.php?/system_engineer-production_process/&v=MGZqZWNl">ArcelorMittal Mines Canada</a></td>
					<td><a href="http://www.ReseauGenieCarrieres.com/en/job-detail.php?/system_engineer-production_process/&v=MGZqZWNl">Nord du Québec</a></td>
					<td><a href="http://www.ReseauGenieCarrieres.com/en/job-detail.php?/system_engineer-production_process/&v=MGZqZWNl">06/10/2011</a></td>
				</tr>
							<tr id="couleurFicheDeux">
					<td><a href="http://www.ReseauGenieCarrieres.com/en/job-detail.php?/head_of_department_-_works_of_art/&v=MGZsb3Jq">Head of Department - Works of art</a></td>
					<td><a href="http://www.ReseauGenieCarrieres.com/en/job-detail.php?/head_of_department_-_works_of_art/&v=MGZsb3Jq">Confidentiel</a></td>
					<td><a href="http://www.ReseauGenieCarrieres.com/en/job-detail.php?/head_of_department_-_works_of_art/&v=MGZsb3Jq">Montreal</a></td>
					<td><a href="http://www.ReseauGenieCarrieres.com/en/job-detail.php?/head_of_department_-_works_of_art/&v=MGZsb3Jq">23/09/2011</a></td>
				</tr>
							<tr id="couleurFicheUn">
					<td><a href="http://www.ReseauGenieCarrieres.com/en/job-detail.php?/project_manager_-_electrical_building/&v=MWdrZWFj">Project Manager - Electrical Building</a></td>
					<td><a href="http://www.ReseauGenieCarrieres.com/en/job-detail.php?/project_manager_-_electrical_building/&v=MWdrZWFj">Entreprise confidentielle</a></td>
					<td><a href="http://www.ReseauGenieCarrieres.com/en/job-detail.php?/project_manager_-_electrical_building/&v=MWdrZWFj">Région métropolitaine</a></td>
					<td><a href="http://www.ReseauGenieCarrieres.com/en/job-detail.php?/project_manager_-_electrical_building/&v=MWdrZWFj">07/09/2011</a></td>
				</tr>
							<tr id="couleurFicheDeux">
					<td><a href="http://www.ReseauGenieCarrieres.com/en/job-detail.php?/product_specialist_-_copper_connectivity/&v=NWtmZmdj">Product Specialist - Copper Connectivity</a></td>
					<td><a href="http://www.ReseauGenieCarrieres.com/en/job-detail.php?/product_specialist_-_copper_connectivity/&v=NWtmZmdj">Belden</a></td>
					<td><a href="http://www.ReseauGenieCarrieres.com/en/job-detail.php?/product_specialist_-_copper_connectivity/&v=NWtmZmdj">Montreal</a></td>
					<td><a href="http://www.ReseauGenieCarrieres.com/en/job-detail.php?/product_specialist_-_copper_connectivity/&v=NWtmZmdj">17/08/2011</a></td>
				</tr>
							<tr id="couleurFicheUn">
					<td><a href="http://www.ReseauGenieCarrieres.com/en/job-detail.php?/product_line_manager/&v=OWtnZ2Nj">Product Line Manager</a></td>
					<td><a href="http://www.ReseauGenieCarrieres.com/en/job-detail.php?/product_line_manager/&v=OWtnZ2Nj">Belden</a></td>
					<td><a href="http://www.ReseauGenieCarrieres.com/en/job-detail.php?/product_line_manager/&v=OWtnZ2Nj">Montreal</a></td>
					<td><a href="http://www.ReseauGenieCarrieres.com/en/job-detail.php?/product_line_manager/&v=OWtnZ2Nj">09/08/2011</a></td>
				</tr>
							<tr id="couleurFicheDeux">
					<td><a href="http://www.ReseauGenieCarrieres.com/en/job-detail.php?/director_of_public_works/&v=Nm1ubGZj">Director of Public Works</a></td>
					<td><a href="http://www.ReseauGenieCarrieres.com/en/job-detail.php?/director_of_public_works/&v=Nm1ubGZj">Ville de Granby</a></td>
					<td><a href="http://www.ReseauGenieCarrieres.com/en/job-detail.php?/director_of_public_works/&v=Nm1ubGZj">Ville de Granby</a></td>
					<td><a href="http://www.ReseauGenieCarrieres.com/en/job-detail.php?/director_of_public_works/&v=Nm1ubGZj">08/08/2011</a></td>
				</tr>
							<tr id="couleurFicheUn">
					<td><a href="http://www.ReseauGenieCarrieres.com/en/job-detail.php?/head_of_department_-_works_of_art/&v=Nm9wZ2Bi">Head of Department - Works of art</a></td>
					<td><a href="http://www.ReseauGenieCarrieres.com/en/job-detail.php?/head_of_department_-_works_of_art/&v=Nm9wZ2Bi">confidentiel</a></td>
					<td><a href="http://www.ReseauGenieCarrieres.com/en/job-detail.php?/head_of_department_-_works_of_art/&v=Nm9wZ2Bi">Estrie</a></td>
					<td><a href="http://www.ReseauGenieCarrieres.com/en/job-detail.php?/head_of_department_-_works_of_art/&v=Nm9wZ2Bi">26/07/2011</a></td>
				</tr>
							<tr id="couleurFicheDeux">
					<td><a href="http://www.ReseauGenieCarrieres.com/en/job-detail.php?/industrial_engineer_-_reliability_analyst/&v=NGlpaWZj">Industrial Engineer - Reliability Analyst</a></td>
					<td><a href="http://www.ReseauGenieCarrieres.com/en/job-detail.php?/industrial_engineer_-_reliability_analyst/&v=NGlpaWZj">ArcelorMittal Mines Canada</a></td>
					<td><a href="http://www.ReseauGenieCarrieres.com/en/job-detail.php?/industrial_engineer_-_reliability_analyst/&v=NGlpaWZj">Port-Cartier</a></td>
					<td><a href="http://www.ReseauGenieCarrieres.com/en/job-detail.php?/industrial_engineer_-_reliability_analyst/&v=NGlpaWZj">25/07/2011</a></td>
				</tr>
							<tr id="couleurFicheUn">
					<td><a href="http://www.ReseauGenieCarrieres.com/en/job-detail.php?/project_manager_-_municipal_infrastructure/&v=MmJkbWli">Project Manager - Municipal Infrastructure</a></td>
					<td><a href="http://www.ReseauGenieCarrieres.com/en/job-detail.php?/project_manager_-_municipal_infrastructure/&v=MmJkbWli">AECOM</a></td>
					<td><a href="http://www.ReseauGenieCarrieres.com/en/job-detail.php?/project_manager_-_municipal_infrastructure/&v=MmJkbWli">Gatineau</a></td>
					<td><a href="http://www.ReseauGenieCarrieres.com/en/job-detail.php?/project_manager_-_municipal_infrastructure/&v=MmJkbWli">09/07/2011</a></td>
				</tr>
							<tr id="couleurFicheDeux">
					<td><a href="http://www.ReseauGenieCarrieres.com/en/job-detail.php?/senior_project_manager_-_mining_and_industrial/&v=NmZgZ3Bq">Senior Project Manager - Mining and Industrial</a></td>
					<td><a href="http://www.ReseauGenieCarrieres.com/en/job-detail.php?/senior_project_manager_-_mining_and_industrial/&v=NmZgZ3Bq">Entreprise confidentielle</a></td>
					<td><a href="http://www.ReseauGenieCarrieres.com/en/job-detail.php?/senior_project_manager_-_mining_and_industrial/&v=NmZgZ3Bq">Montreal</a></td>
					<td><a href="http://www.ReseauGenieCarrieres.com/en/job-detail.php?/senior_project_manager_-_mining_and_industrial/&v=NmZgZ3Bq">27/01/2011</a></td>
				</tr>
						</table>
		</div>
	<div id="footer-postes">			<script type="text/javascript">
			AC_FL_RunContent( 'codebase','http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=9,0,28,0','width','450','height','51','title','trust','src','flash/pieds_clients-en','quality','high','pluginspage','http://www.adobe.com/shockwave/download/download.cgi?P1_Prod_Version=ShockwaveFlash','movie','flash/pieds_clients-en' ); //end AC code
			</script><noscript><object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=9,0,28,0" width="450" height="51" title="trust">
				<param name="movie" value="flash/pieds_clients-en.swf" />
				<param name="quality" value="high" />
				<embed src="http://www.reseaugeniecarrieres.com/flash/pieds_clients-en.swf" quality="high" pluginspage="http://www.adobe.com/shockwave/download/download.cgi?P1_Prod_Version=ShockwaveFlash" type="application/x-shockwave-flash" width="450" height="51"></embed>
			</object></noscript>
		</div>
</div>	</div>
	
	<div id="sky"><script type="text/javascript">
/*<![CDATA[*/
GA_googleFillSlot('sky');
/*]]>*/
</script></div>
	<div id="footer"><a href="http://www.ReseauGenieCarrieres.com/en/privacy_statement.php" class="footer_lien">Privacy Statement</a> -  &copy; Copyright ENGINEERING CAREERS Network.com</div>
	
</div>
</body>
</html>                                    