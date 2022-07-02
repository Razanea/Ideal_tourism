<?php
 
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "customers";

 //create connection
 $conn = mysqli_connect($servername, $username, $password ,  $dbname);

 //check conncetion
 if(! $conn )
   {
     die('Could not connect: ' . mysql_error());
   }

?>

