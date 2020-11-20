<!DOCTYPE html>
<html lang="en">
<head>
  <title>register</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

<?php
$id=$_POST['facultyid'];
$password=$_POST['password'];
$con=mysqli_connect("localhost","root","") or die (mysqli_error($con));
$id= stripcslashes($id);
$password=stripcslashes($password);
$id=mysqli_real_escape_string($con,$id);
$password=mysqli_real_escape_string($con,$password);


mysqli_select_db($con,'regis') or die (mysqli_error($con));

$query=mysqli_query($con,"select * from user where id='$id' and password='$password' ") or die (mysqli_error());

$row=mysqli_fetch_array($query);
if($row['id']==$id && $row['password']==$password){
    $msg="Welcome..." .$row['name'];
    ?>
        <div class="alert alert-success alert-dismissible">
        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
  		<strong>Successfully registered!</strong>
    </div>
    <?php
    echo "<script> window.location.assign('facultypage.php'); </script>";

 
} else{
    ?>
    <div class="alert alert-danger alert-dismissible">
        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
  		<strong>Login Failed</strong>
    </div>
    <a href="login.html"> Login Again</a>
<?php

}



?>