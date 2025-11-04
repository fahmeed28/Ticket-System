<?php 
$email = $_GET['email'];
$password = $_GET['password'];
include('cn.php');
$que = "SELECT * FROM `users` WHERE email = '$email' AND password = '$password'";
// var_dump($que)
$result = mysqli_query($cn,$que) or die('Can not run query'.mysqli_error($cn));
$row = mysqli_num_rows($result);
if($row>0){
    session_start();
    $row = mysqli_fetch_array($result);
    $_SESSION['name'] = $row['name'];
    header('Location:../home.php');
}else{
    $error = "Email Or Password is invalid";
    header('Location:../index.php?error='.$error);
}
?>