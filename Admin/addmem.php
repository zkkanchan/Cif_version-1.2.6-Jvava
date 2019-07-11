<?php
include'connect.php';

$fullname=$_POST['fullname'];
$email=$_POST['email'];
$education=$_POST['education'];
$type=$_POST['type'];

$fnms=$_FILES["fontpage"]["name"];
 $dst='../image/catalog/member/'.$fnms;
 $dst00="$fnms";
 move_uploaded_file($_FILES["fontpage"]["tmp_name"],"$dst");
 //------------pdf---------------------//
 $fnms1=$_FILES["docpdf"]["name"];
 $dst1='../image/catalog/member/pdf/'.$fnms1;
 $pdf="$fnms1";
 move_uploaded_file($_FILES["docpdf"]["tmp_name"],"$dst1");
$sql="insert into tab_member(Name,Image,email,Eductionug,Type,pdf) 
	 values('$fullname','$dst00','$email','$education','$type','$pdf')";
    if( mysqli_query($con, $sql))
	{
		include"memberlist.php";
	}
	else
	{
		echo"plase Try Again";
	}

?>