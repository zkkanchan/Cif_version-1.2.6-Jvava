<?php
include'connect.php';
$SR=$_GET['Sr'];
$fullname=$_POST['fullname'];
$email=$_POST['email'];
$education=$_POST['education'];
$type=$_POST['type'];
//==============================image===========================================//

if(!($_FILES["fontpage"]["name"])=="")
{ 
$fnms=$_FILES["fontpage"]["name"];


$dst='../image/catalog/member/'.$fnms;
 $dst00="$fnms";
 move_uploaded_file($_FILES["fontpage"]["tmp_name"],"$dst");
 $data="UPDATE tab_member SET Image='$dst00' WHERE Sr='$SR'"; 
mysqli_query($con,$data);
}





 //------------pdf---------------------//
 
 
 if(!($_FILES["docpdf"]["name"])=="")
{ 
$fnms1=$_FILES["docpdf"]["name"];


$dst1='../image/catalog/member/pdf/'.$fnms1;
 $pdf="$fnms1";
 move_uploaded_file($_FILES["docpdf"]["tmp_name"],"$dst1");
 $data="UPDATE tab_member SET pdf='$pdf' WHERE Sr='$SR'"; 
mysqli_query($con,$data);
}


$data="UPDATE tab_member SET Name='$fullname',Eductionug='$education',email='$email',Type='$type',pdf='$pdf' WHERE Sr='$SR'"; 
$res=mysqli_query($con,$data);
if($res)
{
  include"memberlist.php";
}
else
{
echo"Try Agan";	
	
}

?>