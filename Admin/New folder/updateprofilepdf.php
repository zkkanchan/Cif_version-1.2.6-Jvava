<?php
include'connect.php';
if(!($_FILES["docpdf"]["name"])=="")
{ 
$fnms=$_FILES["docpdf"]["name"];


$dst='../image/catalog/'.$fnms;
 $dst00="$fnms";
 move_uploaded_file($_FILES["docpdf"]["tmp_name"],"$dst");
 $data="UPDATE tab_profile SET More_PDF='$dst00' WHERE Sr='1'"; 
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