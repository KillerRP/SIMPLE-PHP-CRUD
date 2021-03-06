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

<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Edit | Staff</title>
</head>

<body>

    <div class="container">

        <form method="post">
            <h1>Edit Staff</h1><br>
            <div class="form-group">
                <label for="exampleFormControlInput1">Name</label>
                <input type="text" class="form-control" id="exampleFormControlInput1" name="sname" placeholder="Name"
                    required>
            </div>

            <div class="form-group">
                <label for="exampleFormControlTextarea1">Address</label>
                <textarea class="form-control" id="exampleFormControlTextarea1" name="address" rows="3"
                    required></textarea>
            </div>

            <div class="form-group">
                Gender
                <div class="form-control">
                    Male <input type="radio" name="gender" value="male" required>
                    Female <input type="radio" name="gender" value="female" required>
                </div>
            </div>


            <div class="form-group">
                <label for="exampleFormControlInput1">Designation</label>
                <input type="text" class="form-control" id="exampleFormControlInput1" name="des"
                    placeholder="Designation" required>
            </div>

            <div class="form-group">
                <label for="exampleFormControlSelect1">Location</label>
                <select class="form-control" name="location" id="exampleFormControlSelect1">
                    <option value="ahmedabad">Ahmedabad</option>
                    <option value="pune">Pune</option>
                    <option value="delhi">Delhi</option>
                    <option value="chennai">Chennai</option>
                    <option value="rajasthan">Rajasthan</option>
                </select>
            </div>

            <div class="form-group">
                Date Of Joining
                <input type="date" class="form-control" name="doj" id="doj" required>
            </div>

            <div class="form-group">
                <label for="exampleFormControlInput1">Salary</label>
                <input type="text" class="form-control" id="exampleFormControlInput1" name="salary" placeholder="Salary"
                    required>
            </div>

            <input class="btn btn-primary btn-lg btn-block" type="submit" name="submit" value="Submit">


        </form>

    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
        crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
        crossorigin="anonymous"></script>
</body>

</html>