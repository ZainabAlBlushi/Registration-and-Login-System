<?php

 $dbhost = "localhost";
 $dbuser = "root";
 $dbpass = "";
 $db = "register";
 


$mysqli = new mysqli($dbhost,  $dbuser,  $dbpass, $db);
 

if($mysqli === false){
    die("ERROR: Could not connect. " . $mysqli->connect_error);
}
?>