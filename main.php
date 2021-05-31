<?php
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title>HR & PAYROLL MANAGMENT SYSTEM</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
		
		<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
		
		<link rel="stylesheet" type="text/css" href="main.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
		<script>
   $(document).ready(function(){
      $(".btnhide").click(function(){
         $("p").hide();
      });
      $(".btnshow").click(function(){
         $("p").show();
      });
   });
</script>
<style>
* {
  box-sizing: border-box;
}

body {
  margin: 0;
  font-family: Arial, Helvetica, sans-serif;
}

.header {
  text-align: center;
  padding: 32px;
}

.row {
  display: -ms-flexbox; /* IE 10 */
  display: flex;
  -ms-flex-wrap: wrap; /* IE 10 */
  flex-wrap: wrap;
  padding: 0 4px;
}

/* Create two equal columns that sits next to each other */
.column {
  -ms-flex: 50%; /* IE 10 */
  flex: 50%;
  padding: 0 4px;
}

.column img {
  margin-top: 8px;
  vertical-align: middle;
}

/* Style the buttons */
.btn {
  border: none;
  outline: none;
  padding: 10px 16px;
  background-color: #f1f1f1;
  cursor: pointer;
  font-size: 18px;
}

.btn:hover {
  background-color: #ddd;
}

.btn.active {
  background-color: #666;
  color: white;
}
</style>

    </head>
    
    <body>
		<script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
		
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
		
		<nav class="navbar navbar-expand-md">
		<a class="navbar-brand" href="#">HONESTY INFOTECH</a>
		<button class="navbar-toggler navbar-dark" type="button" data-toggle="collapse" data-target="#main-navigation">
			<span class="navbar-toggler-icon"></span>
		</button>
		<div class="collapse navbar-collapse" id="main-navigation">
			<ul class="navbar-nav">
				<li class="nav-item">
					<a class="nav-link" href="addemployee.php">ADD EMPLOYEE</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="addacc.php">ADD ACCOUNTANT</a>
				</li>
        <li class="nav-item">
          <a class="nav-link" href="view.php">VIEW EMPLOYEE</a>
        </li>
				<li class="nav-item">
					<a class="nav-link" href="empsalary.php">PAY SALARY</a>
				</li>
        <li class="nav-item">
          <a class="nav-link" href="contact.php">CONTACT US</a>
        </li>
				<li class="nav-item">
					<a class="nav-link" href="logout.php">LOGOUT</a>
				</li>
			</ul>
		</div>
		</nav>
		<div class="description">
		<div class="description">
			
  <div class="card bg-dark text-white">
                <img class="card-img" src="image/8.jpg" alt="Card image">
                <div class="card-img-overlay" style="margin-top: 20%;">
                  <h1 class="card-title">Welcome To Our Honesty Infotach..!!!</h1>
                  <h2 class="card-text">"Always Expect The Unexpected"</h2>
                  
                  <button class="btnhide">Show Less!</button>
                  <button class="btnshow">Show More!</button>
                  <p>Our Compny Motto is "ALWAYS EXPECT THE UNEXPECTED" So we are Always ready for every seaution , We have also think about If We fail them what we have to do, Its help us to make a Powerfull.
                  "HONESTY INFOTECH" The Name of compny is also show the Honesty , Oue Every Staff like Accountant, Admin, HR & Employee also all are Loyal to their Work. So it is make our compny to More Powerfull.</p>
        </div>
                </div>
              </div>
</div>
		</div>



        <div class="header" id="myHeader">
  <h1>Image Grid</h1>
  <p>Click on the buttons to change the grid view.</p>
  <button class="btn" onclick="one()">1</button>
  <button class="btn active" onclick="two()">2</button>
  <button class="btn" onclick="four()">4</button>
</div>

<!-- Photo Grid -->
<div class="row"> 
  <div class="column">
    <img src="image/a.jpeg" style="width:100%">
    <img src="image/b.jpeg" style="width:100%">
    <img src="image/c.jpeg" style="width:100%">
    <img src="image/d.jpeg" style="width:100%">
    <img src="image/e.jpeg" style="width:100%">
    <img src="image/f.jpeg" style="width:100%">
    <img src="image/g.jpeg" style="width:100%">
  </div>
  <div class="column">
    <img src="image/h.jpeg" style="width:100%">
    <img src="image/i.jpeg" style="width:100%">
    <img src="image/j.jpeg" style="width:100%">
    <img src="image/k.jpeg" style="width:100%">
    <img src="image/l.jpeg" style="width:100%">
    <img src="image/1.jpg" style="width:100%">
  </div>  
  <div class="column">
    <img src="image/M.jpeg" style="width:100%">
    <img src="image/N.jpeg" style="width:100%">
    <img src="image/O.jpeg" style="width:100%">
    <img src="image/P.jpeg" style="width:100%">
    <img src="image/Q.jpeg" style="width:100%">
    <img src="image/R.jpeg" style="width:100%">
    <img src="image/S.jpeg" style="width:100%">
  </div>
  <div class="column">
    <img src="image/T.jpeg" style="width:100%">
    <img src="image/U.jpeg" style="width:100%">
    <img src="image/V.jpeg" style="width:100%">
    <img src="image/W.jpeg" style="width:100%">
    <img src="image/X.jpeg" style="width:100%">
    <img src="image/Y.jpeg" style="width:100%">
  </div>
</div>

<script>
// Get the elements with class="column"
var elements = document.getElementsByClassName("column");

// Declare a loop variable
var i;

// Full-width images
function one() {
    for (i = 0; i < elements.length; i++) {
    elements[i].style.msFlex = "100%";  // IE10
    elements[i].style.flex = "100%";
  }
}

// Two images side by side
function two() {
  for (i = 0; i < elements.length; i++) {
    elements[i].style.msFlex = "50%";  // IE10
    elements[i].style.flex = "50%";
  }
}

// Four images side by side
function four() {
  for (i = 0; i < elements.length; i++) {
    elements[i].style.msFlex = "25%";  // IE10
    elements[i].style.flex = "25%";
  }
}

// Add active class to the current button (highlight it)
var header = document.getElementById("myHeader");
var btns = header.getElementsByClassName("btn");
for (var i = 0; i < btns.length; i++) {
  btns[i].addEventListener("click", function() {
    var current = document.getElementsByClassName("active");
    current[0].className = current[0].className.replace(" active", "");
    this.className += " active";
  });
}
</script>









		<div class="background">
    <div class="container team">
        <div class="row">
            <div class="card col-lg-3 col-md-3 col-sm-4 text-center">
    <img class="card-img-top rounded-circle" src="image/jayraj.jpeg" alt="Card image">
    <div class="card-body">
        <h4 class="card-title">JAYRAJ SARVAIYA</h4>
        <p class="card-text">CEO</p>
    </div>
</div>
<div class="card col-lg-3 col-md-3 col-sm-4 text-center">
    <img class="card-img-top rounded-circle" src="image/gaurav.jpg" alt="Card image">
    <div class="card-body">
        <h4 class="card-title">GAURAV SARVAIYA</h4>
        <p class="card-text">CHAIRMAN</p>
    </div>
</div>
<div class="card col-lg-3 col-md-3 col-sm-4 text-center">
    <img class="card-img-top rounded-circle" src="image/jaydeep.jpg" alt="Card image">
    <div class="card-body">
        <h4 class="card-title">JAYDEEP SARVAIYA</h4>
        <p class="card-text">HR</p>
    </div>
</div>
<div class="card col-lg-3 col-md-3 col-sm-4 text-center">
    <img class="card-img-top rounded-circle" src="image/kishan.jpg" alt="Card image">
    <div class="card-body">
        <h4 class="card-title">KISHAN AGHERA</h4>
        <p class="card-text">ADMIN</p>
    </div>
</div>
<div class="card col-lg-3 col-md-3 col-sm-4 text-center">
    <img class="card-img-top rounded-circle" src="image/nidhi.jpg" alt="Card image">
    <div class="card-body">
        <h4 class="card-title">NIDHI PADARIYA</h4>
        <p class="card-text">HEAD OF QUALITY</p>
    </div>
</div>
<div class="card col-lg-3 col-md-3 col-sm-4 text-center">
    <img class="card-img-top rounded-circle" src="image/parth.jpg" alt="Card image">
    <div class="card-body">
        <h4 class="card-title">PARTH SIROYA</h4>
        <p class="card-text">MANAGER</p>
    </div>
</div>
<div class="card col-lg-3 col-md-3 col-sm-4 text-center">
    <img class="card-img-top rounded-circle" src="image/ajay.jpg" alt="Card image">
    <div class="card-body">
        <h4 class="card-title">AJAY PANCHASRA</h4>
        <p class="card-text">ACCOUNTANT</p>
    </div>
</div>

        </div>
    </div>
</div>
		<footer class="page-footer">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-8 col-sm-12">
                <h6 class="text-uppercase font-weight-bold">Additional Information</h6>
                <p>Our Compny Motto is "ALWAYS EXPECT THE UNEXPECTED" So we are Always ready for every seaution , We have also think about If We fail them what we have to do, Its help us to make a Powerfull.</p>
                <p>"HONESTY INFOTECH" The Name of compny is also show the Honesty , Oue Every Staff like Accountant, Admin, HR & Employee also all are Loyal to their Work. So it is make our compny to More Powerfull.</p>
        </div>
        <div class="col-lg-4 col-md-4 col-sm-12">
            <h6 class="text-uppercase font-weight-bold">Contact</h6>
            <p>4 - Matel Soc, Mavdi, Rajkot-360004, Gujarat, INDIA
            <br/>jayrajsarvaiya0413@gmail.com
            <br/>+ 91 97272 80413</p>
        </div>
    <div>
    <div class="footer-copyright text-center">© 2021 Copyright: https://github.com/JayrajSarvaiya0413</div>
</footer>

		<script src="main.js"></script>
    </body>
    
</html>