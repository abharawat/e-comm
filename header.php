<?php//there were two types of headers each diff for login user and 
//non logged in .so we use sesiion variables to counter this
?>
<div class="navbar navbar-inverse navbar-fixed-top"> 
 <div class="container">
 <div class="navbar-header">
  <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
 <span class="icon-bar"></span>
 <span class="icon-bar"></span>
 <span class="icon-bar"></span>
 </button>
     <a class="navbar-brand" href="about_us.php">Lifestyle Store</a>
 </div>
 <div class="collapse navbar-collapse" id="myNavbar">
 <ul class="nav navbar-nav navbar-right">
 <?php
 if (isset($_SESSION['email'])) {
     //if they have logged in 
 ?>
 <li><a href = "cart.php"><span class = "glyphicon glyphicon-shoppingcart"></span> Cart </a></li>
 <li><a href = "settings.php"><span class = "glyphicon glyphicon-user"></span> Settings</a></li>
 <li><a href = "logout.php"><span class = "glyphicon glyphicon-login"></span> Logout</a></li>
 <?php
 }else {
     //if they havent logged in
 ?> 
 <li><a href="signup.php"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
 <li><a href="login.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
 <?php
 }
 ?>
 </ul>
 </div>
 </div>
</div>

