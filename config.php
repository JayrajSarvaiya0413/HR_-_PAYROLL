<?php
define('DB_SERVER','b7e9vpcz6pwigs7koahx-mysql.services.clever-cloud.com:3306');
define('DB_USER','ug1ghfzsirn2crxm');
define('DB_PASS' ,'FKyYRnoEnBkdCK3SdTLr');
define('DB_NAME', 'b7e9vpcz6pwigs7koahx');
$con = mysqli_connect(DB_SERVER,DB_USER,DB_PASS,DB_NAME);
// Check connection
if (mysqli_connect_errno())
{
 echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
?>