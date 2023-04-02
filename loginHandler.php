<?php
include 'header.php';
if (!isset($_SESSION['loggedin'])){
    $_SESSION['loggedin'] = false;
}

if (!isset($_SESSION['username'])){
    $_SESSION['username'] = "";
}

$username = mysqli_real_escape_string($con, $_POST['username']);
$password = mysqli_real_escape_string($con, $_POST['password']);

$query = "SELECT * FROM users WHERE username='$username'";
$result = mysqli_query($con, $query);
$row = mysqli_fetch_array($result);

if(passwordCheck($password, $row['password'])) {
    $_SESSION['username'] = $username;
    $_SESSION['loggedin'] = true;
    header('Location: https://www.vrishankp.com');
} else {
    $_SESSION['login_error'] = true;
    header("Location: login");
}
?>
