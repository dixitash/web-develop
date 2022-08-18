
<?php
$conn=mysqli_connect("localhost","root","","employer") or die("check the connection");
//$sql="SELECT name, MAX(salary) AS highest FROM salary_tbl WHERE salary < (SELECT MAX(salary) FROM salary_tbl)";


$sql="SELECT name, salary AS highest FROM salary_tbl order by salary desc limit 1,1 ";

// second method the find 2nd highest value: select * from salary_tbl ORDER BY salary limit 1 offset 2

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
				<th> salary </th>
				
				<th>Action <a href=".php">ADD</a></th>
			</tr>
	</thead>
    <tbody>
	
  <?php
   
if($total!==0)
{
   $id=1;
   while($result=mysqli_fetch_array($query))
   {
	   echo "<pre>";
	   print_r($result);
	?>   
	 <tr>
		<td><?php echo $id++; ?></td>
		<td><?php echo  $result['name']; ?></td>
		<td><?php echo  $result['highest']; ?></td>
		
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