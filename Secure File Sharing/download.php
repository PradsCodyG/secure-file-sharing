<?php

$fname=$_REQUEST['file'];
//echo $fname;
header("Content-disposition:attachement;filename=$fname");
readfile("uploads\\$fname");


?>