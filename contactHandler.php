<?php
    include 'header.php';

     if (isset($_POST['g-recaptcha-response'])){
        $captcha = $_POST['g-recaptcha-response'];
    } else {
        $_SESSION['recaptchaError'] = true;
        echo "error";
        header('Location: contact');
    }
    if (strcmp($_POST['phone'], "") != 0){
        $_SESSION["sentSuccess"] = true;
        $ip = $_SERVER['REMOTE_ADDR'];

        $query = "INSERT INTO bot (ip, date, email, subject, message) VALUES('".$ip."','".date("Y/m/d h:i:s A")."' ,'".$_POST["email"]."','".$_POST["subject"]."','".$_POST["comment"]."')";
        $result = mysqli_query($con, $query);

        header('Location: contact');
    }

    if (empty($captcha)){
        $_SESSION['recaptchaError'] = true;
        echo "error";
        header('Location: contact');
    }


    $ip = $_SERVER['REMOTE_ADDR'];

    $url = "https://www.google.com/recaptcha/api/siteverify?secret=".urlencode($secretKey)."&response=".urlencode($captcha);

    $response = file_get_contents($url);
    $reponseKeys = json_decode($response, true);

    if($responeKeys['success'] != true){
        $_SESSION['recaptchaError'] = true;
        echo "error";
        header('Location: contact');
    } else {


    }
        $email = $_POST["email"];
        $subject = $_POST["subject"];
        $comment = $_POST["comment"];

        $message = "Email: " . $email . "\n" . wordwrap("Message: " . $comment, 70);

        $sent = mail($to, $subject, $message, $headers);

        if ($sent){
            $_SESSION["sentSuccess"] = true;
        } else {
            $_SESSION["sentError"] = true;
        }
        echo $captcha;
        echo "<br>";
        echo $responeKeys['success'];
        header('Location: contact');

?>