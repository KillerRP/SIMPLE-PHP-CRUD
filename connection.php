<?php

$servername =  "localhost";
$username = "root";
$password = "";
$database = "test1";

$Connection = mysqli_connect($servername, $username, $password, $database);
if(!$Connection){
	die("Connection Failed : " .mysqli_connect_error());   
}

?>