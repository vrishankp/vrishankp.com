<?php
    $subject = $_POST["subject"];
    $comment = $_POST["content"];
    $headers = "From:".$_POST['from'];
    $to = $_POST['to'];
        
    $message = wordwrap("Message: " . $comment, 70);
        
    $sent = mail($to, $subject, $message, $headers);
    
    header('Location: sendEmail');
?>