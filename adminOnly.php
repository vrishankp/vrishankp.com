<?php
    
    include 'header.php';
    
    if (!isset($_SESSION["loggedin"])){
        $_SESSION["loggedin"] = false;
        $_SESSION['needToLogin'] = true;
        header('Location: https://www.vrishankp.com/login');
    }
    
    if ($_SESSION["loggedin"] == false){
        $_SESSION['needToLogin'] = true;
        header('Location: https://www.vrishankp.com/login');
    }
    
?>