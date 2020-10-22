<?php
require "common.php";
if(!isset($_SESSION['email'])) {
 header('location: index.php');
}
 ?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta name="viewport" content="width = device-width, initial-scale = 1">
        <title>Success | Life Style Store</title>
        <link href="css/bootstrap.css" rel="stylesheet">
        <link href="css/style.css" rel="stylesheet">
    </head>
    <body>
        <!-- Header -->
        <?php
          include "header.php";
          
          $user_id = $_SESSION["user_id"];
         $query = "SELECT product_id FROM users_products WHERE user_id = '$user_id'";
        $result = mysqli_query($con, $query) or die(mysqli_error($con));

        while($row = mysqli_fetch_array($result)){
            $product_id = $row["product_id"];
            $query_update = "UPDATE users_products SET status = 'Confirmed' WHERE product_id = '$product_id'";            
            $result_update = mysqli_query($con, $query_update) or die(mysqli_error($con));
        }
          ?>
        <!--Header end-->
        
        <div class="container-fluid" id="content">
            <div class="col-md-12">
                <div class="jumbotron">
                    <h3 align="center">Your order is confirmed. Thank you for shopping with us.</h3><hr>
                    <p align="center">Click <a href="products.php">here</a> to purchase any other item.</p>
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
