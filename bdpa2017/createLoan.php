<?php
include 'header.php';
include 'conn.php';

$_SESSION['loanA'] = $_GET['LoanA'];
$AccountNumber = $_SESSION['AccountNumber'];
$query = "SELECT Sex, Birthday, NetIncome from bdpa2017.profile where AccountNumber =$AccountNumber";
$result = mysqli_query($con, $query);

while($row = mysqli_fetch_array($result)){
    $DOB = $row['Birthday'];
    $Sex = $row['Sex'];
    $NetIncome = $row['NetIncome'];
    $_SESSION['NetIncome'] = $NetIncome;
    $MonthlyIncome = ($NetIncome/12);
}

$DownPayment = 0.02 * $_SESSION['loanA'];
$_SESSION['DownPayment'] = $DownPayment;
?>

<div class="row">
	<div class="col-sm-3"></div>
	<div class="col-sm-6">
		<form action='loanHandler.php' method='POST'>
			<form-group>
				<label>Net Monthly Income:</label>
				<input type='number' class='form-control' name='NMI' value='<?php echo $MonthlyIncome; ?>'>
			</form-group>
			<form-group>
				<label>Purchase Price:</label>
				<input type='number' class='form-control'name='PP'><br>
			</form-group>
			<form-group>
				<label>Loan Length</label>
				<input type='number' class='form-control' name='LL'><br> <!-- more than 1 less than 7 -->
			</form-group>
			<form-group>
				<label>Down Payment</label>
				<input type='number' class='form-control' name'DownPayment' value='<?php echo $DownPayment; ?>'>
			</form-group>
			<form-group>
				<label>Credit Rating</label>
				<select class='form-control' name='CR'> <!--select dropdown -->
					<option>700+</option>
					<option value=0.005>650-699</option>
					<option value=0.04>550-599</option>
					<option value=0.07>550</option>
				</select>
			</form-group>
			<form-group>
				<label>Annual Mileage</label>
				<input class='form-control' type=number' name='AM'><br>
			</form-group>
			<form-group>
				<label>Birthday</label>
				<input type='text' name='DOB' class="form-control" value='<?php echo $DOB; ?>'>
			</form-group>
			<form-group>
				<label>Sex</label>
				<input type='text' class='form-control' name='Sex' value='<?php echo $Sex; ?>'><br> <!--select dropdown-->
			</formgroup>
			<input type='submit' class="btn btn-info btnmd" value='Calculate'>
		</form>
	</div>
</div>

<?php include 'footer.php'; ?>