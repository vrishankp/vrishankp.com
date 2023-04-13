<?php
include 'conn.php';
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

if (isset($_SESSION['username'])) {
    $user = $_SESSION['username'];
}

?>

<!DOCTYPE html>
<html>
<head>
    <title>Vrishank Paladugu</title>
    <meta name="viewport" content="width=device-width, manimum-scale=1.0, maximum-scale=1.0" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="shortcut icon" type="image/jpg" href="images/favicon.ico"/>
    <link rel="stylesheet" href="style.css">
    
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-MKGGZCP9YE"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());
    
      gtag('config', 'G-MKGGZCP9YE');
    </script>
</head>
<body>
    <div id = "page-container" class = "page-container">
        <header>
            <nav class="navbar navbar-default navbar-fixed-top">
                <div class="container-fluid">
                    <div class="nav">
                        <div class="navbar-header">
                            <button type="button" data-toggle="collapse" data-target="#nav" class="navbar-toggle">
                                <span class="icon-bar" style="background-color: white !important;"></span>
                                <span class="icon-bar" style="background-color: white !important;"></span>
                                <span class="icon-bar" style="background-color: white !important;"></span>
                            </button>
                            <a class="navbar-brand" href="../"><img src="images/logo.png"  style = "position: relative; top: -5px;" height=150%></a>
                        </div>
                        <div class="collapse navbar-collapse" id="nav">
                            <ul class="nav navbar-nav">
                                <?php
                                if(!isset($_SESSION['loggedin']) or $_SESSION['loggedin'] == false) {
                                    echo "<li><a href='../about'>About</a></li>";
                                    echo "<li><a href='../blog'>Blog</a></li>";
                                    echo "<li><a href='../contact'>Contact Me</a></li>";
                                    echo "<li><a href='../resume.pdf'>Resume</a></li>";
                                } else {
                                    echo "<li><a href='../blogInput'>Input into Blog</a></li>";
                                    echo "<li><a href='../blog'>View Blog</a></li>";
                                }
                                ?>
                                <li class="dropdown">
                                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">Projects <span class="caret"></span></a>
                                    <ul class="dropdown-menu">
                                        <li><a href="../bdpa" id="dropdown">BDPA</a></li>
                                        <li><a href="../edx" id="dropdown">EdX</a></li>
                                        <li><a href="../python" id="dropdown">Python</a></li>
                                        <li><a href = "../poker" id="dropdown">Poker Simulator</a></li>
                                    </ul>
                                </li>
        
                            </ul>
                            <ul class="nav navbar-nav navbar-right">
                                <?php
                                if(isset($_SESSION['loggedin'])) {
                                    $user = $_SESSION['username'];
                                    echo "<li><a href='../logout'><span class='glyphicon glyphicon-log-out'></span> Sign out</a></li>";
                                } else {
                                    echo "<li><a href='../login'>Sign in <span class='glyphicon glyphicon-log-in'></span></a></li>";
                                }
                                ?>
                            </ul>
                        </div>
                    </div>
                </div>
            </nav>
        </header>
    
        <div class="body" id="body">
            <hr>