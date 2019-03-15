<?php 
session_start();
$User = $_SESSION['Name'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
	<meta name="description" content="">
	<meta name="author" content="">
	<link rel="icon" href=" ">
	<title>Online Shopping Website</title>

	<!-- Bootstrap core CSS -->
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<!-- Custom styles for this template -->
	<link href="css/custom.css" rel="stylesheet">

	<!-- Helper Styles -->
	<link href="css/loaders.css" rel="stylesheet">
	<link href="css/swiper.min.css" rel="stylesheet">

	<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">

	<style type="text/css">

		section{
			background-color: rgb(94,186,253);
		}
        h1{
        	color: black;
        }
        .Shop-sec a{
			text-decoration : none;
			color:white;


		}


        .Shop-sec{
        	color: black;
        }
		        .Shop-sec .item {
			text-align: left;
		}
		.Shop-sec .heading {
			float: left;
			color: black;
			width: 100%;
			margin-bottom: 70px;
		}
		.Shop-sec h2 {
			display: block;
			text-transform: capitalize;
			font-weight: 600;
			color: grey;
			font-size: 32px;
		}
		/*.Shop-sec h2 small {
			color: #222;
			display: block;
			font-size: 22px;
			margin-bottom: 18px;
		}*/
		.Shop-sec h3 small {
			display: block;
			color: black;
			margin-bottom: 15px;
		}
		.Shop-sec h3 a {
			color: #333;
			font-size: 22px;
		}
		.Shop-sec h3 a:hover {
			color: #0297FF;
			text-decoration: none;
		}
		.Shop-sec .item-image-block {
			margin-bottom: 40px;
		}
		.Shop-sec .item-image-block img {
			border-radius: 5px;
		}

	</style>

</head>

<body>
	<div class="loader loader-bg">
  		<div class="loader-inner ball-clip-rotate-pulse">
	    	<div></div>
	   		<div></div>
  		</div>
	</div>

<!-- Top Navigation -->
    <nav class="navbar navbar-toggleable-md mb-4 top-bar navbar-static-top sps sps--abv">
        <div class="container">
      <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarCollapse1" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <a class="navbar-brand" href="#">Apni<span>dukan</span></a>
      <div class="collapse navbar-collapse" id="navbarCollapse1">
        <ul class="navbar-nav ml-auto">
         <li class="nav-item active"> <a class="nav-link" href="index.html">Home <span class="sr-only">(current)</span></a> </li>
         <li class="nav-item"> <a class="nav-link" href="LogOut.php">LogOut</a> </li>
        </ul>
      </div>
            </div>
    </nav>

<!-- Shop
    ================================================== -->

<section class="Shop-sec" id="Shop">
  <div class="container">
       <div class="row">

         	<!-- <div class="col-md-12"> -->
			    <div class="heading text-md-center text-xs-center">
			    	<div class="col-md-12">
			    		<center>
			      			<h2>Stationery</h2>
			      	    </center>
			        </div>
			    </div>
    	   <!--  </div> -->
    	     <div class="col-md-3"></div>
             <div class="col-md-6">
           <!-- Shop
    ================================================== -->
				   <?php
							$link = mysqli_connect("127.0.0.1:3306","root","","sms");
							if(!$link){
								die('Page Under Construction');
							}
							if(!mysqli_select_db($link,'sms')){
								die('Page Under Construction');
							}

							$query = "SELECT Pname FROM product where Category='Stationery' ";

							$run = mysqli_query($link,$query);
							// $row = mysqli_fetch_array($run,MYSQLI_ASSOC);

							//$b = mysqli_real_escape_string($link,$row['Pname']);

							while( $row = mysqli_fetch_array($run,MYSQLI_ASSOC)){ 
								$b = mysqli_real_escape_string($link,$row['Pname']);
					?>
					         
							 <div class="col-md-12 item" style="border: 5px solid white; border-radius: 10px; margin: 30px;">
						        <div class="item-image-block"></div>
							    
						        <div class="Signup">
						          <center>
				            		<label for="product"><center><?php echo $row['Pname']; ?></center></label><br>
                        			<button  class="btn btn-primary" type="submit"><?php echo"<a href=\"Bill.php?Pname=$b\">Buy Now</a>"; ?></button>

                            	  </center>
                   				</div>
						     </div>
							

					<?php } ?>
			</div>
			<div class="col-md-3"></div>
	    
	   </div>
      
	   <div class="row">
	      
       </div>
  </div>
</section>




<!-- Footer
    ================================================== -->
<footer>
  <div class="container">
    <div class="row">
      <div class="col-md-3 col-sm-6">
        <ul>
          <li><a href="#">Home</a></li>
          <li><a href="#Signup">Signup</a></li>
          <li><a href="#Login">Login</a></li>
        </ul>
      </div>
      <div class="col-md-3 col-sm-6">
        <ul>
          <li><a href="#Category">Products</a></li>
          <li><a href="#">Term and Conditions</a></li>
          <li><a href="#">About ApniDukan</a></li>
        </ul>
      </div>
      <div class="col-md-6 col-sm-12">
        <h2>About our Shop</h2>
        <p style="text-align: justify;">Clothes, electronics, accessories - whatever your need for the hour maybe, ApniDukan, your favorite online shopping site, is sure to spoil you with a wide range of products.</p>
      </div>
    </div>
    <div class="row copy-footer">
      <div class="col-sm-6 col-md-3"> &copy;<script type="text/javascript">document.write(new Date().getFullYear());</script> <a target="_blank" rel="nofollow" href="https://grafreez.com/"></a> ApniDukan.com </div>
      <div class="col-sm-6 col-md-3 pull-right text-xs-right">Created with <i class="fa fa-heart"></i></div>
    </div>
  </div>
</footer>

<!-- Bootstrap core JavaScript
    ================================================== --> 
<!-- Placed at the end of the document so the pages load faster --> 
<script src="js/jquery.min.js" ></script> 
<script src="js/bootstrap.min.js"></script> 
<script src="js/scrollPosStyler.js"></script> 
<script src="js/swiper.min.js"></script> 
<script src="js/isotope.min.js"></script> 
<script src="js/nivo-lightbox.min.js"></script> 
<script src="js/wow.min.js"></script> 
<script src="js/core.js"></script> 

<!-- IE10 viewport hack for Surface/desktop Windows 8 bug --> 
<script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>
</body>
</html>


</body>


