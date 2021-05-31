<?php  
	if(empty($_POST))
	{
		header("location:acclogin.php");
	}
	$error = array();

	if(empty($_POST['uname']))
	{
		$error[] = "name empty";
	}
	if(empty($_POST['pass']))
	{
		$error[] = "pass empty";
	}
	if(!empty($error))
	{
		echo "error"."<hr>";
		foreach ($error as $e)
		{
			echo $e."<br>";
		}
		exit;
	}

	$conn = mysqli_connect("localhost","root","","honestysayar");
		if(!$conn) {
			die("failed");
		}


		$emailid = $_POST['uname'];
		$firstname = $_POST['pass'];

		$sql = "SELECT * FROM accountant WHERE emailid = '$emailid'";
		$result = mysqli_query($conn,$sql);

		while ($row = mysqli_fetch_assoc($result)) {
			$dbname = $row['emailid'];
			$dbpwd = $row['firstname'];
		}
		if(!$firstname == $dbpwd) {
			session_start();
			$_SESSION['emailid'] = $dbname;
			header("location:main.php");
		}
		else {
			header("location:acclogin.php");
		}

?>