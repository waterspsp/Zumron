<?php
 $url_folder = substr(substr($_SERVER["REQUEST_URI"],1), 0, strpos(substr($_SERVER["REQUEST_URI"],1), "/"));
   include "../config.php"; 
   include "functions/getsettings.php";
   include "functions/setsettings.php";
   if(isset($_POST['update'])) {
			$settingsset = new setsettings();

				$settingsset->menu($_POST['name'],$_POST['update'],$_POST['id'],$_POST['url']);
	
   }
	   if(isset($_POST['new'])) {
		$settingsset = new setsettings();

				$settingsset->newmenu($_POST['name'],$_POST['value'],$_POST['type'],$_POST['url']);
	?>
	
	
<?php
	}
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
			<?php
				$settingsget = new getsettings();

				$settingsget->submenu();
			
				$settingsget->addsubmenu();
				
			?>
			After updating a setting please refresh refresh the page by hitting F5
		</div>
	</body>
</html>

