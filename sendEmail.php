<?php

//include 'header.php';
include 'adminOnly.php';


?>
<head>
    <title>Send an email!</title>
</head>
<?php
  date_default_timezone_set('America/Chicago');
  $date = date('m/d/Y', time());
  $time = date('G:m:s', time());
?>
  <div class="row">
      <div class="col-sm-3">
          <hr>
          <div align="center"><h2>Send an email</h2></div>
      </div>
      <div class="col-sm-6">
          <hr>
          <form method="post" action="">
              <table>
                  <div class="form-group" align="left">
                      <label>To: </label>
                      <input type="email" class="form-control" name="to"  required>
                  </div>
                  <div class="form-group" align="left">
                      <label for="from">From:</label>
                      <select class="form-control" id="from" name="from" required>
                      <option>no-reply@contact.vrishankp.com</option>
                      <option>me@vrishankp.com</option>
                      <option>vrishank@vrishankp.com</option>
                  </select>
                  </div>
                  <div class="form-group" align="left">
                      <label>Subject:</label>
                      <input type="text" class="form-control" name="subject" required>
                  </div>
                  <div class="form-group" align="left">
                      <label for="comment">Content:</label>
                      <textarea class="form-control" rows="10" id="content" name="content" ></textarea>
                  </div>
                  <div class="form-group" align="center"><input type="submit" value="Submit" style="width:50%"  class="btn btn-warning btn-block">
                  </div>
              </table>
          </form>
      </div>
      <div class="col-sm-3">
          <hr>

      </div>
  </div>

<?php include 'footer.php'; ?>
