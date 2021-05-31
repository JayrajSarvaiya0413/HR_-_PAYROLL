<?php 
	$host = 'localhost';
	$DBUser = "root";
	$DBPassword = "";
	$db = 'honestysayar';
	
	$conn = mysqli_connect("localhost","root","", "honestysayar");
	
	if(!$conn)
	{
		die(mysqli_error());
	}
	
?>