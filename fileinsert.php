<?php
/*$conn=mysqli_connect("localhost","root","","mydb") or die("check the connection");
if($_SERVER['REQUEST_METHOD']=='POST')
{
	$username=$_POST["username"];
	$email=$_POST["email"];
	$pwd=$_POST["pwd"];
	$gender=$_POST["gender"];
	$filename=$_FILES['img']['name'];
			$path="upload/".$filename;
			
			$sql="insert into file_insert (username,email,pwd,gender,image) value ('$username','$email','$pwd','$gender','$filename')";
			 $query=mysqli_query($conn,$sql) or die("check the query");
			move_uploaded_file($_FILES['img']['tmp_name'],$path);
			echo "data inserted";
	
}*/
$conn=mysqli_connect("localhost","root","","mydb") or die("check the connection");
if($_SERVER['REQUEST_METHOD']=="POST")
{
	$username=$_POST['username'];
	$email=$_POST['email'];
	$pwd=$_POST['pwd'];
	$gender=$_POST['gender'];
	$filename=$_FILES['img']['name'];
	$path="upload/".$filename;
	$sql="insert into file_insert(username,email,pwd,gender,image) value ('$username','$email','$pwd','$gender','$filename')";
	$query=mysqli_query($conn,$sql) or die ("check the connection");
	move_uploaded_file($_FILES['img']['tmp_name'],$path);
	echo "data inserted";
	
	
}
/*$conn=mysqli_connect("localhost","root","","mydb") or die("check the connection");
if($_SERVER['REQUEST_METHOD']=='POST')
{
	$username=$_POST['username'];
	$email=$_POST['email'];
	$pwd=$_POST['pwd'];
	$gender=$_POST['gender'];
	$filename=$_FILES['img']['name'];
	$path="upload/".$filename;
	$sql="insert into file_insert(username,email,pwd,gender,image) value ('$username','$email','$pwd','$gender','$filename')";
	$query=mysqli_query($conn,$sql) or die ("check the query");
	move_uploaded_file($_FILES['img']['tmp_name'],$path);
	echo "data inserted";
	
}*/
	
	
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
				<div class="form-group">
				  <label for="email">Email:</label>
				  <input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
				  <span id="error_email"></span>
				</div>
				<div class="form-group">
				  <label for="pwd">Password:</label>
				  <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="pwd">
				</div>
				<div class="form-group">
					<h5 for="Gender"><strong> Gender :</strong></h5>
					<label class="radio-inline ">
						<input type="radio"  name="gender" id="male" Value="Male"  > Male	  
					</label>
					<label class="radio-inline">
					  <input type="radio" name="gender"  id="female" Value="Female" > Female	
					</label>
					</div>
					
					<div class="form-group">
					<label for="image">IMAGES:</label>
					<input type="file" name="img">
					</div>
					

					<button type="submit" class="bn39"><span class="bn39span">submit</span></button>
					
</body>
</html>