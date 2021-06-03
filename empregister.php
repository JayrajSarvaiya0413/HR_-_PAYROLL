 <?php
$host = 'b7e9vpcz6pwigs7koahx-mysql.services.clever-cloud.com:3306';  
        $user = 'ug1ghfzsirn2crxm';  
        $password = 'FKyYRnoEnBkdCK3SdTLr';  
        $db_name = 'b7e9vpcz6pwigs7koahx';

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
    $empid =$_POST['empid'];
	$sal = $_POST['sal'];
	$fname = $_POST['fname'];
	$mname = $_POST['mname'];
	$lname = $_POST['lname'];
	$dob = $_POST['dob'];
	$phoneno = $_POST['phoneno'];
	$email = $_POST['email'];
	$doj = $_POST['doj'];
	$designation = $_POST['designation'];
	$bankname = $_POST['bankname'];
	$accno = $_POST['accno'];
	$branchname = $_POST['branchname'];
	$dep = $_POST['dep'];
	$bs = $_POST['bs'];

$sql = "INSERT INTO employee (id, salutation, firstname, middlename, lastname, dob, phoneno, emailid, dateofjoin, designstion, bankname, accno, branch, department, basicsalary) VALUES ($empid, '$sal', '$fname', '$mname', '$lname', '$dob', '$phoneno', '$email', '$doj', '$designation', '$bankname', $accno, '$branchname', '$dep', '$bs')";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
  header("location: main.php");
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?> 