<?php include 'header.php';
if (!isset($_SESSION['login_error'])){
    $_SESSION['login_error'] = false;
}
if (!isset($_SESSION['needToLogin'])){
    $_SESSION['needToLogin'] = false;
}
?>
    <div class="row">
        <div class="col-sm-4">
            <hr>
            <div align="center"><h2>Sign in</h2></div>
        </div>
        <div class="col-sm-4">
            <hr>
            <form action="loginHandler.php" method="POST">
                <div class="form-group" align="left">
                    <label for="user">Username:</label>
                    <input type="text" class="form-control" name="username" placeholder="Enter username" required>
                </div>
                <div class="form-group" align="left">
                    <label for="pass">Password:</label>
                    <input type="password" class="form-control" name="password" id="pass" placeholder="Enter password" required>
                </div>
                <div class="checkbox" align="left">
                    <label><input type="checkbox" onclick="myFunction()">Show Password</label>
                </div>

                <script>
                    function myFunction() {
                        var x = document.getElementById("pass");
                        if (x.type === "password") {
                            x.type = "text";
                        } else {
                            x.type = "password";
                        }
                    }
                </script>
                <button type="submit" class="btn btn-primary btn-block" name="login">Sign in</button>
            </form>
            
        </div>
        <div class="col-sm-4">
            <hr>
            <?php
            if ($_SESSION['login_error'] == true){
                echo "<div class='alert alert-danger'>Your username or password is incorrect</div>";
                $_SESSION['login_error'] = false;
            } elseif ($_SESSION['needToLogin'] == true){
                 echo "<div class='alert alert-danger'>You need to login first to acess that page!</div>";
                $_SESSION['needToLogin'] = false;                
            }
            ?>
        </div>
    </div>
    <?php include 'footer.php'; ?>
