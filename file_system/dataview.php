<?php
$conn=mysqli_connect("localhost","root","","news") or die("check the connection");
$sql="SELECT * FROM myfile";
$query = mysqli_query($conn,$sql);
$total = mysqli_num_rows($query);


 
?>
<?php

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
  <?php

   ?>
   
   
   <div class="container-fluid">
     <table class="table table-striped">
	 <thead>
			<tr>
				<th>ID</th>
				<th> CATEGORY </th>
				<th> IMAGE </th>
				
				<th> ACTION <A HREF="file.php"> ADD </th> 
				
				
				
			</tr>
	</thead>
    <tbody>
	<?php
   
if($total!==0)
{
   $id=1;
   while($result=mysqli_fetch_array($query))
   {
	   $path = "upload/".$result['category']."/".$result['image'];
	   
	   
	?>   
	 <tr>
		<td><?php echo $id++; ?></td>
		<td><?php echo  $result['category']; ?></td>
		<td><?php echo  $result['image']; ?></td>
		
		<td><img src="<?php echo $path;?>"height="100px" width="
100px"></td>
		<td><a href='deletedata.php?id=<?php echo $result['id']; ?>'>Delete</a>  |
		<a href='dataupdate.php?id=<?php echo $result['id']; ?>'>Update</a></td>
		
   <?php	  
   }
}
?>
</tbody>
 </table>
</div>
</body>
</html>