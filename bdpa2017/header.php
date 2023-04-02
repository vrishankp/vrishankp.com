<!DOCTYPE html>
<html>
    <head>
        <script src="js/jquery-3.2.1.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/style.css">
        
        <link rel="icon" href="images/favicon.ico">
        <title>BDPA Financial</title>
    </head>
    <body>
        <header>
            <nav class="navbar navbar-inverse navbar-fixed-top">
                <div class="container-fluid" id="navbar">
                    <div class="navbar-header">
                        
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#nav">
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        
                        <a href="#" class="navbar-brand"><img src="images/logo.png" height="100%"></a>
                    </div>
                    
                    <div class="collapse navbar-collapse" id="nav">
                        <ul class="nav navbar-nav">
                            <?php
                            session_start();
                            if (isset($_SESSION['admin'])) {
                                echo "<li><a href='loans.php'>View Loans</a></li>";
                                echo "<li><a href='loanAmount.php'>New Loans</a></li>";
                                echo "<li><a href='profile.php'>Profile</a></li>";                                    
                            }

                            elseif (isset($_SESSION['loggedin'])) {
                                echo "<li><a href='loans.php'>View Loans</a></li>";
                                echo "<li><a href='loanAmount.php'>New Loans</a></li>";
                                echo "<li><a href='profile.php'>Profile</a></li>";
                            }

                            else {

                            }
                            ?>
                        </ul>
                        <ul class="nav navbar-nav navbar-right">
                            <?php
                            if (isset($_SESSION['admin']) || isset($_SESSION['loggedin'])) {
                                echo "<li><a href='signout.php' title='Logs you out but saves your data'><span class='glyphicon glyphicon-log-out'></span> Sign Out</a></li>";
                            }
                            
                            else {
                                echo "<li><a href='index.php' title='Please login'><span class='glyphicon glyphicon-log-in'></span> Login</a></li>";
                                echo "<li><a href='signup.php' title='Please sign up'><span class='glyphicon glyphicon-user'></span> Sign Up</a></li>";
                            }
                            ?>
                        </ul>
                    </div>
                </div>
            </nav>
        </header>
        <div class="container-fluid">
            <div class="content">
                <br><br><br>