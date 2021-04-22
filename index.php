<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Staff Managment</title>
</head>

<body>
    <div>
        <h1 style="text-align: center;">Staff Managment</h1>
        <H2><a href="add.html" style="padding-left: 85%;">Add</a></H2>
    </div>
<?php
    include 'connection.php';
    $sql_show = "select * from staff;";
    $res_show = mysqli_query($Connection,$sql_show);
?>        
    <div>
    <table border=1>
    <tr>
        <th>Staff ID</th>
        <th>Name</th>
        <th>Address</th>
        <th>Gender</th>
        <th>Designation</th>
        <th>Location</th>
        <th>Date Of Joining</th>
        <th>Salary</th>
        <th colspan=2 >Actions</th>
    </tr>
    <?php
        while($row = mysqli_fetch_array($res_show)){    ?>
            
            <tr>
                <td><?php    echo $row['staff_id'];      ?></td>
                <td><?php    echo $row['sname'];      ?></td>
                <td><?php    echo $row['address'];      ?></td>
                <td><?php    echo $row['gender'];      ?></td>
                <td><?php    echo $row['des'];      ?></td>
                <td><?php    echo $row['location'];      ?></td>
                <td><?php    echo $row['doj'];      ?></td>
                <td><?php    echo $row['salary'];      ?></td>
                <td><a href="delete.php?staff_id=<?php  echo $row['staff_id'];        ?>">Delete</a></td>
                <td><a href="edit.php?staff_id=<?php  echo $row['staff_id'];        ?>">Edit</a></td>
            </tr>
<?php       }?>

</body>
</html>