<?php 
include 'connection.php';

$staff_id = $_GET['staff_id'];

$sql = "DELETE FROM `staff` WHERE staff_id = '$staff_id'";
$res = mysqli_query($Connection,$sql);

if(!$res){
    echo "Failed";
}else{
    header("LOCATION: index.php");    
}


?>