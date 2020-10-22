<?php
require "common.php";
if(isset($_SESSION['email'])) {
 header('location: products.php');
}
//adding login variables
$email = $_POST['email'];

//DATA SECURITY FOR UNUSUAL CHARATERS
$email = mysqli_real_escape_string($con, $email);

$password = $_POST['password'];
$password = mysqli_real_escape_string($con , $password);
$password = password_hash($password, PASSWORD_DEFAULT);


$select_query="Select uid,email,password FROM users WHERE email='$email' AND password='$password'";
$select_query_result=mysqli_query($con,$select_query) or die(mysqli_error($con));
$total_rows_fetched = mysqli_num_rows($select_query_result);
if($total_rows_fetched == 0){
    //NO USER WITH SUCH EMAIL AND PASSWORD
    $error = "<span class='red'>The password and email don't match with the database.</span>";
     header("location:login.php?m1=".$error);
}else{
     $row= mysqli_fetch_array($select_query_result);
    //initializing session variables
    $_SESSION['email']=$row['email'];
    $_SESSION['user_id']=$row['uid'];
    header('location:products.php');  
}
?>

