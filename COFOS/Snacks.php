<?php
    session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>Snacks</title>
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
	

	<link href="https://fonts.googleapis.com/css?family=Lato:400,700" rel="stylesheet"> 
	<link href="https://fonts.googleapis.com/css?family=Great+Vibes" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
  	
	<link rel="stylesheet" type="text/css" href="Snacks.css">
	<link rel="stylesheet" type="text/css" href="card.css">	
			
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
					<li><a href="cart.php">Cart <i class="fas fa-shopping-cart"></i></a></li>
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
			<p>	<a href="home.php">Home</a><font color="white"> > </font><a href="Snacks.html">Snacks</a> </p>
		</div>
	</div>	

  	<div class="jumbotron">
	    <h1 id="Snacks">Snacks</h1>
	</div>		
	
	<div class="container">
    <?php
    include "dbconnect.php";
    
    $_SESSION['category']='snacks';
        
    $category=$_SESSION['category'];
    
            
    $query = "SELECT * FROM food WHERE category='$category'";
    $result = mysqli_query ($con,$query)or die(mysqli_error($con));
    
    $i=0;
    

        if(mysqli_num_rows($result) > 0) 
        {   
            while($row = mysqli_fetch_assoc($result)) 
            {
			  
            $path="pics/".$row['category']. "/".$row['fid'].".jpg";
            $target="cart.php?ID=".$row['fid']."&";
            if($i%4==0)
            echo '<div class="row">';
            echo'
               
            <div class="col-lg-3">
								<div class="card-main">
								<center>
								     <div>
                        <h3 class="text-card">
                            '.$row['title'].'
                        </h3>
                      </div>
                </center>
             <div class="card-main-img">
               <img src="'.$path.'" alt="yaj">
             </div>
			 <div>
			       
                    <div style="padding-top:28px;padding-right: 10px;">
					
					 <div style="float:right">';
					 
					 if(isset($_SESSION['email'])){
						echo'
						<a class="btn" href="'.$target.'" style="background-color: white; color: Black;">
                            
                              Rs.'.$row['price'].'
                            
						</a>';
					 }
					 else{
						echo'<a class="btn" href="Login.php"style="background-color: white; color: Black;">
                            
						Rs.'.$row['price'].'
					  
				        </a>';
					 }
		echo'
                     </div>
                    </div>
             </div>
              </div>
         </div>
                ';
            $i++;
            if($i%4==0)
            echo '</div>';
            }
        }
    echo '</div>';
    ?>

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

<script>


function func1(t) {
var qq=parseInt($('input[name='+t+']').val());
if(qq-1>=1){
    $('input[name='+t+']').val(qq-1);
}


}
function func2(t) {
var qq=parseInt($('input[name='+t+']').val());
if(qq+1<=10){
        $('input[name='+t+']').val(qq+1);
}


}
</script>
</body>
</html>