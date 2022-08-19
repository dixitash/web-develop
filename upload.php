<?php
if($_SERVER['REQUEST_METHOD']=="POST"){
	$file=$_FILES['img']['name'];
	$path='upload/'.$file;
	$file_type=$_FILES['img']['type'];
	$file_tmp = $_FILES['img']['tmp_name'];
	$file_size = floor($_FILES['img']['size']/1024);
	
	if($file_type=='image/png')
	{
		if($file_size<200)
		{
			move_uploaded_file($_FILES['img']['tmp_name'],$path);
		}
		else
				{
					echo "images size 200 kb  are allowed";
				}
			}else
			{
				echo "Please upload image only in png extention";
			}
	}

 /*if($_SERVER['REQUEST_METHOD']=="POST")
		
		{
			$img=$_FILES['img']['name'];
			$path="upload/".$img;
			$file_type = $_FILES['img']['type'];
			$file_tmp = $_FILES['img']['tmp_name'];
			$file_size = floor($_FILES['img']['size']/1024);
			

			//echo "file upload .<br>";
			
			if($file_type == 'image/png' )
			{				
				
				if($file_size<200)
				{
					if(file_exists($path))
					{
						$image=mt_rand(999,99999).$img;
						$path=	"upload/".$image;
					}
						
					move_uploaded_file($_FILES['img']['tmp_name'],$path);
					echo "File uploaded";
					
					
				}
				else
				{
					echo "images size 200 kb  are allowed";
				}
			}else
			{
				echo "Please upload image only in png extention";
			}
			
			
		}
		/*if($_SERVER['REQUEST_METHOD']=="POST")
		{
			$img=$_FILES['img']['name'];
			$path="upload/".$img;
			$type=$_FILES['img']['type'];
			$file_temp=$_FILES['img']['tmp_name'];
			$file_size=floor($_FILES['img']['size']/1024);
			
			if($type=="image/png")
			{
				if($file_size<200)
				{
					if(file_exists($path))
					{
						$image=mt_rand(0,100).$img;
						$path=	"upload/".$image;
					}
					move_uploaded_file($_FILES['img']['tmp_name'],$path);
					echo "File uploaded";
					
				
				
				
				}else
				{
					echo "images size 200 kb  are allowed";
				}
			}else
			{
				echo "Please upload image only in png extention";
			}
			
		}*/


	

?>
	






	






<!DOCTYPE html>

<html>

 <head>

    <title>Image Upload in PHP</title>

    <! link the css file to style the form >

    <link rel="stylesheet" type="text/css" href="style.css" />

  <style type="text/css">

        #wrapper{

            width: 50%;

            margin: 20px auto;

            border: 2px solid #dad7d7;

        }

        form{

            width: 50%;

            margin: 20px auto;

        }

        form div{

            margin-top: 5px;

        }

        img{

            float: left;

            margin: 5px;

            width: 280px;

            height: 120px;

        }

        #img_div{

            width: 70%;

            padding: 5px;

            margin: 15px auto;

            border: 1px solid #dad7d7;

        }

        #img_div:after{

            content: "";

            display: block;

            clear: both;

        }

    </style>

</head>

 <body>

    <div id="wrapper">


         <form method="POST" action="" enctype="multipart/form-data">

                  <input type="file" name="img">

            <div>

                <button type="submit" name="submit">UPLOAD

                </button>

            </div>

        </form>

    </div>

</body>

</html>


