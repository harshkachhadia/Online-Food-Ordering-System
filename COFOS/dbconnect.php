<?php
  $con=mysqli_connect('localhost','root','') or die("Failed to connect ".mysql_error());
  $db=mysqli_select_db($con,'mp2') or die("Failed to connect to MySQL: " . mysql_error());
?>