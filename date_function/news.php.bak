<?php
$conn=mysqli_connect("localhost","root","","news") or die("check the connection");
if($_SERVER['REQUEST_METHOD']=="POST"){
	$news=$_POST['news'];
	$dates=date("d-m-Y");
	/*date_default_timezone_set('Asia/Kolkata');
	$times=date("H:i:sa");*/
	
	
	 $sql="insert into basic_news(news,date) value ('$news','$dates')";
	 echo $query=mysqli_query($conn,$sql) or die("check the query");
	 
	
}
?>
<?php
 
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
<?php
?>
<div class="container bg-3">
	<div class="container">
			<div class="col-sm-2"></div>
				<div class="col-sm-6"> 

			  <h2>basic form</h2>
			  <form action="" method="POST">
			  <div class="form-group">
				  <label for="username">NEWS:</label>
				  <input type="name" class="form-control" id="user" placeholder="Enter email" name="news">
				  <span id="error_user"></span>
				</div>
				
				
				
				<button type="submit" class="bn39"><span class="bn39span">submit</span></button>
				</div>
				</div>
				</div>
				</html>