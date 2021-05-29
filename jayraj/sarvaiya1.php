<?php
    session_start();
    $message="";
    $emailid = $_POST['eid'];
        $firstname = $_POST['fname'];
    if(count($_POST)>0) {
        $con = mysqli_connect('localhost','root','','honestysayar') or die('Unable To connect');
        $result = mysqli_query($con,"SELECT * FROM accountant WHERE emailid ='" . $_POST["eid"] . "' and firstname = '". $_POST["fname"]."'");
        $row  = mysqli_fetch_array($result);
        while ($row = mysqli_fetch_assoc($result)) {

            $dbname = $row['emailid'];
            $dbpwd = $row['firstname'];

            if($firstname == $dbpwd) {
            session_start();
            $_SESSION['emailid'] = $dbname;
            header("location:main.php");
        }

            else {
         $message = "Invalid Username or Password!";
        }
    }
}
?>