<?php

//establish connection
$con = mysqli_connect("localhost", "root", "", "ecommerce","3308")
or die(mysqli_error($con));

//start the connection
session_start();
?>

