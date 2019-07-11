<?php
include'connect.php';
$info=$_POST['infomation'];
 $data="UPDATE tab_profile SET Information='$info' WHERE Sr='1'"; 
$res=mysqli_query($con,$data);
if($res)
{
	include"Dashborad.php";
}
else
{
	echo"try Again!";
}




?>