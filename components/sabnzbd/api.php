<?php 

class sabnzbd{
	
function getSizeSpeed($xml){
	echo "Downloaded in Total: "  ;
	echo $xml->total_size; 
	echo "<br>";
	echo "Downloaded This Month: "  ;
	echo $xml->month_size; 
	echo "<br>";
	echo "Downloaded This week: ";
	echo $xml->week_size; 
	echo "<br>";
	echo "<br>";
	echo "Current Download speed: ";
	echo $xml->speed; 
}



function getconfiginfo($xmlconfig){
	$categoryarray = array();
	foreach ($xmlconfig->categories->category as $category){
		$categoryarray[] = array($category->name);
		
      }
		return $categoryarray;
	}


function buildcatbox($xml,$xml1,$config,$sabnzbdip,$sabnzbdport,$sabnzbdapi){
		
foreach ($config as $category){
	foreach ($category as $categorie){
		
		echo "	<div class='column-middle' id='column1'>"; 
		echo 	"<div class='box1'>" ;
		echo "		<div class='dragbox'>" ;		
		echo "		<center><h1>top 10 Latest $categorie downloads</h1></center>" ;
		
		echo "						<div class='dragbox-content'>" ;
			
								$xml = simplexml_load_file("http://$sabnzbdip:$sabnzbdport/api?mode=history&start=START&output=xml&apikey=$sabnzbdapi"); 
								$movie = $this->getdownloadmovieinfo($xml,$categorie);
								print_r($movie);
								
		echo "						</div>" ;
		echo "				</div>" ;
		echo "			</div>" ;
	
		
	}

}
}

function getdownloadmovieinfo($xml,$categorie){




$count=0;
$item1= movies;



 foreach ($xml->slots->slot as $item) {
$haystack = (string)$item->category;
$needle = (string)$categorie;

$movies = array();
 if(stristr($haystack, $needle) != False) 
	 {
		$url =  $item->url_info;
		$name = $item->name;
 		$movies[] = array(
        'name' => $name,
        'url' => $url
   );

		 foreach ($movies as $movie) {
		 	if($count <=9){
		 		if(strstr($movie[url],'http')){
		 			echo "<a href=$movie[url]  target='_Blank'>$movie[name]</a>";
					
		 		} Else  
				echo $movie[name];
					echo "<br>";
		     } else {
		     	
		     	
		     } 
			 $count++;
		}
	}
 }
 

}

function getdownloadqueueinfo($xml1){


foreach ($xml1->slots->slot as $item) {


$count=0;
if(($count % 10) == 0){
		echo "$item->filename";
	$count++;
}
	
	($item->name);
	print "<br>";
}


}
}

?> 
