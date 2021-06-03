    <?php      
        $host = 'b7e9vpcz6pwigs7koahx-mysql.services.clever-cloud.com:3306';  
        $user = 'ug1ghfzsirn2crxm';  
        $password = 'FKyYRnoEnBkdCK3SdTLr';  
        $db_name = 'b7e9vpcz6pwigs7koahx'; 
          
        $con = mysqli_connect($host, $user, $password, $db_name);  
        if(mysqli_connect_errno()) {  
            die("Failed to connect with MySQL: ". mysqli_connect_error());  
        }  
    ?>  