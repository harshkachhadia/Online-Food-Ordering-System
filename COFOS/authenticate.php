<?php
	session_start();
  if(isset($_SESSION['email'])){
       header("location: login.php?Message=Login To Continue");
    echo '<script type="text/javascript">
        alert("Please Login view your cart!")
    </script>';
    }

?>
<?php  
       if(isset($_POST["signin"])){  
       if(!empty($_POST['email']) && !empty($_POST['password'])) {  
        include "dbconnect.php";
           $email=($_POST['email']);  
           $pass=($_POST['password']);  
         
            

           $query1="SELECT * FROM login WHERE email='$email' AND password='$pass'";
           $query=mysqli_query($con,$query1); 
           $numrows=mysqli_num_rows($query);
           $dbemail;
           $dbpassword;
           $contact; 
           $dbname; 
           if($numrows>0){  
               while($row=mysqli_fetch_array($query)){  
                   $dbemail=$row['email'];  
                   $dbname=$row['name'];
                   $dbpassword=$row['password'];
                   $contact=$row['first_n']; 
                }  
               
               if($email == $dbemail && $pass == $dbpassword){  
                   session_start();  
                   $_SESSION['email']=$email;
                   $_SESSION['contact']=$contact;
                   
                   
                   
                   header("Location: index.php");  
               }  
           } 
           else {
               
               print '
               <script type="text/javascript">alert("Wrong E-mail ID or Password!!!");</script> ';
               echo '<script>window.location.href = "http://localhost/cofos/Login.php";</script>';   
           }
         
       } 
       else {  
           echo "All fields are required!";  
       }  
   
    }

   ?> 