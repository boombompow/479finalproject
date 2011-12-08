

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">

<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8" /><link id="EktronRegisteredCss" rel="stylesheet" type="text/css" href="http://www.amt.qc.ca/workarea/csslib/ektronCss.ashx?id=EktronModalCss" /><link href="http://www.amt.qc.ca/css/style.css" rel="stylesheet" type="text/css" /><link href="http://www.amt.qc.ca/css/client.css" rel="stylesheet" type="text/css" /><link href="http://www.amt.qc.ca/css/client_design.css" rel="stylesheet" type="text/css" /><meta http-equiv="content-language" content="fr-ca"/>
    

	<script language="javascript" type="text/javascript" src="http://www.amt.qc.ca/js/scripts.js"></script>
    <script type="text/javascript" src="https://jqueryjs.googlecode.com/files/jquery-1.2.5.min.js"></script>
    <script language="javascript" type="text/javascript" src="http://www.amt.qc.ca/js/taille_texte.js"></script>
    <script src="http://www.amt.qc.ca/js/modal_fd.js" type="text/javascript"></script>
    <script src="http://www.amt.qc.ca/js/dimension_fd.js" type="text/javascript"></script>
    <script src="http://www.amt.qc.ca/js/toggle_fd.js" type="text/javascript"></script>
  


	<script type="text/javascript">
		var gaJsHost = (("https:" == document.location.protocol) ? "https://ssl." : "http://www.");
		document.write(unescape("%3Cscript src='" + gaJsHost + "google-analytics.com/ga.js' type='text/javascript'%3E%3C/script%3E"));
	</script>
	<script type="text/javascript">
		try {
			var pageTracker = _gat._getTracker("UA-16086161-1");
			pageTracker._setDomainName(".amt.qc.ca");
			pageTracker._trackPageview();
		} catch (err) { }
	</script>

<script language='JavaScript' type='text/javascript'>
<!--

    var page = window.location.pathname;
    var site_language = 3084;

    //alert(page.toLowerCase());
    if (((page.toLowerCase() == "/recherche.aspx" || page.toLowerCase() == "/recherche_corp.aspx")) && (site_language == 3084)) {
        $(document).ready(function() {
            //alert("here");
            $("#ecmDefaultAdvText").val("Recherche avancée");
            $("#basicTermsAnchor").html("Recherche de base")
            $("#advancedTermsAnchor").html("Recherche avancée")
            $("#scopeAll").text("Site")
            $("#scopeHtml").text("HTML")
            $("#scopeDocuments").text("Documents")
            $("#scopeImages").text("Images")
            $("#scopeMultimedia").text("Multimédia")
            $("#scopeForums").text("Forums")
            $("#parentForFiltersError").text("Erreur: Impossible d'ajouter dans les filtres du recherches avancées.");

            jQuery.each($("label"), function() {
                //alert($(this).html());
                $(this).html($(this).html().replace("with <B>all</B> of the words", "avec <B>tous</B> les mots"));
                $(this).html($(this).html().replace("advanced search <B>exact phrase</B>", "recherche avancée <B>expression exacte</B>"));
                $(this).html($(this).html().replace("<B>at least one</B> of the words", "<B>au moins</B> un des mots"));
                $(this).html($(this).html().replace("<B>without</B> the words", "<B>sans</B> les mots"));
                
                  $(this).html($(this).html().replace("with <b>all</b> of the words", "avec <b>tous</b> les mots"));
                $(this).html($(this).html().replace("advanced search <b>exact phrase</b>", "recherche avancée <b>expression exacte</b>"));
                $(this).html($(this).html().replace("<b>at least one</b> of the words", "<b>au moins</b> un des mots"));
                $(this).html($(this).html().replace("<b>without</b> the words", "<B>sans</B> les mots"));
                
            });


            $("legend:first").text("Trouver des résultats par");
            $("legend:last").text("Filtrer les résultats");
            $(".addFilter").val("Ajouter le filtre");

        });
    }  
//-->
</script>
<title>
	AMT - Flotte de trains
</title></head>
<body id="BodyContent">
    <span id="ctl00_LanguageAPI1"></span>
     <form name="aspnetForm" method="post" action="flotte.aspx" id="aspnetForm">
<div>
<input type="hidden" name="__VIEWSTATE" id="__VIEWSTATE" value="/wEPDwULLTEwMjc3MTUxNTkPZBYCZg9kFgQCAQ9kFgQCBg8WAh4EVGV4dAU1PG1ldGEgaHR0cC1lcXVpdj0iY29udGVudC1sYW5ndWFnZSIgY29udGVudD0iZnItY2EiLz5kAgkPFgIfAAUZdmFyIHNpdGVfbGFuZ3VhZ2UgPSAzMDg0O2QCBRBkZBYWAgEPDxYCHgtOYXZpZ2F0ZVVybAUML2NvcnBvcmF0aWYvZGQCAw8WAh8ABXw8YSBjbGFzcz0ibWVudV9zZWNvbmRhaXJlX2xpbmtfc2VsZWN0ZWQiIGhyZWY9Ii9Xb3JrQXJlYS9saW5raXQuYXNweD9MaW5rSWRlbnRpZmllcj1JRCZhbXA7SXRlbUlEPTM1NiI+RXNwYWNlIENvcnBvcmF0aWY8L2E+ZAIFDw8WAh8ABQlSZWNoZXJjaGUWBh4Fc3R5bGUFGG1hcmdpbjowcHg7IGJvcmRlcjpub25lOx4Hb25jbGljawUMQ2xlYXJGb3JtKCk7HgZvbmJsdXIFFUNoZWNrU3RhdHVzKCdmci1jYScpO2QCCQ8PFgIfAAVFPGEgY2xhc3M9Im1lbnVfc2Vjb25kYWlyZV9saW5rX3NlbGVjdGVkIiBocmVmPSIvaG9tZS5hc3B4Ij5DbGllbnQ8L2E+ZGQCCw8PFggfAAUHRW5nbGlzaB4IQ3NzQ2xhc3MFBXRleHRlHwEFKS9jb3JwX3RlbXBsYXRlLmFzcHg/aWQ9MTU4NSZMYW5nVHlwZT0xMDMzHgRfIVNCAgIWAh8CBTVjb2xvcjogI2U2ZjBmOTsgdGV4dC1kZWNvcmF0aW9uOm5vbmU7IGZvbnQtc2l6ZToxMHB4O2QCDQ9kFgJmD2QWDAIBD2QWAmYPFgIfAAWkAjxhIG9ubW91c2VvdmVyPSJzaG93aGlkZV9tZW51X2NvcnAoJ21lbnUxMScsJ21lbnUxJywxICwgJ292ZXInKSIgb25tb3VzZW91dD0ic2hvd2hpZGVfbWVudV9jb3JwKCdtZW51MScsJ21lbnUxMScsMSwgJ291dCcpIiBocmVmPSIvYWdlbmNlLyI+PGltZyBpZD0ibWVudTEiIHNyYz0iL2ltYWdlcy9oZWFkZXIvY29ycG8vZnIvYnRuX2FtdC5naWYiIC8+PGltZyBpZD0ibWVudTExIiBzcmM9Ii9pbWFnZXMvaGVhZGVyL2NvcnBvL2ZyL2J0bl9hbXRfb3Zlci5naWYiIHN0eWxlPSJkaXNwbGF5Om5vbmU7IiAvPjwvYT5kAgMPZBYCZg8WAh8ABbICPGEgb25tb3VzZW92ZXI9InNob3doaWRlX21lbnVfY29ycCgnbWVudTIyJywnbWVudTInLDIgLCAnb3ZlcicpIiBvbm1vdXNlb3V0PSJzaG93aGlkZV9tZW51X2NvcnAoJ21lbnUyJywnbWVudTIyJywyLCAnb3ZlcicpIiBocmVmPSIvcHJvamV0cy8iPjxpbWcgaWQ9Im1lbnUyIiBzcmM9Ii9pbWFnZXMvaGVhZGVyL2NvcnBvL2ZyL2J0bl9wcm9qZXRzX292ZXIuZ2lmIiAvPjxpbWcgaWQ9Im1lbnUyMiIgc3JjPSIvaW1hZ2VzL2hlYWRlci9jb3Jwby9mci9idG5fcHJvamV0c19vdmVyLmdpZiIgc3R5bGU9ImRpc3BsYXk6bm9uZTsiLz48L2E+ZAIFD2QWAmYPFgIfAAWyAjxhIG9ubW91c2VvdmVyPSJzaG93aGlkZV9tZW51X2NvcnAoJ21lbnUzMycsJ21lbnUzJywzLCAnb3ZlcicpIiBvbm1vdXNlb3V0PSJzaG93aGlkZV9tZW51X2NvcnAoJ21lbnUzJywnbWVudTMzJywzLCAnb3V0JykiIGhyZWY9Ii9wcm9tb3Rpb24vIj48aW1nIGlkPSJtZW51MyIgc3JjPSIvaW1hZ2VzL2hlYWRlci9jb3Jwby9mci9idG5fcHJvbW90aW9uLmdpZiIgLz48aW1nIGlkPSJtZW51MzMiIHNyYz0iL2ltYWdlcy9oZWFkZXIvY29ycG8vZnIvYnRuX3Byb21vdGlvbl9vdmVyLmdpZiIgc3R5bGU9ImRpc3BsYXk6bm9uZTsiIC8+PC9hPmQCBw9kFgJmDxYCHwAFvAI8YSBvbm1vdXNlb3Zlcj0ic2hvd2hpZGVfbWVudV9jb3JwKCdtZW51NDQnLCdtZW51NCcsNCwgJ292ZXInKSIgb25tb3VzZW91dD0ic2hvd2hpZGVfbWVudV9jb3JwKCdtZW51NCcsJ21lbnU0NCcsNCwgJ291dCcpIiBocmVmPSIvc2FsbGVfZGVfcHJlc3NlL2NvbW11bmlxdWVzLmFzcHgiPjxpbWcgaWQ9Im1lbnU0IiBzcmM9Ii9pbWFnZXMvaGVhZGVyL2NvcnBvL2ZyL2J0bl9zZHAuZ2lmIiAvPjxpbWcgaWQ9Im1lbnU0NCIgc3JjPSIvaW1hZ2VzL2hlYWRlci9jb3Jwby9mci9idG5fc2RwX292ZXIuZ2lmIiBzdHlsZT0iZGlzcGxheTpub25lOyIgLz48L2E+ZAIJD2QWAmYPFgIfAAW7AjxhIG9ubW91c2VvdmVyPSJzaG93aGlkZV9tZW51X2NvcnAoJ21lbnU1NScsJ21lbnU1Jyw1LCAnb3ZlcicpIiBvbm1vdXNlb3V0PSJzaG93aGlkZV9tZW51X2NvcnAoJ21lbnU1JywnbWVudTU1Jyw1LCAnb3V0JykiIGhyZWY9Ii9mb3Vybmlzc2V1cnMvIj48aW1nIGlkPSJtZW51NSIgc3JjPSIvaW1hZ2VzL2hlYWRlci9jb3Jwby9mci9idG5fZm91cm5pc3NldXJzLmdpZiIgLz48aW1nIGlkPSJtZW51NTUiIHNyYz0iL2ltYWdlcy9oZWFkZXIvY29ycG8vZnIvYnRuX2ZvdXJuaXNzZXVyc19vdmVyLmdpZiIgc3R5bGU9ImRpc3BsYXk6bm9uZTsiIC8+PC9hPmQCCw9kFgJmDxYCHwAFsgI8YSBvbm1vdXNlb3Zlcj0ic2hvd2hpZGVfbWVudV9jb3JwKCdtZW51NjYnLCdtZW51NicsNiwgJ292ZXInKSIgb25tb3VzZW91dD0ic2hvd2hpZGVfbWVudV9jb3JwKCdtZW51NicsJ21lbnU2NicsNiwgJ291dCcpIiBocmVmPSIvY2FycmllcmVzLyI+PGltZyBpZD0ibWVudTYiIHNyYz0iL2ltYWdlcy9oZWFkZXIvY29ycG8vZnIvYnRuX2NhcnJpZXJlcy5naWYiIC8+PGltZyBpZD0ibWVudTY2IiBzcmM9Ii9pbWFnZXMvaGVhZGVyL2NvcnBvL2ZyL2J0bl9jYXJyaWVyZXNfb3Zlci5naWYiIHN0eWxlPSJkaXNwbGF5Om5vbmU7IiAvPjwvYT5kAhMPFgIeB1Zpc2libGVnFgQCAQ9kFgJmDw8WAh8ABV48aW1nIGJvcmRlcj0iMCIgc3JjPSIvdXBsb2FkZWRJbWFnZXMvQU1UL1NpdGVfQ29ycG8vTW9iaWxpdMOpX2R1cmFibGUvTW9iaWxpdMOpRHVyYWJsZS5qcGciIC8+ZGQCAw9kFgICAg8WAh8ABboVPHRhYmxlIGJvcmRlcj0iMCIgY2VsbHBhZGRpbmc9IjAiIGNlbGxzcGFjaW5nPSIwIiB3aWR0aD0iMTAwJSI+PHRyPjx0ZCBjbGFzcz0idGFibGVfbWVudSIgc3R5bGU9IiI+PGRpdiBzdHlsZT0idmVydGljYWwtYWxpZ246bWlkZGxlOyI+PGEgIGhyZWY9Ii9wcm9qZXRzL3B0aS5hc3B4IiBjbGFzcz0ibWVudV90ZXh0X2JsZXUiIHN0eWxlPSJ0ZXh0LXRyYW5zZm9ybTp1cHBlcmNhc2U7Ij5Qcm9ncmFtbWUgdHJpZW5uYWwgZCYjMzk7aW1tb2JpbGlzYXRpb25zPC9hPjwvZGl2PjwvdGQ+PC90cj48L3RhYmxlPjx0YWJsZSBib3JkZXI9IjAiIGNlbGxwYWRkaW5nPSIwIiBjZWxsc3BhY2luZz0iMCIgd2lkdGg9IjEwMCUiPjx0cj48dGQgY2xhc3M9InRhYmxlX21lbnUiIHN0eWxlPSIiPjxkaXYgc3R5bGU9InZlcnRpY2FsLWFsaWduOm1pZGRsZTsiPjxhICBocmVmPSIvdGRlLyIgY2xhc3M9Im1lbnVfdGV4dF9ibGV1X3NlbGVjdGVkIiBzdHlsZT0idGV4dC10cmFuc2Zvcm06dXBwZXJjYXNlOyI+UHJvamV0cyBlbiBjb3VyczwvYT48L2Rpdj48L3RkPjwvdHI+PC90YWJsZT48dGFibGUgYm9yZGVyPSIwIiBjZWxscGFkZGluZz0iMCIgY2VsbHNwYWNpbmc9IjAiIHdpZHRoPSIxMDAlIj48dHI+PHRkIGNsYXNzPSJ0YWJsZV9tZW51IiBzdHlsZT0icGFkZGluZy1sZWZ0OjEycHg7Ij48ZGl2IHN0eWxlPSJ2ZXJ0aWNhbC1hbGlnbjptaWRkbGU7Ij48YSAgaHJlZj0iL3RkZS8iIGNsYXNzPSJtZW51X3RleHRfYmxldSI+VHJhaW4gZGUgbCYjMzk7RXN0PC9hPjwvZGl2PjwvdGQ+PC90cj48L3RhYmxlPjx0YWJsZSBib3JkZXI9IjAiIGNlbGxwYWRkaW5nPSIwIiBjZWxsc3BhY2luZz0iMCIgd2lkdGg9IjEwMCUiPjx0cj48dGQgY2xhc3M9InRhYmxlX21lbnUiIHN0eWxlPSJwYWRkaW5nLWxlZnQ6MTJweDsiPjxkaXYgc3R5bGU9InZlcnRpY2FsLWFsaWduOm1pZGRsZTsiPjxhICBocmVmPSIvamRlLyIgY2xhc3M9Im1lbnVfdGV4dF9ibGV1Ij5Kb25jdGlvbiBkZSBsJiMzOTtFc3Q8L2E+PC9kaXY+PC90ZD48L3RyPjwvdGFibGU+PHRhYmxlIGJvcmRlcj0iMCIgY2VsbHBhZGRpbmc9IjAiIGNlbGxzcGFjaW5nPSIwIiB3aWR0aD0iMTAwJSI+PHRyPjx0ZCBjbGFzcz0idGFibGVfbWVudSIgc3R5bGU9InBhZGRpbmctbGVmdDoxMnB4O2JhY2tncm91bmQ6I2ZmZmZmZjsiPjxkaXYgc3R5bGU9InZlcnRpY2FsLWFsaWduOm1pZGRsZTsiPjxhICBocmVmPSIvcHJvamV0cy9mbG90dGUuYXNweCIgY2xhc3M9Im1lbnVfdGV4dF9ibGV1Ij5GbG90dGUgZGUgdHJhaW5zPC9hPjwvZGl2PjwvdGQ+PC90cj48L3RhYmxlPjx0YWJsZSBib3JkZXI9IjAiIGNlbGxwYWRkaW5nPSIwIiBjZWxsc3BhY2luZz0iMCIgd2lkdGg9IjEwMCUiPjx0cj48dGQgY2xhc3M9InRhYmxlX21lbnUiIHN0eWxlPSJwYWRkaW5nLWxlZnQ6MTJweDsiPjxkaXYgc3R5bGU9InZlcnRpY2FsLWFsaWduOm1pZGRsZTsiPjxhICBocmVmPSIvcHJvamV0cy9jZW50cmVzX2VudHJldGllbi5hc3B4IiBjbGFzcz0ibWVudV90ZXh0X2JsZXUiPkNlbnRyZXMgZCYjMzk7ZW50cmV0aWVuPC9hPjwvZGl2PjwvdGQ+PC90cj48L3RhYmxlPjx0YWJsZSBib3JkZXI9IjAiIGNlbGxwYWRkaW5nPSIwIiBjZWxsc3BhY2luZz0iMCIgd2lkdGg9IjEwMCUiPjx0cj48dGQgY2xhc3M9InRhYmxlX21lbnUiIHN0eWxlPSJwYWRkaW5nLWxlZnQ6MTJweDsiPjxkaXYgc3R5bGU9InZlcnRpY2FsLWFsaWduOm1pZGRsZTsiPjxhICBocmVmPSIvcHJvamV0cy9BY2Nyb2lzc21lbnRDYXBhY2l0ZUJsYWludmlsZVN0SmVyb21lLyIgY2xhc3M9Im1lbnVfdGV4dF9ibGV1Ij5BbcOpbGlvcmF0aW9ucyBzdXIgbGEgbGlnbmUgQmxhaW52aWxsZeKAk1N0LUrDqXLDtG1lPC9hPjwvZGl2PjwvdGQ+PC90cj48L3RhYmxlPjx0YWJsZSBib3JkZXI9IjAiIGNlbGxwYWRkaW5nPSIwIiBjZWxsc3BhY2luZz0iMCIgd2lkdGg9IjEwMCUiPjx0cj48dGQgY2xhc3M9InRhYmxlX21lbnUiIHN0eWxlPSJwYWRkaW5nLWxlZnQ6MTJweDsiPjxkaXYgc3R5bGU9InZlcnRpY2FsLWFsaWduOm1pZGRsZTsiPjxhICBocmVmPSIvbWVzdXJlcy8iIGNsYXNzPSJtZW51X3RleHRfYmxldSI+QXR0w6ludWF0aW9uIGRlIGxhIGNvbmdlc3Rpb24gcm91dGnDqHJlPC9hPjwvZGl2PjwvdGQ+PC90cj48L3RhYmxlPjx0YWJsZSBib3JkZXI9IjAiIGNlbGxwYWRkaW5nPSIwIiBjZWxsc3BhY2luZz0iMCIgd2lkdGg9IjEwMCUiPjx0cj48dGQgY2xhc3M9InRhYmxlX21lbnUiIHN0eWxlPSIiPjxkaXYgc3R5bGU9InZlcnRpY2FsLWFsaWduOm1pZGRsZTsiPjxhICBocmVmPSIvcHJvamV0cy9kZXNzZXJ0ZS5hc3B4IiBjbGFzcz0ibWVudV90ZXh0X2JsZXVfYXJyb3ciIHN0eWxlPSJ0ZXh0LXRyYW5zZm9ybTp1cHBlcmNhc2U7Ij5Qcm9qZXRzIMOgIGwmIzM5O8OpdHVkZTwvYT48L2Rpdj48L3RkPjwvdHI+PC90YWJsZT48dGFibGUgYm9yZGVyPSIwIiBjZWxscGFkZGluZz0iMCIgY2VsbHNwYWNpbmc9IjAiIHdpZHRoPSIxMDAlIj48dHI+PHRkIGNsYXNzPSJ0YWJsZV9tZW51IiBzdHlsZT0iIj48ZGl2IHN0eWxlPSJ2ZXJ0aWNhbC1hbGlnbjptaWRkbGU7Ij48YSAgaHJlZj0iL1dvcmtBcmVhL2xpbmtpdC5hc3B4P0xpbmtJZGVudGlmaWVyPUlEJmFtcDtJdGVtSUQ9MTEwOCIgY2xhc3M9Im1lbnVfdGV4dF9ibGV1X2Fycm93IiBzdHlsZT0idGV4dC10cmFuc2Zvcm06dXBwZXJjYXNlOyI+UHJvamV0cyByw6lhbGlzw6lzPC9hPjwvZGl2PjwvdGQ+PC90cj48L3RhYmxlPmQCFw8WAh8HZxYEZg9kFgJmD2QWAmYPZBYCAgIPZBYCZg9kFgJmD2QWAgIBDxYCHwAF8gI8YSBjbGFzcz0iYV9maWxhcmlhbm5lIiBocmVmPSIvY29ycG9yYXRpZi8iPkFjY3VlaWw8L2E+PHNwYW4gY2xhc3M9ImFfZmlsYXJpYW5uZSI+ID4gPC9zcGFuPjxhIGNsYXNzPSJhX2ZpbGFyaWFubmUiIGhyZWY9Ii9Xb3JrQXJlYS9saW5raXQuYXNweD9MaW5rSWRlbnRpZmllcj1JRCZhbXA7SXRlbUlEPTcxNCI+UHJvamV0czwvYT48c3BhbiBjbGFzcz0iYV9maWxhcmlhbm5lIj4gPiA8L3NwYW4+PGEgY2xhc3M9ImFfZmlsYXJpYW5uZSIgaHJlZj0iL3RkZS8iPlByb2pldHMgZW4gY291cnM8L2E+PHNwYW4gY2xhc3M9ImFfZmlsYXJpYW5uZSI+ID4gPC9zcGFuPjxzcGFuIGNsYXNzPSJhX2ZpbGFyaWFubmUiPkZsb3R0ZSBkZSB0cmFpbnM8L3NwYW4+ZAIBD2QWBGYPZBYCAgEPZBYCAgEPZBYCAgEPDxYGHgVUaXRsZQUQRmxvdHRlIGRlIHRyYWlucx4TQ2F0YWxvZ0ljb25JbWFnZVVybAUuL1dvcmtBcmVhL2ltYWdlcy9hcHBsaWNhdGlvbi9pY29uX2RvY3VtZW50LmdpZh4RVGl0bGVJY29uSW1hZ2VVcmxlZGQCAQ9kFgICAQ9kFgICAQ8PFgYfCAUdQmxvYyBEcm9pdCAtIEZsb3R0ZSBkZSB0cmFpbnMfCQUuL1dvcmtBcmVhL2ltYWdlcy9hcHBsaWNhdGlvbi9pY29uX2RvY3VtZW50LmdpZh8KZWRkAhkPFgIfB2dkAhsPFgIfAAWlAjxzcGFuIGNsYXNzPSJmb290ZXJfc2VwIj58PC9zcGFuPjxhIGhyZWY9Imh0dHBzOi8vY291cnJpZWwuYW10LnFjLmNhL293YSIgY2xhc3M9Im1lbnVfZm9vdGVyIiB0YXJnZXQ9Il9ibGFuayI+QWNjw6hzIGNvdXJyaWVsPC9hPjxzcGFuIGNsYXNzPSJmb290ZXJfc2VwIj58PC9zcGFuPjxhIGhyZWY9Imh0dHA6Ly93d3cuZXh0cmFuZXQuYW10LnFjLmNhL2xvZ2luLmFzcCIgY2xhc3M9Im1lbnVfZm9vdGVyIiB0YXJnZXQ9Il9ibGFuayI+RXh0cmFuZXQ8L2E+PHNwYW4gY2xhc3M9ImZvb3Rlcl9zZXAiPnw8L3NwYW4+ZAIdDxYCHwAFoQw8YSBocmVmPSJodHRwOi8vd3d3LmZhY2Vib29rLmNvbS9BZ2VuY2VtZXRyb3BvbGl0YWluZWRldHJhbnNwb3J0IiB0YXJnZXQ9Il9ibGFuayI+PGltZyBzcmM9Imh0dHA6Ly93d3cuYW10LnFjLmNhL3VwbG9hZGVkSW1hZ2VzL0FNVC9pY29uLWZhY2Vib29rLnBuZyIgYWx0PSJGYWNlYm9vayIgY2xhc3M9Im1lbnVfZm9vdGVyX2ltYWdlIiAvPjwvYT48YSBocmVmPSJodHRwczovL3BsdXMuZ29vZ2xlLmNvbS91LzAvMTAyNDY4ODI3MTM5NTM3MjM5NjAwL3Bvc3RzIiB0YXJnZXQ9Il9ibGFuayI+PGltZyBzcmM9Ii91cGxvYWRlZEltYWdlcy9BTVQvZ29vZ2xlLnBuZyIgYWx0PSJHb29nbGUrIiBjbGFzcz0ibWVudV9mb290ZXJfaW1hZ2UiIC8+PC9hPjxhIGhyZWY9Imh0dHA6Ly90d2l0dGVyLmNvbS8jIS9hbXRfaW5mbyIgdGFyZ2V0PSJfYmxhbmsiPjxpbWcgc3JjPSJodHRwOi8vd3d3LmFtdC5xYy5jYS91cGxvYWRlZEltYWdlcy9BTVQvaWNvbmUtdHdpdHRlci5wbmciIGFsdD0iVHdpdHRlciIgY2xhc3M9Im1lbnVfZm9vdGVyX2ltYWdlIiAvPjwvYT48YSBocmVmPSJodHRwOi8vdmltZW8uY29tL2FtdHJhbnNwb3J0IiB0YXJnZXQ9Il9ibGFuayI+PGltZyBzcmM9Ii91cGxvYWRlZEltYWdlcy9BTVQvaWNvbi12aW1lby5wbmciIGFsdD0iVmltZW8iIGNsYXNzPSJtZW51X2Zvb3Rlcl9pbWFnZSIgLz48L2E+PGEgaHJlZj0iaHR0cDovL3d3dy5mbGlja3IuY29tL3Bob3Rvcy9hZ2VuY2VtZXRyb3BvbGl0YWluZWRldHJhbnNwb3J0LyIgdGFyZ2V0PSJfYmxhbmsiPjxpbWcgc3JjPSIvdXBsb2FkZWRJbWFnZXMvQU1UL2ljb25lLWZsaWNrZXIucG5nIiBhbHQ9IkZsaWNrciIgY2xhc3M9Im1lbnVfZm9vdGVyX2ltYWdlIiAvPjwvYT48YSBocmVmPSIvc2VydmljZXNtb2JpbGVzIiB0YXJnZXQ9Il9ibGFuayI+PGltZyBzcmM9Imh0dHA6Ly93d3cuYW10LnFjLmNhL3VwbG9hZGVkSW1hZ2VzL0FNVC9pY29uZS1tb2JpbGUucG5nIiBhbHQ9IlNlcnZpY2VzIG1vYmlsZXMiIGNsYXNzPSJtZW51X2Zvb3Rlcl9pbWFnZSIgLz48L2E+PGEgaHJlZj0iaHR0cDovL2lkZWVzLmFtdC5xYy5jYSIgdGFyZ2V0PSJfYmxhbmsiPjxpbWcgc3JjPSIvdXBsb2FkZWRJbWFnZXMvQU1UL3RyYW5zcG9ydGRpZGVlcy5wbmciIGFsdD0iVHJhbnNwb3J0IGQmIzM5O2lkw6llcyIgY2xhc3M9Im1lbnVfZm9vdGVyX2ltYWdlIiAvPjwvYT48c3BhbiBjbGFzcz0iZm9vdGVyX3NlcCI+fDwvc3Bhbj48YSBocmVmPSIvc2VydmljZV9jbGllbnRlbGUvIiBjbGFzcz0ibWVudV9mb290ZXIiPlNlcnZpY2Ugw6AgbGEgY2xpZW50w6hsZTwvYT48c3BhbiBjbGFzcz0iZm9vdGVyX3NlcCI+fDwvc3Bhbj48YSBocmVmPSIvY29uZmlkZW50aWFsaXRlLmFzcHgiIGNsYXNzPSJtZW51X2Zvb3RlciI+Q29uZmlkZW50aWFsaXTDqTwvYT48c3BhbiBjbGFzcz0iZm9vdGVyX3NlcCI+fDwvc3Bhbj48YSBocmVmPSIvbWVudGlvbnNfbGVnYWxlcy5hc3B4IiBjbGFzcz0ibWVudV9mb290ZXIiPsKpIFRvdXMgZHJvaXRzIHLDqXNlcnbDqXMgLSBBTVQgMjAxMTwvYT48c3BhbiBjbGFzcz0iZm9vdGVyX3NlcCI+fDwvc3Bhbj5kZA/EDgUB1m1hKnVOYoaZcw8goLcA" />
</div>
 
     <div id="head">
                <table id="head_bgusager" cellpadding="0" cellspacing="0" border="0" align="center" width="100%">
                    <tr valign="top">
                        <td style="background: url(/images/header/corpo/gauche_fill.gif) repeat-x top left;">
                            &nbsp;
                        </td>
                        <td width="928px">
                            <table width="100%" cellpadding="0" cellspacing="0" border="0">
                                <tr>
                                    <td style="background: #4891dc;"><a id="ctl00_Hyperlink_home" href="http://www.amt.qc.ca/corporatif/"><img src="http://www.amt.qc.ca/images/header/corpo/logo.gif" alt="logo" style="border:none;" /></a></td>
                                    <td style="background: #4891dc url(/images/header/corpo/back_top.gif) no-repeat top right"
                                        valign="top" align="right">
                                        <table width="100%" cellpadding="0" cellspacing="0" border="0" >
                                            <tr valign="top">
                                                <td align="right" valign="top">
                                                    <table style="margin: 20px 18px 0px 0px;" cellpadding="0" cellspacing="0" border="0">
                                                        <tr align="right" valign="top">
                                                            <td align="right" valign="top">                                                      
                                                               &nbsp; <a class="menu_secondaire_link_selected" href="../WorkArea/linkit.aspx_LinkIdentifier_ID_ItemID_356">Espace Corporatif</a>
                                                            </td>
                                                        </tr>
                                                    </table>
                                                    <table style="margin: 18px 18px 0px 0px;" cellpadding="0" cellspacing="0" border="0">
                                                        <tr align="left" valign="top">
                                                            <td width="77px">
                                                            <div style=""> </div>
                                                            </td>
                                                            <td style="padding-left:0px; padding-top:0px;">
                                                            </td>
                                                        </tr>
                                                    </table>
                                                </td>
                                                <td  width="89px" valign="top">
                                                    <div style="margin: 20px 0px 0px 16px; text-align:left;">
                                                    <span id="ctl00_Label_Section"><a class="menu_secondaire_link_selected" href="../home.aspx">Client</a></span></div>
                                                    <div style="margin: 18px 0px 0px 16px;  text-align:left;">
                                                        <span class="text" style="color: #78b5f4;"><a id="ctl00_hyperlink_language" class="texte" href="http://www.amt.qc.ca/corp_template.aspx?id=1585&LangType=1033" style="color: #e6f0f9; text-decoration:none; font-size:10px;">English</a></span></div>
                                                </td>
                                            </tr>
                                        </table>
                                    </td>
                                </tr>
                            </table>
                            
                            <table id="ctl00_Menu_Francais" width="100%" border="0" cellpadding="0" cellspacing="0">
	<tr>
		<td id="ctl00_sep1"><img id="barre1" src="http://www.amt.qc.ca/images/header/corpo/menu_sep.gif" /></td>
		<td><a onmouseover="showhide_menu_corp('menu11','menu1',1 , 'over')" onmouseout="showhide_menu_corp('menu1','menu11',1, 'out')" href="http://www.amt.qc.ca/agence/"><img id="menu1" src="http://www.amt.qc.ca/images/header/corpo/fr/btn_amt.gif" /><img id="menu11" src="http://www.amt.qc.ca/images/header/corpo/fr/btn_amt_over.gif" style="display:none;" /></a></td>
		<td><img id="barre2" src="http://www.amt.qc.ca/images/header/corpo/menu_sep.gif" /></td>
		<td><a onmouseover="showhide_menu_corp('menu22','menu2',2 , 'over')" onmouseout="showhide_menu_corp('menu2','menu22',2, 'over')" href=""><img id="menu2" src="http://www.amt.qc.ca/images/header/corpo/fr/btn_projets_over.gif" /><img id="menu22" src="http://www.amt.qc.ca/images/header/corpo/fr/btn_projets_over.gif" style="display:none;" /></a></td>
		<td><img id="barre3" src="http://www.amt.qc.ca/images/header/corpo/menu_sep.gif" /></td>
		<td><a onmouseover="showhide_menu_corp('menu33','menu3',3, 'over')" onmouseout="showhide_menu_corp('menu3','menu33',3, 'out')" href="http://www.amt.qc.ca/promotion/"><img id="menu3" src="http://www.amt.qc.ca/images/header/corpo/fr/btn_promotion.gif" /><img id="menu33" src="http://www.amt.qc.ca/images/header/corpo/fr/btn_promotion_over.gif" style="display:none;" /></a></td>
		<td><img id="barre4" src="http://www.amt.qc.ca/images/header/corpo/menu_sep.gif" /></td>
		<td><a onmouseover="showhide_menu_corp('menu44','menu4',4, 'over')" onmouseout="showhide_menu_corp('menu4','menu44',4, 'out')" href="http://www.amt.qc.ca/salle_de_presse/communiques.aspx"><img id="menu4" src="http://www.amt.qc.ca/images/header/corpo/fr/btn_sdp.gif" /><img id="menu44" src="http://www.amt.qc.ca/images/header/corpo/fr/btn_sdp_over.gif" style="display:none;" /></a></td>
		<td><img id="barre5" src="http://www.amt.qc.ca/images/header/corpo/menu_sep.gif" /></td>
		<td><a onmouseover="showhide_menu_corp('menu55','menu5',5, 'over')" onmouseout="showhide_menu_corp('menu5','menu55',5, 'out')" href="http://www.amt.qc.ca/fournisseurs/"><img id="menu5" src="http://www.amt.qc.ca/images/header/corpo/fr/btn_fournisseurs.gif" /><img id="menu55" src="http://www.amt.qc.ca/images/header/corpo/fr/btn_fournisseurs_over.gif" style="display:none;" /></a></td>
		<td><img id="barre6" src="http://www.amt.qc.ca/images/header/corpo/menu_sep.gif" /></td>
		<td><a onmouseover="showhide_menu_corp('menu66','menu6',6, 'over')" onmouseout="showhide_menu_corp('menu6','menu66',6, 'out')" href="http://www.amt.qc.ca/carrieres/"><img id="menu6" src="http://www.amt.qc.ca/images/header/corpo/fr/btn_carrieres.gif" /><img id="menu66" src="http://www.amt.qc.ca/images/header/corpo/fr/btn_carrieres_over.gif" style="display:none;" /></a></td>
		<td><img id="barre7" src="http://www.amt.qc.ca/images/header/corpo/last_sep.gif" /></td>
	</tr>
</table>

                            
                             
                            
                        </td>
                        <td style="background: url(/images/header/corpo/droite_fill.gif) repeat-x top left">
                            &nbsp;
                        </td>
                    </tr>
                </table>
                </div>
    <table cellpadding="0" cellspacing="0" border="0" align="center" width="100%" style="position:relative; top:112px;">
        
        <tr>
        <td style="height:5px;"></td>
        </tr>
        
        
        <tr>
            <td style="vertical-align:top;">
                <table cellpadding="0" cellspacing="0" border="0" align="center" width="100%">
                    <tr>
                        <td class="background_bleu">
                            &nbsp;
                        </td>
                        <td style="width: 927px; vertical-align: top;  text-align:center;">
                            <div style="text-align:center;"></div>
                            
                            
                            <div id="ctl00_Block_Top_Image_Menu" class="background_bleu" style="padding-top:2px;">
                            <table  cellpadding="0" cellspacing="0" border="0" width="100%" class="background_bleu">
                                <tr valign="bottom">
                                    <td style="width: 617px; vertical-align:bottom;"><span id="ctl00_ContentPlaceHolder_Image_Top_Label_Image_Top"><img border="0" src="http://www.amt.qc.ca/uploadedImages/AMT/Site_Corpo/Mobilité_durable/MobilitéDurable.jpg" /></span></td>
                                    <td style="vertical-align:top;">
                                        <span id="ctl00_menu1_languageApi1"></span>
<center>

<table border="0" cellpadding="0" cellspacing="0" width="100%"><tr><td class="table_menu" style=""><div style="vertical-align:middle;"><a href="http://www.amt.qc.ca/projets/pti.aspx" class="menu_text_bleu" style="text-transform:uppercase;">Programme triennal d&#39;immobilisations</a></div></td></tr></table><table border="0" cellpadding="0" cellspacing="0" width="100%"><tr><td class="table_menu" style=""><div style="vertical-align:middle;"><a href="http://www.amt.qc.ca/tde/" class="menu_text_bleu_selected" style="text-transform:uppercase;">Projets en cours</a></div></td></tr></table><table border="0" cellpadding="0" cellspacing="0" width="100%"><tr><td class="table_menu" style="padding-left:12px;"><div style="vertical-align:middle;"><a href="http://www.amt.qc.ca/tde/" class="menu_text_bleu">Train de l&#39;Est</a></div></td></tr></table><table border="0" cellpadding="0" cellspacing="0" width="100%"><tr><td class="table_menu" style="padding-left:12px;"><div style="vertical-align:middle;"><a href="http://www.amt.qc.ca/jde/" class="menu_text_bleu">Jonction de l&#39;Est</a></div></td></tr></table><table border="0" cellpadding="0" cellspacing="0" width="100%"><tr><td class="table_menu" style="padding-left:12px;background:#ffffff;"><div style="vertical-align:middle;"><a href="flotte.aspx" class="menu_text_bleu">Flotte de trains</a></div></td></tr></table><table border="0" cellpadding="0" cellspacing="0" width="100%"><tr><td class="table_menu" style="padding-left:12px;"><div style="vertical-align:middle;"><a href="http://www.amt.qc.ca/projets/centres_entretien.aspx" class="menu_text_bleu">Centres d&#39;entretien</a></div></td></tr></table><table border="0" cellpadding="0" cellspacing="0" width="100%"><tr><td class="table_menu" style="padding-left:12px;"><div style="vertical-align:middle;"><a href="http://www.amt.qc.ca/projets/AccroissmentCapaciteBlainvileStJerome/" class="menu_text_bleu">Améliorations sur la ligne Blainville�St-Jérôme</a></div></td></tr></table><table border="0" cellpadding="0" cellspacing="0" width="100%"><tr><td class="table_menu" style="padding-left:12px;"><div style="vertical-align:middle;"><a href="http://www.amt.qc.ca/mesures/" class="menu_text_bleu">Atténuation de la congestion routière</a></div></td></tr></table><table border="0" cellpadding="0" cellspacing="0" width="100%"><tr><td class="table_menu" style=""><div style="vertical-align:middle;"><a href="http://www.amt.qc.ca/projets/desserte.aspx" class="menu_text_bleu_arrow" style="text-transform:uppercase;">Projets à l&#39;étude</a></div></td></tr></table><table border="0" cellpadding="0" cellspacing="0" width="100%"><tr><td class="table_menu" style=""><div style="vertical-align:middle;"><a href="http://www.amt.qc.ca/WorkArea/linkit.aspx?LinkIdentifier=ID&ItemID=1108" class="menu_text_bleu_arrow" style="text-transform:uppercase;">Projets réalisés</a></div></td></tr></table>

</center> 
                                        
                                        
                                    </td>
                                </tr>
                            </table>
                            </div>
                        </td>
                        <td class="background_bleu">
                            &nbsp;
                        </td>
                    </tr>
                </table>
                
                <div id="Main_Bloc">
                <table cellpadding="0" cellspacing="0" border="0" align="center" width="100%" style="background:#ffffff;">
                    <tr>
                        <td style="background: #ffffff">
                            &nbsp;
                        </td>
                        <td style="width: 929px; vertical-align: top;">
                            
                            
                            
                            
                           
                           <table id="ctl00_Bloc_Traitement" cellpadding="0" cellspacing="0" border="0" width="100%">
	<tr>
		<td style="width:610px; vertical-align:top; padding-top:4px;"><span id="ctl00_fil1_LanguageAPI1"></span>
<table id="ctl00_fil1_arriane" border="0" cellpadding="0" cellspacing="0" width="100%" class="page_header_menu" style="margin-bottom:8px; background:#ffffff;">
			<tr valign="top">
				<td width="485px" style="background:#ffffff;">
            <a class="a_filarianne" href="http://www.amt.qc.ca/corporatif/">Accueil</a><span class="a_filarianne"> > </span><a class="a_filarianne" href="http://www.amt.qc.ca/WorkArea/linkit.aspx?LinkIdentifier=ID&ItemID=714">Projets</a><span class="a_filarianne"> > </span><a class="a_filarianne" href="http://www.amt.qc.ca/tde/">Projets en cours</a><span class="a_filarianne"> > </span><span class="a_filarianne">Flotte de trains</span>
        </td>
				<td width="50px" style="text-align: right; padding-right:10px; border-left: 1px solid #FFFFFF; background:#ffffff;">
            <span style="font-size: 8px;"><a id="SpanPetitA" href="http://www.amt.qc.ca/projets/flotte.aspx#" onclick="location.reload(true);" style="color:#a6a8aa;">
                A</a> </span><span style="padding-left: 5px; color:#a6a8aa; text-decoration: underline;"><a href="http://www.amt.qc.ca/projets/flotte.aspx#" onclick="changeFontsize('20','0'); " style="color:#a6a8aa;">A</a></span>
        </td>
				<td width="15px" style="text-align: center; border-left: 1px solid #FFFFFF; background:#ffffff;">
            <a class="a_header_print" href="http://www.amt.qc.ca/projets/flotte.aspx#" onclick="window.open('/imprimer.aspx', 'windowname1', ''); return false;">&nbsp;</a>
        </td>
			</tr>
		</table>
		

                            </td>
		<td>
                              &nbsp;
                            </td>
	</tr>
	<tr>
		<td style="vertical-align:top; width:600px; padding-right:5px; ">
                             
                               
    <div id="ctl00_ContentPlaceHolder_Traitement_contenu" style="width:610px;">
        <!--  ********** Affichage du contenu du content *********** -->
        <div id="ctl00_ContentPlaceHolder_Traitement_ContentBlock_Main">
			<div class="content_principal"><h1><img title="Projets / Grands projets en cours" alt="Projets / Grands projets en cours" src="http://www.amt.qc.ca/uploadedImages/AMT/Site_Corpo/Mobilité_durable/t_projets_grand_projets.gif?n=940" /></h1>
<hr class="hr_titre" />
<h2><img style="WIDTH: 257px; HEIGHT: 29px" title="Flotte de trains" alt="Flotte de trains" src="http://www.amt.qc.ca/uploadedImages/AMT/Site_Corpo/Mobilité_durable/T_FLOTTE%20DE%20TRAINS.jpg?n=9957" /></h2>
<p> </p>
<p class="texte_intro">Après 12 années d�"existence, au cours desquelles l�"achalandage du réseau de trains de banlieue a plus que doublé, la modernisation de la flotte et des infrastructures s�"impose pour améliorer et accroître les services.</p>
<p> </p>
<p class="texte"><strong>Voitures à deux étages</strong><br />Le gouvernement du Québec a reconnu le bien-fondé de cette priorité : en décembre 2007, il a accordé à l�"AMT le financement pour acquérir, auprès de la compagnie Bombardier, 160 voitures passagers à deux étages.</p>
<p> </p>
<p class="texte">Outre le remplacement des voitures de train vieillissantes, cette flotte renouvelée servira à accroître notre capacité d�"accueil de 70 % :</p>
<ul class="texte">
<li>54 nouvelles voitures sur les lignes Blainville-Saint-Jérôme, Mont-Saint-Hilaire et Delson-Candiac ;</li>
<li>22 voitures sur la ligne Deux-Montagnes ;</li>
<li>54 voitures de capacité équivalente pour remplacer les voitures 1 000 et 1 200 ;</li>
<li>30 voitures pour le Train de l�"Est.</li>
</ul>
<p class="texte">Livrées à partir de l�"automne 2009, elles seront mises en service de manière progressive.</p>
<p> </p>
<p class="texte"><strong>Locomotives bimodes</strong><br />Un appel de propositions conjoint avec New Jersey Transit (NJT) a été effectué en 2007 pour l�"acquisition de 20 locomotives bimodes :</p>
<ul class="texte">
<li>5 pour le Train de l�"Est</li>
<li>3 pour l�"accroissement de capacité sur la ligne Deux-Montagnes</li>
<li>9 pour le remplacement des locomotives F-40 et GC-418<br />(ainsi que pour l�"accroissement des lignes Blainville-Saint-Jérôme, Mont-Saint-Hilaire et Delson-Candiac). </li>
</ul>
<p> </p>
<p class="texte">Le contrat d�"acquisition a été signé le 18 août 2008 et la production va bon train.</p>
<p class="texte"> </p>
</div>
		</div>
        <br />
    </div>
    
    
    
    
    
    
    
    
    
    
  
    
    
      
    
    
    <br /><br /><br /><br />
    

                            </td>
		<td align="right" valign="top">
                            <div style="width:307px;">
                              
    <table cellpadding="0" cellspacing="0" border="0" width="307">
        <tr>
            <td>
                <!-- ************** Section Menu de droit  ************************* -->
                <div id="ctl00_ContentPlaceHolder_BlockDroit_ContentBlock_Right">
			<!-- Lien vedette --><table class="tbl_lienvedette_droite" cellspacing="0" cellpadding="0">
<tbody>
<tr>
<td><a title="Première rame de nouvelle voitures sur la ligne Montréal / Mont-Saint-Hilaire" href="http://www.amt.qc.ca/salle_de_presse/communiques.aspx?communiqueid=37"><img style="MARGIN-BOTTOM: 5px" title="Première rame de nouvelle voitures sur la ligne Montréal / Mont-Saint-Hilaire" border="0" alt="Première rame de nouvelle voitures sur la ligne Montréal / Mont-Saint-Hilaire" src="http://www.amt.qc.ca/uploadedImages/AMT/Site_Corpo/Nouvelles_et_Publications/V3000_StHilaire.jpg?n=5022" /></a></td>
</tr>
<tr>
<td class="td_lien_vedette_droite_top"><p><a class="lien_puce_droite" title="Nouvelles voitures mutli-niveaux" href="http://www.amt.qc.ca/salle_de_presse/communiques.aspx?communiqueid=37" target="_self">Nouvelles voitures mutli-niveaux</a> </p>
<p class="texte_lien_puce_droite">La première rame de voitures multi-niveaux circule sur la ligne Montréal / Mont-Saint-Hilaire !</p>
</td>
</tr>
</tbody>
</table>
<!-- FIN - Lien vedette -->
		</div>
            </td>
        </tr>
    </table>

                              </div>
                            </td>
	</tr>
</table>

                           
                           <table id="ctl00_Block_Bottom" cellpadding="0" cellspacing="0" border="0">
	<tr>
		<td>
                           
                           </td>
	</tr>
</table>

                            
                            
                            
                        </td>
                        <td style="background: #ffffff">
                            &nbsp;
                        </td>
                    </tr>
                </table>
                </div>
            </td>
        </tr>
    </table>
    <div id="foot" style="text-align: left;">
        
        <table border="0" cellpadding="0" cellspacing="0" width="929px" style="margin-left: auto; margin-right: auto; height: 40px;">
            <tr>
                <td align="left" width="320px" style="padding-bottom:10px;">
                    <table border="0" cellpadding="0" cellspacing="0">
                        <tr valign="middle">
                            <td>
                            <span class="footer_sep">|</span><a href="https://courriel.amt.qc.ca/owa" class="menu_footer" target="_blank">Accès courriel</a><span class="footer_sep">|</span><a href="http://www.extranet.amt.qc.ca/login.asp" class="menu_footer" target="_blank">Extranet</a><span class="footer_sep">|</span>
                            </td>
                        </tr>
                    </table>
                </td>
                <td align="right" width="609px" style="padding-bottom:8px;">
                    <table border="0" cellpadding="0" cellspacing="0">
                        <tr valign="middle">
                            <td>
                            <a href="http://www.facebook.com/Agencemetropolitainedetransport" target="_blank"><img src="http://www.amt.qc.ca/uploadedImages/AMT/icon-facebook.png" alt="Facebook" class="menu_footer_image" /></a><a href="https://plus.google.com/u/0/102468827139537239600/posts" target="_blank"><img src="http://www.amt.qc.ca/uploadedImages/AMT/google.png" alt="Google+" class="menu_footer_image" /></a><a href="http://twitter.com/#!/amt_info" target="_blank"><img src="http://www.amt.qc.ca/uploadedImages/AMT/icone-twitter.png" alt="Twitter" class="menu_footer_image" /></a><a href="http://vimeo.com/amtransport" target="_blank"><img src="http://www.amt.qc.ca/uploadedImages/AMT/icon-vimeo.png" alt="Vimeo" class="menu_footer_image" /></a><a href="http://www.flickr.com/photos/agencemetropolitainedetransport/" target="_blank"><img src="http://www.amt.qc.ca/uploadedImages/AMT/icone-flicker.png" alt="Flickr" class="menu_footer_image" /></a><a href="http://www.amt.qc.ca/servicesmobiles" target="_blank"><img src="http://www.amt.qc.ca/uploadedImages/AMT/icone-mobile.png" alt="Services mobiles" class="menu_footer_image" /></a><a href="http://idees.amt.qc.ca" target="_blank"><img src="http://www.amt.qc.ca/uploadedImages/AMT/transportdidees.png" alt="Transport d'idées" class="menu_footer_image" /></a><span class="footer_sep">|</span><a href="http://www.amt.qc.ca/service_clientele/" class="menu_footer">Service à la clientèle</a><span class="footer_sep">|</span><a href="http://www.amt.qc.ca/confidentialite.aspx" class="menu_footer">Confidentialité</a><span class="footer_sep">|</span><a href="http://www.amt.qc.ca/mentions_legales.aspx" class="menu_footer">© Tous droits réservés - AMT 2011</a><span class="footer_sep">|</span>
                            </td>
                        </tr>
                    </table>
                </td>
            </tr>
        </table>
    </div>
    
<script language='javascript'>document.getElementById('barre2').src = '/images/header/corpo/menu_sep_over.gif';document.getElementById('barre3').src = '/images/header/corpo/menu_sep_over.gif';</script></form>

</body>
</html>

