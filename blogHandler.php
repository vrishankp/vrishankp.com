<?php
include 'adminOnly.php';

$title = $_POST['title'];
$date = $_POST['date'];
$content = $_POST['content'];
$time = $_POST['time'];

$query = "INSERT INTO blogData (date, time, title, content) VALUES('".$date."','".$time."' ,'".$title."','".$content."')";
$result = mysqli_query($con, $query);


$query = "SELECT blogId FROM blogData WHERE content = '$content'";
$result = mysqli_query($con, $query);
while($row = mysqli_fetch_array($result)){
    $contentId = $row['blogId'];
}

echo $contentId;
$fileName = "blog/".md5($contentId).".php";
$fileNameNoPhp = "blog/".md5($contentId);
$contentFile = "
<?php include 'header.php';?>
    <div class = 'row'>
        <div class = 'col-sm-2'>
        </div>
        <div class = 'col-sm-8'>
            <h2>$title</h2>
            <b>$date $time</b>
            <br>
            <p>$content</p>
        </div>
        <div class = 'col-sm-2'>
        </div>
    </div>
<?php include 'footer.php';?>
";
echo ($fileName);

$file = fopen($fileName, "w");
fwrite($file, $contentFile);
fclose($file);
echo($fileName);
header ('Location: '.$fileNameNoPhp);

?>
