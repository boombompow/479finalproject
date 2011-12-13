<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="en" xml:lang="en">
<head>
	<title>ECAC Careers</title>
	<title>ECAC Careers</title>
<meta name="title" content="ECAC Careers">
<meta name="description" content="The Royal Military Colleges Club of Canada is joining a vast network aimed at recruiting engineers and engineering specialists that is unique in Québec.">
<meta name="keywords" content="Colleges,Career,Network,Engineer,Engineering,Research,Job,Employee,Graduate,Engineering,Recruiting,Career Management,Job Employment TradeFair,Coaching,Career Transition,Computer Science graduates of Concordia University.">
<meta name="verify-v1" content="c2PzoPDcPZmdHzKJa6WIVE+JYBGbPrKDlBBHlXFZ7G0=" />
<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1" />
<meta http-equiv="Content-Language" content="en" />
<script language="JavaScript" type="text/javascript">

function ValidateData()
{
  if (!document.dip_inscription['contact->LastName'].value)
  {
    alert('You must complete the field : Family Name');
    document.dip_inscription['contact->LastName'].focus();
    return false
  }
  if (!document.dip_inscription['contact->FirstName'].value)
  {
    alert('You must complete the field : First name');
    document.dip_inscription['contact->FirstName'].focus();
    return false
  }
  if (!document.dip_inscription['person->Sex'].value)
  {
    alert('You must complete the field : Civility');
    document.dip_inscription['person->Sex'].focus();
    return false
  }
  if (!document.dip_inscription['CARAC_DIPLOME'].value)
  {
    alert('You must complete the field : Last Degree Obtained');
    document.dip_inscription['CARAC_DIPLOME'].focus();
    return false
  }
  if (!document.dip_inscription['CARAC_PROMOTION'].value)
  {
    alert('You must complete the field : Year of Graduation');
    document.dip_inscription['CARAC_PROMOTION'].focus();
    return false
  }
  if (!document.dip_inscription['OfficeEmail->Value'].value ||
      document.dip_inscription['OfficeEmail->Value'].value.indexOf("@") == -1 ||
      document.dip_inscription['OfficeEmail->Value'].value.indexOf(".") == -1 ||
      document.dip_inscription['OfficeEmail->Value'].value.indexOf(" ") != -1 ||
      document.dip_inscription['OfficeEmail->Value'].value.length < 6)
  {
    alert('You must complete the field : E-mail');
    document.dip_inscription['OfficeEmail->Value'].focus();
    return false
  }
  if (!document.dip_inscription['OfficePhone->Value'].value)
  {
    alert('You must complete the field : Phone Number');
    document.dip_inscription['OfficePhone->Value'].focus();
    return false
  }
  if (!document.dip_inscription['CARAC_DISCIPLINE'].value)
  {
    alert('You must complete the field : Discipline');
    document.dip_inscription['CARAC_DISCIPLINE'].focus();
    return false
  }
  if (!document.dip_inscription['CARAC_EXPERT1'].value)
  {
    alert('You must complete the field : Field of Expertise');
    document.dip_inscription['CARAC_EXPERT1'].focus();
    return false
  }
  if (!document.dip_inscription['CARAC_EXPER_CANADA'].value)
  {
    alert('You must complete the field : Relevant Years of Experience');
    document.dip_inscription['CARAC_EXPER_CANADA'].focus();
    return false
  }
  if (!document.dip_inscription['CARAC_RESPONSABILITE'].value)
  {
    alert('You must complete the field : Level of Responsibility');
    document.dip_inscription['CARAC_RESPONSABILITE'].focus();
    return false
  }
  if (!document.dip_inscription['cv'].value)
  {
    alert('You must complete the field : C.V.');
    document.dip_inscription['cv'].focus();
    return false
  }
  if (document.dip_inscription['user->UserName'].value.indexOf(" ") != -1 ||
      document.dip_inscription['user->UserName'].value.length < 6)
  {
    alert('The usercode must contain at least 6 characters and must not contain spaces');
    document.dip_inscription['user->UserName'].focus();
    return false
  }
  if (!document.dip_inscription['user->Password'].value ||
      document.dip_inscription['user->Password'].value.indexOf(" ") != -1 ||
      document.dip_inscription['user->Password'].value != document.dip_inscription['pw2'].value)
  {
    alert('The usercode must contain at least 6 characters and must not contain spaces');
    document.dip_inscription['user->Password'].focus();
    return false
  }
  document.dip_inscription.submit();
}
</script>
<script language="JavaScript" type="text/javascript">
    function LeftRightSelect_Ajout(ListeSource, ListeDest, SauvMotCle, maxMotCle) 
    {   
      ListeSourcelen = ListeSource.length;   
      for (i = 0; i < ListeSourcelen; i++)   
      {     
        if (ListeSource.options[i].selected == true )     
        {       
          ListeDestlen = ListeDest.length;       
          if (parseInt(ListeDestlen) == parseInt(maxMotCle))         
            break;       
          var isNew = true;       
          for (j = 0; j < ListeDestlen; j++)       
          {         
            if  (ListeSource.options[i].text == ListeDest.options[j].text)         
            {            
              isNew = false;            
              break;         
            }       
          }       
          if (isNew)       
          {         
            ListeDest.options[ListeDestlen]= new Option(ListeSource.options[i].text, ListeSource.options[i].value);       
          }     
        }   
      }   
      SauvMotCle.value = "";   
      ListeDestlen = ListeDest.length;  
      for (i = 0; i < ListeDestlen; i++)   
      {     
        if (i > 0)
          SauvMotCle.value += ',';
        SauvMotCle.value += ListeDest.options[i].value;   
      } 
    }; 
    function LeftRightSelect_Supprime(ListeSource, SauvMotCle) 
    {   
      ListeSourcelen = ListeSource.length;   
      for (i = (ListeSourcelen - 1); i >= 0; i--)   
      {     
        if (ListeSource.options[i].selected == true )     
        {       
        ListeSource.options[i] = null;     
        }   
      }   
      SauvMotCle.value = "";   
      ListeSourcelen = ListeSource.length;   
      if (ListeSourcelen == 0)
        SauvMotCle.value = "-1";   
      else
        SauvMotCle.value = "";   
      for (i = 0; i < ListeSourcelen; i++)   
      {     
        if (i > 0)
          SauvMotCle.value += ',';
        SauvMotCle.value += ListeSource.options[i].value;   
      } 
    };
</script>
<script language="JavaScript" type="text/javascript">
    function fillSelectFromArray(hidListe, delListe,selectCtrl, itemArray, goodPrompt, badPrompt, defaultItem)
    {   
      var i, j;   
      var prompt;   
      hidListe.value = "";   
      for (i = delListe.options.length; i >= 0; i--)   
      {     
        delListe.options[i] = null;   
      }   
      for (i = selectCtrl.options.length; i >= 0; i--)   
      {     
        selectCtrl.options[i] = null;   
      }   
      prompt = (itemArray != null) ? goodPrompt : badPrompt;   
      if (prompt == null)   
      {     
        j = 0;   
      }   
      else   
      {     
        selectCtrl.options[0] = new Option(prompt);     
        j = 1;   
      }   
      if (itemArray != null)   
      {     
        for (i = 0; i < itemArray.length; i++)     
        {       
          selectCtrl.options[j] = new Option(itemArray[i][0]);       
          if (itemArray[i][1] != null)       
          {         
            selectCtrl.options[j].value = itemArray[i][1];       
          }       
          j++;     
        }     
        selectCtrl.options[0].selected = true;   
      } 
    }; 
ExpertArray =
   new Array(
     new Array(
                new Array("Travail de bureau","122"),
                new Array("Expédition et distribution","155"),
                new Array("Services postaux et messageries","156"),
                new Array("Bibliothèque, correspondance, renseignements","157"),
                new Array("Soutien administratif","158"),
                new Array("Finances et Assurance","159"),
                new Array("Bureautique","160")
              ),
     new Array(
                new Array("Crédit","128"),
                new Array("Comptabilité","129"),
                new Array("Analyse financière","130"),
                new Array("Fiscalité","131"),
                new Array("Paie","133"),
                new Array("Prix de revient","134"),
                new Array("Tenue de livres","135"),
                new Array("Trésorerie","136"),
                new Array("Vérification interne","137"),
                new Array("Vérification informatique","138"),
                new Array("Assurance","476"),
                new Array("Budget","477"),
                new Array("Planification financière","478"),
                new Array("Comptes à payer","556"),
                new Array("Comptes à recevoir","557"),
                new Array("Conciliation bancaire","558"),
                new Array("Consolidation","559"),
                new Array("États financiers","560"),
                new Array("Gestion de fonds/Placement","561"),
                new Array("Implantation informatique","562"),
                new Array("Vérification externe","563"),
                new Array("Contrôle","568"),
                new Array("Statistics","241295"),
                new Array("Taxes","241296"),
                new Array("Customer Service/Consulting","241297")
              ),
     new Array(
                new Array("Affaires corporatives","489"),
                new Array("Affaires gouvernementales","490"),
                new Array("Communications externes","491"),
                new Array("Communications internes","492"),
                new Array("Édition","493"),
                new Array("Rédaction","494"),
                new Array("Relations avec les médias","495"),
                new Array("Relations avec les investisseurs","496"),
                new Array("Télécommunications","497"),
                new Array("Traduction/édition","498")
              ),
     new Array(
                new Array("Import/Export","269"),
                new Array("Marketing","270"),
                new Array("Télémarketing","271"),
                new Array("Promotion/Publicité","272"),
                new Array("Responsable de produits","274"),
                new Array("Service à la clientèle","276"),
                new Array("Ventes/Représentation","277"),
                new Array("Développement des affaires","293"),
                new Array("Analyse/Développement de marché","295"),
                new Array("Expert conseil","564"),
                new Array("Surveys/Polls","241298")
              ),
     new Array(
                new Array("Architecture","238"),
                new Array("Conception Web","239"),
                new Array("Concepteur logiciel","241"),
                new Array("M.I.S.","242"),
                new Array("Programmation","243"),
                new Array("Support technique","244"),
                new Array("Analyste informatique","263"),
                new Array("Architecture","264"),
                new Array("Admin. de BD","267"),
                new Array("Admin. de réseau","268"),
                new Array("Analyse (plan) stratégique","499"),
                new Array("Concepteur matériels","500"),
                new Array("Implantation informatique","501"),
                new Array("Implantation systèmes intégrés","502"),
                new Array("Réseautique","503"),
                new Array("Télécommunications","504"),
                new Array("Training","241299"),
                new Array("Instrumentation et control","241300")
              ),
     new Array(
                new Array("Avantages sociaux/Rémunération","256"),
                new Array("Développement organisationnel","257"),
                new Array("Dotation/Planification de main-d'oeuvre","258"),
                new Array("Formation","259"),
                new Array("Généraliste","260"),
                new Array("Relations de travail/Médiation","261"),
                new Array("Santé et sécurité au travail","262"),
                new Array("Contrôle/ass. qualité RH","505")
              ),
     new Array(
                new Array("Télécommunications","223"),
                new Array("Procédés industriels/chimiques","308"),
                new Array("Contrôle de la production","309"),
                new Array("Entretien","310"),
                new Array("Instrumentation et contrôle","311"),
                new Array("Contrôle de la qualité","312"),
                new Array("Conception/Design","313"),
                new Array("Ingénieur technique","338"),
                new Array("Chauffage/Ventilation/Air climatisé","386"),
                new Array("Recherche et développement","387"),
                new Array("Santé et sécurité au travail","397"),
                new Array("Acoustique, vibration","506"),
                new Array("Arpentage","507"),
                new Array("Atomique (nucléaire)","508"),
                new Array("Automatisation","509"),
                new Array("Barrage","510"),
                new Array("Biomédical/Biotechnologie","511"),
                new Array("CAO/DAO","512"),
                new Array("Construction","513"),
                new Array("Électrique industriel","514"),
                new Array("Enseignement/Formation","515"),
                new Array("Environnement","516"),
                new Array("Équipements","517"),
                new Array("Estimations","518"),
                new Array("Exploitation, exploration minière","519"),
                new Array("Fondations","520"),
                new Array("Géophysique","521"),
                new Array("Géotechnique","522"),
                new Array("Gestion de projet","523"),
                new Array("Hydraulique","524"),
                new Array("Moteurs, générateurs","525"),
                new Array("Optimisation","526"),
                new Array("Pâtes et papier","527"),
                new Array("Programmation d'automates","528"),
                new Array("Soudage","529"),
                new Array("Structures (acier-béton)","530"),
                new Array("Traitement, exploitation","531"),
                new Array("Turbines, pompes, compresseurs","532"),
                new Array("Tuyauterie","533"),
                new Array("Tests","553"),
                new Array("Bâtiments","555"),
                new Array("Procédures ISO (ou autres normes)","565"),
                new Array("Ouvrages d'art","579"),
                new Array("Mécanique industrielle","623"),
                new Array("Égouts/Aqueducs","624"),
                new Array("Infrastructure/Route/Échangeur","625"),
                new Array("Électricité du bâtiment/Éclairage routier","626")
              ),
     new Array(
                new Array("Analyse de laboratoire","317"),
                new Array("Recherche et développement","318"),
                new Array("Représentation technique","319"),
                new Array("Contrôle qualité","320"),
                new Array("Contrôle de la production","321"),
                new Array("Procédés chimiques","322"),
                new Array("Procédures ISO","352"),
                new Array("Environnement","353"),
                new Array("Enseignement","357"),
                new Array("Formation","389"),
                new Array("Conseiller technique","428"),
                new Array("Gestion de projet","534")
              ),
     new Array(
                new Array("Gestion des inventaires","296"),
                new Array("Gestion de projets","350"),
                new Array("Achats et approvisionnement","460"),
                new Array("Consultation","461"),
                new Array("Estimation","462"),
                new Array("Gestion des ressources matérielles","463"),
                new Array("Gestion","464"),
                new Array("Gestion administrative","465"),
                new Array("Gestion de personnel","466"),
                new Array("Gestion d'entreprise","467"),
                new Array("Gestion des opérations","468"),
                new Array("Gestion financière","469"),
                new Array("Gestion immobilière","470"),
                new Array("Implantation ISO","471"),
                new Array("Négociation de contrats","472"),
                new Array("Planification stratégique","473"),
                new Array("Réingénierie des processus","474"),
                new Array("Transport et logistique","475")
              ),
     new Array(
                new Array("Droit civil","481"),
                new Array("Droit commercial","482"),
                new Array("Droit corporatif","483"),
                new Array("Droit du travail","484"),
                new Array("Droit environnemental","485"),
                new Array("Droit international","486"),
                new Array("Droit notarial","487"),
                new Array("Droit social","488")
              )
            );
</script>
	<script language="JavaScript">
	function textCounter(field, maxlimit)
	{
	  if (field.value.length > maxlimit) // if too long...trim it!
		field.value = field.value.substring(0, maxlimit);
	}
	</script>
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
	
	<link href="http://www.ecaccarrieres.com/css/main-lu10.css" rel="stylesheet" type="text/css" />
	<link href="http://www.ecaccarrieres.com/css/menu_gauche-lu10.css" rel="stylesheet" type="text/css" />
	<link href="http://www.ecaccarrieres.com/css/contenu_accueil-lu10.css" rel="stylesheet" type="text/css" />
	<link href="http://www.ecaccarrieres.com/css/menu_horizontal.css" rel="stylesheet" type="text/css" />
</head>

<body>

<div id="top_header"><div id="coin"></div></div>

<div id="header" class="clearfix">
	<div id="phraseHaut">The Career Management Portal for the 12,000 Engineering &amp; Computer Science Alumni of Concordia University</div>
<div id="logo_header1"><a href="../index_en.php"><img src="http://www.ecaccarrieres.com/img_pres/logo_header_en.gif" alt="ECACcarrieres" border="0" usemap="#Map" />
 
</a><a href="http://www.ecaccarrieres.com/en/index.php"></a> 
<map name="Map" id="Map">
    <area shape="rect" coords="139,43,312,99" href="../index_en.php" target="_blank" />
  </map></div>
<div id="logo_header2"><img src="http://www.ecaccarrieres.com/img_pres/logo_header_2.gif" alt="ECAC-Carrieres.com" /></div>
<div id="sous_logo1"	><!-- --></div>
<div id="sous_logo2">Useful links : <a href="http://alumni.concordia.ca/chapters/faculty/EC/" target="_blank">Alumni Relations </a>| <a href="../../Documentswww.concordia.ca/index.php" target="_blank">Concordia University </a>| <a href="http://www.ecaccarrieres.com/index.php">Fran&ccedil;ais</a></div>
	<div id="menu_horizontal"><ul>
		<li><a href="../index_en.php">Home</a></li>
		<li><a href="http://www.ecaccarrieres.com/en/employers.php">Employers</a></li>
		<li class="visited" ><a href="candidates.php">Candidates </a></li>
		<li><a href="http://www.ecaccarrieres.com/en/useful_links.php">Useful Links</a></li>
		<li><a href="http://www.ecaccarrieres.com/en/contact.php">Contact us</a></li>
	</ul></div>
</div>

<div id="banner"><div id="830"><div id="zone_728">
<script type="text/javascript">
/*<![CDATA[*/
GA_googleFillSlot('top');
/*]]>*/
</script></div>
<div id="heure">Tuesday 13 December </div></div></div>

<div id="title">
  <p>Candidates &gt; Registration</p>
</div>

<div id="main" class="clearfix">
	<div id="col_employ">
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
			<img src="http://www.ecaccarrieres.com/img/bas_menu.gif" alt="Bas" width="185" height="18" />
		</div>
	</div>
	
	<div id="contenu_fr">
		<form enctype="multipart/form-data" name="dip_inscription" action="http://www.ecaccarrieres.com/en/candidates-conf-registration.php" method="post">
			<input type="hidden" name="origin" value="NEW_DIPLOME" />
			<input type="hidden" name="CARAC_MEMBRE" value="630" />
			<div id="couleurUn" class="clearfix">
				<span class="titrechamps">Name*</span>
				<input type="text" name="contact->LastName" value="" size="35" class="INPUT" />
			</div>
			<div id="couleurDeux" class="clearfix">
				<span class="titrechamps">First Name*</span>
				<input type="text" name="contact->FirstName" value="" size="35" class="INPUT" />
			</div>
			<div id="couleurUn" class="clearfix">
				<span class="titrechamps">Civility*</span>
				     <select name="person->Sex" size="1">
     <option value=>
     --Choisir--     </option>
     <option value=4>
     Mr.
     </option>
     <option value=3>
     Mr., Mrs
     </option>
     <option value=5>
     Mrs.
     </option>
     </select>
			</div>
			<div id="couleurDeux" class="clearfix">
				<span class="titrechamps">Diploma Completed*</span>
			</div>
			<div id="couleurDeux" class="clearfix">
				<table class="switch">
					             <td>
               <select multiple name="CARAC_DIPLOME_SOURCE" class="champ" size="10" style="width:180px;">
                 <option value=2>
                 Doctorat
                 </option>
                 <option value=3>
                 DESS/DESG
                 </option>
                 <option value=4>
                 Maîtrise
                 </option>
                 <option value=5>
                 Baccalauréat
                 </option>
                 <option value=6>
                 Certificat
                 </option>
                 <option value=7>
                 DEC
                 </option>
                 <option value=8>
                 CEC
                 </option>
                 <option value=9>
                 AEC
                 </option>
                 <option value=10>
                 DEP
                 </option>
                 <option value=11>
                 DES
                 </option>
                 <option value=12>
                 Études universitaires
                 </option>
                 <option value=13>
                 Études collégiales
                 </option>
               </select>
             </td>
             <td>
               <input name="CARAC_DIPLOME" id="CARAC_DIPLOME" type="hidden" value="">
               <input style="HEIGHT: 24px" type="button" onclick="LeftRightSelect_Ajout(this.form.CARAC_DIPLOME_SOURCE, this.form.CARAC_DIPLOME_DEST, this.form.CARAC_DIPLOME, 3)" value="--&gt;">
               <br>
               <input style="HEIGHT: 24px" type="button" onclick="LeftRightSelect_Supprime(this.form.CARAC_DIPLOME_DEST, this.form.CARAC_DIPLOME)" value="&lt;--">
             </td>
             <td>
               <select multiple name="CARAC_DIPLOME_DEST" class="champ" size="10" style="width:180px;">
               </select>
             </td>				</table>
			</div>
			<div id="couleurUn" class="clearfix">
				<span class="titrechampsun">Disciplines*</span>
			</div>
			<div id="couleurUn" class="clearfix">
				<table class="switch">
					             <td>
               <select multiple name="CARAC_DISCIPLINE_SOURCE" class="champ" size="10" style="width:180px;">
                 <option value=15>
                 Génie chimique
                 </option>
                 <option value=16>
                 Génie civil/rural
                 </option>
                 <option value=17>
                 Génie électrique
                 </option>
                 <option value=18>
                 Forest Engineering
                 </option>
                 <option value=19>
                 Génie industriel
                 </option>
                 <option value=20>
                 Génie informatique/télécom/électronique
                 </option>
                 <option value=21>
                 Génie mécanique
                 </option>
                 <option value=22>
                 Génie métallurgique/matériaux
                 </option>
                 <option value=23>
                 Génie minier
                 </option>
                 <option value=24>
                 Génie physique
                 </option>
                 <option value=25>
                 Industrial Automated Engineering
                 </option>
                 <option value=26>
                 Génie autre
                 </option>
                 <option value=27>
                 Project Management
                 </option>
                 <option value=28>
                 Gestion des achats
                 </option>
                 <option value=29>
                 Gestion des opérations de la production
                 </option>
                 <option value=30>
                 Gestion et assurance qualité
                 </option>
                 <option value=34>
                 Mathématiques
                 </option>
                 <option value=38>
                 Santé et Sécurité au travail
                 </option>
                 <option value=39>
                 Sciences de l'environnement
                 </option>
                 <option value=41>
                 Sciences économiques
                 </option>
                 <option value=42>
                 Science informatique
                 </option>
                 <option value=44>
                 Sciences de la nature
                 </option>
                 <option value=49>
                 Admiistration
                 </option>
                 <option value=52>
                 Chimie/Biochimie
                 </option>
                 <option value=57>
                 Éducation
                 </option>
                 <option value=74>
                 Procédés chimiques
                 </option>
                 <option value=75>
                 Automatisation industrielle
                 </option>
                 <option value=76>
                 Conduite de procédés biologiques et chimiques
                 </option>
                 <option value=77>
                 Procédés liés à l'environnement
                 </option>
                 <option value=354>
                 .Autre
                 </option>
                 <option value=361>
                 Microbiologie
                 </option>
                 <option value=363>
                 Plasturgie ou composites
                 </option>
                 <option value=364>
                 Conduite et réglage de machines à mouler
                 </option>
                 <option value=365>
                 Réglage de moules
                 </option>
                 <option value=366>
                 Transformation des matières plastiques
                 </option>
                 <option value=371>
                 Biologie
                 </option>
                 <option value=394>
                 Technique bureautique et réseautique
                 </option>
                 <option value=422>
                 Environnement
                 </option>
                 <option value=425>
                 Mécanique
                 </option>
                 <option value=546>
                 Génie biomédical
                 </option>
                 <option value=567>
                 Comptabilité
                 </option>
                 <option value=572>
                 Relations industrielles
                 </option>
                 <option value=573>
                 Ressources humaines
                 </option>
                 <option value=241273>
                 Aéronautics
                 </option>
                 <option value=241274>
                 Communications
                 </option>
                 <option value=241275>
                 Law
                 </option>
                 <option value=241276>
                 Ergonomics
                 </option>
                 <option value=241277>
                 Software Ergonomics
                 </option>
                 <option value=241278>
                 Aerospace Engineering
                 </option>
                 <option value=241279>
                 Geotechnical Engineering
                 </option>
                 <option value=241280>
                 Energy Engineering
                 </option>
                 <option value=241281>
                 Nuclear Engineering
                 </option>
                 <option value=241282>
                 Integrated Engineering
                 </option>
                 <option value=241283>
                 Construction Management
                 </option>
                 <option value=241284>
                 Marketing
                 </option>
                 <option value=241285>
                 Restoration of infrastructures
                 </option>
                 <option value=241286>
                 Sociale Science
                 </option>
                 <option value=241287>
                 Welding Technology
                 </option>
                 <option value=241301>
                 Construction Engineering
                 </option>
                 <option value=241302>
                 Geological/Mineral Engineering
                 </option>
               </select>
             </td>
             <td>
               <input name="CARAC_DISCIPLINE" id="CARAC_DISCIPLINE" type="hidden" value="">
               <input style="HEIGHT: 24px" type="button" onclick="LeftRightSelect_Ajout(this.form.CARAC_DISCIPLINE_SOURCE, this.form.CARAC_DISCIPLINE_DEST, this.form.CARAC_DISCIPLINE, 3)" value="--&gt;">
               <br>
               <input style="HEIGHT: 24px" type="button" onclick="LeftRightSelect_Supprime(this.form.CARAC_DISCIPLINE_DEST, this.form.CARAC_DISCIPLINE)" value="&lt;--">
             </td>
             <td>
               <select multiple name="CARAC_DISCIPLINE_DEST" class="champ" size="10" style="width:180px;">
               </select>
             </td>				</table>
			</div>
			<div id="couleurDeux" class="clearfix">
				<span class="titrechamps">Year of Graduation*</span>
				     <select name="CARAC_PROMOTION" size="1">
     <option value=>
     --Select--     </option>
     <option value=582>
     1970
     </option>
     <option value=583>
     1971
     </option>
     <option value=584>
     1972
     </option>
     <option value=585>
     1973
     </option>
     <option value=586>
     1974
     </option>
     <option value=587>
     1975
     </option>
     <option value=588>
     1976
     </option>
     <option value=589>
     1977
     </option>
     <option value=590>
     1978
     </option>
     <option value=591>
     1979
     </option>
     <option value=592>
     1980
     </option>
     <option value=593>
     1981
     </option>
     <option value=594>
     1982
     </option>
     <option value=595>
     1983
     </option>
     <option value=596>
     1984
     </option>
     <option value=597>
     1985
     </option>
     <option value=598>
     1986
     </option>
     <option value=599>
     1987
     </option>
     <option value=600>
     1988
     </option>
     <option value=601>
     1989
     </option>
     <option value=602>
     1990
     </option>
     <option value=603>
     1991
     </option>
     <option value=604>
     1992
     </option>
     <option value=605>
     1993
     </option>
     <option value=606>
     1994
     </option>
     <option value=607>
     1995
     </option>
     <option value=608>
     1996
     </option>
     <option value=609>
     1997
     </option>
     <option value=610>
     1998
     </option>
     <option value=611>
     1999
     </option>
     <option value=612>
     2000
     </option>
     <option value=613>
     2001
     </option>
     <option value=614>
     2002
     </option>
     <option value=615>
     2003
     </option>
     <option value=616>
     2004
     </option>
     <option value=617>
     2005
     </option>
     <option value=618>
     2006
     </option>
     <option value=619>
     2007
     </option>
     <option value=620>
     2008
     </option>
     <option value=621>
     2009
     </option>
     <option value=622>
     2010
     </option>
     <option value=649>
     2011
     </option>
     <option value=241311>
     2012
     </option>
     <option value=241263>
     1960
     </option>
     <option value=241264>
     1961
     </option>
     <option value=241265>
     1962
     </option>
     <option value=241266>
     1963
     </option>
     <option value=241267>
     1964
     </option>
     <option value=241268>
     1965
     </option>
     <option value=241269>
     1966
     </option>
     <option value=241270>
     1967
     </option>
     <option value=241271>
     1968
     </option>
     <option value=241272>
     1969
     </option>
     </select>
			</div>
			<div id="couleurUn" class="clearfix"><span class="titrechamps">E-mail*</span>
				<input type="text" name="OfficeEmail->Value" value="" size="35" class="INPUT" />
			</div>
			<div id="couleurDeux" class="clearfix">
				<span class="titrechamps">Phone*</span>
				<input type="text" name="OfficePhone->Value" size="35" class="INPUT" />
			</div>
			<div id="couleurUn" class="clearfix">
				<span class="titrechamps">My motivations</span>
				<textarea cols="27" rows="3" name="person->Motivations" id="person->Motivations" class="INPUT" onchange="textCounter(document.getElementById('person->Motivations'), 1500)"></textarea>
			</div>
			<div id="couleurDeux" class="clearfix">
				<span class="titrechamps">My career objectives</span>
				<textarea cols="27" rows="3" name="person->Objectives" id="person->Objectives" class="INPUT" onchange="textCounter(document.getElementById('person->Objectives'), 1500)"></textarea>
			</div>
			<div id="couleurUn" class="clearfix"> 
				<span class="titrechampsun">Professionals associations</span>
			</div>
			<div id="couleurUn" class="clearfix">
				<table class="switch">
					             <td>
               <select multiple name="CARAC_ORDRE_PROF_SOURCE" class="champ" size="10" style="width:180px;">
                 <option value=95>
                 M.B.A.
                 </option>
                 <option value=96>
                 O.C.Q.
                 </option>
                 <option value=97>
                 O.I.Q.
                 </option>
                 <option value=99>
                 Adm.A
                 </option>
                 <option value=101>
                 C.A.
                 </option>
                 <option value=102>
                 C.F.A.
                 </option>
                 <option value=103>
                 C.G.A.
                 </option>
                 <option value=104>
                 C.M.A.
                 </option>
                 <option value=105>
                 C.P.A.
                 </option>
                 <option value=109>
                 O.P.Q.
                 </option>
                 <option value=110>
                 O.T.P.Q.
                 </option>
                 <option value=554>
                 PMI (Project Management Institute)
                 </option>
                 <option value=571>
                 O.I.F.Q.
                 </option>
                 <option value=241288>
                 Bar Association
                 </option>
                 <option value=241289>
                 PL. FIN.
                 </option>
               </select>
             </td>
             <td>
               <input name="CARAC_ORDRE_PROF" id="CARAC_ORDRE_PROF" type="hidden" value="">
               <input style="HEIGHT: 24px" type="button" onclick="LeftRightSelect_Ajout(this.form.CARAC_ORDRE_PROF_SOURCE, this.form.CARAC_ORDRE_PROF_DEST, this.form.CARAC_ORDRE_PROF, 3)" value="--&gt;">
               <br>
               <input style="HEIGHT: 24px" type="button" onclick="LeftRightSelect_Supprime(this.form.CARAC_ORDRE_PROF_DEST, this.form.CARAC_ORDRE_PROF)" value="&lt;--">
             </td>
             <td>
               <select multiple name="CARAC_ORDRE_PROF_DEST" class="champ" size="10" style="width:180px;">
               </select>
             </td>				</table>
			</div>
			<div id="couleurDeux" class="clearfix"> 
				<span class="titrechampsun">Your mobility</span>
			</div>
			<div id="couleurDeux" class="clearfix">
				<table class="switch">
					             <td>
               <select multiple name="CARAC_LOCATION_SOURCE" class="champ" size="10" style="width:180px;">
                 <option value=79>
                 Côte-Nord
                 </option>
                 <option value=80>
                 Abitibi-Témiscamingue
                 </option>
                 <option value=81>
                 Outaouais
                 </option>
                 <option value=82>
                 Montérégie
                 </option>
                 <option value=83>
                 Laurentians
                 </option>
                 <option value=84>
                 Lanaudière
                 </option>
                 <option value=85>
                 Montreal
                 </option>
                 <option value=86>
                 Estrie
                 </option>
                 <option value=87>
                 Coeur du Québec
                 </option>
                 <option value=88>
                 Québec
                 </option>
                 <option value=89>
                 Saguenay/Lac St-Jean
                 </option>
                 <option value=90>
                 Bas St-Laurent
                 </option>
                 <option value=91>
                 Chaudières-Appalaches
                 </option>
                 <option value=92>
                 Gaspésie
                 </option>
                 <option value=323>
                 Laval
                 </option>
                 <option value=334>
                 International
                 </option>
                 <option value=335>
                 National
                 </option>
                 <option value=396>
                 Mauricie
                 </option>
                 <option value=566>
                 Baie James
                 </option>
                 <option value=570>
                 Montreal South Shore
                 </option>
                 <option value=576>
                 Valleyfield Region
                 </option>
                 <option value=577>
                 Everywhere in Quebec
                 </option>
                 <option value=578>
                 North Ontario
                 </option>
                 <option value=580>
                 Toronto
                 </option>
                 <option value=645>
                 North of Québec
                 </option>
                 <option value=646>
                 Northwest Territories
                 </option>
                 <option value=647>
                 Kingston
                 </option>
                 <option value=648>
                 Eastern Township
                 </option>
                 <option value=241261>
                 Canada-wide
                 </option>
               </select>
             </td>
             <td>
               <input name="CARAC_LOCATION" id="CARAC_LOCATION" type="hidden" value="">
               <input style="HEIGHT: 24px" type="button" onclick="LeftRightSelect_Ajout(this.form.CARAC_LOCATION_SOURCE, this.form.CARAC_LOCATION_DEST, this.form.CARAC_LOCATION, 3)" value="--&gt;">
               <br>
               <input style="HEIGHT: 24px" type="button" onclick="LeftRightSelect_Supprime(this.form.CARAC_LOCATION_DEST, this.form.CARAC_LOCATION)" value="&lt;--">
             </td>
             <td>
               <select multiple name="CARAC_LOCATION_DEST" class="champ" size="10" style="width:180px;">
               </select>
             </td>				</table>
			</div>
			<div id="couleurUn" class="clearfix"> 
				<span class="titrechampsdeux">
					Choose a maximum of five criterias for each 2 domains of expertise that describe your professionnal competencies.
				</span>
			</div>
			<div id="couleurUn" class="clearfix">
				<table class="switch">
					<tr>
						<td>
							Domain of expertise*
							<br />
							<select class="champ" name="CARAC_EXPERT_ROOT1" style="width:180px;" onchange="fillSelectFromArray(CARAC_EXPERT1, this.form.CARAC_EXPERT1_DEST, this.form.CARAC_EXPERT1_SOURCE, ((this.selectedIndex == -1) ? null : ExpertArray[this.selectedIndex-1]));"> 
								<option value= -1>--Choisir--</option>
								               <option value=121>
               Personnel de bureau
               </option>
               <option value=125>
               Comptabilité
               </option>
               <option value=205>
               Public relations
               </option>
               <option value=209>
               Ventes/Marketing
               </option>
               <option value=221>
               Informatique
               </option>
               <option value=231>
               Ressources humaines
               </option>
               <option value=307>
               Ingénierie
               </option>
               <option value=316>
               Chimie
               </option>
               <option value=459>
               Administration/Gestion
               </option>
               <option value=480>
               Droit
               </option>
							</select>
						</td>
						<td width="24">&nbsp;</td>
						<td>
							Domain of expertise
							<br />
							<select class="champ" name="CARAC_EXPERT_ROOT2" style="width:180px;" onchange="fillSelectFromArray(CARAC_EXPERT2, this.form.CARAC_EXPERT2_DEST, this.form.CARAC_EXPERT2_SOURCE, ((this.selectedIndex == -1) ? null : ExpertArray[this.selectedIndex-1]));"> 
								<option value= -1>--Choisir--</option>
								               <option value=121>
               Personnel de bureau
               </option>
               <option value=125>
               Comptabilité
               </option>
               <option value=205>
               Public relations
               </option>
               <option value=209>
               Ventes/Marketing
               </option>
               <option value=221>
               Informatique
               </option>
               <option value=231>
               Ressources humaines
               </option>
               <option value=307>
               Ingénierie
               </option>
               <option value=316>
               Chimie
               </option>
               <option value=459>
               Administration/Gestion
               </option>
               <option value=480>
               Droit
               </option>
							</select>
						</td>
					</tr>
					<tr>
						<td>
							Criteria
							<br />
							             <select multiple name="CARAC_EXPERT1_SOURCE" class="champ" size="5" style="width:180px;">
             </select>
						</td>
						<td width="24">&nbsp;</td>
						<td>
							Criteria
							<br />
							             <select multiple name="CARAC_EXPERT2_SOURCE" class="champ" size="5" style="width:180px;">
             </select>
						</td>
					</tr>
					<tr>
						<td align="center" valign="middle">
							           <input type="button" value="&#8595;" style="width:24px;height:24px;" onClick="LeftRightSelect_Ajout(this.form.CARAC_EXPERT1_SOURCE, this.form.CARAC_EXPERT1_DEST, this.form.CARAC_EXPERT1, 5)">
           <input type="button" value="&#8593;" style="width:24px;height:24px;" onclick="LeftRightSelect_Supprime(this.form.CARAC_EXPERT1_DEST, this.form.CARAC_EXPERT1)">
						</td>
						<td width="24">&nbsp;</td>
						<td align="center" valign="middle"> 
							           <input type="button" value="&#8595;" style="width:24px;height:24px;" onClick="LeftRightSelect_Ajout(this.form.CARAC_EXPERT2_SOURCE, this.form.CARAC_EXPERT2_DEST, this.form.CARAC_EXPERT2, 5)">
           <input type="button" value="&#8593;" style="width:24px;height:24px;" onclick="LeftRightSelect_Supprime(this.form.CARAC_EXPERT2_DEST, this.form.CARAC_EXPERT2)">
						</td>
					</tr>
					<tr>
						<td>
							           <select multiple name="CARAC_EXPERT1_DEST" class="champ" size="5" style="width:180px;">
           </select>
               <input name="CARAC_EXPERT1" id="CARAC_EXPERT1" type="hidden" value="">
						</td>
						<td width="24">&nbsp;</td>
						<td>
							           <select multiple name="CARAC_EXPERT2_DEST" class="champ" size="5" style="width:180px;">
           </select>
               <input name="CARAC_EXPERT2" id="CARAC_EXPERT2" type="hidden" value="">
						</td>
					</tr>
				</table>
			</div>
			<div id="couleurDeux" class="clearfix">
				<span class="titrechamps">
					Years of relevant experience*
				</span>
				     <select name="CARAC_EXPER_CANADA" size="1">
     <option value=>
     --Select--     </option>
     <option value=112>
     0-1
     </option>
     <option value=113>
     1-3
     </option>
     <option value=114>
     3-5
     </option>
     <option value=115>
     5-10
     </option>
     <option value=116>
     10-15
     </option>
     <option value=117>
     15-20
     </option>
     <option value=241262>
     20 +
     </option>
     </select>
			</div>
			<div id="couleurUn" class="clearfix">
				<span class="titrechamps">
					Level of responsability*
				</span>
				     <select name="CARAC_RESPONSABILITE" size="1">
     <option value=>
     --Select--     </option>
     <option value=349>
     Technicien
     </option>
     <option value=456>
     Cadre intermédiaire
     </option>
     <option value=457>
     Cadre supérieur
     </option>
     <option value=458>
     Superviseur
     </option>
     <option value=569>
     Commis
     </option>
     <option value=643>
     Professional
     </option>
     </select>
			</div>
			<div id="couleurDeux" class="clearfix">
				<span class="titrechamps">
					Size of your actual employers
				</span>
				     <select name="CARAC_TAILLE_ENTREPISE" size="1">
     <option value=>
     --Select--     </option>
     <option value=548>
     0 à 19 employés
     </option>
     <option value=549>
     20 à 49 employés
     </option>
     <option value=550>
     50 à 199 employés
     </option>
     <option value=551>
     200 à 499 employés
     </option>
     <option value=552>
     500 et plus
     </option>
     </select>
			</div>
			<div id="couleurUn" class="clearfix">
				<span class="titrechamps">
					Resume (format <b>.doc</b>, <b>.pdf</b> or <b>.rtf</b>)*
				</span>
				<input type="file" name="cv" value="" size="20" class="champ" />
			</div>
			<div id="couleurDeux" class="clearfix">
				<input type="checkbox" name="person->JobNotify" value="1" checked="checked" />
				Job Alert&nbsp;&nbsp;Format:&nbsp;Text
				<input type=radio name="person->JobNotifyFormat" value="0" />
				&nbsp;HTML
				<input type=radio name="person->JobNotifyFormat" value="1" checked="checked" />
			</div>
			<div id="couleurUn" class="clearfix">
				<span class="titrechamps">Choose a User Code*</span>
				<input type="text" name="user->UserName" value="" size="35" class="INPUT" />
			</div>
			<div id="couleurDeux" class="clearfix">
				<span class="titrechamps">Choose a Password*</span>
				<input type="password" name="user->Password" value="" size="35" class="INPUT" />
			</div>
			<div id="couleurUn" class="clearfix">
				<span class="titrechamps">Type Password again*</span>
				<input type="password" name="pw2" value="" size="35" class="INPUT" />
			</div>
			<div align="center" id="bouton"><a href="http://www.ecaccarrieres.com/en/candidates-registration.php#" onclick="ValidateData(); return false;">OK</a></div>
		</form>
		<div><p>*Mandatory</p></div>	</div>
	<!-- fin contenu fr-->
	
	<div id="sky"><div class="banner_sky">
<script type="text/javascript">
/*<![CDATA[*/
GA_googleFillSlot('sky');
/*]]>*/
</script></div>
</div>
	<div id="footer"><a href="confidentiality_policy.php" class="footer_lien">Confidentiality Policy</a> - Copyright &copy; ECAC Careers</div>
</div>
</body>
</html>                                                                                                             