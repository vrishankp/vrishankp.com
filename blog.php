<?php
include 'header.php';

    echo "<div class = 'row'>
            <div class = 'col-sm-4'>
                <hr>
                <h2>Blog Entries</h2>
            </div>
            <div class = 'col-sm-8'>
            <hr>";
            
    $query = "SELECT * FROM blogData ORDER BY date DESC, time DESC";
    $result = mysqli_query($con, $query);
    while($row = mysqli_fetch_array($result)){
        $blogId = $row['blogId'];
        $content = $row['content'];
        $title = $row['title'];
        $date = $row['date'];
        $time = $row['time'];
        
        $fileName = "blog/".md5($blogId).".php";
        $fileNameNoPhp = "blog/".md5($blogId);

        $postTimestamp = strtotime("$date $time");

        // Calculate the timestamp for the current time
        $nowTimestamp = time();

        // Calculate the difference between the post timestamp and the current timestamp
        $timeDiff = $nowTimestamp - $postTimestamp;

        // Check if the post is less than a day old
        if($timeDiff < 86400) { // 86400 seconds in a day
            $badge = '<span class="badge">New!</span>';
        } else {
            $badge = '';
        }

        $short = substr($content, 0, 80);
        ?>
                        <div class="panel panel-primary">
                          <div class="panel-heading">
                            <h1 class="panel-title">
                              <a data-toggle="collapse" href="#collapse<?php echo $blogId?>"><?php echo $title?></a>
                                <?php echo $badge;?>
                            </h1>
                            <div style = "margin-top: 10px;"><?php echo $date?></div>
                          </div>
                          <div id="collapse<?php echo $blogId?>" class="panel-collapse collapse">
                            <div class="panel-body"><?php echo $content?></div>
                            <div class="panel-footer">
                                To access the full blog, click <a href = "<?php echo $fileNameNoPhp?>" target="_blank">here</a>
                            </div>
                          </div>
                        </div>
                        
        <?php
    }
    
    echo  "</div>
        </div>";

include 'footer.php';
?>