
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Login Page</title>
        <link rel="stylesheet"  type="text/css" href="./admin.css" />
        
        <style>
            body{
                background-image: url(image/3.jpg);
                max-width:100;
                height: auto;

            }
            input[type="text"], input[type="password"],select{
                height:20px;
                width: 175px;

            }
 td {           font-size: 18px;}
 select{        height:30px;
                width: 190px;
                font-family: sans-serif;}

        </style>
    </head>
    
    <body>

        <div class="well" style="margin-top: 160px;height:230px;width:500px;margin-left:433px;">
            <form method="post" action="validateadmin.php">
        <table align="center" style="margin-left: 70px ;margin-top: 8px ;">
            <tr>
                <td colspan="2"><center style="color:black;">ADMIN LOGIN<span style=\"font-family:tahoma;\"></span></center></td>
            </tr>
            <tr>
                <td><h4>Username</h4></td><td><input type="text" name="uname" placeholder="Please Enter Username"/>
                </td>
            </tr>
            <tr>
                <td><h4>Password</h4></td><td><input type="password" name="pass" placeholder="Please Enter Password"/>
                </td>
            </tr>
                       <tr><td></td>
                <td>
                    <button class="btn" style="margin-left: 20px;" type="submit" name="login">Log In</button>
                </td>
            </tr>
        </table>
            
         
    </form>
        </div>
    </body>
</html>
