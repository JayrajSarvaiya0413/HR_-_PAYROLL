<?php

$db = mysqli_connect("localhost","root","","honestysayar");

if(!$db)
{
    die("Connection failed: " . mysqli_connect_error());
}

?>