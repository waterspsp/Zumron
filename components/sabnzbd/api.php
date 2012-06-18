<?php 
class sabnzbd{
	function getSizeSpeed($xml){
echo "Downloaded in Total: "  ;
echo $xml->total_size; // outputs 'abcdefg' 
echo "<br>";
echo "Downloaded This Month: "  ;
echo $xml->month_size; // outputs 'abcdefg' 
echo "<br>";
echo "Downloaded This week: ";
echo $xml->week_size; // outputs 'abcdefg' 
echo "<br>";
echo "<br>";
echo "Current Download speed: ";
echo $xml->speed; // outputs 'abcdefg' 
}


function getdownloadmovieinfo($xml,$xml1){


foreach ($xml->slots->slot as $item) {

$item1= movies;
$count=0;
if(($count % 5) == 0){

   if ($item->category==$item1){
 		echo "<a href=$item->url_info>$item->name</a>";
    $count++;
}else 
	
		
	echo "<a href=$item->url_info>$item->name</a>";
	$count++;
}
	
	//print ($item->name);
	print "<br>";
//    print ($item->storage);
//	print "<br>";
//    print ($item->size);
//	print "<br>";
//    print ($item->category);
//	print "<br>";
//print ($item->url_info);
//	print "<br>";

}


foreach ($xml1->categories->category as $item) {
  //  print ($item);
//	print "<br>";
}


//echo '<p>All data from XML:</p>'; 
//echo '<pre>'; 
//print_r($xml); 
//echo '</pre>'; 
}





function getdownloadqueueinfo($xml1){


foreach ($xml1->slots->slot as $item) {


$count=0;
if(($count % 5) == 0){

		echo "$item->filename";
	$count++;
}
	
	//print ($item->name);
	print "<br>";
//    print ($item->storage);
//	print "<br>";
//    print ($item->size);
//	print "<br>";
//    print ($item->category);
//	print "<br>";
//print ($item->url_info);
//	print "<br>";

}


foreach ($xml1->categories->category as $item) {
  //  print ($item);
//	print "<br>";
}


//echo '<p>All data from XML:</p>'; 
//echo '<pre>'; 
//print_r($xml); 
//echo '</pre>'; 
}
}

?> 
