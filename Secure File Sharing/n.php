<html>
<head>
<style>
.aa{
	margin-top:50px;
	box-shadow:0px 0px 10px black;
	width:30%;
}
td{
	padding:20px;
}
</style>
</head>
<body>
<?php

$con=mysqli_connect("localhost","root","","prady");
if(isset($_REQUEST['sub']))
{
	$fn=$_REQUEST['fname'];
	$ln=$_REQUEST['lname'];
	$em=$_REQUEST['mail'];
	$do=$_REQUEST['dob'];
	$un=$_REQUEST['uname'];
	$pa=$_REQUEST['pass'];
	$q="insert into register values('$fn','$ln','$em','$do','$un','$pa')";
	$r=mysqli_query($con,$q);
	if($r)
	{
		header("location:register.php");
		
	}
	
	
}

?>
<form action="" method="post">
<center>
<div class="aa">
<table border='0' cellspacing='10' cellpadding='10' align="center">
<tr>
<td>First Name</td>
<td><input type='text' name='fname' id='fname' required></td>
</tr>
<tr>
<td>Last Name</td>
<td><input type='text' name='lname' id='lname' required></td>
</tr>
<tr>
<td>Email</td>
<td><input type='text' name='mail' id='mail' required></td>
</tr>
<tr>
<td>DOB</td>
<td><input type='date' name='dob' id='dob' required></td>
</tr>
<tr>
<td>User Name</td>
<td><input type='text' name='uname' id='uname' required></td>
</tr>
<tr>
<td>Password</td>
<td><input type='password' name='pass' id='pass' required></td>
</tr>
<tr>
<td><input type='submit' value='login' name='sub'></td>
</tr>
<tr>
<td colspan='2'><a href='register.php'>New User?Click Here</a></td>
</tr>

</table>
</div>
</html>