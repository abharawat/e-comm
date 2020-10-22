<?php
require "common.php";
if(isset($_SESSION['email'])) {
 header('location: products.php');
}

$email = $_POST['email'];
$email = mysqli_real_escape_string($con , $email);
$regex_email = "/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/";
if (!preg_match($regex_email, $email)) {
   $error = "<span class='red'>Invalid Credentials:Email Error</span>";
     header("location:signup.php?m1=".$error);
}

$name = $_POST['name'];
$name = mysqli_real_escape_string($con , $name);

$password = $_POST['password'];
$password = mysqli_real_escape_string($con , $password);
$password = password_hash($password, PASSWORD_DEFAULT);

$contact = $_POST['contact'];
$contact = mysqli_real_escape_string($con , $contact);

$address = $_POST['address'];
$address = mysqli_real_escape_string($con , $address);

$select_query="Select uid FROM users WHERE email='$email'";
$select_query_result=mysqli_query($con,$select_query) or die(mysqli_error($con));
if(mysqli_num_rows($select_query_result)!=0){
    // USER WITH this email already exists
    $error = "<span class='red'>Email Already Exists</span>";
        header('location:signup.php?m2='.$error);
}
else{
    $insert_query="Insert into users(name,email,password,contact,address)values('$name','$email','$password','$contact','$address')";
    $insert_query_result=mysqli_query($con,$insert_query)or die(mysqli_error($con));
    $users_uid= mysqli_insert_id($con);
    $_SESSION['email']=$email;
    $_SESSION['user_id']=$user_id;
    //redirect to product page after successful signup hence login
    header('location: products.php');   
}
?>

