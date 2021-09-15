<!doctype html>
<html>

	<head>
		<meta charset="utf-8">
		<title>Forgot Password</title>
		<link rel="stylesheet" type="text/css" href="home.css">
		<link rel="stylesheet" href="style.css">
		
		<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
		<link rel="stylesheet" type="text/css" href="fontawesome/css/all.css">
		<link href="https://fonts.googleapis.com/css?family=Lato:400,700" rel="stylesheet">		
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
				<ul class="nav navbar-nav navbar-right">
					<li><a href="home.php">Home</a></li>
					<li><a href="About.php">About</a></li>
					<li><a href="">Cart <i class="fas fa-shopping-cart"></i></a></li>					
					<<!-- li><a href="">Sign Up <i class="fa fa-user-plus"></i></a></li> -->
					<li><a href="Login.php">Login/SignUp <i class="fa fa-user"></i></a></li>
				</ul>
			</div>
		</div>
	</nav>		

		<div class="loginBox">
			
			<h2 style="color: white;">Forgot Password</h2>

			<form name="login" action="Login.html" method="post" enctype="text/plain" onSubmit="window.alert('Your Password will be sent to your mail.')">
				<p>Enter your Email</p>
				<input type="Email" name="" placeholder="Enter Email" required>

				<input type="submit" name="" value="submit">

			</form>

		</div>
		<script type="text/javascript" src="bootstrap/js/jquery-3.3.1.js"></script>
		<script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>		
	</body>
</html>
