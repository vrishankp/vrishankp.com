<?php include 'header.php'; ?>
<div class="row">
	<div class="col-sm-3"></div>
	<div class="col-sm-6">
	<form action='createLoan.php' method='GET'>
		<form-group>
			<label for="LoanA">Loan Amount:</label>
			<input type="number" name="LoanA" class="form-control">
		</form-group>
		<br>
		<button type="submit" class="btn btn-info btnmd">Continue</button>
	</form>
	</div>
	<div class="col-sm-3"></div>	
</div>

<?php include 'footer.php'; ?>
