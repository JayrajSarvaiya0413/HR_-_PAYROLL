    <?php      
        $host = "localhost";  
        $user = "ohMWAJY6IL";  
        $password = 'ILi1AHLaLG';  
        $db_name = "ohMWAJY6IL";  
          
        $con = mysqli_connect($host, $user, $password, $db_name);  
        if(mysqli_connect_errno()) {  
            die("Failed to connect with MySQL: ". mysqli_connect_error());  
        }  
    ?>  