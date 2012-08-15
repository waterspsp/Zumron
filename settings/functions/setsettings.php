<?php
include_once "Zumron-live/config.php";


class setsettings {
	
	function menu($name,$value,$id,$url) {
		global $mysql;	
		
		mysql_connect($mysql["Server"],$mysql["Username"],$mysql["Password"]);
		@mysql_select_db($mysql["Database"]) or die( "Unable to select database");
	
		
 		$sql = "UPDATE `Settings` SET `visible_name`= '$name',`value`= '$value',`value2`='$url' WHERE id = '$id'";
 		$result = mysql_query($sql) or die(mysql_error());
	}
	
	function newmenu($name,$value,$type,$url) {
		global $mysql;	
		
		mysql_connect($mysql["Server"],$mysql["Username"],$mysql["Password"]);
		@mysql_select_db($mysql["Database"]) or die( "Unable to select database");
				
 		$sql = "insert into `Settings` (type,visible_name,value,value2) VALUES ('$type',  '$name',  '$value',  '$url')";

		
 		$result = mysql_query($sql) or die(mysql_error());
	}
	
	function sabnzbd($name,$value,$id,$url) {
		
	global $mysql;	
		
		mysql_connect($mysql["Server"],$mysql["Username"],$mysql["Password"]);
		@mysql_select_db($mysql["Database"]) or die( "Unable to select database");
	
		
 		$sql = "UPDATE `Settings` SET `value`= '$value' WHERE id = '$id'";
 		$result = mysql_query($sql) or die(mysql_error());
	}
	
}



?>