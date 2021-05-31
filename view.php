<?php
include_once 'database.php';
$result = mysqli_query($conn,"SELECT * FROM employee");
?>

<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <link rel="stylesheet" type="text/css" href="home.css" />
    <title>view</title>
    <style>
        table {
    font-family: arial, sans-serif;
    border-collapse: collapse;
    width: 100%;
    font-weight: bold;
    border-style: dotted;
    background-color: lightgray;

}

td, th {
    border: 1px solid #dddddd;
    text-align: left;
    padding: 8px;
}

tr:nth-child(even) {
    background-color: white;
    ;

}
    </style>
</head>
<body>

               <div class="well">  <ul>
 
  <li><a href="addemployee.php">Add Employee</a></li>
  <li><a href="empsalary.php">Pay Slip</a></li>
  <li><a href="addacc.php">Add Accountant</a></li>
  <li><a href="view.php">View Employee List</a></li>
  <li><a href="logout.php">Logout</a></li>
  <li><a href="contact.php">CONTACT US</a></li>
  </ul>
  </div>

<?php
if (mysqli_num_rows($result) > 0) {
?>
<table>
  
  <tr>
    <td>ID</td>
    <td>FIRST NAME</td>
    <td>LAST NAME</td>
    <td>DOB</td>
    <td>PHONE NO</td>
    <td>EMAIL ID</td>
    <td>DESIGNSATION</td>
    <td>ACCOUNT NO</td>
    <td>DEPARTMENT</td>
    <td>BASIC SALARY</td>
    
  </tr>

  <?php
$i=0;
while($row = mysqli_fetch_array($result)) {
?>
<tr>
    <td><?php echo $row["id"]; ?></td>
    <td><?php echo $row["firstname"]; ?></td>
    <td><?php echo $row["lastname"]; ?></td>
    <td><?php echo $row["dob"]; ?></td>
    <td><?php echo $row["phoneno"]; ?></td>
    <td><?php echo $row["emailid"]; ?></td>
    <td><?php echo $row["designstion"]; ?></td>
    <td><?php echo $row["accno"]; ?></td>
    <td><?php echo $row["department"]; ?></td>
    <td><?php echo $row["basicsalary"]; ?></td>
    <td><a href="delete.php?id=<?php echo $row['id']; ?>">Delete</a></td>
</tr>
<?php
$i++;
}
?>
</table>
 <?php
}
else{
    echo "No result found";
}
?>

</body>
</html>