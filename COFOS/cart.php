<?php
    session_start();
?>

<!DOCTYPE html>
<html>
<head>
	<title>Cart</title>
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
	

	<link href="https://fonts.googleapis.com/css?family=Lato:400,700" rel="stylesheet"> 
	<link href="https://fonts.googleapis.com/css?family=Great+Vibes" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="card.css">	
  
	<link rel="stylesheet" type="text/css" href="cart.css">		
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
			<p>	<a href="home.php">Home</a><font color="white"> > </font><a href="Cart.php">Cart</a> </p>
		</div>
	</div>	

  	<div class="jumbotron">
	    <h1 id="Cart">Cart</h1>
	</div>		
	<div class="container">
    <?php
	include "dbconnect.php";
	
    if(isset($_SESSION['email'])){
		$email=$_SESSION['email'];
		if(isset($_GET['place']))
		 {  
			$query="DELETE FROM cart where email='$email'";
			$result=mysqli_query($con,$query);
		 ?>
			<script type="text/javascript">
				 alert("Order SuccessFully Placed!! Kindly Keep the cash Ready. It will be collected on Delivery");
			</script>
		 <?php                  
		  }
       if(isset($_GET['remove']))
		 {  $food=$_GET['remove'];
			$query="DELETE FROM cart where email='$email' AND fid='$food'";
			$result=mysqli_query($con,$query);
		 ?>
			<script type="text/javascript">
				 alert("Item Successfully Removed");
			</script>
		 <?php                  
		  }     
		if(isset($_GET['ID']))
		{   
				$food=$_GET['ID'];
				
				$query="SELECT * from cart where email='$email' and fid='$food'";
				$result=mysqli_query($con,$query);
				$row = mysqli_fetch_assoc($result);
				if(mysqli_num_rows($result)==0)
					 { $query="INSERT INTO cart values('$food','$food','$email')"; 
					  $result=mysqli_query($con,$query);
					}
				
		}
		$query="SELECT cart.fid,cart.title,category,price from cart INNER JOIN food ON cart.fid=food.fid 
						  WHERE email='$email'";
		$result=mysqli_query($con,$query);
		$i=0;
        $total=0;

        if(mysqli_num_rows($result) > 0) 
        {   
			
            while($row = mysqli_fetch_assoc($result)) 
            {
							
            $path="pics/".$row['category']. "/".$row['fid'].".jpg";
            $total=$total+$row['price'];
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
			 <div style="padding-top:30px;padding-left:10px;float:left;padding-right:10px;">
					
                     
			 <a href="cart.php?remove='.$row['fid'].'" class="btn" 
			 style="background-color: white; color: Black;">
			 Remove
			</a>
                     
                    </div>
			 
                    <div style="padding-top:30px;float:right;padding-right:10px;">
					
                     
					 <a class="btn" href="#" style="background-color: white; color: Black;">
                            
					 Rs.'.$row['price'].'
				   
			   </a>
                     
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
	}
	else{
		print '
               <script type="text/javascript">alert("Login to continue");</script> ';
        echo '<script>window.location.href = "http://localhost/cofos/Login.php";</script>';  
	}
	echo'
	<center>
	<div style="color:white;font-size:20px;background-color:black;">
	<p style="color:white; font-size:20px;">Please enter the delivery location in the textbox below. It must be inside Nirma University</p>
	<textarea cols="30" placeholder="Enter your address here" style="color:black;"></textarea><br><br>

	
	   Total Amount:-'.$total.'
	<br>	
	</div>
	<br>
	<br>
	';
	if($total>0){
		echo'
	<a class="btn btn-danger" href="cart.php?place=true">Place Order</a>
	<center>';
	}
    echo'
	<br>
	<br>
	';
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
<script type="text/javascript" src="quantity.js"></script>
</body>
</html>