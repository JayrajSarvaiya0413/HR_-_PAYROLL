<?php
   include("comfig.php");
   session_start();
   
   if($_SERVER["REQUEST_METHOD"] == "POST") {
      // username and password sent from form 
      
      $myusername = $_POST['emailid'];
      $mypassword = $_POST['firstname']; 
      
      $sql = "SELECT * FROM admin WHERE emailid = '$myusername' and firstname = '$mypassword'";
      $result = mysqli_query($db,$sql);
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
      $active = $row['active'];
      
      $count = mysqli_num_rows($result);
      
      // If result matched $myusername and $mypassword, table row must be 1 row
		
      if($count == 1) {
         session_register("myusername");
         $_SESSION['login_user'] = $myusername;
         
         header("location: main.php");
      }else {
         header("location: acclogin.php");
         $error = "Your Login Name or Password is invalid";
      }
   }
?>