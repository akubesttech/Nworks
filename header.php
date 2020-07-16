<!DOCTYPE html>
<html class=" js flexbox canvas canvastext webgl no-touch geolocation postmessage no-websqldatabase indexeddb hashchange history draganddrop websockets rgba hsla multiplebgs backgroundsize borderimage borderradius boxshadow textshadow opacity cssanimations csscolumns cssgradients no-cssreflections csstransforms csstransforms3d csstransitions fontface generatedcontent video audio localstorage sessionstorage webworkers applicationcache svg inlinesvg smil svgclippaths"><head>
<meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <meta charset="utf-8">
    <link href="assets/css/css.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="assets/css/font-awesome.css" type="text/css">
    <link rel="stylesheet" href="assets/css/base.css" type="text/css">
    <link rel="stylesheet" href="assets/css/ApplyAlberta.css">
    <link rel="stylesheet" href="assets/css/SearchMacro.css">
    <meta name="viewport" content="user-scalable=no, width=device-width, initial-scale=1, maximum-scale=1">
    <meta name="author" content="akubest">
    
    <title><?php if($_GET['view'] == "About"){ echo "About Campus Management | CMSystem" ;}if($_GET['view'] == "Need_More_Info"){
echo "Need More Information | CMSystem";
}if($_GET['view'] == "Help"){
echo "Need Support/Help | CMSystem";
}if($_GET['view'] == ""){
echo "Campus Management System";
}if($_GET['view'] == "FAQ"){
echo "Frequently-Asked Questions | CMSystem";
}
if($_GET['view'] == "System_Availability"){
echo "System Availability | CMSystem";
}
if($_GET['view'] == "Our_institutions"){
echo "Our Institutions | CMSystem";
}
if($_GET['view'] == "Before_You_Start"){
echo "Before You Start | CMSystem";
}
//if{ echo "Frequently-Asked Questions | ApplyAlberta"; }
	
	 ?></title>

<link rel="shortcut icon" href="https://edu.smartdelta.com.ng/favicon2.ico" type="image/x-icon">
    <link rel="icon" href="https://edu.smartdelta.com.ng/favicon2.ico" type="image/x-icon">
    
    <!-- CDF: No CSS dependencies were declared //-->

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
            <script src="/government_theme/js/html5shiv.js"></script>
            <script src="/government_theme/js/respond.min.js"></script>
    <![endif]-->
    <script type="text/javascript" async="" src="ApplyAlberta_files/linkid.js"></script><script async="" src="ApplyAlberta_files/analytics.js"></script><script>
        (function (i, s, o, g, r, a, m) {
            i['GoogleAnalyticsObject'] = r;
            i[r] = i[r] || function () {
                (i[r].q = i[r].q || []).push(arguments)
            }, i[r].l = 1 * new Date();
            a = s.createElement(o),
        m = s.getElementsByTagName(o)[0];
            a.async = 1;
            a.src = g;
            m.parentNode.insertBefore(a, m)
        })(window, document, 'script', '//www.google-analytics.com/analytics.js', 'ga');

        ga('create', 'UA-20099882-1', 'auto');
        ga('require', 'linkid');
        ga('send', 'pageview');
    </script>
</head>

<body class="alberta-theme">
    <!--[if lt IE 9 ]>
        <div class="alerts">
            <h1>Important Messages</h1>
            <a href="http://browsehappy.com/">
                <h1><i class="fa fa-warning"></i>You are using an older browser</h1>
                <p>Please upgrade for an optimal experience</p>
            </a>
        </div>
    <![endif]-->
    <div class="loading-modal" style="display:none;">
        <div class="fa fa-cog fa-spin fa-2x progress-animation"></div>
    </div>
    



<header class="site-header" id="header">
    <div class="container">
        <div id="branding" class="row nopadding nomargin">
            <div class="col-sm-12 show-for-print">
                <img src="assets/media/apply-alberta-logo.png" alt="">
            </div>
<!--            <div class="col-xs-12 text-right header-mini-links">
                    <a href="/APAS.Web.Administration">
                        Staff Login
                    </a>
                                    <a href="/APAS.Web.Administration">
                            <i class="fa fa-caret-square-o-right"></i>
                        
                    </a>
            </div> -->
            
            <div class="col-xs-12 col-md-6 logo-container">
                <a href="#">
                    <div class="applyab-logo"><span class="access-offscreen">Apply</span></div>
                </a>
            </div>
            
            <div class="topics-buttons text-right"></div>
            
            <div class="topics-menu">
			</div>
            <div class="col-sm-6 col-md-6 search-holder nopadding">
                <div class="search-input margin-md-bottom">
                    <a href="javascript:{}" class="search-submit" onclick="document.getElementById('top_search').submit();"><span class="fa fa-search"></span></a>
                    <form method="get" action="/Search" id="top_search" _lpchecked="1">
                        <input class="top-search form-control" name="q" autocomplete="on" placeholder="Search CMSystem" type="text">
                    </form>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid nav-bar-top">
        <div class="row local-nav-top">
            <div class="col-xs-12 nopadding-md-down">
                <div class="container container-fluid-md-down">
                    <div class="row">
                        <div class="col-xs-12 page-navbox">
                            <div class="row">
                                <div class="col-xs-12">
                                    <nav class="nav-right" id="nav-local">
                                        <ul class="menu">
<li class='hidden-sm hidden-xs home-icon active'>
        <a href="../"><i class="fa fa-home"></i></a>
    </li> 
  <li >
                    <a href="/?view=About">About CMSystem</a>
                        <ul class="menu hidden-md hidden-lg">
                                <li>
                                    <a href="/?view=Before_You_Start">Before You Start</a>
                                </li>
                                <li>
                                    <a href="#">Application Process</a>
                                </li>
                                <li>
                                    <a href="#">Institutions</a>
                                </li>
                        </ul>
                </li>
              
                <li>
                    <a href="/?view=Need_More_Info">Need More Information?</a>
                        <ul class="menu hidden-md hidden-lg">
                                <li>
                                    <a href="#">Undergraduate Students</a>
                                </li>
                                <li>
                                    <a href="#">Graduate Studies</a>
                                </li>
                                <li>
                                    <a href="#">International Students</a>
                                </li>
                                <li>
                                    <a href="#">Continuing Education</a>
                                </li>
                                <li>
                                    <a href="#">Apprenticeship Programs</a>
                                </li>
                                
                        </ul>
                </li>
                <li>
                    <a href="/?view=Help">Support/Help</a>
                        <ul class="menu hidden-md hidden-lg">
                                <li>
                                    <a href="s_avail.htm">System Availability</a>
                                </li>
                                <li>
                                    <a href="#">Frequently-Asked Questions</a>
                                </li>
                        </ul>
                </li>

</ul>
                                    </nav>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>