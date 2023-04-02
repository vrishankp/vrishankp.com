<?php
include 'conn.php';
session_start();

$accnum = $_SESSION['AccountNumber'];

if(isset($_REQUEST['profile-update'])) {
	$nincome = $_REQUEST['nincome'];
	$address = $_REQUEST['address'];
	$city = $_REQUEST['city'];
	$state = $_REQUEST['state'];
	$zip = $_REQUEST['zip'];

	$sql = "UPDATE profile SET `NetIncome`='$nincome', `Address`='$address', `City`='$city', `State`='$state', `Zip`='$zip' WHERE `AccountNumber`='$accnum'";

	$result = mysqli_query($con, $sql);

	header('Location: profile.php');
}

if(isset($_REQUEST['delete-loan'])) {
	$loandate = $_REQUEST['date'];

	$query = "DELETE FROM `bdpa2017`.`loans` WHERE `AccountNumber`='$accnum' and`DateCalculated`='$loandate'";

	$result = mysqli_query($con, $query);
	header('Location: profile.php');
}