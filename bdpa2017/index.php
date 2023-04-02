<?php
include 'header.php';
include 'conn.php';

if (isset($_SESSION['logfail'])) {
	echo "<div class='alert alert-danger'>Username and/or password incorrect.</div>";
	unset($_SESSION['logfail']);
}
?>
<div class="row">
<div class="col-sm-3"></div>
<div class="col-sm-6">
	<form action="loginhandler.php" method="POST">
		<form-group>
			<label for="user">Username:</label>
			<input type="text" name="username" class="form-control">
		</form-group>
		<form-group>
			<label for="password">Password:</label>
			<input type="password" name="password" class="form-control">
		</form-group>
		<br>
		<button type="submit" class="btn btn-info btnmd">Login</button>
	</form>
</div>
<div class="col-sm-3"></div>    

<?php include 'footer.php'; ?>