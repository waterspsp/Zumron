<?php
header("Content-type: text/css"); 
$url_folder = substr(substr($_SERVER["REQUEST_URI"],1), 0, strpos(substr($_SERVER["REQUEST_URI"],1), "/"));
?>

body { 
	margin: 0px 0px 0px 0px; 
	overflow-y:hidden;
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

#menu-left {
   	background-image: url(/<?php echo $url_folder ;?>/templates/zumron_base/images/left_logo.png);
	height:74px;
	width:222px;
	float:left;	
	position:absolute;
}

#menu-right-top{
	height:30px;
	background-color: #95C11F; 
}
#menu-right-bottom{
	height:20px;
	background-color: #95C11F; 
}

#menu-right {
   float:right;
   background:#C5E946;

   position:relative;
   height: 50px;
}
#menu-right-top ul {
   float:left;
   list-style:none;
   margin:4px 0 0 0 ;
   padding:0;
   position:relative;
   left:224px;
   text-align:center;
}

#menu-right-bottom ul {

   float:left;
   list-style:none;
   margin:0px 0 0 0 ;
   padding:0;
margin-left:224px;
  
   text-align:center;
}
#menu-right-top ul li {
   display:block;
   float:left;
   list-style:none;
   margin:0;
   padding:0;
   position:relative;
   
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
#menu-right-top ul li a {
   display:block;
   margin:0 0 0 1px;
   padding:3px 10px;
   color:#F7F7F7;
   text-decoration:none;
   line-height:1.3em;
   font-size: 16px;
   font-family: "Helvetica Neue", Helvetica, Arial, Geneva, sans-serif;
   font-weight: bold;
}

#menu-right-top ul li a:hover {
    color:#fff;
}
#subnav ul li a:hover {
    color:#fff;
}
#menu-right-top ul li a.active,
#menu-right-top ul li a.active:hover {
   color:#666666;
    font-weight:bold;
}
#subnav ul li a.active,
#subnav ul li a.active:hover {
   color:#666666;
    font-weight:bold;
}