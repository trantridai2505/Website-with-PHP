<h1 align="center">Change Password</h1>

<form action="" method="post"> <!-- Form Begin -->
	<div class="form-group"> <!-- Form Group Begin -->
		<label>Your Old Password: </label>
		<input type="text" name="old_pass" class="form-control" required>
	</div> <!-- Form Group Finish -->

	<div class="form-group"> <!-- Form Group Begin -->
		<label>Your New Password: </label>
		<input type="text" name="new_pass" class="form-control" required>
	</div> <!-- Form Group Finish -->

	<div class="form-group"> <!-- Form Group Begin -->
		<label>Confirm Your New Password: </label>
		<input type="text" name="new_pass_again" class="form-control" required>
	</div> <!-- Form Group Finish -->

	<div class="text-center">
		<button type="submit" name="submit" class="btn btn-primary">
			<i class="fa fa-user-md"></i>Update Now
		</button>
	</div>

</form> <!-- Form Finish -->