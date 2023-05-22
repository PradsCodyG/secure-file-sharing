<?php

$id = $_REQUEST['id'];
$name = $_REQUEST['name'];
$des = $_REQUEST['des'];
$sal = $_REQUEST['sal'];

$con = mysqli_connect("localhost","root","","prady");
if($con)
{
	echo "connected";
}
else
{
	echo mysqli_connect_error();
}


?>
