<?php
include 'conn.php';
session_start();
if (isset($_REQUEST['signup'])) {
    $user=$_REQUEST['user'];
    $pass=$_REQUEST['pass'];
    $conpass=$_REQUEST['conpass'];
    $fname=$_REQUEST['fname'];
    $lname=$_REQUEST['lname'];
    $bday=$_REQUEST['bday'];
    $gender=$_REQUEST['gender'];
    $nincome=$_REQUEST['nincome'];
    $address=$_REQUEST['address'];
    $city=$_REQUEST['city'];
    $state=$_REQUEST['state'];
    $zip=$_REQUEST['zip'];
    $sec1=$_REQUEST['sec1'];
    $sec1a=$_REQUEST['sec1a'];
    $sec2=$_REQUEST['sec2'];
    $sec2a=$_REQUEST['sec2a'];
    $sec3=$_REQUEST['sec3'];
    $sec3a=$_REQUEST['sec3a'];
    $recap=$_REQUEST['recap'];

    $num = preg_match('@[0-9]@',$pass);
    $lower = preg_match('@[a-z]@',$pass);
    $upper  = preg_match('@[A-Z]@',$pass);

    if ($pass == $conpass){
    	if ($recap == $_SESSION['re1']){
    		if (($sec1 != $sec2) || ($sec1 != $sec3) || ($sec2 != $sec3)) {
    				if (isset($num) && isset($lower) && isset ($upper)){
    			$sql = "INSERT INTO profile (`FirstName`, `LastName`, `Birthday`, `Sex`, `NetIncome`, `Address`, `City`, `State`, `Zip`, `LoginID`, `Password`) VALUES ('$fname', '$lname', '$bday', '$gender', '$nincome', '$address', '$city', '$state', '$zip', '$user', '$pass')";

    			$result = mysqli_query($con, $sql);
    			$account_id = mysql_insert_id($result);
                $_SESSION['AccountNumber'] = $account_id;   
                        
    			$sql = "INSERT INTO securityquestions (`AccountNumber`, `Question`, `Answer`) VALUES ('$account_id', '$sec1', '$sec1a')";

    			$result = mysqli_query($con, $sql);
    			$_SESSION['loggedin'] = 1;
                        
    			header('Location: loans.php');
                }
    		}

    		else {
    			$_SESSION['sec-error'] = 1;
    			header('Location: signup.php');
    		}
    	}

    	else {
    		$_SESSION['recap-error'] = 42;
    		header('Location: signup.php');
    	}
    }

    else {
    	$_SESSION['pass-error'] = 42;
    	header('Location: signup.php');
    }
}
?>