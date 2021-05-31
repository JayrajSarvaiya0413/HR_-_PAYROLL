<?php 
	
	session_start();

	  $myuname = trim($_POST['uname']);
  
      $mypass= trim($_POST['pass']);

      if($myuname == "admin" && $mypass == "admin")
      {
      	header("location: main.php");
      }
      else
      {
      	echo "INVALID ID & PASSWORD";
      	header("location: adminlogin.php");
      	
      }
	
 ?>