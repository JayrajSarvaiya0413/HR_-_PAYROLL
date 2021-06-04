<?php      
    include('coonfing.php');  
    $emailid = $_POST['user'];  
    $firstname = $_POST['pass'];  
      
        //to prevent from mysqli injection  
        $emailid = stripcslashes($emailid);  
        $firstname = stripcslashes($firstname);  
        $emailid = mysqli_real_escape_string($con, $emailid);  
        $firstname = mysqli_real_escape_string($con, $firstname);  
      
        $sql = "select *from accountant where emailid = '$emailid' and firstname = '$firstname'";  
        $result = mysqli_query($con, $sql);  
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
        $count = mysqli_num_rows($result);  
          
        if($count == 1){  
            header("location: main.php");  
        }  
        else{  
            header("location: acclogin.php");  
        }     
?> 