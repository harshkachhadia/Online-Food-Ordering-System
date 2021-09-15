<?php
    session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>Chinese</title>
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
	

	<link href="https://fonts.googleapis.com/css?family=Lato:400,700" rel="stylesheet"> 
	<link href="https://fonts.googleapis.com/css?family=Great+Vibes" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
  	
	<link rel="stylesheet" type="text/css" href="Chinese.css">
	<link rel="stylesheet" type="text/css" href="card.css">	
	<link rel="stylesheet" type="text/css" href="quantity.css">		
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

	
	<div class="container" >
    
    <center>
    <h1 style="color:white">
    ThankYou For Using Cofos. Payment will be done at the time of delivery.Keep Ordering.
    </h1>
    </center>

</div>

	
	<div class="end" style="background-color: black; color: white;">
	<footer class="page-footer font-small black pt-4">

	    <div class="footer-copyright text-center py-3" style="padding: 40px;">© 2018 Copyright:
	      <a href="index.php"> www.COFOS.com</a>
	    </div>

	 </footer>
	</div>
	
		    		


</body>
</html>