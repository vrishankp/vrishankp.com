<?php

//include 'header.php';
include 'adminOnly.php';


?>
<head>
    <title>Enter in Blog!</title>
</head>
<?php
  date_default_timezone_set('America/Chicago');
  $date = date('m/d/Y', time());
  $time = date('G:m:s', time());
?>
  <div class="row">
      <div class="col-sm-4">
          <hr>
          <div align="center"><h2>Input in Blog</h2></div>
      </div>
      <div class="col-sm-4">
          <hr>
          <form method="post" action="blogHandler.php">
              <table>
                  <div class="form-group" align="left">
                      <label>Title: </label>
                      <input type="text" class="form-control" name="title" placeholder="Enter Title" required>
                  </div>
                  <div class="form-group" align="left">
                      <label>Enter Date:</label>
                      <input type="date" class="form-control" name="date" required>
                  </div>
                  <div class="form-group" align="left">
                      <label>Enter Time:</label>
                      <input type="time" class="form-control" name="time" required>
                  </div>
                  <div class="form-group" align="left">
                      <label for="comment">Comment:</label>
                      <textarea class="form-control" rows="5" id="content" name="content" placeholder="Enter Blog Content"></textarea>
                  </div>
                  <div class="form-group" align="left"><input type="submit" value="Submit" class="btn btn-warning btn-block">
                  </div>
              </table>
          </form>
      </div>
      <div class="col-sm-4">
          <hr>

      </div>
  </div>
<?php include 'footer.php'; ?>
