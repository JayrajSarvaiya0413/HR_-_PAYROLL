
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
        <title>JSP Page</title>
    </head>
   
    <body style="background-color:lightgrey;">
      
           <div class="well">  <ul>

  <li><a href="addemployee.php">Add Employee</a></li>
  <li><a href="empsalary.php">Pay Slip</a></li>
  <li><a href="addacc.php">Add Accountant</a></li>
  <li><a href="view.php">View Employee List</a></li>
  <li><a href="logout.php">Logout</a></li>
  <li><a href="contact.php">CONTACT US</a></li>
  </ul>
        
 <form action="calsalary.php" method="POST" >
 <table >
 <tr><td>Employee Name:</td><td><input type="text" name="ename" autofocus></td></tr>
 <tr><td>Department:</td><td><input type="text" name="dept"></td></tr>
 <tr><td>Designation:</td><td><input type="text" name="des"></td></tr>
 <tr><td>Basic Salary:</td><td><input type="text" name="bsal"></td></tr>
 <tr><td>TA(%):</td><td><input type="text" name="ta"></td></tr>
 <tr><td>DA(%):</td><td><input type="text" name="da"></td></tr>
 <tr><td>HRA(%):</td><td><input type="text" name="hra"></td></tr>
 <tr><td>PF(%):</td><td><input type="text" name="pf"></td></tr>
 <tr><td>LIC(%):</td><td><input type="text" name="lic"></td></tr>

 <tr><td><input type="submit" name="submit" value="Evaluate"></td>
 <td><input type="reset" value="Reset"></td></tr>
 </table>
    
    </body>
</html>
