<?php

$conn=mysqli_connect("localhost","root","","mydb") or die("check the connection");
if($_SERVER["REQUEST_METHOD"]=="POST")
{
	$username=$_POST["username"];
	$email=$_POST["email"];
	$pwd=$_POST["pwd"];
	$gender=$_POST["gender"];
	$filename=$_FILES['img']['name'];
	
			$path="upload/".$filename;
		
/*if($filename=="")
{
	$img='';
}
else
{
	$img=",image='$filename'";
}
	
	$sql="update file_insert set username='$username',email='$email',pwd='$pwd',gender='$gender' $img where id='$_GET[id]'";
	 $query=mysqli_query($conn,$sql) or die("check the query");
	 move_uploaded_file($_FILES['img']['tmp_name'],$path);
	
	header("location:datavie.php");

}	

if(isset($_GET['did']))
{
	$sql="update file_insert set image='' where id='$_GET[did]'";
	 $query=mysqli_query($conn,$sql) or die("check the query");
	 
	header("location:datavie.php");
}	
*/
if($filename=="")
{
	echo "";
}
else{
	$img=",image='$filename'";
}
$sql="update file_insert set username='$username',email='$email',pwd='$pwd',gender='$gender' $img where id='$_GET[id]'";
 $query=mysqli_query($conn,$sql) or die ("check the query");
 header("location:dataview.php");
 
if($filename=="")
{
	echo "";
}
else{
	$img=",image='$filename'";
}
$sql="update file_insert set username='$username',email='$email', pwd='$pwd',gender='$gender' $img where id='$_GET[id]'";
$query=mysqli_query($conn,$sql) or die ("check the query");
move_uploaded_file($_FILES['img']['tmp_name'],$path);
header("location:datavie.php");
}
if(isset($_GET['did']))
{
	$sql="update file_insert set image='' where id='$_GET[did]'";
	 $query=mysqli_query($conn,$sql) or die("check the query");
	   
	header("location:datavie.php");
}	
if($_GET['id'])
{
	
	$sql="select * from file_insert where id='$_GET[id]'";
	$query=mysqli_query($conn,$sql) or die("check the query");
	$result=mysqli_fetch_array($query);
	
	$username=$result['username'];
	$email=$result['email'];
	$pwd=$result['pwd'];
 if($result['image']=="")  
	 {
	   if($result['gender']=="Male")
	   {
		   $path="upload/male.jpg";
	   }
	   else{
		   $path="upload/female.webp";
	   }
	 }
	 else{
	 
		$path="upload/".$result['image'];
	 }
		
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
			  <form action="" method="POST" enctype="multipart/form-data">
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
					<label for="image">IMAGES:</label>
					<input type="file" name="img" value="<?php echo $image; ?>"
					</div>
				
			  
				<img src="<?php echo $path; ?>" height="80" width="80">
				<button type="submit" class="bn39"><span class="bn39span">submit</span></button>
				
				<?php if($result['image']!="") { ?>
				<a href="?did=<?php echo $_GET['id']; ?>"><button type="button" class="bn39"><span class="bn39span">remove</span></button></a>
				<?php } ?>

				</form>
			</div>
	</div>
</div>
</body>
</html>


