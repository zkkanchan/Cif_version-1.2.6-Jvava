<?php
include"connect.php";
$Catagery=$_POST['cattype'];
$fnms=$_FILES["fontpage"]["name"];
 $dst='../image/catalog/gallary/'.$fnms;
 $dst00="$fnms";
 move_uploaded_file($_FILES["fontpage"]["tmp_name"],"$dst");
 $sql="insert into tab_gallary(Image,Catagery) values('$dst00','$Catagery')";
    if( mysqli_query($con, $sql))
	{
		include"Dashborad.php";
	}
	else
	{
		echo"plase Try Again";
	}

 ?>