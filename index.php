<?php
   include "config.php"; 
?>

	<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
  <head>
    <title>Zumron</title>
  		<link rel="stylesheet" type="text/css" href="templates/zumron_base/navcss.php">
  </head>
  <body>
  		  		<div id="header">
  			<div class="clearfix"><a href="http://www.zumron.net"style="border: 0px" target="_blank"><img src="templates/zumron_base/images/zumronlogo.png" /></a></div>
						
								<div id="menu-content">
										
									<ul id="top-menu" class="nav">
															
											<?php 
											echo"<li><a href='main.php' target=main>Home</a></li>";
											
											mysql_connect($mysql["Server"],$mysql["Username"],$mysql["Password"]);
											@mysql_select_db($mysql["Database"]) or die( "Unable to select database");
											$result = mysql_query("select visible_name, value2 FROM Settings where type = 'menu' and value = 'on' ");	
											
											
											while($row = mysql_fetch_array( $result )) {
												
												echo"<li><a href='".$row[1]."' target=main>".$row[0]."</a></li>";
											}
											
											
									echo"<li><a href='settings/index.php' target=main>Settings</a></li>";
								 			?>
									</ul>																		
						
										
								</div> <!-- end #menu-content -->	
							
							<div id="menu-right-bottom">
								<ul id="sub-menu" class="nav">
									<?php 					
											mysql_connect($mysql["Server"],$mysql["Username"],$mysql["Password"]);
											@mysql_select_db($mysql["Database"]) or die( "Unable to select database");
											$result = mysql_query("select visible_name, value2 FROM Settings where type = 'submenu' and value = 'on' ");	
											
											
											while($row = mysql_fetch_array( $result )) {
												
												echo"<li><a href='".$row[1]."' target=main>".$row[0]."</a></li>";
											}
											
											
									
								 			?>
								</ul>
							</div>
  		</div>
    <IFRAME id="frame" SRC="main.php" name=main style="width:100%;	height:92.72%;border:0px;margin-top:-1px " frameborder="0"
	 scrolling="yes" ></IFRAME>
	<noframes>
	    <p>Your browser does not support frames</p>
	</noframes>
  </body>
</html>
