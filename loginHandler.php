<?php
include 'header.php';

$username = mysqli_real_escape_string($con, $_POST['username']);
$password = mysqli_real_escape_string($con, $_POST['password']);

// Hidden method to salt and hash the password
$password = saltAndHash($password);

$query = "SELECT * FROM users WHERE username='$username' AND password='$password'";
$result = mysqli_query($con, $query);
if($row = mysqli_fetch_array($result)) {
    $_SESSION['username'] = $username;
    $_SESSION['loggedin'] = true;
    header('Location: https://www.vrishankp.com');
} else {
    $_SESSION['login_error'] = true;
    header("Location: login");
}
?>
