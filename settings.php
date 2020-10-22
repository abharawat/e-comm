<?php
require "common.php";
if(!isset($_SESSION['email'])) {
 header('location: index.php');
}
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Settings | Life Style Store</title>
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
        <div class="container-fluid" id="content">
            <div class="row">
                <div class="col-lg-4 col-lg-offset-4" id="settings-container">
                    <div class="panel panel-primary" >
                    <div class="panel-heading">
                               <h4>Change Password</h4>
                    </div>
                            
                    <div class="panel-body">
                    <form action="settings_script.php" method="POST">
                        
                        <div class="form-group">
                            <input type="password" class="form-control" name="old-password"  placeholder="Old Password" pattern=".{6,}" required>
                        </div>
                        
                        <div class="form-group">
                            <input type="password" class="form-control" name="password" placeholder="New Password" pattern=".{6,}" required>
                        </div>
                        
                        <div class="form-group">
                            <input type="password" class="form-control" name="password1"  placeholder="Re-type New Password" pattern=".{6,}" required>
                            
                        </div>
                        <?php 
                       if(isset($_GET['m1'])){
                         echo $_GET['m1'];
                        }                      
                        ?>
                        <button type="submit" class="btn btn-primary">Change</button>
                    </form>
                </div>
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

