<?php
$url='b7e9vpcz6pwigs7koahx-mysql.services.clever-cloud.com:3306';
$username='ug1ghfzsirn2crxm';
$password='FKyYRnoEnBkdCK3SdTLr';
$conn=mysqli_connect($url,$username,$password,"b7e9vpcz6pwigs7koahx");
if(!$conn){
 die('Could not Connect My Sql:' .mysql_error());
}
?>