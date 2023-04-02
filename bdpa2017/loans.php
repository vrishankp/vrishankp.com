<?php
include 'header.php';

include 'conn.php';
$AccountNumber = $_SESSION['AccountNumber'];
$query = "SELECT DateCalculated, PaymentMax, MonthlyPayment, TotalInterest, SalvageValue, InsurancePayment, LoanLength FROM bdpa2017.loans WHERE AccountNumber = $AccountNumber";
$result = mysqli_query($con, $query);
?>

<div align="center"><h2>Loans</h2></div>
<hr>
<table class='table table-hover'>
<thead>
<tr>
<th>Date Calculated<th>
<th>Payment Maximum</th>
<th>Monthly Payment</th>
<th>Total Interest</th>
<th>Salvage Value</th>
<th>Insurance Payment</th>
<th>Loan Length</th>
</tr>
</thead>

<?php
while($row = mysqli_fetch_array($result)){
        $DateCalculated = $row['DateCalculated'];
        $PaymentMax = $row['PaymentMax'];
        $MonthlyPayment = $row['MonthlyPayment'];
        $TotalInterest = $row['TotalInterest'];
        $SalvageValue = $row['SalvageValue'];
        $InsurancePayment = $row['InsurancePayment'];
        $LoanLength = $row['LoanLength'];
           
        echo "<tr>";
        echo "<td>$DateCalculated</td>";
        echo "<td>$PaymentMax</td>";
        echo "<td>$MonthlyPayment</td>";
        echo "<td>$TotalInterest</td>";
        echo "<td>$SalvageValue</td>";
        echo "<td>$InsurancePayment</td>";
        echo "<td>$LoanLength</td>";
        
        $MonthlyInterest = $TotalInterest /$LoanLength;
}

?>
</table>

<form action="loanAmount.php" method="POST">
        <div align="center"><button type="submit" class="btn btn-info btnlg" href="loanAmount.php">Create Loan</button></div>
</form>

<?php include 'footer.php'; ?>