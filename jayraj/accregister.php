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
    $accid =$_POST['accid'];
	$sal = $_POST['sal'];
	$fname = $_POST['fname'];
	$mname = $_POST['mname'];
	$lname = $_POST['lname'];
	$dob = $_POST['dob'];
	$phoneno = $_POST['phoneno'];
	$email = $_POST['email'];
	$branchname = $_POST['branchname'];
	$dep = $_POST['dep'];

$sql = "INSERT INTO accountant (id, salutation, firstname, middlename, lastname, dob, phoneno, emailid, branch, department) VALUES ($accid, '$sal', '$fname', '$mname', '$lname', '$dob', '$phoneno', '$email', '$branchname', '$dep')";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
  header("location: main.php");
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?> 