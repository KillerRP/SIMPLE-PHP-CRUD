
<?php
include 'Connection.php';


if(isset($_POST['submit'])){

    $sname = $_POST['sname'];
    $address = $_POST['address'];
    $gender = $_POST['gender'];
    $des = $_POST['des'];
    $location = $_POST['location'];
    $doj = $_POST['doj'];
    $salary = $_POST['salary'];
    
    $sql = "INSERT INTO `staff`(`sname`,`address`,`gender`,`des`,`location`,`doj`,`salary`)VALUES('$sname','$address','$gender','$des','$location','$doj','$salary');";
    $res = mysqli_query($Connection,$sql);
    if(!$res){
        echo "Failed";
    }else{
        header("Location: index.php");
        
    }
}

?>

