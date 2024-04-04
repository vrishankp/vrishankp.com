<?php
//include 'header.php';
include 'adminOnly.php';

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_FILES["image"])) {
    $targetDirectory = "gallery/";
    $targetFile = $targetDirectory . basename($_FILES["image"]["name"]);

    move_uploaded_file($_FILES["image"]["tmp_name"], $targetFile);

    $location = $targetFile;

    $title = $_POST['title'];
    $date = $_POST['date'];
    $camera = $_POST['camera'];
    $lens = $_POST['lens'];
    $film = $_POST['film'];
    $notes = $_POST['notes'];
    $orient = $_POST['orient'];
    $takenAt = $_POST['takenAt'];

    if ($orient == "landscape"){
        $landscape = 1;
    } else {
        $landscape = 0;
    }

    rename($location, "gallery/".pathinfo($location, PATHINFO_FILENAME) . ".jpg");

    $location = "gallery/".pathinfo($location, PATHINFO_FILENAME) . ".jpg";
    echo "<br><br><br><br>Location: $location";

    $image = imagecreatefromjpeg($location);

    $width = imagesx($image);
    $height = imagesy($image);

    $newWidth = $width / 2;
    $newHeight = $height / 2;

    $newImage = imagecreatetruecolor($newWidth, $newHeight);

    imagecopyresampled(
        $newImage, $image,
        0, 0, 0, 0,
        $newWidth, $newHeight, $width, $height
    );

    $originalFilename = basename($_FILES["image"]["name"]);
    $newFilename = "small_" . $originalFilename;

    $newPath = "gallery/" . $newFilename;

    imagejpeg($newImage, $newPath);

    imagedestroy($image);
    imagedestroy($newImage);

    $query = "INSERT INTO gallery (date, title, camera, lens, notes, landscape, film, takenAt, location, smallLoc) VALUES('".$date."','".$title."','".$camera."','".$lens."','".$notes."','".$orient."','".$film."','".$takenAt."','".$location."''".$newFilename."')";
    $result = mysqli_query($con, $query);

    header('Location: galleryInput.php');
} else {
    echo "Form submission failed or image not uploaded.";
}
?>
