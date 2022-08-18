<?php
$conn=mysqli_connect("localhost","root","","news") or die("check the connection");
if($_SERVER['REQUEST_METHOD']=='POST')
{
	$category=$_POST['category'];
	$filename=$_FILES['img']['name'];
	$location = "upload/".$category;
	$sql="insert into myfile(category,image) value ('$category','$filename')";
	 echo $query=mysqli_query($conn,$sql) or die ("check the connection");
	if(!file_exists($location))
	{
		mkdir($location);
		 
	}
	
	else{
		echo "file already exist";
	}
	
	
   
	 $path = "upload/".$category."/".$filename;
	if(move_uploaded_file($_FILES['img']['tmp_name'],$path))
	{
		echo "file upload";
	}
	else{
		echo "file not uplpad";
	}
	
	

	
	
}
?>
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
				  <label for="category">CATEGORY:</label>
				  <input type="name" class="form-control" id="user" placeholder="Enter email" name="category">
				  <span id="error_user"></span>
				</div>
				<div class="form-group">
					<label for="image">IMAGES:</label>
					<input type="file" name="img">
					</div>
				
				<button type="submit" class="bn39"><span class="bn39span">submit</span></button>
				</div>
	</div>
	</div>
	