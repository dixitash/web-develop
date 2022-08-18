<?php
$conn=mysqli_connect("localhost","root","","mydb") or die("check the connection");
$id=$_GET['id'];
$sql="DELETE FROM TBL_FORM WHERE id = '$id'";
echo $query = mysqli_query($conn,$sql) or die ("QUERY UNSUCCESSFULL.");

header("location:dataview.php")





?>