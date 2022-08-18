<?php
$conn=mysqli_connect("localhost","root","","mydb") or die("check the connection");
if($_SERVER["REQUEST_METHOD"]=="POST")
{
	$username=$_POST["username"];
	$email=$_POST["email"];
	$pwd=$_POST["pwd"];
	$address=$_POST["address"];
	$dob=$_POST["dob"];
	$mobile=$_POST["mobile"];
	$gender=$_POST["gender"];
	$hobbies=implode(",",$_POST['hobbies']);
	$city=$_POST["city"];
	
	 $sql="insert into tbl_form(username,email,password,address,dob,mobile,gender,hobbies,city) value ('$username','$email','$pwd','$address','$dob','$mobile','$gender','$hobbies','$city')";
	echo $query=mysqli_query($conn,$sql) or die("check the query");
	echo "Data Inserted";
	header("location:dataview.php");

}	
	/*$conn=mysqli_connect("localhost","root","","mydb") or die("check the connection");
	error_reporting(0);
	if($_SERVER['REQUEST_METHOD']=="POST")
	{
	$username=$_POST['username'];
	$email=$_POST['email'];
	$pwd=$_POST['pwd'];
	$address=$_POST['address'];
	$dob=$_POST['dob'];
	$mobile=$_POST['mobile'];
	$gender=$_POST['gender'];
	$hobbies=implode(",",$_POST['hobbies']);
	$city=$_POST['city'];
	
	
	
	$sql="insert into tbl_form (username,email,password,address,dob,mobile,gender,hobbies,city) value ('$username','$email','$pwd','$address','$dob','$mobile','$gender','$hobbies','$city')";
	 $query=mysqli_query($conn,$sql) or die ("check the query");
	echo "Data inserted";
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
<?php
?>
<div class="container bg-3">
	<div class="container">
			<div class="col-sm-2"></div>
				<div class="col-sm-6"> 

			  <h2>basic form</h2>
			  <form action="" method="POST">
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
				<label for="address"> address:</label>
				  <textarea class="form-control" name="address" id="address"></textarea>
				  <div class="form-group">
					<label for="Date">DOB:</label>
					<input type="Date" class="form-control" name="dob" id="Date">
				</div>
				<div class="form-group">
					<label for="mobile">Mobile NO:</label>
					<input type="text" class="form-control" name="mobile"  maxlength="12" id="mobile" placeholder="Enter mobile No">
				</div>
				<div class="form-group">
					<h5 for="Gender"><strong> Gender :</strong></h5>
					<label class="radio-inline ">
						<input type="radio"  name="gender" id="male" Value="Male"  > Male	  
					</label>
					<label class="radio-inline">
					  <input type="radio" name="gender"  id="female" Value="Female" > Female	
					</label>
					<span id="error"></span>	
				</div>
				
				<div class="form-group">
					<h5 for="Gender"><strong> Hobbies :</strong></h5>
					<label class="radio-inline ">
						<input type="checkbox"  name="hobbies[]" id="hobbies" Value="Sports"  > Sports	  
					</label>
					<label class="radio-inline">
					  <input type="checkbox" name="hobbies[]"  id="hobbies" Value="Reading" > Reading	
					</label>
					<span id="error"></span>	
				</div>
				<div class="form-group">
					<label for="City">City:</label>
					<select class="form-control" id="city" name="city">
						<option value="">Select The City</option>
						<option>Ludhiana</option>
						<option>Chandigarh</option>
						<option>Lucknow</option>
						<option>Varansi</option>
						<option>Patna</option>
						<option>Nalanda</option>
					</select>
					<span id="City_error"></span>	
				</div>
			  
				
				<button type="submit" class="bn39"><span class="bn39span">submit</span></button>
			  </form>
			</div>
	</div>
</div>
</body>
</html>


