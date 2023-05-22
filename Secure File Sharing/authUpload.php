<html>
<head>
<title></title>
  <link rel="stylesheet" type="text/css" href="style.css">
<body>
   <div class="loginbox">
     <h1>UPLOAD FILE</h1>
	 <form method="post" enctype="multiple/form-data">
	    
	    <input type="file" name="myfile"/>
		<input type="submit" name="submit" value="upload"/>	
	 </form>	
</body>
</head>
</html>
<?php

$file = $_FILES["myfile"];

move_uploaded_file($file["tmp_name"],"uploads/".$file["name"]);
header("Location: authUpload.php");

?>


	