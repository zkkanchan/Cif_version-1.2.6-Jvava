<!DOCTYPE html>
<html dir="ltr" lang="en">
<meta http-equiv="content-type" content="text/html;charset=utf-8" />
<head>
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<title>vaishali shinde</title>
<base  />
<meta name="description" content="vaishali shinde" />
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
<link href="image/catalog/hederlogo.png" rel="icon" />
</head>
<body>

<header>
<div class="container">
  <nav id="menu" class="navbar">
    <div class="navbar-header"><span id="category" class="visible-xs">Categories</span>
      <button type="button" class="btn btn-navbar navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse"><i class="fa fa-bars"></i></button>
    </div>
    <div class="collapse navbar-collapse navbar-ex1-collapse">
      <ul class="nav navbar-nav">
         <li class="dropdown"><a href="index.html" class="dropdown-toggle" ><b><img src="image/catalog/images.jpg" width="15px;"/>Home</b></a></li>
		 <li class="dropdown"><a href="Research.php" class="dropdown-toggle" ><b>Research</b></a></li>
         <li class="dropdown"><a href="publication.php" class="dropdown-toggle"><b>Publications</b></a></li>
	  <li class="dropdown"><a href="Teaching.php" class="dropdown-toggle"><b>Teaching</b></a></li>  
	   <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown"><b>Members</b></a>
                                    <div class="dropdown-menu">
                                          <div class="dropdown-inner">               
										        <ul class="list-unstyled">
                                                    <li><a href="Current.php">Current</a></li>
								                    <li><a href="Alumni.php">Alumni</a></li>
	                                            </ul>
											</div>
							        </div>  </li>
	  <li class="dropdown"><a href="Collaborators.php" class="dropdown-toggle" ><b>Collaborators</b></a>  
	  <li class="dropdown"><a href="facility.php" class="dropdown-toggle" ><b>Facility</b></a></li> 
<li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown"><b>Other Activities</b></a>
                                    <div class="dropdown-menu">
                                          <div class="dropdown-inner">               
										        <ul class="list-unstyled">
                                                    <li><a href="activity1.php">NCFRR</a></li>
								                    <li><a href="activity2.php">B.Sc.Blended</a></li>
													 <li><a href="activity3.php">SPPU Science Club</a></li>
	                                            </ul>
											</div>
							        </div>  </li>	  
      <li class="dropdown"><a href="gallary.php" class="dropdown-toggle"><b>Gallery</b></a></li>
	  <li class="dropdown"><a href="News.php" class="dropdown-toggle" ><b>News<img src="image/catalog/news/news-gif-5.gif" width="30px;"/></b></a> </li>    
         </ul>
    </div>
  </nav>
</div>

<div id="common-home" class="container">
<div class="panel panel-default">
          <div class="panel-heading">
            <h4 class="panel-title"><center>Gallery</center></h4>
          </div>        
           </div>

	<div class="row">
		   <aside id="column-right" class="col-sm-3 hidden-xs">
    <div class="list-group">
	<?php
		  include'connect.php';
		     $sql="select * from tab_gallary_cat";
               if ($query=mysqli_query($con,$sql))
                    { 
                     // Return the number of rows in result set
                           $rowcount=mysqli_num_rows($query);
 
		                   if($rowcount==0)
                               {  
	                               echo'Table is empty!';   
                                 }
	                             else{ 
		                                  
	      
								while($result=mysqli_fetch_array($query))
	                            { 
                                  ?>
								 <a href="deletemember.php?id=<?php echo $result['cat_name'];?>" class="list-group-item"><?php echo$result['cat_name'];?></a>
								 <?php
 
								}
								 }
					}
                                   ?>
    </div>

  </aside>
  <div id="content" class="col-sm-9">
	<?php
include'connect.php';
$sql="select * from tab_gallary ";
if ($query=mysqli_query($con,$sql))
  { $result=mysqli_fetch_array($query);
  // Return the number of rows in result set
  $rowcount=mysqli_num_rows($query);
  }
if($rowcount=0)
{
	echo"empty";
}
else{	
	?>
  <h3><?php //echo $result['catname1'];?></h3>
	<?php
	do{
		
	?>

                
      
	 <div class="col-sm-3">
          <div class="memberwell">
          <div class="memberimage"><a href="image/catalog/gallary/<?php  echo $result['image'];?>"><img src="image/catalog/gallary/<?php  echo $result['image'];?>" alt="" class="img-responsive" onclick="openModal();currentSlide(<?php  echo $result['Sr'];?>)" class="hover-shadow cursor"/></a></div> 
             </div></div>
  
      

<?php
}while($result=mysqli_fetch_assoc($query));
}	
?>
</div>	
<div id="myModal" class="modal">
  <span class="close cursor" onclick="closeModal()">&times;</span>
  <div class="modal-content">
     <?php
include'connect.php';
$sql="select * from tab_gallary ";
if ($query=mysqli_query($con,$sql))
  { $result=mysqli_fetch_array($query);
  // Return the number of rows in result set
  $rowcount=mysqli_num_rows($query);
  }
if($rowcount=0)
{
	echo"empty";
}
else{	
	?>
  <h3><?php //echo $result['catname1'];?></h3>
	<?php
	do{
		 $rowcount=$rowcount+1;
	?>


			 
			 
			 <div class="mySlides">
      <div class="numbertext"> <?php  echo  $rowcount;?>/ 6</div>
      <img src="image/catalog/gallary/<?php echo $result['image']; ?>" class="img-responsive"/>
    </div>
	
       
<?php
}while($result=mysqli_fetch_assoc($query));
}	
?>
	 
	 
	 
	 
	 
    

   
   
    <div class="caption-container">
      <p id="caption"></p>
    </div>


    <div class="column">
      <img class="demo cursor" src="Gallery/powed/1.jpg" style="width:100%" onclick="currentSlide(1)" alt="Closing Ceremony of PUWORP 2016">
    </div>
    <div class="column">
      <img class="demo cursor" src="Gallery/powed/2.jpg" style="width:100%" onclick="currentSlide(2)" alt="Deep-Prajwalan at  PUWORP Opening Ceremony -2016">
    </div>
    <div class="column">
      <img class="demo cursor" src="Gallery/powed/3.jpg" style="width:100%" onclick="currentSlide(3)" alt="Group Photo at PUWORP 2016">
    </div>
    <div class="column">
      <img class="demo cursor" src="Gallery/powed/4.jpg" style="width:100%" onclick="currentSlide(4)" alt="Launching of the Booklet of PUWORP 2016">
    </div>
	 <div class="column">
      <img class="demo cursor" src="Gallery/powed/5.jpg" style="width:100%" onclick="currentSlide(5)" alt="Opening Ceremony of PUWORP 2016">
    </div>
	 <div class="column">
      <img class="demo cursor" src="Gallery/powed/Group Photo at PUWORP 2016.jpg" style="width:100%" onclick="currentSlide(6)" alt="Group Photo at PUWORP 2016">
    </div>
  </div>
</div>

<script>
function openModal() {
  document.getElementById('myModal').style.display = "block";
}

function closeModal() {
  document.getElementById('myModal').style.display = "none";
}

var slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
  showSlides(slideIndex += n);
}

function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("demo");
  var captionText = document.getElementById("caption");
  if (n > slides.length) {slideIndex = 1}
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";
  }
  for (i = 0; i < dots.length; i++) {
      dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";
  dots[slideIndex-1].className += " active";
  captionText.innerHTML = dots[slideIndex-1].alt;
}
</script>
   
	 

     
 </div>		 
 

      
          <div class="panel-collapse collapse" id="collapse-shipping-address">
            <div class="panel-body"></div>
          </div>
        </div>

		
		
        
        </div>
		

	
		
		
		
		
		
		
		
		
		
		
	
</div>
		
       
	
	
	
	
	
	
   </div>
    </div>
</div>
    </div>
</div>
	  

	
<footer>
  <div class="container">
    <div class="row">
            <div class="col-sm-3">
        <h5>Information</h5>
        <ul class="list-unstyled">
                   <li><a href="avinashkumbhar.com"> Dr.vaishali shinde</a></li>
                   <li>about----</li>
                  </ul>
      </div>
            <div class="col-sm-3">
        <h5>About us</h5>
        <ul class="list-unstyled">
           <li>ASK Group</span></li>
           <li>Department of Chemistry,Savitribai Phule Pune University</font></li>
		   <li>Oort Technology,Pune &copy; 2018</li>
        </ul>
      </div>
     
	  
	  
	  <div class="col-sm-3">
        <h5>Contact Us</h5>
        <ul class="list-unstyled">
          <h5>Department of Chemistry,SPPU</h5>
          <li><a href="https://mail.google.com"><i class="fa fa-envelope" style="color:#EB6D0B;,size:10px;" aria-hidden="true"></i>  askum@chem.unipune.ac.in</a></li>
		  <li><a href="+91-20-25601395"><i class="fa fa-phone" style="color:#5AEA08;,size:10px;" aria-hidden="true"></i>  Phone No: +91-20-25601395</a></li>
	      <li><a href="https://www.facebook.com/avinashkumbhar"><i class="fa fa-facebook" style="color:#0B6AEB;,size:10px;" aria-hidden="true"></i>  Facebook</a></li>		  
	   </ul>
      </div>
	  
	  
	  
      <div class="col-sm-3">
     
        <ul class="list-unstyled">
           <li>
                 
                <div class="panel panel-default">
                   
                   
                       
                      
                        <div id="map"></div>
						<style>
       #map {
        height: 170px;
        width: 100%;
       }
    </style>
    <script>
      function initMap() {
        var uluru = {lat:18.552084, lng:73.824158};
        var map = new google.maps.Map(document.getElementById('map'), {
          zoom: 15,
          center: uluru
        });
        var marker = new google.maps.Marker({
          position: uluru,
          map: map
        });
      }
    </script>
    <script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA3CiNpqkyu4nhi_5oTgQFANHlBlnTJs0c&callback=initMap">
    </script>
                    </div>
                </div>
				
				</li>
				



<style>
    .map {
        min-width: 200px;
        min-height: 150px;
        width: 100%;
        height: 3%;
    }

    .header {
        background-color: #F5F5F5;
        color: #36A0FF;
        height: 7px;
        font-size: 27px;
        padding: 10px;
    }
</style>
        </ul>
      </div>
    <hr>
    <p>Powered By <a href="http://www.oorttech.com/">Oort Technology</a><br />vaishali shinde &copy; 2018</p>
 
</footer>
</body>
</html>