<?php 
include 'connection.php';

if(isset($_POST['submit'])){
    
    $staff_id = $_GET['staff_id'];
    $sname = $_POST['sname'];
    $address = $_POST['address'];
    $gender = $_POST['gender'];
    $des = $_POST['des'];
    $location = $_POST['location'];
    $doj = $_POST['doj'];
    $salary = $_POST['salary'];
    
    $sql = "UPDATE `staff` SET `sname`='$sname',`address`='$address',`gender`='$gender',`des`='$des',`location`='$location',`doj`='$doj',`salary`='$salary' WHERE `staff_id`='$staff_id';";
    $res = mysqli_query($Connection,$sql);
    if(!$res){
        echo "Failed";
    }else{
        header("Location: index.php");
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Edit Info</title>
</head>
<body>
    <table>
        <form method="post">
            <tr>
            <td> Name</td> 
            <td><input type="text" name="sname" required></td>
            </tr>
            
            <tr>
            <td>Address </td> 
            <td><input type="textarea" name="address" required></td>
            </tr>
            
            <tr>
            <td>Gender </td>
            <td>Male<input type="radio" name="gender" value="male" required>
                Female <input type="radio" name="gender" value="female" required>
            </td>
            </tr>
    
            <tr>
            <td>Designation </td>
            <td> <input type="text" name="des" id="des" required ></td>
            </tr>
    
            <tr>
            <td>Location </td> 
            <td><select name="location" id="location">
                <option value="ahmedabad">Ahmedabad</option>
                <option value="pune">Pune</option>
                <option value="delhi">Delhi</option>
                <option value="chennai">Chennai</option>
                <option value="rajasthan">Rajasthan</option>
            </select></td>
            </tr>
    
            <tr>
            <td>Date Of Joining</td>
            <td> <input type="date" name="doj" id="doj" required></td>
            </tr>
            
            <tr><td>Salary </td>
            <td><input type="text" name="salary" id="salary" required></td>
            </tr>
            
            <tr>
            <td><input type="submit" value="submit" name="submit"></td>
            </tr>
        </form>
        </table>
</body>
</html>