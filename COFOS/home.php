<?php
    session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>Order Food Online</title>
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="fontawesome/css/all.css">

	<link href="https://fonts.googleapis.com/css?family=Lato:400,700" rel="stylesheet"> 
	<link href="https://fonts.googleapis.com/css?family=Great+Vibes" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
	
	<link rel="stylesheet" type="text/css" href="home.css">	
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

  	<div class="jumbotron">
	    <h1><i class="fa fa-utensils"></i> Canteen Online Food Ordering System </h1>
	    <p align="center">Ordering Food is now a Cakewalk. </p> 
	</div>	

	<div class="container">



		    <div id="myCarousel" class="carousel slide" data-ride="carousel">
		        <ol class="carousel-indicators">
		            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
		            <li data-target="#myCarousel" data-slide-to="1"></li>
		            <li data-target="#myCarousel" data-slide-to="2"></li>
		        </ol>   
		        
		        <div class="carousel-inner">
		            <div class="item active">
		                <img src="Images/1.jpg" alt="First Slide" >
		                <div class="carousel-caption d-none d-md-block">
    						<h3>Pizza</h3>
    						<p>The taste that you will never forget..</p>
  						</div>
		            </div>
		            <div class="item">
		                <img src="Images/2.jpg" alt="Second Slide" >
		                <div class="carousel-caption d-none d-md-block">
    						<h3>Pizza</h3>
    						<p>The taste that you will never forget..</p>
  						</div>		                
		            </div>
		            <div class="item">
		                <img src="Images/3.jpg" alt="Third Slide" >
		                <div class="carousel-caption d-none d-md-block">
    						<h3>Pizza</h3>
    						<p>The taste that you will never forget..</p>
  						</div>
		            </div>
		        </div>
		       
		        <a class="carousel-control left" href="#myCarousel" data-slide="prev">
		            <span class="glyphicon glyphicon-chevron-left"></span>
		        </a>
		        <a class="carousel-control right" href="#myCarousel" data-slide="next">
		            <span class="glyphicon glyphicon-chevron-right"></span>
		        </a>
		    </div>

		<hr class="style-two">
		   
		<p id="category">Categories</p>

	    <div class="row">
	      <div class="col-lg-4 col-md-4 col-sm-12">
	        <div class="thumbnail">
	          	<img src="Images/coffee.jpg">
			 	<a href="Beverages.php" class="btn btn-info btn-block" role="button">Beverages</a>		          
	        </div>
	      </div>
	      <div class="col-lg-4 col-md-4 col-sm-12">
	        <div class="thumbnail">
	          <img src="Images/poha.jpg">
	          <a href="Snacks.php" class="btn btn-info btn-block" role="button">Snacks</a>
	        </div>
	      </div>
	      <div class="col-lg-4 col-md-4 col-sm-12">
	        <div class="thumbnail">
	          <img src="Images/sandwich.jpg">
	          <a href="Sandwich.php" class="btn btn-info btn-block" role="button">Sandwich</a>
	        </div>
	      </div>
	    </div>  
	    <hr class="style-two">
	    <div class="row">
	      <div class="col-lg-4 col-md-4 col-sm-12">
	        <div class="thumbnail">
	          <img src="Images/bhajipav.jpg">
	          <a href="BPC.php" class="btn btn-info btn-block" role="button">BhajiPav & Chats</a>
	        </div>
	      </div>
	      <div class="col-lg-4 col-md-4 col-sm-12">
	        <div class="thumbnail">
	          <img src="Images/manchurian.jpg">
	          <a href="Chinese.php" class="btn btn-info btn-block" role="button">Chinese</a>
	        </div>
	      </div>
	      <div class="col-lg-4 col-md-4 col-sm-12">
	        <div class="thumbnail">
	          <img src="Images/dosa.jpg">
	          <a href="SouthIndian.php" class="btn btn-info btn-block" role="button">South Indian</a>
	        </div>
	      </div>
	    </div>
	    <hr class="style-two">
	    <div class="row">
	      <div class="col-lg-4 col-md-4 col-sm-12">
	        <div class="thumbnail">
	          <img src="Images/thali1.jpg">
	          <a href="FullThali.php" class="btn btn-info btn-block" role="button">Full Thali</a>
	        </div>
	      </div>
	      <div class="col-lg-4 col-md-4 col-sm-12">
	        <div class="thumbnail">
	          <img src="Images/Paneer-Butter-Masala.jpg">
	          <a href="Punjabi.php" class="btn btn-info btn-block" role="button">Veg & Punjabi</a>
	        </div>
	      </div>
	      <div class="col-lg-4 col-md-4 col-sm-12">
	        <div class="thumbnail">
	          <img src="Images/tandooriRoti.jpg">
	          <a href="ETI.php" class="btn btn-info btn-block" role="button">Extra Tandoori Items</a>
	        </div>
	      </div>
		</div>    
		<hr class="style-two">
		<div class="row">
	      <div class="col-lg-4 col-md-4 col-sm-12">
	        <div class="thumbnail">
	          <img src="Images/curd.jpg">
	          <a href="Curd.php" class="btn btn-info btn-block" role="button">Curd & ButterMilk</a>
	      </div>
	    </div>
	      <div class="col-lg-4 col-md-4 col-sm-12">
	        <div class="thumbnail">
	          <img src="Images/milkshake.jpg">
	          <a href="Milkshake.php" class="btn btn-info btn-block" role="button">Milkshake</a>
	      </div>
	    </div>
	      <div class="col-lg-4 col-md-4 col-sm-12">
	        <div class="thumbnail">
	          <img src="Images/orangejuice.jpg">
	          <a href="Juice.php" class="btn btn-info btn-block" role="button">Juice</a>
	      </div>
	     </div>
	    </div> 
	    <hr class="style-two">            
	  </div>

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