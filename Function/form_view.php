<?php
$conn=mysqli_connect("localhost","root","","function") or die("check the connection");
$sql="SELECT * FROM form";
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
				
				<th>Action <a href="form.php">ADD</a></th>
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
		<td><?php echo  $result['name']; ?></td>
		<td><?php echo  $result['email']; ?></td>
		<td><?php  echo  $result['pwd']; ?></td>
		
		<td><a href='delete.php?id=<?php echo $result['id']; ?>'>Delete</a>  |
		<a href='update.php?id=<?php echo $result['id']; ?>'>Update</a></td>
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