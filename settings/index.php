<?php
   include "config.php"; 
   include "functions/getsettings.php";
   include "functions/setsettings.php";
   $url_folder = substr(substr($_SERVER["REQUEST_URI"],1), 0, strpos(substr($_SERVER["REQUEST_URI"],1), "/"));
?>
<link rel="stylesheet" type="text/css" href="/<?php echo $url_folder ;?>/templates/zumron_settings/styles.css" />
<html>
	<header>
		
	</header>
	<body>
		<div class="left-frame">
			<ul>Basic settings</ul>
				<li><a href="/<?php echo $url_folder ;?>/settings/menu.php">Top menu settings</a></li>
				<li><a href="/<?php echo $url_folder ;?>/settings/submenu.php">Submenu settings</a></li><br>
							<ul>Advanced settings</ul>
				<li><a href="/<?php echo $url_folder ;?>/settings/sabnzbd.php">Sabnzbd settings</a></li>
		</div>
		<div class="right-frame">
			
		</div>
	</body>
</html>

