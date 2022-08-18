<?php
$conn=mysqli_connect("localhost","root","","news") or die("check the connection");

$id=$_GET['id'];
$file = "select * from myfile where id ='$id'";
	$check_query = mysqli_query($conn,$file) or die ("check the query");
	$data=mysqli_fetch_array($check_query);
	
	$path = "upload/".$data['category']."/".$data['image'];
	
	$dir="upload/".$data['category'];
	unlink($path);
	rmdir($dir);


	$sql= "DELETE FROM myfile where id ='$id'";
	$query= mysqli_query($conn,$sql) or die ("check the query");
	header("location:dataview.php")
	






 

?>
<?php/*
	$conn=mysqli_connect("localhost","root","","file_data") or die ("check the connection");
	$user_ID = $_GET['id'];
	$file = "select * from tbl_file where id = {$user_ID}";
	$check_query = mysqli_query($conn,$file) or die ("check the query");
	$data=mysqli_fetch_array($check_query);
	
	$filename = "upload/".$data['category']."/".$data['image'];
	$dir="upload/".$data['category'];
	unlink($filename);
	rmdir($dir);
	$sql= "DELETE FROM tbl_file WHERE id = {$user_ID} ";
	$query= mysqli_query($conn,$sql) or die ("check the query");
	header("location:file_view.php")*/
?>