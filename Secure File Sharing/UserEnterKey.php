<html>
<head>
<title>LOGIN FORM</title>
  <link rel="stylesheet" type="text/css" href="UserEnterKey.css">
<body>
   <div class="loginbox">
     <h1>AUTHORITY KEY</h1>
	 <form  method="post">
		<p>SECRET KEY</p>
		<input type="password" name="ddddd5" id="ddddd5" required>
		<p>TRUSTEE STATUS</p>
		<br>
		
		  <?php
		$conn = mysqli_connect("localhost","root","","registrationform");
		if($conn-> connect_error) {
		    die("Connection failed:".$conn-> conect_error);
			}
		$sql = "SELECT stat from fildet";
		$result = $conn-> query($sql);
		if($result-> num_rows > 0){
		   while($row = $result-> fetch_assoc()){
		     echo "<td>".$row["stat"]."</td>";
			 }
			 
			 }
			 else {
			     echo "<td></td><td></td><td></td>";
				 }
			$conn->close();
			?>
			
			
		
	
		<input type="submit" name="sub" id="sub" value="submit">
		
	 </form>	 
</body>
</head>
</html>
<?php
session_start();

$con=mysqli_connect('localhost','root','');

mysqli_select_db($con,'registrationform');
if(isset($_REQUEST['sub']))
{
$name = $_POST['ddddd5'];
$s = "select * from wwwww5 where ddddd5 = '$name'";
$result = mysqli_query($con,$s);
$num = mysqli_num_rows($result);
if($num==1)
{
	header("location:fileview.php");
}
else{
	echo "failed";
}
}

?>
