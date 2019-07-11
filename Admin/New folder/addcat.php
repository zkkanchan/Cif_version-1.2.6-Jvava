<?php
include"connect.php";
$catname=$_POST['cat'];
$sql="insert into tab_gallary_cat(cat_name) values('$catname')";
    if( mysqli_query($con, $sql))
	{
		include"catgerieslist.php";
	}
	else
	{
		echo"plase Try Again";
	}



?>