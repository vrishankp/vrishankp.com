<?php

//include 'header.php';
include 'adminOnly.php';


?>
<head>
    <title>Enter into Gallery!</title>
</head>
<?php
date_default_timezone_set('America/Chicago');
$date = date('m/d/Y', time());
$time = date('G:m:s', time());
?>
<div class="row">
    <div class="col-sm-4">
        <hr>
        <div align="center"><h2>Input in Gallery</h2></div>
    </div>
    <div class="col-sm-4">
        <hr>
        <form method="post" action="galleryHandler.php" enctype="multipart/form-data">
            <table>
                <div class="form-group" align="left">
                    <label>Title: </label>
                    <input type="text" class="form-control" name="title" placeholder="Enter Title" >
                </div>
                <div class="form-group" align="left">
                    <label>Date:</label>
                    <input type="date" class="form-control" name="date" >
                </div>
                <div class="form-group" align="left">
                    <label>Camera:</label>
                    <select class="form-control" name="camera">
                        <option>Mamiya/Sekor 500 DTL</option>
                    </select>
                </div>
                <div class="form-group" align="left">
                    <label>Lens:</label>
                    <select class="form-control" name="lens">
                        <option>Mamiya/Sekor 50mm f/2-16</option>
                    </select>
                </div>
                <div class="form-group" align="left">
                    <label>Film:</label>
                    <select class="form-control" name="film">
                        <option>Fujifilm 400</option>
                    </select>
                </div>
                <div class="form-group" align="left">
                    <label>Location:</label>
                    <input type="text" class="form-control" name="takenAt" placeholder="Enter Location Taken">
                </div>
                <div class="form-group" align="left">
                    <label for="comment">Notes:</label>
                    <textarea class="form-control" rows="5" id="content" name="notes" placeholder="Additional Notes"></textarea>
                </div>
                <div class = "form-group" align="left">
                    <label>Orientation:</label>
                    <label class="radio-inline"><input type="radio" name="orient" value = "landscape" checked>Landscape</label>
                    <label class="radio-inline"><input type="radio" name="orient" value = "portrait" >Portrait</label>
                </div>
                <div class = "form-group" align="left">
                    <input type="file" name="image" id="image" class = "btn" accept="image/*">
                </div>
                <div class="form-group" align="left"><input type="submit" value="Submit" class="btn btn-primary btn-block">
                </div>
            </table>
        </form>
    </div>
    <div class="col-sm-4">
        <hr>

    </div>
</div>
<?php include 'footer.php'; ?>
