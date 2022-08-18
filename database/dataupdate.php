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
	
	$sql="update tbl_form set username='$username',email='$email',password='$pwd',
								 address='$address',dob='$dob',mobile='$mobile',
								 gender='$gender',hobbies='$hobbies',city='$city' where id='$_GET[id]'";
	 $query=mysqli_query($conn,$sql) or die("check the query");
	
	header("location:dataview.php");

}	
	

if($_GET['id'])
{
	
	$sql="select * from tbl_form where id='$_GET[id]'";
	$query=mysqli_query($conn,$sql) or die("check the query");
	$result=mysqli_fetch_array($query);
	
	$username=$result['username'];
	$email=$result['email'];
	$pwd=$result['password'];
	$address=$result['address'];
	$hobbies=explode(",",$result['hobbies']);
	
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
				  <label for="username">User Name:</label>
				  <input type="name" class="form-control" id="user" value="<?php echo $username; ?>" placeholder="Enter email" name="username">
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
				<label for="address"> address:</label>
				  <textarea class="form-control" name="address" id="address"><?php echo $address; ?></textarea>
				  <div class="form-group">
					<label for="Date">DOB:</label>
					<input type="Date" class="form-control" name="dob" id="Date" value="<?php echo $result['dob']; ?>">
				</div>
				<div class="form-group">
					<label for="mobile">Mobile NO:</label>
					<input type="text" class="form-control" name="mobile" value="<?php echo $result['mobile']; ?>"  maxlength="12" id="mobile" placeholder="Enter mobile No">
				</div>
				<div class="form-group">
					<h5 for="Gender"><strong> Gender :</strong></h5>
					<label class="radio-inline ">
						<input type="radio"  name="gender" id="male" Value="Male" <?php if($result['gender']=="Male"){echo "checked"; }?>  > Male	  
					</label>
					<label class="radio-inline">
					  <input type="radio" name="gender"  id="female" Value="Female" <?php if($result['gender']=="Female"){echo "checked"; }?> > Female	
					</label>
					<span id="error"></span>	
				</div>
				
				<div class="form-group">
					<h5 for="Gender"><strong> Hobbies :</strong></h5>
					<label class="radio-inline ">
						<input type="checkbox"  name="hobbies[]" id="hobbies" Value="Sports" <?php if(in_array("Sports",$hobbies)){echo "checked"; }?>  > Sports	  
					</label>
					<label class="radio-inline">
					  <input type="checkbox" name="hobbies[]"  id="hobbies" Value="Reading" <?php if(in_array("Reading",$hobbies)){echo "checked"; }?> > Reading	
					</label>
					<span id="error"></span>	
				</div>
				<div class="form-group">
					<label for="City">City:</label>
					<select class="form-control" id="city" name="city">
						<option value="">Select The City</option>
						<option <?php if($result['city']=="Ludhiana"){echo "selected"; }?> >Ludhiana</option>
						<option <?php if($result['city']=="Chandigarh"){echo "selected"; }?>>Chandigarh</option>
						<option <?php if($result['city']=="Lucknow"){echo "selected"; }?>>Lucknow</option>
						<option <?php if($result['city']=="Varansi"){echo "selected"; }?>>Varansi</option>
						<option <?php if($result['city']=="Patna"){echo "selected"; }?>>Patna</option>
						<option <?php if($result['city']=="Nalanda"){echo "selected"; }?>>Nalanda</option>
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


