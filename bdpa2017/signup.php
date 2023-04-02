<?php include 'header.php'; $_SESSION['re1'] = rand(0, 1000000);?>

<center><h2>Sign Up</h2></center>
<hr>

<center><div class="alert alert-warning">Astericks (*) indicate required fields.</div></center>

<form action="signup-handler.php" method="POST">
<div class="row">
<div class="col-sm-1"></div>
<div class="col-sm-5">
	<form-group>
		<label for="user">Username:*</label>
		<input type="text" class="form-control" name="user" id="user" required>
	</form-group>
		<form-group>
		<label for="pass">Password:*</label>
		<input type="password" class="form-control" name="pass" id="pass" minlength="6" maxlength="20" required placeholder="Must contain 1 uppercase, lowercase, & number">
	</form-group>
	<form-group>
		<label for="user">Confirm Password:*</label>
		<input type="password" class="form-control" name="conpass">
	</form-group>
	<form-group>
		<label for="fname">First Name:</label>
		<input type="text" class="form-control" name="fname">
	</form-group>
	<form-group>
		<label for="user">Last Name:*</label>
		<input type="text" class="form-control" name="lname" required>
	</form-group>
	<form-group>
		<label for="user">Birthday:*</label>
		<input type="date" class="form-control" name="bday" required>
	</form-group>    
	<form-group>
		<label for="user">Gender:*</label>
		<select class="form-control" name="gender">
			<option>Male</option>
			<option>Female</option>
			<option>Other</option>
		</select>
	</form-group>
	<form-group>
		<label for="user">Net Income:*</label>
		<input type="number" class="form-control" name="nincome" required>
	</form-group>    
	<form-group>
		<label for="user">Address:</label>
		<input type="text" class="form-control" name="address">
	</form-group>    
	<form-group>
		<label for="user">City:</label>
		<input type="text" class="form-control" name="city">
	</form-group>
</div>
<div class="col-sm-5">
	<form-group>
		<label for="user">State:</label>
		<input type="text" class="form-control" name="state" maxlength="2">
	</form-group>
	<form-group>
		<label for="user">Zip Code:</label>
		<input type="number" class="form-control" name="city" maxlength="5">
	</form-group>
	<form-group>
		<label for="user">1st Security Question:*</label>
		<select class="form-control" name="sec1" required>
			<option>Mother's maiden name</option>
			<option>Father's middle name</option>
			<option>High school mascot</option>
			<option>Color of first automobile</option>
			<option>Company where first employed</option>
			<option>Birth hospital</option>
			<option>Name of your first pet</option>
			<option>Musical instrument you play</option>
		</select>
		<label for="user">Answer:</label>
		<input type="text" class="form-control" name="sec1a" required>
	</form-group>
	<form-group>
		<label for="user">2nd Security Question:*</label>
		<select class="form-control" name="sec2" required>
			<option>Mother's maiden name</option>
			<option>Father's middle name</option>
			<option>High school mascot</option>
			<option>Color of first automobile</option>
			<option>Company where first employed</option>
			<option>Birth hospital</option>
			<option>Name of your first pet</option>
			<option>Musical instrument you play</option>
		</select>
		<label for="user">Answer:</label>
		<input type="text" class="form-control" name="sec2a" required>
	</form-group>
	<form-group>
		<label for="user">3rd Security Question:*</label>
		<select class="form-control" name="sec3"required>
			<option>Mother's maiden name</option>
			<option>Father's middle name</option>
			<option>High school mascot</option>
			<option>Color of first automobile</option>
			<option>Company where first employed</option>
			<option>Birth hospital</option>
			<option>Name of your first pet</option>
			<option>Musical instrument you play</option>
		</select>
		<label for="user">Answer:</label>
		<input type="text" class="form-control" name="sec3a" required>
		<label>ReCaptcha:*</label>
		<input type="text" class="form-control" name="recap" required placeholder="Please type this: <?php echo $_SESSION['re1'] ?>">
	</form-group>
	</div>
	<div class="col-sm-1"></div>
	</div>
	<br>
	<center><button type="submit" class="btn btn-info btnmd" name="signup">Sign Up</button></center>
<?php include 'footer.php'; ?>