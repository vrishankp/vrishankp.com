<?php
include 'header.php';
include 'adminOnly.php';
$user = $_SESSION['username'];
$query = "SELECT * FROM users WHERE username = '$user'";
$result = mysqli_query($con, $query);
while($row = mysqli_fetch_array($result)) {
    $key = $row['totp'];
}

if (key == null){
    header("Location: about.php");
}