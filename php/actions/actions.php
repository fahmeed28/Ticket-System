
<?php 
include('../includes/header.php'); // Header include
include('cn.php'); // Database connection file include

$name = $_POST['name'] ?? '';
$email = $_POST['email'] ?? '';
$password = $_POST['password'] ?? '';
$cPassword = $_POST['confirm_password'] ?? '';

// Display form data (optional)
echo $name . "<br>";
echo $email . "<br>";
echo $password . "<br>";
echo $cPassword . "<br>";

// Password check
if ($password == $cPassword) {
    $que = "SELECT * FROM `users` WHERE email = '$email'";
    $result = mysqli_query($cn,$que) or die('email not validate'.mysqli_errno($cn));
    $row = mysqli_num_rows($result);
    if ($row>0){
        $error = "Email is already registered";
        header('Location:../Register.php?error='.$error);
    }else{
        $query = "INSERT INTO `users`(name,email,password) VALUES ('$name','$email','$password')";
    mysqli_query($cn,$query) or die('cant run query' .mysqli_error($cn));
    header('Location:../index.php');

    }
} else {
    $error = "Password Not Match";
    header('Location:../Register.php?error='.$error);
    
}
?>


<!-- 
Connection close karna
mysqli_close($cn);
?> -->



