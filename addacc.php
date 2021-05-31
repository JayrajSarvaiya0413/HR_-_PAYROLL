
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
 <link rel="stylesheet" media="screen,projection" type="text/css" href="home.css" />

     <style>
            select
            {
                height: 30px;
                width:150px;
            }
            
            img
            {
                width:150px;
                height:50px;
                margin-left: 70px;
                margin-top: -5px;
            }
            strong
            {
            position: absolute;
            right: 15px;
            top :35px
                
            }
        </style>
 
 <title>Add</title>
    </head>
    <style>
        body{
            background-color: gray;
        }
        
        </style>
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
        <div class="well1">
      
        <form method="post" action="accregister.php">
        <table style="margin-left:5px;align-content:center;width:100%;margin-top: 30px;border-spacing: 0.9em;font-family: tahoma" bgcolor="#d3d3d3">
            <tr><td>Accountant ID</td><td><input type="text" clospan="7" name="accid"></td></tr>
            <tr><td>Salutation</td><td><input type="text" name="sal"></td>
            <td>First Name</td><td><input type="text" name="fname"></td>
            <td>Middle Name</td><td><input type="text" name="mname"></td>
            <td>Last Name</td><td><input type="text" name="lname"></td></tr>
            <tr><td>Date Of Birth<br>(YYYY-MM-DD)</td><td><input type="date" name="dob"></td>
            <td>Phone No</td><td><input type="text" name="phoneno"></td>
            <td>Email Id</td><td><input type="email" name="email"></td></tr>
             
            <tr><td>Branch Name</td><td><input type="text" name="branchname"></td>
            <td>Department</td><td><input type="text" name="dep"></td>
            <td></td><td></td>
            <td></td><td></td></tr>
     
            <tr><td/><td><button class="btn" type="submit" name="register">ADD</button></td>
            <td></td>
            <td></td>
            <td></td></tr>
        </table>
        </form></div>
    </body>
</html>
