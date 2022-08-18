<?php
$conn=mysqli_connect("localhost","root","","student") or die("check the connection");
if($_SERVER["REQUEST_METHOD"]=="POST")
{
	$username=$_POST["username"];
	$sql="insert into tbl_class(class) value ('$username')";
	$query=mysqli_query($conn,$sql) or die ("check the connection");
	echo "data inserted";
}
?>
<!DOCTYPE html>

<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
	</head>
<body>

<div class="container bg-3">
	<div class="container">
			<div class="col-sm-2"></div>
				<div class="col-sm-6"> 

			  <h2>basic form</h2>
			  <form action="" method="POST" enctype="multipart/form-data">
			  <div class="form-group">
				   <label for="username">User Name:</label>
				  <input type="name" class="form-control" id="user" placeholder="Enter email" name="username">
				  <span id="error_user"></span>
				</div>
				<button type="submit" class="bn39"><span class="bn39span">submit</span></button>