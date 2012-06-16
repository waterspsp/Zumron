<?php
include_once "components/sabnzbd/api.php";	
include "config.php"; 
$url_folder = substr(substr($_SERVER["REQUEST_URI"],1), 0, strpos(substr($_SERVER["REQUEST_URI"],1), "/"));
$sabnzbdip = $settings["sabnzbdip"];
$sabnzbdport = $settings["sabnzbdport"];
$sabnzbdapi = $settings["sabnzbdapi"];
?>
<link rel="stylesheet" type="text/css" href="/<?php echo $url_folder ;?>/templates/zumron_base/styles.css" />
<body><center>
	<div class="all">
		<div class="column-middle" id="column1">
			<div class="box1">
				<div class="dragbox">
					<center><h1>Sabnzbd current queue</h1></center>
						<div class="dragbox-content">
							<?php
								$sabnzbd = new sabnzbd;
								$xml1 = simplexml_load_file('http://$sabnzbdip:$sabnzbdport/api?mode=queue&start=START&limit=LIMIT&output=xml&apikey=$sabnzbdportapi');  
								$movie = $sabnzbd->getdownloadqueueinfo($xml1);
								Print_r($movie);
							?>		
						</div>
				</div>
			</div>
			<div class="box1">
				<div class="dragbox">
					<center><h1>last 5 downloads</h1></center>
						<div class="dragbox-content">
							<?php
								$sabnzbd = new sabnzbd;
							
								$xml = simplexml_load_file("http://$sabnzbdip:$sabnzbdport/api?mode=history&start=START&limit=5&output=xml&apikey=$sabnzbdapi"); 
								$xml1 = simplexml_load_file('http://$sabnzbdip:$sabnzbdport/api?mode=queue&start=START&limit=LIMIT&output=xml&apikey=$sabnzbdportapi'); 
								$movie = $sabnzbd->getdownloadmovieinfo($xml,$xml1);
								Print_r($movie);
							?>
						</div>
				</div>
			</div>
			<div class="box1">
				<div class="dragbox">
					<center><h1>Sabnzbd Statistics</h1></center>
						<div class="dragbox-content">
							<?php
								$sabnzbd = new sabnzbd;
								$xml = simplexml_load_file("http://$sabnzbdip:$sabnzbdport/api?mode=history&start=START&limit=5&output=xml&apikey=$sabnzbdapi"); 
								$xml1 = simplexml_load_file('http://$sabnzbdip:$sabnzbdport/api?mode=queue&start=START&limit=LIMIT&output=xml&apikey=$sabnzbdportapi'); 
								$movie = $sabnzbd->getSizeSpeed($xml,$xml1);
								Print_r($movie);
							?>
						</div>
				</div>
			</div>
		</div>		
	</div></center>
</body>

