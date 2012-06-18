<?php
header("Content-type: text/css"); 
$url_folder = substr(substr($_SERVER["REQUEST_URI"],1), 0, strpos(substr($_SERVER["REQUEST_URI"],1), "/"));
?>
body {margin:0px;background: url(images/top-bg.png);}

/*------------------------------------------------*/
/*---------------[MAIN LAYOUT INFO]---------------*/
/*------------------------------------------------*/


						#menu { background: url(images/left-menu-bg.png) no-repeat top left; padding-left: 11px; height: 49px; }
							#menu-right { background: url(images/right-menu-bg.png) no-repeat top right; padding-right: 11px; height: 49px; }
								#menu-content { background: url(images/content-menu-bg.png) repeat-x; height: 49px; }
											
/*------------------------------------------------*/
/*---------------[DROPDOWN MENU]------------------*/ 
/*------------------------------------------------*/

ul#top-menu { float: left; padding-left: 112px; font-weight: bold;}
	ul#top-menu li { margin-right: 9px; padding-left: 10px; padding-top: 14px; }
		ul#top-menu a { font-size:14px; color: #ffffff; text-decoration: none; text-shadow: 1px 1px 1px rgba(0,0,0,0.8); }
		ul#top-menu a:hover { color: #8d96a0; }
		ul#top-menu > li.current_page_item > a { color: #8d96a0 !important; font-style: italic; font-family: Georgia, serif;}
ul#sub-menu { float: left; }
	ul#sub-menu li { margin-right: 9px; padding-left: 10px;  }
		ul#sub-menu a { font-size:12px; color: #ffffff; text-decoration: none; text-shadow: 1px 1px 1px rgba(0,0,0,0.8); }
		ul#sub-menu a:hover { color: #8d96a0; }
		ul#sub-menu > li.current_page_item > a { color: #8d96a0 !important; font-style: italic; font-family: Georgia, serif;}
	
	ul.nav li ul { width: 178px !important; padding: 4px 5px 14px 37px; background: #e7e7e7 url(images/dropdown-bg.png) repeat-y; top: 49px !important; box-shadow: 3px 6px 7px 1px rgba(0, 0, 0, 0.1); -moz-box-shadow:3px 6px 7px 1px rgba(0, 0, 0, 0.1); -webkit-box-shadow: 3px 6px 7px 1px rgba(0, 0, 0, 0.1); border-color: 1px solid #323b44; border-radius: 10px; -moz-border-radius: 10px; -webkit-border-radius: 10px; border-top-left-radius: 0px;-moz-border-radius-topleft: 0px; border-top-right-radius: 0px; -webkit-border-top-left-radius: 0px; -moz-border-radius-topright: 0px; -webkit-border-top-right-radius: 0px; z-index: 9999px; display: none; }
		ul.nav ul li { margin: 0 !important; padding: 0 !important; }
			ul.nav ul li a { padding: 12px 0px !important; width: 170px; }
			
			ul.nav li:hover ul ul, ul.nav li.sfHover ul ul { top: -3px !important; left: 182px !important; -moz-border-radius: 8px; -webkit-border-radius: 8px; border-radius: 8px; }


/*------------------------------------------------*/
/*---------------[DEFAULT DROPDOWN SETTINGS]---*/
/*------------------------------------------------*/

.nav ul { position:absolute; top:-999em; background-position: bottom; background-repeat: no-repeat; z-index: 10; }
.nav li { float:left; position:relative; }
.nav a { display:block; float: left; font-family:verdana; }
	.nav li:hover ul, ul.nav li.sfHover ul { left:0px; top:50px; }
	.nav li:hover li ul, .nav li.sfHover li ul { top:-999em; }
		.nav li li:hover ul, ul.nav li li.sfHover ul { left:192px; top:0px; }
	.nav li:hover ul, .nav li li:hover ul { top: -999em; }
	.nav li li {	display: block;	padding: 0px; float: left; height: auto !important; }
	.nav li ul { width: 191px; z-index:1000; }
		.nav li li a:link, .nav li li a:visited {	display: block; height: auto; float: left; }
		.nav li:hover { visibility: inherit; /* fixes IE7 'sticky bug' */ }


.navsub ul { position:absolute; top:-999em; background-position: bottom; background-repeat: no-repeat; z-index: 10; }
.navsub li { float:left; position:relative; }
.navsub a { display:block; float: left; font-family:verdana;}
	.navsub li:hover ul, ul.nav li.sfHover ul { left:0px; top:50px; }
	.navsub li:hover li ul, .nav li.sfHover li ul { top:-999em; }
		.navsub li li:hover ul, ul.nav li li.sfHover ul { left:192px; top:0px; }
	.navsub li:hover ul, .nav li li:hover ul { top: -999em; }
	.navsub li li {	display: block;	padding: 0px; float: left; height: auto !important; }
	.nav li ul { width: 191px; z-index:1000; }
		.navsub li li a:link, .nav li li a:visited {	display: block; height: auto; float: left; }
		.navsub li:hover { visibility: inherit; /* fixes IE7 'sticky bug' */ }


/*------------------------------------------------*/
/*-----------------[RESET]------------------------*/
/*------------------------------------------------*/


html, body, div, span, applet, object, iframe,
h1, h2, h3, h4, h5, h6, p, blockquote, pre,
a, abbr, acronym, address, big, cite, code,
del, dfn, em, font, img, ins, kbd, q, s, samp,
small, strike, strong, sub, sup, tt, var,
b, u, i, center,
dl, dt, dd, ol, ul, li,
fieldset, form, label, legend { margin: 0; padding: 0; border: 0; outline: 0; font-size: 100%; vertical-align: baseline; background: transparent; }


.clearfix{
	float: left;
	width:111px;

}

#nav-menu {
   float:left;
   width:100%;
   background:#C5E946;
   overflow:hidden;
   position:relative;
   height: 35px;
}
#subnav {
   float:left;
   width:100%;
   background:#C5E946;
   overflow:hidden;
   position:relative;
   height: 25px;
}



#menu-right-bottom{
	height: 11px;
background-color:#323B44;
}


#menu-right-bottom ul {

   float:left;
   list-style:none;
   margin:-13px 0 0 0 ;
   padding:0;
margin-left:224px;
  
   text-align:center;
}

#menu-right-bottom  ul li {
   display:block;
   float:left;
   list-style:none;
   margin:0;
   padding:0;
   position:relative;
   
}
#menu-right-bottom ul li a {
   display:block;
   margin:0 0 0 1px;
   padding:3px 10px;
   color:#F7F7F7;
   text-decoration:none;
   line-height:1.3em;
   font-size: 12px;
   font-family: "Helvetica Neue", Helvetica, Arial, Geneva, sans-serif;
   font-weight: bold;
}
