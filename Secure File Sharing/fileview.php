<html>
<head>
<title></title>
  <link rel="stylesheet" type="text/css" href="AuthFileSecret.css">
<body>
   <div class="loginbox">
    <a href="start.html">back to start</a>
   <h1>DOWNLOAD FILE</h1>
	<table bgcolor="#ff9ff3" width="90%" cellpadding="0" cellspacing="0" align="center">
	    <tr>
		   <td><font color="black">FILE NAME</font></td>
		   <td><font color="black">UPLOADED ON</font></td>
		   <td><font color="black">SIZE</font></td>
		   <td><font color="black">requested by</font></td>
		   <td><font color="black">STATUS</font></td>
		   <td><font color="black">DOWNLOAD</font></td>
		   
		   
		</tr>
		<tr>
		<?php
		$conn = mysqli_connect("localhost","root","","registrationform");
		if($conn-> connect_error) {
		    die("Connection failed:".$conn-> conect_error);
			}
		$sql = "SELECT name,upload,fsize from fildet";
		$result = $conn-> query($sql);
		if($result-> num_rows > 0){
		   while($row = $result-> fetch_assoc()){
		     echo "<td>".$row["name"]."</td><td>".$row["fsize"]."</td><td>".$row["upload"]."</td>";}
			 
			 }
			 else {
			     echo "0 result";
				 }
			$conn->close();
			?>
			<?php
		$conn = mysqli_connect("localhost","root","","registrationform");
		if($conn-> connect_error) {
		    die("Connection failed:".$conn-> conect_error);
			}
		$sql = "SELECT email from regform";
		$result = $conn-> query($sql);
		if($result-> num_rows > 0){
		   while($row = $result-> fetch_assoc()){
		     echo "<td>".$row["email"]."</td>";}
			 
			 }
			 else {
			     echo "0 result";
				 }
			$conn->close();
			?>
		   
		   <td><font color="white">ISSUED</font></td>
		   
		   

<?php


$con = mysqli_connect("localhost","root","","registrationform");
$q ="select * from fildet";
$re = mysqli_query($con,$q);

while($r = mysqli_fetch_assoc($re))
{
	$fn = $r['name'];

	echo "<td><a href='download.php?file=fn'>Download</a></td></tr>";
}

?>
