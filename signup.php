<?php
require "common.php";
if(isset($_SESSION['email'])) {
 header('location: products.php');
}
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Signup | Life Style Store</title>
        <link href="css/bootstrap.css" rel="stylesheet">
        <link href="css/style.css" rel="stylesheet">
        <script src="js/jquery.js"></script>
        <script src="js/bootstrap.min.js"></script>
    </head>
  <body>
        <!-- Header -->
        <?php
          include "header.php";
          ?>
        <!--Header end-->
        <div class="container-fluid decor_bg">
          
                 <div class="col-lg-4 col-lg-offset-4 col-md-6 col-md-offset-3">
                       <div class="panel panel-primary">
                            <div class="panel-heading">
                        <h4>SIGN UP</h4>
                            </div>
                           
                           <div class="panel-body">
                        <form  action="signup_script.php" method="POST">
                            
                            <div class="form-group">
                                <label for="name">Name:</label>
                                <input class="form-control" placeholder="Enter full name." id="name"  required>
                            </div>
                            
                            <div class="form-group">
                                <label for="email">Email:</label>
                                <input type="email" class="form-control"  placeholder="Enter valid email." id="email" required  pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" >
                               <?php
                                      if(isset($_GET['m1'])){
                                      echo $_GET['m1'];
                                        }
                                       ?>
                            </div>
                            
                            <div class="form-group">
                                <label for="password">Password:</label>
                                <input type="password" class="form-control" placeholder="Password(Atleast 6 charaters)" id="password" required  pattern=".{6,}">
                            </div>
                            
                            <div class="form-group">
                                <label for="contact">Contact No:</label>
                                <input type="text" class="form-control"  placeholder="Enter vaild contact no." maxlength="10" size="10"  id="contact" required>
                            </div>
                            
                            <div class="form-group">
                                <label for="address">Address:</label>
                                <input  type="text" class="form-control"  placeholder="Enter full address." id="address" required>
                            </div>
                            
                            <div class="form-group">
                                      <?php
                                      if(isset($_GET['m2'])){
                                      echo $_GET['m2'];
                                        }
                                       ?>
                            </div>
                            <button type="submit" name="submit" class="btn btn-primary">Submit</button>
                        </form>
                           </div>
                           
                           <div class="panel-footer">
                                <p>Already have an account? <a href="login.php">Login.</a></p>
                            </div>
                          
                       </div>
                    </div>
                </div>
       
       
        <!--Footer-->
        <?php
          include "footer.php";
          ?>
        <!--Footer end-->
    </body>
</html>

