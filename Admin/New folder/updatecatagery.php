<?php
include'connect.php';
$cat=$_POST['cat'];
$SR=$_GET['Sr'];
 $data="UPDATE tab_gallary_cat SET cat_name='$cat' WHERE Sr='$SR'"; 
$res=mysqli_query($con,$data);
if($res)
{
	include"catgerieslist.php";
}
else
{
	echo"try Again!";
}


?>