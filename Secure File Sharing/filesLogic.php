<?php

$conn=mysqli_connect("localhost","root","","file_upload");

if(isset($_POST['save']))
{
	$filename=$_FILES['myfile']['name'];
	$destination='upload/'.$filename;
	$extension=pathinfo($filename,PATHINFO_EXTENSION);
	$file=$_FILES['myfile']['tmp_name'];
	$size=$_FILES['myfile']['size'];
	if(!in_array($extension,['zip','pdf','png']))
	{
		echo "Your file extension must ";
	}
	else{
		if(move_uploaded_file($file,$destination))
		{
			$sql = "INSERT INTO files (name,size,downloads) VALUES ('$filename','$size',0)";
			
			if(mysqli_query($conn,$sql))
			{
				echo "file uploaded succesfully";
			}
			else
			{
				echo "failed to upload file";
			}
		}
	}
}
?>
