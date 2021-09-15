<?php
   session_start();
	include "dbconnect.php";
	
	$username=$_POST["name"];
   $contact=$_POST["contact"];
   $email=$_POST["email"];
   $password=$_POST["password"];
   $sql="Insert into `login` values('$username','$contact','$email','$password')";
   if(mysqli_query($con,$sql)){
        
		$_SESSION['email'] = $email;
		echo "<script>alert('Logged in successfully!'); window.location='index.php';</script>";
   }
   else{
	echo "error";
   }
   
?>