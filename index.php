<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Staff Managment</title>
  </head>
  <body>
  <div class="container">
	<h1 class=" text-center">Staff Managment</h1>
	<a href="add.html" class="btn btn-success float-right"> Add </a>
	<br><br>
	<?php
    include 'connection.php';
    $sql_show = "select * from staff;";
    $res_show = mysqli_query($Connection,$sql_show);
?>        

	<table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">Staff ID</th>
      <th scope="col">Name</th>
      <th scope="col">Address</th>
      <th scope="col">Gender</th>
      <th scope="col">Designation</th>
      <th scope="col">Location</th>
      <th scope="col">Date Of Joining</th>
      <th scope="col">Salary</th>
      <th scope="col" colspan=2 class="text-center">Action</th>
    </tr>
  </thead>
  <tbody>
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
        <td><a href="delete.php?staff_id=<?php  echo $row['staff_id'];        ?>" class="btn btn-danger">Delete</a></td>
		<td><a href="edit.php?staff_id=<?php  echo $row['staff_id'];        ?> " class="btn btn-primary">Edit</a></td>
    </tr>
<?php       }?>
	
	
  </tbody>
</table>

</div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  
  </body>
</html>