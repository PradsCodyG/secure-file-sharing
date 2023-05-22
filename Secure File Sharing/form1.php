<?php
//echo "hello";
$id = $_REQUEST['id'];
echo "ID : ".$id;
echo "<br><br>";
$na = $_REQUEST['name'];
echo "Name : ".$na;
echo "<br><br>";
$ma = $_REQUEST['mail']; 
echo "Email : ".$ma;
echo "<br><br>";

if(isset($_REQUEST['gen']))
{
$ge = $_REQUEST['gen'];
}
echo "Gender : ".$ge;
echo "<br><br>";
$c1="";
if(isset($_REQUEST['c1']))
{
$c1 = $_REQUEST['c1'];
}
$c2="";
if(isset($_REQUEST['c2']))
{
$c2 = $_REQUEST['c2'];
}
$c3="";
if(isset($_REQUEST['c3']))
{
$c3 = $_REQUEST['c3'];
}
echo "Courses : ".$c1." ".$c2." ".$c3;
echo "<br><br>";
$do = $_REQUEST['dob']; 
echo "dob : ".$do;
echo "<br><br>";
$ti = $_REQUEST['time']; 
echo "Time : ".$ti;
echo "<br><br>";
$ad = $_REQUEST['addr']; 
echo "Address : ".$ad;
echo "<br><br>";
$ph = $_REQUEST['ph']; 
echo "Phone : ".$ph;
echo "<br><br>";
$pa = $_REQUEST['pass']; 
echo "Password : ".$pa;
echo "<br><br>";
$co = $_REQUEST['coun']; 
echo "Country : ".$co;
echo "<br><br>";
$pi = $_FILES['photo']['name'];
echo "File Name : ".$pi;
echo "<br><br>";
$ps = $_FILES['photo']['size'];
echo "File size : ".$ps;
echo "<br><br>";
$pt = $_FILES['photo']['type'];
echo "File Type : ".$pt;
echo "<br><br>";
$ptemp = $_FILES['photo']['tmp_name'];
echo "Temporary Location : ".$ptemp;
echo "<br><br>";
move_uploaded_file($ptemp,"upload/".$pi)


?>




