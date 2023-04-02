<?php
include 'conn.php';
session_start();

$password = $_POST['password'];
$username = $_POST['username'];

if((isset($password)) && (isset($username))){
    if ($username == "testUser" && $password == "Password101"){
        $_SESSION['loggedin'] = 42;
        $_SESSION['AccountNumber'] = 1;
        header('Location: loans.php');
    }else{
        $_SESSION['logfail'] = true;
        header('Location: index.php');
    }
    
    /*
    $query = "SELECT AccountNumber, LoginID, Password FROM bdpa2017.profile where LoginID = '$username' and Password = '$password'";
    $result = mysqli_query($con, $query);
    $count = mysqli_num_rows($result);
    if($count == 1){
        while($row =  mysqli_fetch_array($result)){
            $_SESSION['loggedin'] = 42;
            $_SESSION['AccountNumber'] = $row['AccountNumber'];
            header('Location: loans.php');
        }
    } else{
        $_SESSION['logfail'] = true;
        header('Location: index.php');
        
    }
    */
}

?>