<?php
   include "components/topmenu/config.php"; 
?>

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
  <head>
    <title>Zumron</title>
  		<link rel="stylesheet" type="text/css" href="templates/zumron_base/navcss.php">
  </head>
  <body>
  		<div id="header">
  			<div id="menu-left">
  				
  			</div>
  			<div id="menu-right-top">
				<ul>
					<?php 
					
						foreach( $navlink as $navlinklabel => $navlinkpath) {
						echo"          <li><a href='".$navlinkpath."' target=main>".$navlinklabel."</a></li>";
		   				 }
		 			?>
  				</ul>
			</div>
			<div id="menu-right-bottom">
				<ul>
					<?php
				
						foreach( $subnavlink as $subnavlinklabel => $subnavlinkpath) {
						echo "         <li><a href='".$subnavlinkpath."' target=main>".$subnavlinklabel."</a></li>";
	    				}
					?>
				</ul>
			</div>
  		</div>
    <IFRAME id="frame" SRC="main.php" name=main style="width:100%;	height:94%;border:0px;margin-top:-1px " frameborder="0"
	 scrolling="yes" ></IFRAME>
	<noframes>
	    <p>Your browser does not support frames</p>
	</noframes>
  </body>
</html>
