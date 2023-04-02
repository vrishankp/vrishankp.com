<?php
include 'conn.php';
session_start();
$AccountNumber = $_SESSION['AccountNumber'];
$NetIncome = $_SESSION['NetIncome'];
$TotalInterest = $_SESSION['tInterest'];
$DepositAmount = $_SESSION['DownPayment'];
$InterestPayment = $_POST['InterestPayment'];
$LoanAmount = $_POST['LoanAmount'];
$MonthlyPayment = $_POST['MonthlyPayment'];
$PrincipalPayment = $_POST['PrincipalPayment'];
$PurchasePrice = $_POST['PurchasePrice'];
$CreditRating = $_POST['CreditRating'];
$MaxPayment = $_POST['MaxPayment'];
$SalvageValue = $_POST['SalvageValue'];

$sql = "INSERT INTO `bdpa2017`.`loans` (`AccountNumber`, `DateCalculated`, `PaymentMax`, `MonthlyPayment`, `TotalInterest`, `SalvageValue`, `PurchasePrice`, `DepositAmount`, `LoanLength`, `CreditRating`, `NetIncome`) VALUES ('$AccountNumber', now(), '$PaymentMax', '$MonthlyPayment', '$TotalInterest', '$SalvageValue', '$PurchasePrice', '$DepositAmount', '$LoanLength', '$CreditRating', '$NetIncome')";
$result = mysqli_query($con, $sql);

header("Location: loans.php")
?>


