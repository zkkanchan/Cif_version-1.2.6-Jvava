<?php
include'connect.php';
if(!($_FILES["fontpage"]["name"])=="")
{ 
$fnms=$_FILES["fontpage"]["name"];


$dst='../image/catalog/'.$fnms;
 $dst00="$fnms";
 move_uploaded_file($_FILES["fontpage"]["tmp_name"],"$dst");
 $data="UPDATE tab_profile SET Image='$dst00' WHERE Sr='1'"; 
$res=mysqli_query($con,$data);
if($res)
{
	include"Dashborad.php";
}
else
{
	echo"try Again!";
}
}



?>