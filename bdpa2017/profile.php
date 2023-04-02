<?php
include 'header.php';
include 'conn.php';
?>
<?php
$accnum = $_SESSION['AccountNumber'];

$query = "SELECT NetIncome, Address, City, State, Zip FROM profile WHERE AccountNumber = '$accnum'";

$result = mysqli_query($con, $query);

while ($row=mysqli_fetch_array($result)) {
	$nincome = $row['NetIncome'];
	$address = $row['Address'];
	$city = $row['City'];
	$state =  $row['State'];
	$zip = $row['Zip'];
}

?>
<div class="row">
	<div class="col-sm-3"></div>
	<div class="col-sm-6">
		<div align="center"><h2>Profile</h2></div>
		<hr>
		<form action="profile-handler.php" method="POST">
			<form-group>
				<label for="nincome">Net Income:</label>
				<input type="number" class="form-control" name="nincome" value="<?php echo $nincome; ?>">
			</form-group>
			<form-group>
				<label for="nincome">Street Address:</label>
				<input type="text" class="form-control" name="address" value="<?php echo $address; ?>">
			</form-group>
			<form-group>
				<label for="nincome">City:</label>
				<input type="text" class="form-control" name="city" value="<?php echo $city; ?>">
			</form-group>
			<form-group>
				<label for="nincome">State:</label>
				<input type="text" class="form-control" name="state" value="<?php echo $state; ?>">
			</form-group>
			<form-group>
				<label for="nincome">Zip Code:</label>
				<input type="number" class="form-control" name="zip" value="<?php echo $zip; ?>">
			</form-group>
			<br>
			<button type="submit" class="btn btn-info btnmd" name="profile-update">Update Profile</button>
	</div>
	<div class="col-sm-3"></div>
	</div>
	<br>
	<div align="center"><h4>Loans</h4></div>
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
	<th>Action</th>
	</tr>
	</thead>

	<?php

	$query = "SELECT DateCalculated, PaymentMax, MonthlyPayment, TotalInterest, SalvageValue, InsurancePayment, LoanLength FROM bdpa2017.loans WHERE AccountNumber = 1";
	$result = mysqli_query($con, $query);

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
	        echo "<td>MonthlyPayment</td>";
	        echo "<td>$TotalInterest</td>";
	        echo "<td>$SalvageValue</td>";
	        echo "<td>$InsurancePayment</td>";
	        echo "<td>$LoanLength</td>";
	        echo "<td><form action='deleteloan.php' method='POST'><button type='submit' class='btn btn-danger btnsm' name='delete-loan'>Delete</button><input type='hidden' name='date' value='$DateCalculated'></form></td>";
	        
	        $MonthlyInterest = $TotalInterest /$LoanLength;
	}
?>
</table>

<?php include 'footer.php' ?>