<?php
include'connect.php';
$k1=$_GET['id'];
$qt="DELETE FROM tab_gallary_cat where Sr='$k1' ";
$result1 = mysqli_query($con,$qt);
if($result1)
{
include"catgerieslist.php";
}
else
{
	echo"pease Try Again";
}
?>