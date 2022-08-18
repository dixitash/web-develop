<?php
			if($_SERVER["REQUEST_METHOD"]=="POST")
			{
				$name=$_POST['username'];
				$mobile=$_POST['mobile'];
				$email=$_POST['email'];
				
				echo ucwords(strtolower($name));
				echo "<br>";
				echo substr_replace($mobile,"**",2,-2);
				echo "<br>";
				echo substr_replace($email,"**",4,-10);
				
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
<?php
?>
<div class="container-fluid bg-3">
	<div class="container-fluid">
			<div class="col-sm-6"></div>
				<div class="col-sm-10"> 

			  <h2>basic form</h2>
			  <form action="" method="POST">
			  <div class="form-group">
				  <label for="username">User Name:</label>
				  <input type="name" class="form-control" id="user" value="" placeholder="Enter email" name="username">
				  <span id="error_user"></span>
				</div>
				<div class="form-group">
				  <label for="username">Mobile number:</label>
				  <input type="mobile" class="form-control" id="mobile" value="" placeholder="Enter your mobile number" name="mobile">
				  <span id="error_user"></span>
				</div>
<div class="form-group">
<label for="email">Email:</label>
				  <input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
				  <span id="error_email"></span>
				</div>
				
				<button type="submit" class="bn39"><span class="bn39span">submit</span></button>
			  </form>
			</div>
	</div>
</div>
</body>
</html>