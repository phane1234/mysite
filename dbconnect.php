<?php
 
$servername="localhost:3308";

 $username="phane";

 $password="phane1234";

 $dbname="slim";
 $mysql =  new mysqli($servername,$username,$password,$dbname);
if (!$mysql) {
    die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully";
 ?>