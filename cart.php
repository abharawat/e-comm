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
        <title>Cart | Life Style Store</title>
        <link href="css/bootstrap.css" rel="stylesheet">
        <link href="css/style.css" rel="stylesheet">
        <script src="js/jquery.js"></script>
        <script src="js/bootstrap.min.js"></script>
    </head>
    <body>
        <div class="container-fluid" id="content">
        <!-- Header -->
        <?php
          include "header.php";
          ?>
        <!--Header end-->
        
            <div class="row decor_bg">
                <div class="col-md-6 col-md-offset-3">
                    <table class="table table-striped">
                        <?php
                        $user_id=$_SESSION['id'];
                        $sum=0;
                         $query = "SELECT * FROM users_products JOIN products ON users_products.product_id = products.id WHERE users_products.user_id='$user_id'";
                         $result = mysqli_query($con, $query)or die($mysqli_error($con)); 
                         if (mysqli_num_rows($result) ==0){
                         ECHO " ADD ITEMS TO THE CART FIRST";
                        }else{
                        ?>
                         <thead>
                            <tr>
                                <th>Item Number</th>
                                <th>Item Name</th>
                                <th>Price</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php 
                       while($row = mysqli_fetch_array($result)) {
                        $sum+= $row["Price"];                                    
                         $id = $row["id"];  //this id is pid product id
                         echo "<tr><td>" . "#" . $row["id"] . "</td><td>" . $row["Name"] . "</td><td>Rs " . $row["Price"] . "</td><td><a href='cart-remove.php?id={$row['pid']}' class='remove_item_link btn btn-danger btn-block'> Remove</a></td></tr>";
                        }
                         echo "<tr><td></td><td>Total</td><td>Rs " . $sum . "</td><td><a href='success.php?itemid=".$id."' class='btn btn-success btn-block'>Confirm Order</a></td></tr>";
                        }?>
                                               
                        </tbody>
                    </table>
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

