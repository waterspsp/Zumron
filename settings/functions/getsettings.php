<?php
$url_folder = substr(substr($_SERVER["REQUEST_URI"],1), 0, strpos(substr($_SERVER["REQUEST_URI"],1), "/"));
 
include_once "/<?php echo $url_folder ;?>/config.php";


class getsettings {
	
	function menu() {
		global $mysql;	
		
		mysql_connect($mysql["Server"],$mysql["Username"],$mysql["Password"]);
		@mysql_select_db($mysql["Database"]) or die( "Unable to select database");
		$result = mysql_query("select visible_name, value, id, value2 FROM Settings where type = 'menu'");
	 		
			while($row = mysql_fetch_array( $result )) 
			{
				?>
				<form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
				<?php
				$Name = $row[0];
				$Value = $row[1];
				$id = $row[2];
				$url = $row[3];
				$off = "off";
				$on = "on";  
				

				 if ($row[1] == $off) {
				
				 	echo '<input  type="hidden" name="update" id="update" value="on">';
						  ?><input  type="text" name="name" id="name" value="<?php echo $Name; ?>"><?php
						 ?><input  type="hidden" name="id" id="id" value="<?php echo $id; ?>"><?php
						 ?><input  type="text" name="url" id="url" value="<?php echo $url; ?>"><?php
				 		echo "<input type='submit' name='button' id='button' value='Turn on and set url'>";
						
				 }
				 elseif($row[1] == "on")  {
				 	echo '<input  type="hidden" name="update" id="update" value="off">';
					  ?><input  type="text" name="name" id="name" value="<?php echo $Name; ?>"><?php
					 ?><input  type="hidden" name="id" id="id" value="<?php echo $id; ?>"><?php
					 ?><input  type="text" name="url" id="url" value="<?php echo $url; ?>"><?php
				 	echo "<input type='submit' name='button' id='button' value='Turn off and set url'>";
					
				 }
				 
       			echo "</form>"; 
			
			}
			 

		
		}
function addmenu() {
	echo "<br>";
				Echo "Add menu item:";
	?>
		
			 <form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
			<input  type="hidden" name="new" id="new" value="yes">
			 Name:<input  type="text" name="name" id="name"> <br>
			 <input  type="hidden" name="value" id="value" value="off">
			 <input  type="hidden" name="type" id="type" value="menu">
			 Url:<input  type="text" name="url" id="url">
			 <input type='submit' name='button' id='button' value='Add new item'>
			 </form>
			 <?php
	}

	function submenu() {
		global $mysql;	
		
		mysql_connect($mysql["Server"],$mysql["Username"],$mysql["Password"]);
		@mysql_select_db($mysql["Database"]) or die( "Unable to select database");
		$result = mysql_query("select visible_name, value, id, value2 FROM Settings where type = 'submenu'");
	 		
			while($row = mysql_fetch_array( $result )) 
			{
				?>
				<form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
				<?php
				$Name = $row[0];
				$Value = $row[1];
				$id = $row[2];
				$url = $row[3];
				$off = "off";
				$on = "on";  
				
				 if ($row[1] == $off) {
				
				 	echo '<input  type="hidden" name="update" id="update" value="on">';
						  ?><input  type="text" name="name" id="name" value="<?php echo $Name; ?>"><?php
						 ?><input  type="hidden" name="id" id="id" value="<?php echo $id; ?>"><?php
						 ?><input  type="text" name="url" id="url" value="<?php echo $url; ?>"><?php
				 		echo "<input type='submit' name='button' id='button' value='Turn on and set url'>";
						
				 }
				 elseif($row[1] == "on")  {
				 	echo '<input  type="hidden" name="update" id="update" value="off">';
					 ?><input  type="text" name="name" id="name" value="<?php echo $Name; ?>"><?php
					 ?><input  type="hidden" name="id" id="id" value="<?php echo $id; ?>"><?php
					 ?><input  type="text" name="url" id="url" value="<?php echo $url; ?>"><?php
				 	echo "<input type='submit' name='button' id='button' value='Turn off and set url'>";
					
				 }
				 
       			echo "</form>"; 
			
			}
			 

		
		}



	function sabnzbddashboard() {
		global $mysql;	
		
		mysql_connect($mysql["Server"],$mysql["Username"],$mysql["Password"]);
		@mysql_select_db($mysql["Database"]) or die( "Unable to select database");
		$result = mysql_query("select value, id FROM Settings where type = 'sabnzbdsetting'");
	 		$row = mysql_fetch_array( $result );
			Echo "Use Sabnzbd on dashboard ";	
			$id = $row[id];
						?>
				<form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>"><?php
				 if ($row[0] == "off") {
				
				 	echo '<input  type="hidden" name="update" id="update" value="on">';
						
						 ?><input  type="hidden" name="id" id="id" value="<?php echo $id; ?>"><?php
						
				 		echo "<input type='submit' name='button' id='button' value='Turn on'>";
						
				 }
				 elseif($row[0] == "on")  {
				 	echo '<input  type="hidden" name="update" id="update" value="off">';
					
					 ?><input  type="hidden" name="id" id="id" value="<?php echo $id; ?>"><?php
					
				 	echo "<input type='submit' name='button' id='button' value='Turn off'>";
					
				 }
				 
       			echo "</form>"; 
			
			
			 

		
		}




function addsubmenu() {
	echo "<br>";
				Echo "Add menu item:";
	?>
		
			 <form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
			<input  type="hidden" name="new" id="new" value="yes">
			 Name:<input  type="text" name="name" id="name"> <br>
			 <input  type="hidden" name="value" id="value" value="off">
			 <input  type="hidden" name="type" id="type" value="submenu">
			 Url:<input  type="text" name="url" id="url">
			 <input type='submit' name='button' id='button' value='Add new item'>
			 </form>
			 <?php 
	}

function sabnzbd() {
	global $mysql;	
		
		mysql_connect($mysql["Server"],$mysql["Username"],$mysql["Password"]);
		@mysql_select_db($mysql["Database"]) or die( "Unable to select database");
		$result = mysql_query("select value FROM Settings where visible_name = 'Sabnzbd'");
	 		
		$row = mysql_fetch_array( $result ) 
			
				?>
				<form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
				<?php
				 if ($row[0] == "off") {
				
				 	echo 'Please enable sabnzbd before you can go any further';
		
						
				 }
				 elseif($row[0] == "on")  {
				 	
						$result2 = mysql_query("select visible_name, value, value2, value3, value4, id FROM Settings where visible_name = 'Sabnzbd' and type = 'sabnzbdsetting'");
						while($query = mysql_fetch_array( $result2 )){
								
				$Name = $query[0];
				$Value = $query[1];
				$ip = $query[2];
				$port = $query[3];
				$api = $query[4];
				$id = $query[5];
				
						
							echo '<input  type="hidden" name="update1" id="update1" value="on">';
							 ?><input  type="hidden" name="name" id="name" value="<?php echo $Name; ?>"><?php
							 ?><input  type="hidden" name="id" id="id" value="<?php echo $id; ?>"><?php
							 ?><input  type="text" name="ip" id="ip" value="<?php echo $ip; ?>"><?php
							 ?><input  type="text" name="port" id="port" value="<?php echo $port; ?>"><?php
							 ?><input  type="text" name="api" id="api" value="<?php echo $api; ?>"><?php
				 			echo "<input type='submit' name='button' id='button' value='Change settings'>";
							
								
				 }}
				 
       			echo "</form>"; 
			
	}


function sabnzbdsettings() {
	global $mysql;	
		
		mysql_connect($mysql["Server"],$mysql["Username"],$mysql["Password"]);
		@mysql_select_db($mysql["Database"]) or die( "Unable to select database");
		$result = mysql_query("select value FROM Settings where visible_name = 'Sabnzbd' and type = 'sabnzbdsetting' ");
	 		
		$row = mysql_fetch_array( $result ) 
			
				?>
				<form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
				<?php
				 if ($row[0] == "off") {
				
				 	
		
						
				 }
				 elseif($row[0] == "on")  {
		
		
		mysql_connect($mysql["Server"],$mysql["Username"],$mysql["Password"]);
		@mysql_select_db($mysql["Database"]) or die( "Unable to select database");
						$result2 = mysql_query("select visible_name, value, value2, value3, value4, id FROM Settings where visible_name = 'Sabnzbd' and type = 'sabnzbdsetting'");
						while($query = mysql_fetch_array( $result2 )){
	global $sabnzbdip;
							global $sabnzbdport;	
							global $sabnzbdapi;							
$sabnzbdip = $query[2];
$sabnzbdport = $query[3];
$sabnzbdapi = $query[4];



								
				
			
	}}}


}


	




?>