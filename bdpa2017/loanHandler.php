<?php
include 'header.php';
include 'conn.php';

echo "<table class='table table-hover'>";
echo "<thead><tr><th>Payment</th>";
echo "<th>Price</th></tr></thead>";

/* attempted to make recursive, errors */
$_SESSION['LL'];
$Loanlength;
$_SESSION['CR'];
$CreditRating;//$_POST['CR'];
$NetMonthlyIncome = $_POST['NMI'];
$PurchasePrice = $_POST['PP'];

if(isset($_POST['LL'])){ 
    $LoanLength = $_POST['LL'];
}
else {
    $LoanLength = $_SESSION['LL'];
}
if(isset($_POST['CR'])){ 
    $CreditRating = $_POST['CR'];
}
else {
    $CreditRating = $_SESSION['LL'];
}
$CreditRating = 0.025;//$_POST['CR'];
$AnnualMileage = $_POST['AM'];
$DOB = $_POST['DOB'];
$Sex = $_POST['Sex'];
$Loan = $_SESSION['loanA'];

//get from database/sql
$APR = 0.035;

//max payement
$maxPay = ($_SESSION['NetIncome'] / 12) * 0.2;
printf("Maximum monthly payement recommended is: %.2f <br />", $maxPay);
//Total Payments
$TotalPayments = $LoanLength * 12;
$pTP = $pTPI = $TotalPayments; //placeholder value
$MaxPayment = $pTP;

//Total Payments
$TotalPayments = $LoanLength * 12;
$pTP = $pTPI = $TotalPayments; //placeholder value

//Period of Interest
$PeriodInterest = ($APR+$CreditRating) / 12;
$La = $pLa = $Loan; //placeholders for the total value of the loan.
        
printf("<tr><td>Loan Amount:</td><td>$%.2f</td></tr>", $Loan);
echo "<br>";



//Payment for loan on the first month--the script is recursive (or supposed to be)
$a = (1 + $PeriodInterest);
$b = pow($a, $pTP);
$c = ($PeriodInterest * $b);
$d = $b-1;
$e = $c / $d;
$f = $e * $La;
$_SESSION['mPay'] = $f;
$pTP = $pTP - 1;

$_SESSION['iPay'] = $La * $PeriodInterest;
$_SESSION['pPay'] = $_SESSION['mPay'] - $_SESSION['iPay'];
$La = $La - $_SESSION['mPay'];
$nP = $TotalPayments - $pTP;
$mPay = $_SESSION['mPay'];
$iPay = $_SESSION['iPay'];
$pPay = $_SESSION['pPay'];
$_SESSION['loanA'] = $La;
$_SESSION['LL'] = $pTP * 12;
$_SESSION['CR'] = $CreditRating;

//calc for total interest
$_SESSION['tInterest'] = 0;
for($i = 0; $pLa >= 1 ; $i--){
    $aI = (1 + $PeriodInterest);
    $bI = pow($aI, $pTPI);
    $cI = ($PeriodInterest * $bI);
    $dI = $bI-1;
    $eI = $cI / $dI;
    $fI = $eI * $pLa;
    $_SESSION['mPayI'] = $fI;

    $_SESSION['iPayI'] = $pLa * $PeriodInterest;
    $pLa = $pLa - $_SESSION['mPayI'];
    $_SESSION['tInterest'] = $_SESSION['tInterest'] + $_SESSION['iPayI'];
}
printf("<tr><Td>Total Interest:</td><td>%.2f</td></tr>", $_SESSION['tInterest']);
echo "<br>";

//salvage calc
$aS = $AnnualMileage * 5;
$bS = $PurchasePrice/$aS;
$cS = 0.55 - $bS;
$dS = $cS * 2;
$eS = $dS * $PurchasePrice;
$SV = $PurchasePrice - $eS;
printf("<tr><td>Salvage Value:</td><td>$%.2f</td></tr>", $SV);
echo "<br />";

printf("<tr><td>Total Interest:</td><td>%.2f</td></tr>", $_SESSION['tInterest']);
echo "<br>";

    echo "<form action='loanHandler.php' method='POST'>";
        /*
        echo "<tr>";
            echo "<td>Payement Number:</td>";
            echo "<td>$TotalPayments - $pTP</td>";
        echo "</tr>";
        */
        echo "<tr>";
        echo "<td>Loan Amount:</td>";
            echo "<td>";
            printf("%.2f", $La);
            echo "</td>";
        echo "</tr>";
        echo "<tr>";
            echo "<td>Monthly Payment:</td>";
            echo "<td>";
            printf("%.2f", $mPay);
            echo "</td>";
        echo "</tr>";
        echo "<tr>";
            echo "<td>Principal Payment:</td>";
            echo "<td>";
            printf("%.2f", $pPay);
            echo "</td>";
        echo "</tr>";
        echo "<tr>";
        echo "<td>Interest Payment:</td>";
        echo "<td>";
        printf("%.2f", $iPay);
        echo "</td>";
        echo "</tr>";
        //echo "<input type='submit' value='See Next Payement'>";
    echo "</form>";

//depreciation
for($i = 5; $i >= 0; $i = $i - 1){
    $V = $PurchasePrice - $SV;
    $V = $V * ($i/15) * 10;
    $y = 5 - $i;
    printf("<tr><td>Value of the vehile after %d years is:</td><td>$%.2f</td></tr>", $y, $V);
}
echo "</table>";
echo "<form action='save.php' method='POST'>";
echo "<input type='hidden' name='InterestPayment' value='$iPay'>";
echo "<input type='hidden' name='LoanAmount' value='$La'>";
echo "<input type='hidden' name='MonthlyPayment' value='$mPay'>";
echo "<input type='hidden' name='PrincipalPayment' value='$pPay'>";
echo "<input type='hidden' name='PurchasePrice' value='$PurchasePrice'>";
echo "<input type='hidden' name='LoanLength' value='$LoanLength'>";
echo "<input type='hidden' name='CreditRating' value='$CreditRating'>";
echo "<input type=\"hidden\" name=\"MaxPayment\" value=\"$MaxPayment\">";
echo "<input type=\"hidden\" name=\"SalvageValue\" value=\"$SalvageValue\">";
echo "<div class='row'><div class='col-sm-3'></div><div class='col-sm-3'>";
echo "<input type='submit' value='Save' class='btn btn-info btnmd'><br /><br />";
echo "</div><div class='col-sm-1'></div>";
echo "</form>";
echo "<div class='col-sm-3'>";
echo "<button onclick = 'window.print()' class='btn btn-info btnmd'>Print</button>";
echo "</div>";

include 'footer.php';
?>