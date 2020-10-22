<?php
require "common.php";
if(!isset($_SESSION['email'])) {
 header('location: index.php');
}
$oldpassword = $_POST['old-password'];
$oldPassword = mysqli_real_escape_string ($con , $oldPassword);
$oldPassword = md5($oldPassword);

$newpassword = $_POST['password'];
$newPassword = mysqli_real_escape_string ($con , $newPassword);
$newPassword=md5($newPassword);

$renewpassword = $_POST['password1'];
$renewPassword = mysqli_real_escape_string ($con , $renewPassword);
$renewPassword = md5($renewPassword);

if ($newpassword != $renewpassword){
  header('location: settings.php?password_error=RETYPE PASSWORD NOT IDENTICAL TO NEW PASSWORD');   
}
$email = $_SESSION['email'];

$select_query = "SELECT password FROM users WHERE email = '$email'";
    $select_query_result = mysqli_query($con , $select_query) or die(mysqli_error($con));
    $rows = mysqli_fetch_array($select_query_result);
    if($oldPassword==$rows['password']){
        $success = "<span class='green'>Password Changed</span>";
        $update_query = "UPDATE users SET password = '$newPassword' WHERE email = '$email'";
        $update_query_result = mysqli_query($con , $update_query) or die(mysqli_error($con));
        header("location:settings.php?m1=".$success);
    }else{
        $error = "<span class='red'>Invalid Credentials:Wrong old password!</span>";
        header("location:settings.php?m1=".$error);
    }
?>

