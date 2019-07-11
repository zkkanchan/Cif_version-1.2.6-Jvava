<!DOCTYPE html>
<html dir="ltr" lang="en">
<meta http-equiv="content-type" content="text/html;charset=utf-8" />
<head>
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<title>Chemistry Department</title>
<base  />
<header>
  <div class="container">
    <div class="row">
      <div class="container">
        <div id="logo"><a href="index9328.html?route=common/home"><img src="image/cache/catalog/demo/banners/headerimage - Copy.png" title="University" alt="Avinash Kumbhar" class="img-responsive" /></a></div>
      </div>
     
     
    </div>
  </div>

	 </style>
	 
  <div class="col-md-2">
  
      <div class="list-group list-group-flush">
        <a href="index.html" class="list-group-item list-group-item-action bg-light">Home</a>
        <a href="#" class="list-group-item list-group-item-action bg-light">Research</a>
        <a href="#" class="list-group-item list-group-item-action bg-light">Publications</a>
        <a href="teaching.php" class="list-group-item list-group-item-action bg-light">Teaching</a>
        <a href="#" class="list-group-item list-group-item-action bg-light">Members</a>
		<a href="#" class="list-group-item list-group-item-action bg-light">Collaborators</a>
        <a href="#" class="list-group-item list-group-item-action bg-light">Gallery</a>
		<a href="#" class="list-group-item list-group-item-action bg-light">News</a>
      </div>
  
  
  
  
  </div>

<div id="common-home" class="container">
  <div class="row">
               
	  <div id="content" class="col-sm-10">
<div class="panel panel-default">
          <div class="panel-heading">
            <h4 class="panel-title"><center>Alumni Members</center></h4>
          </div>        
           </div>
		  	
	
	
	
	 <div class="row">
   
	 
    <?php
include'connect.php';
$sql="select * from tab_member where Type='Alumini'";
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
	
	 
	
	 <div class="product-thumb transition">
	 <div class="col-sm-3">
          <div class="memberwell">
          <div class="memberimage"><a href="#"><img src="image/catalog/member/<?php  echo $result['Image'];?>" alt="" class="img-responsive" /></a></div> 
             </div></div>
		  <div class="col-sm-9">
          <div class="memberwell">
		  <div class="caption">  <b> Name :</b> <?php echo$result['Name'];?> <br> <?php echo$result['Eductionug'];?> <br>                                                              
                                                             <b>Education :</b><?php echo$result['ug_college'];?><br>
															 <?php echo$result['pg_college'];?> <br>
                                                             <?php echo$result['phd_college'];?> <br>
                                                               <b>Email :</b><?php echo$result['email'];?><br> <a href="image/catalog/member/pdf/<?php echo$result['pdf'];?>" ><font color="#CC0099"> Read More</font></a>
           
	        </div> </div>  
			
			
	</div></div>
 
<?php
}while($result=mysqli_fetch_assoc($query));
}	
?>
     
 </div>		 
 

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
                   <li><a href="avinashkumbhar.com"> Dr.Avinash Kumbhar</a></li>
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
    <p>Powered By <a href="http://www.oorttech.com/">Oort Technology</a><br />Avinash Kumbhar &copy; 2018</p>
 
</footer>
</body>
</html>