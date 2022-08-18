<?php
$conn=mysqli_connect("localhost","root","","function") or die("check the connection");
if($_SERVER["REQUEST_METHOD"]=="POST")
{
	$name=$_POST["name"];
	$email=$_POST["email"];
	$pwd=$_POST["pwd"];
	
	
	$sql="update form set name='$name',email='$email',pwd='$pwd' where id='$_GET[id]'";
								 
	 $query=mysqli_query($conn,$sql) or die("check the query");
	
	header("location:form_view.php");

}	
	

if($_GET['id'])
{
	
	$sql="select * from form where id='$_GET[id]'";
	$query=mysqli_query($conn,$sql) or die("check the query");
	$result=mysqli_fetch_array($query);
	
	$name=$result['name'];
	$email=$result['email'];
	$pwd=$result['pwd'];
	
	
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
<?php
?>
<div class="container bg-3">
	<div class="container">
			<div class="col-sm-2"></div>
				<div class="col-sm-6"> 

			  <h2>basic form</h2>
			  <form action="" method="POST">
			  <div class="form-group">
				  <label for="name">User Name:</label>
				  <input type="name" class="form-control" id="user" value="<?php echo $name; ?>" placeholder="Enter email" name="name">
				  <span id="error_user"></span>
				</div>
				<div class="form-group">
				  <label for="email">Email:</label>
				  <input type="email" class="form-control" id="email" value="<?php echo $email; ?>" placeholder="Enter email" name="email">
				  <span id="error_email"></span>
				</div>
				<div class="form-group">
				  <label for="pwd">Password:</label>
				  <input type="password" class="form-control" id="pwd" value="<?php echo $pwd; ?>" placeholder="Enter password" name="pwd">
				</div>
					
				
			  
				
				<button type="submit" class="bn39"><span class="bn39span">submit</span></button>
			  </form>
			</div>
	</div>
</div>
</body>
</html>


