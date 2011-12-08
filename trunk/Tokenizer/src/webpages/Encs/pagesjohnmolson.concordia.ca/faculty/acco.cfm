<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-gb" lang="en-gb" >
<head>
	  <base />
  <meta http-equiv="content-type" content="text/html; charset=utf-8" />
  <meta name="robots" content="index, follow" />
  <meta name="keywords" content="John Molson Accountancy Department, accountancy, accounting department, accredited accounting department, accredited accountancy programs, accounting research, research in accountancy, accounting professor, accounting teacher" />
  <meta name="title" content="Accountancy" />
  <meta name="author" content="Anna Gunaratnam" />
  <meta name="description" content="Welcome to the John Molson School of Business (JMSB) Department of Accountancy. Our accounting department is one of the largest in the country, with nearly 30 full-time faculty members and exceptional programs at both the undergraduate and graduate levels" />
  <meta name="generator" content="Joomla! 1.5 - Open Source Content Management" />
  <title>Accountancy</title>
  <link href="http://johnmolson.concordia.ca/templates/jmsb_joomla_template/favicon.ico" rel="shortcut icon" type="image/x-icon" />
  <link rel="stylesheet" href="http://johnmolson.concordia.ca/plugins/system/jceutilities/css/jceutilities-160.css" type="text/css" />
  <link rel="stylesheet" href="http://johnmolson.concordia.ca/media/system/css/modal.css" type="text/css" />
  <script type="text/javascript" src="http://johnmolson.concordia.ca/plugins/system/jceutilities/js/jquery-123.js"></script>
  <script type="text/javascript" src="http://johnmolson.concordia.ca/plugins/system/jceutilities/js/jceutilities-160.js"></script>
  <script type="text/javascript" src="http://johnmolson.concordia.ca/plugins/system/jceutilities/js/embed.js"></script>
  <script type="text/javascript" src="http://johnmolson.concordia.ca/media/system/js/mootools.js"></script>
  <script type="text/javascript" src="http://johnmolson.concordia.ca/media/system/js/caption.js"></script>
  <script type="text/javascript" src="http://johnmolson.concordia.ca/components/com_jcalpro/lib/shajax.js"></script>
  <script type="text/javascript" src="http://johnmolson.concordia.ca/media/system/js/modal.js"></script>
  <script type="text/javascript">
	var jcexhtmlembed=1;jQuery(document).ready(function(){jceutilities({'lightbox':{'legacy':0,'convert':0,'resize':1,'icons':0,'overlay':1,'overlayopacity':0.8,'overlaycolor':"#000000",'fadespeed':500,'scalespeed':500},'tootlip':{'classname':"tooltip",'opacity':1,'speed':150,'position':"br",'offsets':"{'x': 16, 'y': 16}"},'imgpath':"plugins/system/jceutilities/img/",'pngfix':0});});/* default values for unobtrusive ajax function of shajax */
<!--/*--><![CDATA[//><!--
shajax.shajaxProgressImage = '<img src="http://johnmolson.concordia.ca/components/com_jcalpro/images/ajax-loader.gif" border="0"  alt="progress" style="vertical-align: middle" hspace="2"/>';
shajax.shajaxLiveSiteUrl = 'http://johnmolson.concordia.ca/';
//--><!]]>
<!--
/*
 **********************************************
 Copyright (c) 2006-2009 Anything-Digital.com
 **********************************************
 This program is free software; you can redistribute it and/or modify
 it under the terms of the GNU General Public License as published by
 the Free Software Foundation; either version 2 of the License, or
 (at your option) any later version.
 This header must not be removed. Additional contributions/changes
 may be added to this header as long as no information is deleted.
 **********************************************
 $Id: template.js 312 2009-06-01 18:19:26Z shumisha $
 */

document.imageArray = new Array(10);
preloadImage(0, 'http://johnmolson.concordia.ca/components/com_jcalpro/themes/default/images/addsign.gif',
  'http://johnmolson.concordia.ca/components/com_jcalpro/themes/default/images/addsign_a.gif');

function preloadImage() {
  var args = preloadImage.arguments;
  document.imageArray[args[0]] = new Array(args.length - 1);

  for ( var i = 1; i < args.length; i++) {
    document.imageArray[args[0]][i - 1] = new Image;
    document.imageArray[args[0]][i - 1].src = args[i];
  }
}

function showOnBar(Str) {
  window.status = Str;
  return true;
}

function cOn(myObject, color) {
  if (document.getElementById || (document.all && !(document.getElementById))) {
    if (!color)
      color = "#6187E5"

    myObject.style.backgroundColor = color;
  }
}

function cOut(myObject, color) {
  if (document.getElementById || (document.all && !(document.getElementById))) {
    if (!color)
      color = "#5177C5"

    myObject.style.backgroundColor = color;
  }
}

function cal_switchImage(imgName, imgSrc) {
  if (document.images) {
    if (imgSrc != "none") {
      document.images[imgName].src = imgSrc;
    }
  }
}

function verify(msg) {
  if (!msg)
    msg = "Are you absolutely sure that you want to delete this item?";

  // all we have to do is return the return value of the confirm() method
  return confirm(msg);
}

function jclGetElement(psID) {
  if (document.all) {
    return document.all[psID];
  }

  else if (document.getElementById) {
    return document.getElementById(psID);
  }

  else {
    for (iLayer = 1; iLayer < document.layers.length; iLayer++) {
      if (document.layers[iLayer].id == psID)
        return document.layers[iLayer];
    }
  }

  return Null;
}

/*
 * returns a cookie variable with the given name.
 */
function jclGetCookie(name) {
  var dc = document.cookie;
  var prefix = extcal_cookie_id + '_' + name + "=";
  var begin = dc.indexOf("; " + prefix);

  if (begin == -1) {
    begin = dc.indexOf(prefix);

    if (begin != 0)
      return null;
  }

  else {
    begin += 2;
  }

  var end = document.cookie.indexOf(";", begin);

  if (end == -1) {
    end = dc.length;
  }

  return unescape(dc.substring(begin + prefix.length, end));
}

/*
 * Sets a Cookie with the given name and value.
 */
function jclSetCookie(name, value, persistent) {
  var today = new Date();
  var expiry = new Date(today.getTime() + 364 * 24 * 60 * 60 * 1000); // 364
  // days
  var expires = "";
  var domain = extcal_cookie_domain;
  var path = extcal_cookie_path;
  var secure = false;
  var prefix = extcal_cookie_id + '_' + name + "=";

  if (persistent) {
    expires = "; expires = " + expiry.toGMTString();
  }

  document.cookie = prefix + escape(value) + ((expires) ? expires : "")
  + ((path) ? "; path=" + path : "")
  + ((domain) ? "; domain=" + domain : "")
  + ((secure) ? "; secure" : "") + ';';
}

// ==========================================
// Set DIV ID to hide
// ==========================================

function jcl_hide_div(itm) {
  if (!itm)
    return;

  itm.style.display = "none";
}

// ==========================================
// Set DIV ID to show
// ==========================================

function jcl_show_div(itm) {
  if (!itm)
    return;

  itm.style.display = "";
}

// ==========================================
// Toggle category
// ==========================================

function togglecategory(fid, add) {
  saved = new Array();
  clean = new Array();

  // ==========================================
  // Get any saved info
  // ==========================================

  if (tmp = jclGetCookie('collapseprefs')) {
    saved = tmp.split(",");
  }

  // ==========================================
  // Remove bit if exists
  // ==========================================

  for (i = 0; i < saved.length; i++) {
    if (saved[i] != fid && saved[i] != "") {
      clean[clean.length] = saved[i];
    }
  }

  // ==========================================
  // Add?
  // ==========================================

  if (add) {
    clean[clean.length] = fid;
    jcl_show_div(jclGetElement(fid + '_close'));
    jcl_hide_div(jclGetElement(fid + '_open'));
  }

  else {
    jcl_show_div(jclGetElement(fid + '_open'));
    jcl_hide_div(jclGetElement(fid + '_close'));
  }

  jclSetCookie('hidden_display', clean.join(','), 1);
}

// sets dynamically the content of a given html tag id
function jclSetText(id, value) {
  var label = jclGetElement(id);
  label.firstChild.nodeValue = value;
}

//sets dynamically the content of an element
function jclSetChecked(id, value) {
  var element = jclGetElement(id);
  element.checked = value;
}

// shows recurrence options div, hiding all others
function jclShowRecOptions(id) {
  var divs = new Array('jcl_rec_none_options', 'jcl_rec_daily_options',
    'jcl_rec_weekly_options', 'jcl_rec_monthly_options',
    'jcl_rec_yearly_options');
  var target = '';
  if (id) {
    target = 'jcl_rec_' + id + '_options';
  }
  for (i = 0; i < divs.length; i++) {
    if (divs[i] == target) {
      jcl_show_div(jclGetElement(divs[i]));
    } else {
      jcl_hide_div(jclGetElement(divs[i]));
    }
  }
}

function printDocument() {
  self.focus();
  self.print();
}

       var recurEventMsg = "This event is set to repeat";
       var noRecurEventMsg = "This event does not repeat";

       // cookie variables
       var extcal_cookie_id = "jcalpro1";
       var extcal_cookie_path = "/";
      var extcal_cookie_domain = "";

      
//-->
		window.addEvent('domready', function() {

			SqueezeBox.initialize({ size: { x: 600, y: 600}});

			$$('a.jcal_modal').each(function(el) {
				el.addEvent('click', function(e) {
					new Event(e).stop();
					SqueezeBox.fromElement(el);
				});
			});
		});
  </script>
  <link href="http://johnmolson.concordia.ca/en/component/jlord_rss/feed/2" rel="alternate" type="application/rss+xml" title="Subscribe to JMSB News" />
  <link href="http://johnmolson.concordia.ca/components/com_jcalpro/themes/default/style.css" rel="stylesheet" type="text/css" />
  <!--[if IE 6]><link href='http://johnmolson.concordia.ca/components/com_jcalpro/themes/default/styleie6.css' rel='stylesheet' type='text/css' /><![endif]-->
  <!--[if IE 7]><link href='http://johnmolson.concordia.ca/components/com_jcalpro/themes/default/styleie7.css' rel='stylesheet' type='text/css' /><![endif]-->

	<meta name="verify-v1" content="xbZEsKJGjPvh1dGVfdEDhzCtz+hR8kpyP0kcqJHA6QY=" />
	<link rel="stylesheet" href="http://johnmolson.concordia.ca/templates/system/css/system.css" type="text/css" />
	<link rel="stylesheet" href="http://johnmolson.concordia.ca/templates/system/css/general.css" type="text/css" />
	<link rel="stylesheet" href="http://johnmolson.concordia.ca/templates/jmsb_joomla_template/css/default.css" type="text/css" />
	<link rel="stylesheet" href="http://johnmolson.concordia.ca/templates/jmsb_joomla_template/css/content_elements.css" type="text/css" />
	<link rel="stylesheet" href="http://johnmolson.concordia.ca/templates/jmsb_joomla_template/css/main_layout.css" type="text/css" />
	<link rel="stylesheet" href="http://johnmolson.concordia.ca/templates/jmsb_joomla_template/css/template.css" type="text/css" />
	<link rel="stylesheet" href="http://johnmolson.concordia.ca/templates/jmsb_joomla_template/css/header.css" type="text/css" />
	<link rel="stylesheet" href="http://johnmolson.concordia.ca/templates/jmsb_joomla_template/css/menu_level1.css" type="text/css" />
	<link rel="stylesheet" href="http://johnmolson.concordia.ca/templates/jmsb_joomla_template/css/menu_level2.css" type="text/css" />
	<link rel="stylesheet" href="http://johnmolson.concordia.ca/templates/jmsb_joomla_template/css/menu_level3_and_lower.css" type="text/css" />
	<link rel="stylesheet" href="http://johnmolson.concordia.ca/templates/jmsb_joomla_template/css/footer.css" type="text/css" />
	<link rel="stylesheet" href="http://globalmk.concordia.ca/style.php?owner=jmsb&mod=search" type="text/css" media="all" />
	
	<!--<script type="text/javascript" src="/templates/jmsb_joomla_template/js/prototype.lite.js" charset="UTF-8"></script>
	<script type="text/javascript" src="/templates/jmsb_joomla_template/js/moo.fx.js" charset="UTF-8"></script>
	<script type="text/javascript" src="/templates/jmsb_joomla_template/js/litebox-1.0.js" charset="UTF-8"></script>-->
        <script type="text/javascript" src="http://johnmolson.concordia.ca/templates/jmsb_joomla_template/js/styleswitcher.js" charset="UTF-8"></script>
        <script type="text/javascript" src="http://globalmk.concordia.ca/js.php?owner=jmsb&mod=search"></script>

        <script type="text/javascript">
          var _gaq = _gaq || [];
         _gaq.push(
             ['_setAccount', 'UA-3240406-1'],
             ['_trackPageview'],
             ['b._setAccount', 'UA-2729211-1'],
             ['b._trackPageview']
         );
        </script>
        <script type="text/javascript">
(function() {
  var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
  ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
  var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
 })();
</script>
<script type="text/javascript" src="http://johnmolson.concordia.ca/templates/jmsb_joomla_template/js/gaAddons.js"></script>
        <script src="http://assets.percentmobile.com/percent_mobile.js" type="text/javascript" charset="utf-8"></script>
</head>

<!--<body onload="initLightbox()">-->
<body>
<script type="text/javascript">js_init();</script>
<a name="globaltools"></a>

<div id="globalToolContainers">
<div id="globaltools">
<div class="linktools"><a href="../../pageswww.concordia.ca/index.html" accesskey="cu">Concordia University</a><img src="http://johnmolson.concordia.ca/images/stories/general_imgs/globaltoolbar_arrow_white.gif" alt="globaltoolbar_arrow_white.gif" title="globaltoolbar_arrow_white.gif" height="6" width="6" /><a href="http://johnmolson.concordia.ca/index.php" accesskey="h">John Molson School of Business</a></div>
<div class="textsizetools"><a title="MyConcordia Portal" href="https://www.myconcordia.ca/">MyConcordia</a> | <a title="Contact us | Concordia University Directory" href="../../pageswww.concordia.ca/about/contact/index.html">Contact us</a> | <a title="Concordia Campus Maps - MB building" href="../../pageswww.concordia.ca/about/contact/campus-map/_markers_maps_markers.php_referer_www.concordia.ca_api_maps.canvas_centermap_MB">Maps</a> | <a title="Concordia Shuttle bus schedule" href="http://www.concordia.ca/about/contact/campus-map/shuttle-bus-schedule">Shuttle</a> |  <!--<a href="#content" mce_href="#content"  accesskey="s">Skip to Content</a>--> Text-Size: <a href="http://johnmolson.concordia.ca/index.php" onclick="changeFontSize(1);return false;" title="Increase Text Size" class="resizeicon">A+</a> <a href="http://johnmolson.concordia.ca/index.php" onclick="changeFontSize(-1);return false;" title="Decrease Text Size" class="resizeicon">A-</a> <a href="http://johnmolson.concordia.ca/index.php" onclick="revertStyles(); return false;" title="Revert text styles to default" class="resizeicon">R</a></div>
</div>
</div>

<div id="lwrap">
<div id="rwrap">
<div id="container">

	<div id="top">
		<div id="logo"><div class="toplogo"><ul><li><a href="http://johnmolson.concordia.ca/index.php" title="John Molson School of Business" alt="John Molson School of Business" accesskey="1">&nbsp;</a></li></ul></div></div>
		<div id="searchContainer">
						<div id="conuni_top_searchpanel">
<ul class="search-tabs">
<li><a class="s" id="thissite" href="http://johnmolson.concordia.ca/faculty-research/departments/accountancy#"><span style="font-size: 12px;">JMSB</span></a></li>
<li><a class="m" id="entire" href="http://johnmolson.concordia.ca/faculty-research/departments/accountancy#"><span style="font-size: 12px;">All of Concordia</span></a></li>
<li><a class="s" id="directory" href="http://johnmolson.concordia.ca/faculty-research/departments/accountancy#"><span style="font-size: 12px;">Staff &amp; Faculty Directory</span></a></li>
</ul>
<!-- tab "panes" -->
<div class="search-panes"><form method="post" action="http://johnmolson.concordia.ca/faculty-research/departments/accountancy#" id="conuni_search" name="conuni_search"> <input class="search_field" id="query" name="query" type="text" /> <input value="Search" class="search_button" id="conuni_search" name="conuni_search" type="submit" /> </form></div>
</div>
		</div>
				<div id="pillmenu">
				<ul  id="mainlevel"><li><a href="http://johnmolson.concordia.ca/en/about" class="mainlevel">About</a></li></ul><ul  id="mainlevel"><li><a href="http://johnmolson.concordia.ca/en/undergrad" class="mainlevel">Undergraduate Programs</a></li></ul><ul  id="mainlevel"><li><a href="http://johnmolson.concordia.ca/en/graduate-programs" class="mainlevel">Graduate Programs</a></li></ul><ul  id="mainlevel"><li><a href="http://johnmolson.concordia.ca/en/career-services" class="mainlevel">Career Services</a></li></ul><ul  id="mainlevel"><li><a href="http://johnmolson.concordia.ca/en/faculty-research" class="mainlevel_active">Faculty & Research</a><ul ><li><a href="http://johnmolson.concordia.ca/en/faculty-research/departments" class="sublevel_active">Departments</a><ul ><li><a href="http://johnmolson.concordia.ca/en/faculty-research/departments/accountancy" class="sublevel_current" id="active_menu">Accountancy</a></li><li><a href="http://johnmolson.concordia.ca/en/faculty-research/departments/finance" class="sublevel">Finance</a></li><li><a href="http://johnmolson.concordia.ca/en/faculty-research/departments/management" class="sublevel">Management</a></li><li><a href="http://johnmolson.concordia.ca/en/faculty-research/departments/marketing" class="sublevel">Marketing</a></li><li><a href="http://johnmolson.concordia.ca/en/faculty-research/departments/decision-science-mis" class="sublevel">Decision Sciences & MIS</a></li></ul></li><li><a href="http://johnmolson.concordia.ca/en/faculty-research/research-centres" class="sublevel">Research Centres</a></li><li><a href="http://johnmolson.concordia.ca/en/faculty-research/research-chairs-a-professorships" class="sublevel">Research Chairs & Professorships</a></li><li><a href="http://johnmolson.concordia.ca/en/faculty-research/funding-information" class="sublevel">Funding Information</a></li><li><a href="http://johnmolson.concordia.ca/en/faculty-research/it-resources" class="sublevel">IT Resources</a></li><li><a href="http://johnmolson.concordia.ca/en/faculty-research/profiles" class="sublevel">Profiles</a></li></ul></li></ul><ul  id="mainlevel"><li><a href="http://johnmolson.concordia.ca/en/executive-education" class="mainlevel">Executive Education</a></li></ul><ul  id="mainlevel"><li><a href="http://johnmolson.concordia.ca/en/community-a-alumni" class="mainlevel">Community & Alumni</a></li></ul><ul  id="mainlevel"><li><a href="http://johnmolson.concordia.ca/en/news-events" class="mainlevel">News & Events</a></li></ul>
		</div>
					<div id="pillmenu2">
				<ul  id="mainlevel"><li><a href="http://johnmolson.concordia.ca/en/faculty-research/departments" class="mainlevel_active">Departments</a><ul ><li><a href="http://johnmolson.concordia.ca/en/faculty-research/departments/accountancy" class="sublevel_current" id="active_menu">Accountancy</a><ul ><li><a href="http://johnmolson.concordia.ca/en/faculty-research/departments/accountancy/position-announcements" class="sublevel">Position Announcements</a></li></ul></li><li><a href="http://johnmolson.concordia.ca/en/faculty-research/departments/finance" class="sublevel">Finance</a></li><li><a href="http://johnmolson.concordia.ca/en/faculty-research/departments/management" class="sublevel">Management</a></li><li><a href="http://johnmolson.concordia.ca/en/faculty-research/departments/marketing" class="sublevel">Marketing</a></li><li><a href="http://johnmolson.concordia.ca/en/faculty-research/departments/decision-science-mis" class="sublevel">Decision Sciences & MIS</a></li></ul></li><li><a href="http://johnmolson.concordia.ca/en/faculty-research/research-centres" class="mainlevel">Research Centres</a></li><li><a href="http://johnmolson.concordia.ca/en/faculty-research/research-chairs-a-professorships" class="mainlevel">Research Chairs & Professorships</a></li><li><a href="http://johnmolson.concordia.ca/en/faculty-research/funding-information" class="mainlevel">Funding Information</a></li><li><a href="http://johnmolson.concordia.ca/en/faculty-research/it-resources" class="mainlevel">IT Resources</a></li><li><a href="http://johnmolson.concordia.ca/en/faculty-research/profiles" class="mainlevel">Profiles</a></li></ul>
			</div>
			</div>

	<div style="clear: both; height: 2px;">&nbsp;</div>

										<div id="bodyContainer">
				<div id="leftMenuContainer">
					<div id="leftnav">
								<div class="module">
			<div>
				<div>
					<div>
											<ul  id="mainlevel"><li class="mainlevel_current"><a href="http://johnmolson.concordia.ca/en/faculty-research/departments/accountancy" class="mainlevel_current" id="active_menu">Accountancy</a><ul ><li class="sublevel"><a href="http://johnmolson.concordia.ca/en/faculty-research/departments/accountancy/position-announcements" class="sublevel">Position Announcements</a></li></ul></li><li class="mainlevel"><a href="http://johnmolson.concordia.ca/en/faculty-research/departments/finance" class="mainlevel">Finance</a></li><li class="mainlevel"><a href="http://johnmolson.concordia.ca/en/faculty-research/departments/management" class="mainlevel">Management</a></li><li class="mainlevel"><a href="http://johnmolson.concordia.ca/en/faculty-research/departments/marketing" class="mainlevel">Marketing</a></li><li class="mainlevel"><a href="http://johnmolson.concordia.ca/en/faculty-research/departments/decision-science-mis" class="mainlevel">Decision Sciences & MIS</a></li></ul>					</div>
				</div>
			</div>
		</div>
			<div class="module_menu">
			<div>
				<div>
					<div>
																</div>
				</div>
			</div>
		</div>
	
					</div>
				</div>

				<div id="mainBodyContainer_with_leftContainer">
<div class="addthis_toolbox addthis_default_style " style="float: right">
        <a href="http://www.addthis.com/bookmark.php?v=250&pubid=ra-4dc481a85646a144" class="addthis_button_compact">Share</a>
        <span class="addthis_separator">|</span>
		<a class="addthis_button_facebook" style="cursor:pointer"></a>
		<a class="addthis_button_twitter" style="cursor:pointer"></a>
		<a class="addthis_button_email" style="cursor:pointer"></a>
		<a class="addthis_button_print" style="cursor:pointer">&nbsp;Print</a>
        </div>
											<div id="pathway">
							<span class="breadcrumbs pathway">
<a href="../" class="pathway">Home</a> <img src="http://johnmolson.concordia.ca/templates/jmsb_joomla_template/images/arrow.png" alt="" /> <a href="http://johnmolson.concordia.ca/en/faculty-research" class="pathway">Faculty &amp; Research</a> <img src="http://johnmolson.concordia.ca/templates/jmsb_joomla_template/images/arrow.png" alt="" /> <a href="http://johnmolson.concordia.ca/en/faculty-research/departments" class="pathway">Departments</a> <img src="http://johnmolson.concordia.ca/templates/jmsb_joomla_template/images/arrow.png" alt="" /> </span>

						</div>
										<a name="content"></a>
										<div class="contentpaneopen">
	
		
		
		<h1>			Accountancy				</h1>
		
		
	<div style="text-align: right; margin-top: -15px;border-bottom: 1px solid #ccc;margin-bottom:10px; width: 100%;">
					
		
							</div>
</div>




<div class="contentpaneopen">
</div>



<div>
<div class="mainContainer">
<p><a name="top"></a><a href="http://johnmolson.concordia.ca/faculty-research/departments/accountancy#mission" title="Mission Statement">Mission Statement</a> | <a href="http://johnmolson.concordia.ca/faculty-research/departments/accountancy#faculty" title="Faculty Listings">Faculty Listings</a> | <a href="http://johnmolson.concordia.ca/en/faculty-research/departments/accountancy/875-positions-announcement" title="Positions Announcement">Position Announcements</a></p>
<hr />
<p><br />Welcome to the John Molson School of Business (JMSB) Department of Accountancy. The JMSB is ranked as one of the top international business schools in the world. As the first business school in Montreal to be accredited by the Association to Advance Collegiate Schools of Business (AACSB), we offer an outstanding curriculum and a world-class faculty. Our program is further enriched by our departmentâ¬"s widely recognized excellence in academic research.</p>
<p><br />Our accounting department is one of the largest in the country, with nearly 30 full-time faculty members and exceptional programs at both the undergraduate and graduate levels.</p>
<table class="gridded_table" border="0" cellpadding="0" cellspacing="0">
<tbody>
<tr>
<th>Undergraduate Programs</th><th>Graduate Programs</th>
</tr>
<tr>
<td><a href="http://johnmolson.concordia.ca/en/undergrad/bachelor-degrees" title="BComm">BComm</a></td>
<td><a href="http://johnmolson.concordia.ca/en/graduate-programs/ca-program" title="Graduate Diploma in Chartered Accountancy">Graduate Diploma in Chartered Accountancy</a></td>
</tr>
<tr>
<td><a href="http://johnmolson.concordia.ca/en/undergrad/bachelor-degrees" title="BAdmin">BAdmin</a></td>
<td><a href="http://johnmolson.concordia.ca/en/graduate-programs/cma-program" title="Graduate Certificate in Management Accounting Program">Graduate Certificate in Management Accounting Program</a></td>
</tr>
<tr>
<td><a href="http://johnmolson.concordia.ca/en/undergrad/business-certificates/certificates-in-accountancy" title="Certificate in Accountancy">Certificate in Accountancy</a></td>
<td>
<p><a href="http://johnmolson.concordia.ca/en/graduate-programs/mba-program" title="John Molson MBA Program">John Molson MBA Program</a> <br />(with various options, including an Executive MBA)</p>
</td>
</tr>
<tr>
<td><a href="http://johnmolson.concordia.ca/en/undergrad/co-op-education/accountancy" title="Co-op Program in Accountancy">Co-op Program in Accountancy</a></td>
<td><a href="http://johnmolson.concordia.ca/en/graduate-programs/phd-program" title="PhD Program">PhD Program</a></td>
</tr>
</tbody>
</table>
<br />The department is located on the downtown campus of Concordia University, in beautiful Montreal, Quebec, Canada. We invite you to explore our website to find out more about becoming a student here or about exciting career opportunities in our department<br /><br />The John Molson School of Business is proud to announce that the CMA (Certified Management Accountants) Canada National Board of Directors has awarded our Bachelor of Commerce (Major in Accountancy) Program full accreditation. This means that our B. Comm students (Major in Accountancy) with a graduating GPA of 3.2 (out of 4.3) are to be exempt from writing the CMA Canada entrance exam should they wish to pursue the CMA designation. This is very positive news for JMSB and affirmation of the quality of our programs.<br />
<h3><a name="mission"></a>Mission Statement</h3>
<p>The Department of Accountancy is committed to remaining a national leader in accounting education through teaching, research and service.</p>
<p><br /><strong>Teaching: </strong>Providing a first-rate educational experience that prepares a diverse population of students for successful careers.<br /><b><br />Research:</b> Creating and disseminating knowledge of accounting-related issues through reputable channels.<br /><b><br />Service:</b> Providing expertise that enhances the well-being of the university, the accounting profession and society in general.</p>
<p><br /><a href="http://johnmolson.concordia.ca/faculty-research/departments/accountancy#top" title="Back to top">Back to top Î<br /><br /></a></p>
<h3><a name="faculty"></a>Chair and Associate Professor</h3>
<a href="http://johnmolson.concordia.ca/en/faculty-research/profiles/1966-majidul-islam" title="Majidul Islam">Islam, Majidul</a>
<h3>Professors</h3>
<div class="content_max_width"><a href="http://johnmolson.concordia.ca/en/faculty-research/departments/accountancy/925-department-accountancy?last=kim&first=jeong-bon" title="Kim, Jeong-Bon"></a><a href="http://johnmolson.concordia.ca/en/faculty-research/departments/accountancy/925-department-accountancy?last=magnan&first=michel" title="Magnan, Michel">Magnan, Michel</a></div>
<div class="content_max_width"><a href="http://johnmolson.concordia.ca/en/faculty-research/departments/accountancy/925-department-accountancy?last=kapoor&first=rai">Kapoor, Rai</a></div>
<h3>Associate Professors</h3>
<a href="http://johnmolson.concordia.ca/en/faculty-research/departments/accountancy/925-department-accountancy?last=aly&first=ibrahim" title="Aly, Ibrahim M.">Aly, Ibrahim M.</a> <br /><a href="http://johnmolson.concordia.ca/en/faculty-research/departments/accountancy/925-department-accountancy?last=bouilanne&first=emilio" title="Boulianne, Emilio">Boulianne, Emilio</a> <br /><a href="http://johnmolson.concordia.ca/en/faculty-research/departments/accountancy/925-department-accountancy?last=cho&first=charles">Cho, Charles H.</a> (On leave from 06/01/2011 to 05/31/2012)<br /><a href="http://johnmolson.concordia.ca/en/faculty-research/departments/accountancy/925-department-accountancy?last=draimin&first=charles" title="Draimin, Charles">Draimin, Charles</a> (On sabbatical from 01/01/2012 to 06/30/2012)<br /><a href="http://johnmolson.concordia.ca/en/faculty-research/departments/accountancy/925-department-accountancy?last=gheyara&first=kelly" title="Gheyara, Kelly F.">Gheyara, Kelly F.</a> <br /><a href="http://johnmolson.concordia.ca/en/faculty-research/departments/accountancy/925-department-accountancy?last=kanaan&first=george" title="Kanaan, George">Kanaan, George</a><br /><a href="http://johnmolson.concordia.ca/en/faculty-research/departments/accountancy/925-department-accountancy?last=peltier-rivest&first=dominic" title="Peltier-Rivest, Dominic">Peltier-Rivest, Dominic</a> <br /><a href="http://johnmolson.concordia.ca/en/faculty-research/departments/accountancy/925-department-accountancy?last=segovia&first=juan" title="Segovia, Juan J.">Segovia, Juan J.<br /></a><a href="http://johnmolson.concordia.ca/en/faculty-research/departments/accountancy/925-department-accountancy?last=spence&first=crawford">Spence, Crawford</a> (On leave from 08/21/2011 to 08/20/2012)<a href="http://johnmolson.concordia.ca/en/faculty-research/departments/accountancy/925-department-accountancy?last=mangen&first=claudine"><br /></a><a href="http://johnmolson.concordia.ca/en/faculty-research/departments/accountancy/925-department-accountancy?last=segovia&first=juan" title="Segovia, Juan J."><br /></a>
<h3>Assistant Professors</h3>
<a href="http://johnmolson.concordia.ca/en/faculty-research/departments/accountancy/925-department-accountancy?last=audousset-coulier&first=sophie" title="Audousset-Coulier, Sophie">Audousset-Coulier, Sophie</a> <br /><a title="Marion Brivot" href="http://johnmolson.concordia.ca/en/faculty-research/profiles/1969-marion-brivot">Brivot, Marion</a><a href="http://johnmolson.concordia.ca/en/faculty-research/departments/accountancy/925-department-accountancy?last=cho&first=charles"><br /></a></div>
<div class="mainContainer"><a title="Luo He" href="http://johnmolson.concordia.ca/en/faculty-research/profiles/luo-he">He, Luo</a><a href="http://johnmolson.concordia.ca/en/faculty-research/departments/accountancy/925-department-accountancy?last=kopczynski&first=tomek" title="Kopczynski, Tomek"><br /></a><a href="http://johnmolson.concordia.ca/en/faculty-research/departments/accountancy/925-department-accountancy?last=mangen&first=claudine">Mangen, Claudine</a> <a href="http://johnmolson.concordia.ca/en/faculty-research/departments/accountancy/925-department-accountancy?last=spence&first=crawford"></a><a href="http://johnmolson.concordia.ca/en/faculty-research/departments/accountancy/925-department-accountancy?last=mangen&first=claudine"><br /></a><a href="http://johnmolson.concordia.ca/en/faculty-research/departments/accountancy/925-department-accountancy?last=song&first=byron">Song, Byron</a> (On leave 09/06/2011 to 05/01/2012)<br /><a title="Li Yao" href="http://johnmolson.concordia.ca/en/faculty-research/profiles/li-yao">Yao, Li </a>
<h3>Senior Lecturers</h3>
<a href="http://johnmolson.concordia.ca/en/faculty-research/departments/accountancy/925-department-accountancy?last=delaney&first=patrick" title="Delaney, Patrick">Delaney, Patrick</a> (On sabbatical from 07/01/2011 to 12/31/2011)<br /><a href="http://johnmolson.concordia.ca/en/faculty-research/departments/accountancy/925-department-accountancy?last=fayerman&first=gail" title="Fayerman, Gail">Fayerman, Gail</a> <br /><a href="http://johnmolson.concordia.ca/en/faculty-research/departments/accountancy/925-department-accountancy?last=roscoe&first=wendy" title="Roscoe, Wendy Nadine">Roscoe, Wendy Nadine</a><br />
<h3>Lecturers</h3>
<a href="http://johnmolson.concordia.ca/en/faculty-research/departments/accountancy/925-department-accountancy?last=hagyard&first=trevor" title="Hagyard, Trevor">Hagyard, Trevor</a> <br /><a href="http://johnmolson.concordia.ca/en/faculty-research/departments/accountancy/925-department-accountancy?last=kopczynski&first=tomek" title="Kopczynski, Tomek">Kopczynski, Tomek</a> <br />Peltier Wagner, Elisabeth<br /><a href="http://johnmolson.concordia.ca/en/faculty-research/departments/accountancy/925-department-accountancy?last=ramsaran&first=tara" title="Ramsaran, Tara">Ramsaran, Tara</a><br /><a href="http://johnmolson.concordia.ca/en/faculty-research/departments/accountancy/925-department-accountancy?last=saleh&first=mervat" title="Mervat Saleh">Saleh, Mervat</a><br /><a href="http://johnmolson.concordia.ca/en/faculty-research/departments/accountancy/925-department-accountancy?last=sellors&first=mark" title="Mark, Sellors">Sellors, Mark</a><br /><br />
<h3>Department Coordinator</h3>
<p>DaniÃ¨le Berthiaume<br />Location: MB 14-207<br />Tel: 514-848-2424, ext. 2759<br />E-mail: 
 <script language='JavaScript' type='text/javascript'>
 <!--
 var prefix = '&#109;a' + 'i&#108;' + '&#116;o';
 var path = 'hr' + 'ef' + '=';
 var addy40616 = 'db&#101;rth&#105;&#97;' + '&#64;';
 addy40616 = addy40616 + 'jmsb' + '&#46;' + 'c&#111;nc&#111;rd&#105;&#97;' + '&#46;' + 'c&#97;';
 document.write( '<a ' + path + '\'' + prefix + ':' + addy40616 + '\'>' );
 document.write( addy40616 );
 document.write( '<\/a>' );
 //-->\n </script> <script language='JavaScript' type='text/javascript'>
 <!--
 document.write( '<span style=\'display: none;\'>' );
 //-->
 </script>This e-mail address is being protected from spambots. You need JavaScript enabled to view it
 <script language='JavaScript' type='text/javascript'>
 <!--
 document.write( '</' );
 document.write( 'span>' );
 //-->
 </script></p>
<h3>Department Assistant</h3>
Silvana Mendicino<br />Location: MB 14-205<br />Tel: 514-848-2424, ext. 2764<br />Email: 
 <script language='JavaScript' type='text/javascript'>
 <!--
 var prefix = '&#109;a' + 'i&#108;' + '&#116;o';
 var path = 'hr' + 'ef' + '=';
 var addy81507 = 'sm&#101;nd&#105;c&#105;n&#111;' + '&#64;';
 addy81507 = addy81507 + 'jmsb' + '&#46;' + 'c&#111;nc&#111;rd&#105;&#97;' + '&#46;' + 'c&#97;';
 var addy_text81507 = 'sm&#101;nd&#105;c&#105;n&#111;' + '&#64;' + 'jmsb' + '&#46;' + 'c&#111;nc&#111;rd&#105;&#97;' + '&#46;' + 'c&#97;';
 document.write( '<a ' + path + '\'' + prefix + ':' + addy81507 + '\'>' );
 document.write( addy_text81507 );
 document.write( '<\/a>' );
 //-->\n </script> <script language='JavaScript' type='text/javascript'>
 <!--
 document.write( '<span style=\'display: none;\'>' );
 //-->
 </script>This e-mail address is being protected from spambots. You need JavaScript enabled to view it
 <script language='JavaScript' type='text/javascript'>
 <!--
 document.write( '</' );
 document.write( 'span>' );
 //-->
 </script> <br />
<h3>Part-time Faculty Office</h3>
<p>Location: MB 14-218<br />Tel: 514-848-2424, ext. 2746<br /><br />Location: MB 14-222<br />Tel: 514-848-2424, ext. 5608</p>
<p><a href="http://johnmolson.concordia.ca/faculty-research/departments/accountancy#top" title="Back to top"><br />Back to top Î<br /></a></p>
</div>
<div class="rightRailContainer">
<h2 class="rightrail_heading">Announcements</h2>
<b>Appointment<br /></b>Dominic Peltier-Rivest has been appinted Executive Director of Concordia's new Centre for Academic Leadership. <a title="Concordia Now - Concordia launches Centre for Academic Leadership" href="http://www.concordia.ca/now/university-affairs/governance/20110803/concordia-launches-centre-for-academic-leadership.php">Read more</a>...<b><br /><br />Positions Available<br /></b>The Department of Accountancy invites applications for two tenure-track positions in the department of Accountancy. <a title="Department of Accoutancy - Tenure-track positions" href="http://johnmolson.concordia.ca/en/faculty-research/departments/accountancy/position-announcements">Read more</a>...<b><br /><br />Appointment<br /> </b>Trevor Hagyard has been appointed Director of the Diploma in Chartered Accountancy program effective June 1, 2011 and ending August 15, 2014<br /><br />
<h2 class="rightrail_heading">Upcoming Accountancy Related Research Events<br /></h2>
<ul class="eventslist"><li><a href="http://johnmolson.concordia.ca/en/news-events/events/calendar-of-events/view/278/2047?tmpl=component" class="jcal_modal" rel="{handler: 'iframe'}">Learning from othersâ¬" misfortune</a>
<br /><span class="eventsdate">January 20, 2012</span>
</li>
<li><a href="http://johnmolson.concordia.ca/en/news-events/events/calendar-of-events/view/279/2047?tmpl=component" class="jcal_modal" rel="{handler: 'iframe'}">Valuation of the ecosystem services: A psycho-cultural perspective</a>
<br /><span class="eventsdate">February 17, 2012</span>
</li>
<li><a href="http://johnmolson.concordia.ca/en/news-events/events/calendar-of-events/view/280/2047?tmpl=component" class="jcal_modal" rel="{handler: 'iframe'}">Sustainability by Design</a>
<br /><span class="eventsdate">March 23, 2012</span>
</li>
</ul>
<br /> <img style="vertical-align: bottom; margin: -5px -3px;" title="Click to view the event calendar - John Molson School of Business" alt="Click to view the event calendar - John Molson School of Business" src="http://johnmolson.concordia.ca/images/stories/home/imgs/icon-daily_calendar-16x16.jpg" height="16" width="16" /> <a title="John Molson School of Business (JMSB) Event Calendar" href="http://johnmolson.concordia.ca/en/news-events/events/1861?view=calendar"><strong>See all JMSB events</strong></a><br /> <br /><br /></div></div>

<span class="article_separator">&nbsp;</span>

				</div>
				</div>
					
	
	<div style="clear: both; height: 15px;">&nbsp;</div>

		<div id="footer">
				<div id="upperpart"><ul id="mainlevel"><li><a href="../../pageswww.concordia.ca/az/index.html" class="mainlevel">A-Z Index</a></li><li><a href="../../pageswww.concordia.ca/about/contact/index.html" class="mainlevel">Contact us</a></li><li><a href="../../pageswww.concordia.ca/about/contact/campus-map/_markers_maps_markers.php_referer_www.concordia.ca_api_maps.canvas_centermap_MB" class="mainlevel">Maps</a></li><li><a href="../../pageswww.concordia.ca/about/contact/campus-map/shuttle-bus-schedule/index.html" class="mainlevel">Shuttle</a></li><li><a href="https://www.myconcordia.ca/" class="mainlevel">MyConcordia</a></li><li><a href="http://johnmolson.concordia.ca/en/faculty-research/it-resources/jmsb-email-systems/jmsb-alumni-email-login" class="mainlevel">JMSB Alumni Email</a></li><li><a href="http://library.concordia.ca/" class="mainlevel">Libraries</a></li><li><a href="http://johnmolson.concordia.ca/component/xmap/?sitemap=1" class="mainlevel">Site Map</a></li><li><a href="../../pageswww.concordia.ca/index.html" class="mainlevel">Giving</a></li></ul></div>
		<div id="bottomlogo"><a href="../../pageswww.concordia.ca/"><img alt="concordialogo_bottom.gif" src="http://nirvana.concordia.ca/april/images/stories/home/imgs/concordialogo_bottom.gif" title="concordialogo_bottom.gif" height="30" width="126" /></a></div>
<div id="backtotop"><a href="http://nirvana.concordia.ca/april/#globaltools">Back to Top</a></div>
<div id="contactinfo"><a href="../../pageswww.concordia.ca/" style="font-weight: bold;">Concordia University</a> - <a href="http://nirvana.concordia.ca/april/index.php" style="font-weight: bold;">John Molson School of Business</a><br /> <span style="font-size: x-small;"><strong>Civic address:</strong> 1450 Guy St., Montreal, Quebec, Canada H3H 0A1<br /><strong>Mailing address:</strong> 1455 De Maisonneuve Blvd. West, Montreal, Quebec, Canada H3G 1M8<br /> Tel. 514-848-2424<br /><a href="../../pageswww.concordia.ca/about/contact/index.html"> Contact Us</a> | <a href="http://nirvana.concordia.ca/april/index.php?option=com_content&view=article&id=495:about-this-site&catid=57:home&Itemid=467">About This Site</a> | <a href="http://nirvana.concordia.ca/april/index.php?option=com_content&view=article&id=502:feedback&catid=57:home&Itemid=474">Website feedback</a><br /> Copyright Â© 2011 John Molson School of Business | <a href="http://nirvana.concordia.ca/april/index.php?option=com_content&view=article&id=496:legal-notice&catid=57:home&Itemid=468">Legal Notice</a></span></div>
<div id="bottompart"></div>
	</div>

</div>
</div>
</div>
<script type="text/javascript">var addthis_config = {"data_track_clickback":true};</script>
<script type="text/javascript" src="http://s7.addthis.com/js/250/addthis_widget.js#pubid=ra-4dc481a85646a144"></script>

</body>
</html>