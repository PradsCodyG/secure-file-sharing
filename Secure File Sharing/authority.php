<?php
session_start();

$con=mysqli_connect('localhost','root','');

mysqli_select_db($con,'registrationform');
if(isset($_REQUEST['sub']))
{
$name = $_POST['username'];
$pass = $_POST['pass'];
$s = "select * from authority where uname = '$name' && pass ='$pass'";
$result = mysqli_query($con,$s);
$num = mysqli_num_rows($result);
if($num>0)
{
	header("location:authupload.html");
}
else{
	echo "failed";
}
}
?>

<html>
<head>
<title></title>
  <link rel="stylesheet" type="text/css" href="style.css">
<body>
   <div class="loginbox">
     <h1>AUTHORITY LOGIN</h1>
	 <form method="post">
	    <p>Username</p>
		<input type="text" name="username" id="username" required>
		<p>Password</p>
		<input type="password" name="pass" id="pass" required>
		<input type="submit" name="sub" id="sub" value="Login" required>
		
		
		
	 </form>
</body>
</head>
</html>
