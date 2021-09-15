<?php
    session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>About</title>
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="fontawesome/css/all.css">

	<link href="https://fonts.googleapis.com/css?family=Lato:400,700" rel="stylesheet"> 
	<link href="https://fonts.googleapis.com/css?family=Great+Vibes" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">

	<link rel="stylesheet" type="text/css" href="About.css">		
</head>
<body>

	<nav class="navbar navbar-inverse navbar-fixed-top" style="background-color: black;">
		<div class="container">
			<div class="navbar-header">
			<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-nav-demo" aria-expanded="false">
	        <span class="sr-only">Toggle navigation</span>
	        <span class="icon-bar"></span>
	        <span class="icon-bar"></span>
	        <span class="icon-bar"></span>
	      </button>
				<a href="index.php" class="navbar-brand"><i class="fas fa-utensils"></i> COFOS</a>
			</div>

				<form class="navbar-form navbar-left" role="search">
  					<div class="form-group">
    					<input type="text" class="form-control" placeholder="Search">
  					</div>
		            <button class="btn btn-primary" type="submit">
		            	<span class="glyphicon glyphicon-search"></span>
		            </button>			
				</form>	

			<div class="collapse navbar-collapse" id="bs-nav-demo">
				<ul class="nav navbar-nav">
					<li><a href="home.php">Home</a></li>
					<li><a href="About.php">About</a></li>
					<li><a href="">Cart <i class="fas fa-shopping-cart"></i></a></li>
				</ul>
				
				<?php
				
				if(isset($_SESSION['email'])){
					echo"	
				  <div class='dropdown nav navbar-nav navbar-right dropdown-menu-right'>
					<button class='btn btn-primary dropdown-toggle' type='button' data-toggle='dropdown'>
					<ul class='nav navbar-nav navbar-right'><li> Welcome ".$_SESSION['email']."</li></ul>
          <span class='caret'></span></button>
          <ul class='dropdown-menu'>
					<li><a href='#'>Your account</a></li>
           <li><a href='#'>Cart</a></li>
           <li><a href='logout.php'>Logout</a></li>
           </ul>
					 </div>";
				}
				else{
					
					echo"<ul class='nav navbar-nav navbar-right'><li><a href='Login.php'>Login/SignUp <i class='fa fa-user'></i></a></li></ul>";
				}
				?>
		
		</div>
	</nav>

	<div class="container">
		<div class="hierarchy">
			<p>	<a href="home.php">Home</a><font color="white"> > </font><a href="About.html">About</a> </p>
		</div>
	</div>	

  	<div class="jumbotron">
	    <h1 id="About">About</h1>
	</div>		
	<img src="Images/about.jpg">
	
	<div class="container">
		    <div class="abt">
				<div class="row">
			      <div class="col-lg-4 col-md-4 col-sm-12">
				        <div class="thumbnail">
				        	<img src="Images/aboutimg.jpg">			        	
				        </div>
				        <p>
				        	<b>Grilled Sandwich</b>
				        </p>
				        <br><br>
				        <h2 style="font-family: Arial;"><b>Browse</b></h2>
				        <p style="word-wrap: break-word; font-style: bold; text-align: left; padding-left: 10px;">COFOS has hundreds of dishes to choose from. When you open the Website, you can scroll through the feed for various categories or search for a particular food item or cuisine. When you find something you like, tap to add it to your cart.</p>
			      </div>
			      <div class="col-lg-4 col-md-4 col-sm-12">
			      		<div class="thumbnail">
			      			<img src="Images/aboutorder.png">
			      		</div>
			      		<p style="background-color: green; color: white; padding: 17px 0; width: 300px; margin: auto auto; vertical-align: middle;">
			      			<b>PLACE ORDER</b>
			      		</p>
			      		<br><br>
			      		<h2 style="font-family: Arial; margin-top: 15px;"><b>Order</b></h2>
			        	<p style="word-wrap: break-word; font-style: bold; text-align: left; padding-left: 10px;">When you’re ready to check out, you’ll see your address, an estimated delivery time, and the price of the order including tax and booking fee. When everything looks right, just tap Place order–and that’s it.</p>

			      </div>
			      <div class="col-lg-4 col-md-4 col-sm-12">
			      	<div class="thumbnail">
			      		<img src="Images/abouttrack.jpg">
			      	</div>
			       <br>
			       <h2 style="font-family: Arial; margin-top: 19.5px;"><b>Track</b></h2>
			       <p style="word-wrap: break-word; font-style: bold; text-align: left; padding-left: 10px;">Follow your order in the site. First you’ll see the canteen accept and start prepping. Then, when the order’s almost ready, a canteen delivery person will pick it up. Next, they’ll deliver your food to you. You’ll be able to see these constant updates and track progress on the screen.</p>
			      </div>
			    </div>
			    <br><br><br><br>
			    <div class="row">
			    	<div class="col-lg-6 col-md-6 col-sm-12 ">
			    		<p align="left">
			    		<b>Address: </b><br>K-Block,<br>Nirma University,<br>Sarkhej-Gandhinagar Highway,<br>Ahmedabad-382481	
			    		</p>
			    		<br>
			    		<p align="left">
			    		<b>Contact Number: </b>+91 XXXXXXXXXX	
			    		</p>
			    		<br>
			    		<p align="left">
			    		<b>Email: </b>	
			    		</p>
			    	</div>
			    	<div class="col-lg-6 col-md-6 col-sm-12">
			    		
					<div style="width: 100%;"><iframe width="100%" height="600" src="https://maps.google.com/maps?width=100%&amp;height=600&amp;hl=en&amp;coord=23.128383900000003,72.54447300017958&amp;q=K-Block%2C%20Nirma%20University+(K-Canteen%2C%20Nirma%20University)&amp;ie=UTF8&amp;t=&amp;z=14&amp;iwloc=B&amp;output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"><a href="https://www.maps.ie/create-google-map/">Google Maps iframe generator</a></iframe></div><br />			    		

			    	</div>
			    </div>  		    	
		    </div>
	</div>	
	<br><br>
	
	<div class="end" style="background-color: black; color: white;">
	<footer class="page-footer font-small black pt-4">

	    <div class="footer-copyright text-center py-3" style="padding: 40px;">© 2018 Copyright:
	      <a href="index.php"> www.COFOS.com</a>
	    </div>

	 </footer>
	</div>
	
		    		


<script type="text/javascript" src="bootstrap/js/jquery-3.3.1.js"></script>
<script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
</body>
</html>