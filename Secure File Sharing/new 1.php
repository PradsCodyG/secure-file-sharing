<?php
echo "<h1 style='color:red;font-size:50px;text-align:center;'>Hello techciti</h1>";
echo "<br><br>";
echo "Hello All Welcome to techciti";
echo "<br><br>";

$in='s';
$na="Keerthi";
$age=26;
$sal=45000.756;

echo "Name : ".$na." $in";
echo "<br>";
echo "AGE : ".$age;
echo "<br>";
echo "Salary : ".$sal;
echo "<br>";

if($age>=18)
{
	echo "eligible to vote";
}
else
{
	echo "Not eligible";

}
echo "<br><br>";

$u="admin";
$p="admin";
if($u==$p)
	echo "logged in success";
echo "<br><br>";

$ch=1;
switch($ch)
{
	case 1:
	     echo "<font color='red'>techCiti red</font>";
		 break;
	case 2:
	     echo "<font color='yellow'>techCiti yellow</font>";
		 break;
	case 3:
	     echo "<font color='green'>techCiti green</font>";
		 break;
	default:
	     echo "<font color='black'>techCiti black</font>";
		 break;
}		 
?>