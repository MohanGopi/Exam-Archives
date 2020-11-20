<<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>

<?php
$server="localhost";
$user="root";
$pass="";
$con=mysqli_connect($server,$user,$pass) or die (mysqli_error());
mysqli_select_db($con,'regis') or die (mysqli_error($con));
if(isset($_POST['signup']))
{
     $id = $_POST['id'];
     $name = $_POST['name'];
    $gender = $_POST['gender'];
    $email = $_POST['email'];
     $phone = $_POST['phone'];
	$password =  $_POST['password'];
	$query="insert into user (id,name,gender,email,phone,password)  values('$id','$name','$gender','$email','$phone','$password')";
	if(mysqli_query($con,$query))
	{
		?>
		<div class="alert alert-success alert-dismissible">
        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
  		<strong>Successfully registered!</strong>
		</div>
		<a href="login.html">Back to login</a>
		<?php
	}
	else
	{
		echo "<h2> error </h2> ";
	}
}

?>