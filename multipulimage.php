<?php 
//if(isset($_POST['submit'])){
	if($_SERVER['REQUEST_METHOD']=="POST")
	{
 /*foreach($_FILES['file']['name'] as $key=>$val){
	  $file_type=($_FILES['file']['type'][$key]);
	  if($file_type == 'image/jpeg' || $file_type == 'image/jpg') 
	  {
		   move_uploaded_file($_FILES['file']['tmp_name'][$key],'upload/'.$val);
		   echo "file upload";
	  }
	  else{
		  echo "please upload only jpg";
	  }
 
  
 }

}*/
foreach($_FILES['file']['name'] as $key=>$val){
	$file_type=($_FILES['file']['type'][$key]);
	if($file_type=='image/png' || $file_type=='image/jpg')
	{
		move_uploaded_file($_FILES['file']['tmp_name'][$key],'upload/'.$val);
		echo "file upload";
		
	}
	else{
		 echo "please upload only jpg";
	}
}
}
?>
<form method='post' action='' enctype='multipart/form-data'>
 <input type="file" name="file[]" id="file" multiple>

 <input type='submit' name='submit' value='Upload'>
</form>
