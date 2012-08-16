<?php
//ENTER THE RELEVANT INFO BELOW
include "./config.php"; 
$mysqlImportFilename ='zumron.sql';

//DONT EDIT BELOW THIS LINE
//Export the database and output the status to the page
$command='mysql -h '.$mysql["Server"].' -u'.$mysql["Username"].' -p'.$mysql["Password"] .' < ' .$mysqlImportFilename;
          
exec($command,$output=array(),$worked);
switch($worked){
    case 0:
        echo 'Zumron is successfully installed <br> Remove install.php and zumron.sql and click <a href="./"> here to launch zumron</a>'	 ; 
        break;
    case 1:
        echo 'There was an error during import. Please make sure the import file 
        is saved in the same folder as this script and check your values:<br/><br/><table>
        <tr><td>MySQL Database Name:</td><td><b>' .$mysql["Database"]  .'</b></td></tr><tr><td>MySQL User Name:</td><td><b>' .$mysql["Username"]  .'</b></td></tr><tr><td>MySQL Password:</td><td><b>NOTSHOWN</b></td></tr><tr><td>MySQL Host Name:</td><td><b>' .$mysql["Server"] .'</b></td></tr><tr><td>MySQL Import Filename:</td><td><b>' .$mysqlImportFilename .'</b></td></tr></table><br><br> It can also be that there is already a database with the same name installed';
        break;
}
