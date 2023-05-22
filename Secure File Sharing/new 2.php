<?php

session_start();

$con=mysqli_connect('localhost','root','');

mysqli_select_db($con,'registrationform');

$name = $_POST['uname'];
$pass = $_post['pass'];
$s = "select * from regform where uname = '$name' && pass ='$pass'";
$result = mysqli_query($con,$s);
$num = mysqli_num_rows($result);
if($num==1)
{
	echo "success";
}
else{
	echo "failed";
}
?>

<?php
$con=mysqli_connect("localhost","root","","registrationform") or die("Connection Failed");
if(isset($_REQUEST["sub"]))
{
	$user=$_REQUEST['uname'];
	$pass=$_REQUEST['pass'];
	$query="select * from regform where uname='$user' and pass='$pass'";
	$result=mysqli_query($connect,$query);
	$count=mysqli_num_rows($result);
	if($count>0)
	{
		echo "your username and password is right";
	}
	else
	{
		echo "your username and password is wrong";
	}
}
?>