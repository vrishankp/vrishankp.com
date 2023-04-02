<?php

include 'header.php';

if (!isset($_SESSION["sentSuccess"])){
    $_SESSION["sentSuccess"] = false;
}

if (!isset($_SESSION["sentError"])){
    $_SESSION["sentError"] = false;
}

if (!isset($_SESSION['recaptchaError'])){
    $_SESSION['recaptchaError'] = false;
}

?>
<head>
    <title>Contact Me!</title>
</head>
<?php
  date_default_timezone_set('America/Chicago');
  $date = date('m/d/Y', time());
  $time = date('G:m:s', time());
?>
  <div class="row">
      <div class="col-sm-4">
          <hr>
          <div align="center"><h2>Contact Me</h2></div>
      </div>
      <div class="col-sm-4">
          <hr>
          <form method="post" action="contactHandler.php">
              <table>
                  <div class="form-group" align="left">
                      <label>Email: </label>
                      <input type="email" class="form-control" name="email" placeholder="Enter Email" maxlength=70 required>
                  </div>
                  <div class="form-group" align="left">
                      <label>Subject: </label>
                      <input type="text" class="form-control" name="subject" placeholder = "Enter Subject" required>
                  </div>
                  <div class="form-group" align="left">
                      <label for="comment">Comment:</label>
                      <textarea class="form-control" rows="5" id="content" name="comment" placeholder="Enter Comment"></textarea>
                  </div>
                  <div class="form-group" align="center">
                    <div class="g-recaptcha" data-sitekey="6LeM07kdAAAAAHpqRFbodf0J74ikf6ySt_FpGALo"></div>
                    <script>
                        window.onload = function() {
                            var $recaptcha = document.querySelector('#g-recaptcha-response');
                        
                            if($recaptcha) {
                                $recaptcha.setAttribute("required", "required");
                            }
                        };
                    </script>
                  </div>
                  <div>
                      <input type = "text" name = "phone" placeholder = "Enter Phone Number" style="display:none !important">
                  </div>
                  <div class="form-group" align="left"><input type="submit" value="Send" class="btn btn-warning btn-block">
                  </div>
              </table>
          </form>
      </div>
      <div class="col-sm-4">
          <hr>
          <?php
            if ($_SESSION["sentSuccess"] == true){
                echo "<div class='alert alert-success'>
                        <strong>Success!</strong> Email Sent.
                    </div>";
                    
                $_SESSION["sentSuccess"] = false;
                $_SESSION["recaptchaError"] = false;
            } elseif ($_SESSION["sentError"] == true){
                echo "<div class='alert alert-danger'>
                        <strong>Error!</strong>Email didn't sent! Please try again.
                    </div>";
                    
                $_SESSION["sentError"] = false;
            } elseif ($_SESSION['recaptchaError'] == true){
                echo "<div class='alert alert-danger'>
                        <strong>Error!</strong> Recaptcha failed! Please try again.
                    </div>";
                    
                $_SESSION["recaptchaError"] = false;
            } 
          ?>
      </div>
  </div>
<?php include 'footer.php'; ?>
