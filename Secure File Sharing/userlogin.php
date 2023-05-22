<?php
session_start();

$con=mysqli_connect('localhost','root','');

mysqli_select_db($con,'registrationform');
if(isset($_REQUEST['sub']))
{
$name = $_POST['uname'];
$pass = $_POST['pass'];
$s = "select * from regform where uname = '$name' && pass ='$pass'";
$result = mysqli_query($con,$s);
$num = mysqli_num_rows($result);
if($num==1)
{
	header("location:UserRequestTrustee.php");
}
else{
	echo "failed";
}
}
?>

<html>
<head>
<title>LOGIN FORM</title>
  <link rel="stylesheet" type="text/css" href="style.css">
<body>
   <div class="loginbox">
     <h1>User Login</h1>
	 <form  method="post">
	    <p>Username</p>
		<input type="text" name="uname" id="uname" required>
		<p>Password</p>
		<input type="password" name="pass" id="pass" required>
		<input type="submit" name="sub" id="sub" value="Login" >
		
		
		<a href="registration form.html">New user?</a>
	 </form>
	 
</body>
</head>
</html>

