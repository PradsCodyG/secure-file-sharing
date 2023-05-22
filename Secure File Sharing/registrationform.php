<?php
$con=mysqli_connect('localhost','root','','registrationform');
$name=$_POST['name'];
$uname=$_POST['uname'];
$pass=$_POST['pass'];
$rpass=$_POST['rpass'];
$email=$_POST['email'];
$mob=$_POST['mob'];
if(!empty($name) || !empty($uname) || !empty($pass) || !empty($rpass) || !empty($email) || !empty($mob))
{
	$host="localhost";
	$dbusername="root";
	$dbPassword="";
	$dbname="registrationform";
	
	$conn=new mysqli($host,$dbusername,$dbPassword,$dbname);
	
	if(mysqli_connect_error())
	{
		die('Connnect Error('.mysqli_connect_errno().')'.mysqli_connect_error());
	} else{
		$SELECT = "SELECT uname From regform where uname= ? Limit 1";
		$INSERT = "INSERT Into regform (name,uname,pass,rpass,email,mob) values(?, ?, ?, ?, ?, ?)";
		
		$stmt = $conn->prepare($SELECT);
		$stmt->bind_param("s", $uname);
		$stmt->execute();
		$stmt->bind_result($uname);
		$stmt->store_result();
		$rnum = $stmt->num_rows;
		
		if($rnum==0) {
			$stmt->close();
			
			$stmt=$conn->prepare($INSERT);
			$stmt->bind_param("ssssss",$name,$uname,$pass,$rpass,$email,$mob);
			$stmt->execute();
		header("location:userlogin.php");
		} else{
			echo "Someone already registered using this username";
		}
		$stmt->close();
		$conn->close();
	}
	
	
}
else
{
	echo "ALL fields are required";
	die();
}
?>


