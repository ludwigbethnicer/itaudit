<div class="w360center pb-5">
	<h5 class="card-title text-center">Sign In</h5>
	<form action="./menu.php" class="needs-validation" novalidate>
		<div class="form-group">
			<label for="uname">Username:</label>
			<input type="text" class="form-control" id="uname" placeholder="Enter username" name="uname" required>
			<div class="valid-feedback">Valid.</div>
			<div class="invalid-feedback">Please fill out this field.</div>
		</div>
		<div class="form-group">
			<label for="pwd">Password:</label>
			<input type="password" class="form-control" id="pwd" placeholder="Enter password" name="pswd" required>
			<div class="valid-feedback">Valid.</div>
			<div class="invalid-feedback">Please fill out this field.</div>
		</div>
		<div class="form-group form-check">
			<label class="form-check-label">
			<input class="form-check-input" type="checkbox" name="remember" required> Save User and Password.
			<div class="valid-feedback">Valid.</div>
			<div class="invalid-feedback">Check this checkbox to continue.</div>
			</label>
		</div>
		<button type="submit" class="btn btn-primary">Submit</button>
	</form>
</div>