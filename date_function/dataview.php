<?php
$conn=mysqli_connect("localhost","root","","news") or die("check the connection");
$sql="SELECT * FROM basic_news";
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
				<th> NEWS </th>
				<th> DATE </th>
				<th> STATUS </th>
				<th>Action</th>
				
				
			</tr>
	</thead>
    <tbody>
	<?php
   
if($total!==0)
{
   $id=1;
   while($result=mysqli_fetch_array($query))
   {
	 
		$date1=date_create($result['date']);
		$date2=date_create(date('d-m-Y'));
		$diff=date_diff($date1,$date2);
		$diffs=$diff->format("%a");
		if($diffs<=5)
		{
			$status="New";
		}
		
		else
		{
			$status="Old";
		}
	?>   
	 <tr>
		<td><?php echo $id++; ?></td>
		<td><?php echo  $result['news']; ?></td>
		<td><?php echo  $result['date']; ?></td>
		<td><?php echo  $status; ?></td>
		<td>Delete | Update</td>
   <?php	  
   }
}
