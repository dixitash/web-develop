<?php
$conn=mysqli_connect("localhost","root","","mydb") or die("check the connection");
$sql="SELECT * FROM TBL_FORM";
$query = mysqli_query($conn,$sql);
$total = mysqli_num_rows($query);






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
   
   
   <div class="container-fluid">
     <table class="table table-striped">
	 <thead>
			<tr>
				<th>ID</th>
				<th> USERNAME </th>
				<th> EMAIL </th>
				<th> pwd </th>
				<th> ADDRESS </th>
				<th> DOB </th>
				<th> MOBILE </th>
				<th> GENDER </th>
				<th> HOBBIES </th>
				<th> CITY </th>
				<th>Action <a href="formdata.php">ADD</a></th>
			</tr>
	</thead>
    <tbody>
	
  <?php
   
if($total!==0)
{
   $id=1;
   while($result=mysqli_fetch_array($query))
   {
	?>   
	 <tr>
		<td><?php echo $id++; ?></td>
		<td><?php echo  $result['username']; ?></td>
		<td><?php echo  $result['email']; ?></td>
		<td><?php echo  $result['password']; ?></td>
		<td><?php echo $result['address']; ?></td>
		<td><?php echo $result['dob']; ?></td>
		<td><?php echo $result['mobile']; ?></td>
		<td><?php echo $result['gender']; ?></td>
		<td><?php echo $result['hobbies']; ?></td>
		<td><?php echo $result['city']; ?></td>
		<td><a href='deletedata.php?id=<?php echo $result['id']; ?>'>Delete</a>  |
		<a href='dataupdate.php?id=<?php echo $result['id']; ?>'>Update</a></td>
	</tr>
  
<?php	  
   }
}
else
{
	?>
		<tr>
			<td colspan='10' align="center">No Record Found</td>
		</tr>

<?php
}

?>
</tbody>
 </table>
</div>
</body>
</html>