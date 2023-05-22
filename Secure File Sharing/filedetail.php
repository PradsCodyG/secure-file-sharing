<?php
$name=$_POST['name'];
$fsize=$_POST['fsize'];
$upload=$_POST['upload'];
$stat=$_POST['stat'];

if(!empty($name) || !empty($fsize) || !empty($upload) || !empty($stat))
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
		$SELECT = "SELECT name From fildet where name= ? Limit 1";
		$INSERT = "INSERT Into fildet (name,fsize,upload,stat) values(?, ?, ?, ?)";
		
		$stmt = $conn->prepare($SELECT);
		$stmt->bind_param("s", $name);
		$stmt->execute();
		$stmt->bind_result($name);
		$stmt->store_result();
		$rnum = $stmt->num_rows;
		
		if($rnum==0) {
			$stmt->close();
			
			$stmt=$conn->prepare($INSERT);
			$stmt->bind_param("ssss",$name,$fsize,$upload,$stat);
			$stmt->execute();
		echo "FILE UPLOADED SUCCESSFULLY";
		} else{
			echo "Someone already uploaded this File";
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
