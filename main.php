<?php
include "components/sabnzbd/api.php";	
include "settings/functions/getsettings.php";
include "config.php"; 
$url_folder = substr(substr($_SERVER["REQUEST_URI"],1), 0, strpos(substr($_SERVER["REQUEST_URI"],1), "/"));
$settingsget = new getsettings();


Print_r($settingsget->sabnzbdsettings());


?>
<link rel="stylesheet" type="text/css" href="/<?php echo $url_folder ;?>/templates/zumron_base/styles.css" />
<body><center>
	<div class="all">		
		<div class="column-middle" id="column1">
			<?php
				mysql_connect($mysql["Server"],$mysql["Username"],$mysql["Password"]);
											@mysql_select_db($mysql["Database"]) or die( "Unable to select database");
											$result = mysql_query("select value FROM Settings where type='sabnzbdsetting' and visible_name='Sabnzbd' and value = 'on' ");	
$row = mysql_fetch_array($result);
if (!empty($row[0])) {

?>
				<div class="box1">
				<div class="dragbox">
					<center><h1>Sabnzbd current queue</h1></center>
						<div class="dragbox-content">
							<?php
								$sabnzbd = new sabnzbd;
								
								$xml = simplexml_load_file("http://$sabnzbdip:$sabnzbdport/api?mode=queue&start=START&limit=10&output=xml&apikey=$sabnzbdapi");  
								$movie = $sabnzbd->getdownloadqueueinfo($xml);
							
								Print_r($config);
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
				<?php
								$sabnzbd = new sabnzbd;
								$xmlconfig = simplexml_load_file("http://$sabnzbdip:$sabnzbdport/api?mode=get_config&section=categories&output=xml&apikey=$sabnzbdapi");
								$xml = simplexml_load_file("http://$sabnzbdip:$sabnzbdport/api?mode=history&start=START&output=xml&apikey=$sabnzbdapi");  
								$config = $sabnzbd->getconfiginfo($xmlconfig);
								$movie1 = $sabnzbd->buildcatbox($xml,$movie,$config,$sabnzbdip,$sabnzbdport,$sabnzbdapi);
							?>	
		</div>		
<?php
}
else{
}

?>
			
	</div></center>
</body>

