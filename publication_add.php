<!DOCTYPE html>
<html dir="ltr" lang="en">
<meta http-equiv="content-type" content="text/html;charset=utf-8" />
<head>
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<title>Aksharbag</title>
<base  />
<meta name="description" content="Aksharbag" />
<script src="catalog/view/javascript/jquery/jquery-2.1.1.min.js" type="text/javascript"></script>
<link href="catalog/view/javascript/bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen" />
<script src="catalog/view/javascript/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
<link href="catalog/view/javascript/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
<link href="http://fonts.googleapis.com/css?family=Open+Sans:400,400i,300,700" rel="stylesheet" type="text/css" />
<link href="catalog/view/theme/default/stylesheet/stylesheet.css" rel="stylesheet">
<link href="catalog/view/javascript/jquery/swiper/css/swiper.min.css" type="text/css" rel="stylesheet" media="screen" />
<link href="catalog/view/javascript/jquery/swiper/css/opencart.css" type="text/css" rel="stylesheet" media="screen" />
<script src="catalog/view/javascript/jquery/swiper/js/swiper.jquery.js" type="text/javascript"></script>
<script src="catalog/view/javascript/common.js" type="text/javascript"></script>
<link href="image/catalog/3.png" rel="icon" />

<script language="javascript" type="text/javascript">
function limitText(limitField, limitNum) {
    if (limitField.value.length > limitNum) {
        limitField.value = limitField.value.substring(0, limitNum);
    }
}
</script>

   <!-- <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js"></script>-->

<script type="text/javascript">
function checkMailStatus(){
    //alert("came");
var email=$("#email").val();// value in field email
$.ajax({
    type:'post',
        url:'register_mail_check.php',// put your real file name 
        data:{email: email},
        success:function(msg){
        alert(msg); // your message will come here.     
        }
 });
}

</script>
</head>
<body>
<div class="container">

<div id="account-register" class="container">
  <ul class="breadcrumb">
        <li><a href="index.html?route=common/home"><i class="fa fa-home"></i></a></li>
        <li><a href="indexe223.html?route=account/account">Account</a></li>
        <li><a href="index5502.html?route=account/register">Register</a></li>
      </ul>
    <div class="row">
                <div id="content" class="col-sm-9">
       gghghhhhhhhhhhhh
      </div>
    <aside id="column-right" class="col-sm-3 hidden-xs">
    <div class="list-group">
    <a href="indexe223.html?route=account/login" class="list-group-item">Login</a> 	
	<a href="indexacda.html?route=account/forgotten" class="list-group-item">Forgotten Password</a>
    <a href="indexe223.html?route=account/account" class="list-group-item">My Account</a>
   <a href="indexe223.html?route=account/address" class="list-group-item">Address Book</a> 
   <a href="index5502.html?route=account/register" class="list-group-item">Register</a> 
	<a href="indexe223.html?route=account/wishlist" class="list-group-item">Wish List</a> 
	<a href="indexe223.html?route=account/order" class="list-group-item">Order History</a> 
	<a href="indexe223.html?route=account/download" class="list-group-item">Downloads</a>
	<a href="indexe223.html?route=account/recurring" class="list-group-item">Recurring payments</a>
	<a href="indexe223.html?route=account/reward" class="list-group-item">Reward Points</a> 
	<a href="indexe223.html?route=account/return" class="list-group-item">Returns</a> 
	<a href="indexe223.html?route=account/transaction" class="list-group-item">Transactions</a>
	<a href="indexe223.html?route=account/newsletter" class="list-group-item">Newsletter</a>---->
  </div>

  </aside>
</div>
</div>


		
<footer>
  <div class="container">
    <div class="row">
            <div class="col-sm-3">
        <h5>Information</h5>
        <ul class="list-unstyled">
                   <li><a href="#">About Us</a></li>
                    <li><a href="#">Delivery Information</a></li>
                    <li><a href="#">Privacy Policy</a></li>
                    <li><a href="#">Terms &amp; Conditions</a></li>
                  </ul>
      </div>
            <div class="col-sm-3">
        <h5>Customer Service</h5>
        <ul class="list-unstyled">
          <li><a href="#">Contact Us</a></li>
          <li><a href="#">Returns</a></li>
          <li><a href="#">Site Map</a></li>
        </ul>
      </div>
      <div class="col-sm-3">
        <h5>Extras</h5>
        <ul class="list-unstyled">
          <li><a href="#">Brands</a></li>
          <li><a href="#">Gift Certificates</a></li>
          <li><a href="#">Affiliate</a></li>
          <li><a href="#">Specials</a></li>
        </ul>
      </div>
      <div class="col-sm-3">
        <h5>My Account</h5>
        <ul class="list-unstyled">
          <li><a href="#">My Account</a></li>
          <li><a href="#">Order History</a></li>
          <li><a href="#">Wish List</a></li>
          <li><a href="#">Newsletter</a></li>
        </ul>
      </div>
    </div>
    <hr>
    <p>Powered By <a href="http://www.OOrttechnology.com/">OORT</a><br /> Aksharbag &copy; 2017</p>
  </div>
</footer>

</body>

</html>