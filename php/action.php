
<?php include('includes/header.php')?>
<?php
$name = $_POST['name'];
$email = $_POST['email'];
$password = $_POST['password'];
$cPassword = $_POST['confirm_password'];

echo $name . "<br>";
echo $email . "<br>";
echo $password . "<br>";
echo $cPassword . "<br>";

// $cn = mysqli_connect(hostname: 'localhost', username: 'root',password: '',database: 'login_system') or die('cant connect database');
?>
<?php include('includes/footer.php'); ?>

<?php
// Form se values lena
$name = $_POST['name'];
$email = $_POST['email'];
$password = $_POST['password'];
$cPassword = $_POST['confirm_password'];

// Passwords match check karna
if ($password !== $cPassword) {
    die("Passwords do not match!");
}

// Database connection
$cn = mysqli_connect("localhost", "root", "", "login_system");

if (!$cn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Password secure karna
// $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

// Insert query
$sql = "INSERT INTO loginusers (name, email, password) VALUES ('$name', '$email', '$password')";

if (mysqli_query($cn, $sql)) {
    echo "User registered successfully!";
} else {
    echo "Error: " . mysqli_error($cn);
}

// Connection close karna
mysqli_close($cn);
?>

