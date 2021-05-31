<?php  
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "honestysayar";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
    $empid =$_POST['id'];



$sql = "DELETE FROM employee WHERE id = '"$empid"'";
if(mysqli_query($link, $sql)){
    echo "Records were deleted successfully.";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
?>