<?php
	$active='Account';
	include("includes/header.php");

 ?>

	<div id="breadcrumb">
		<div class="container">
			<div class="col-md-12"> <!-- col-md-12 Begin -->
				<ul class="breadcrumb"> <!-- Breadcrumb Begin -->
					<li>
						<a href="index.php">Home</a>
					</li>
					<li>
						Register
					</li>
				</ul> <!-- Breadcrumb Finish -->
			</div>  <!-- col-md-12 Finish -->

			<div class="row">
				<div class="col-md-3"> <!-- col-md-3 Begin -->
					<?php
						include("includes/sidebar.php");
					?>
				</div>  <!-- col-md-3 Finish -->

				<div class="col-md-9"> <!-- col-md-9 Begin -->
					<div class="box"> <!-- Box Begin -->
						<div class="box-header">
							<center>
								<h2>Register A New Account</h2>
							</center>

							<form action="customer_register.php" method="post" enctype="multipart/form-data">
								<div class="label-style">
									<label><strong>Your Name</strong></label>
									<input type="text" class="form-control" name="c_name" required>
								</div>

								<div class="label-style">
									<label><strong>Your Email</strong></label>
									<input type="text" class="form-control" name="c_email" required>
								</div>

								<div class="label-style">
									<label><strong>Your Password</strong></label>
									<input type="password" class="form-control" name="c_pass" required>
								</div>

								<div class="label-style">
									<label><strong>Your Country</strong></label>
									<input type="text" class="form-control" name="c_country" required>
								</div>

								<div class="label-style">
									<label><strong>Your City</strong></label>
									<input type="text" class="form-control" name="c_city" required>
								</div>

								<div class="label-style">
									<label><strong>Your Contac</strong></label>
									<input type="text" class="form-control" name="c_contact" required>
								</div>

								<div class="label-style">
									<label><strong>Your Address</strong></label>
									<input type="text" class="form-control" name="c_address" required>
								</div>

								<div class="label-style">
									<label><strong>Your Profile Picture</strong></label>
									<input type="file" class="form-control form-height-custom" name="c_image" required>
								</div>

								<div class="text-center label-style">
									<button type="submit" name="register" class="btn btn-primary">
										<i class="fa fa-user-md"></i> Register
									</button>
								</div>

							</form>
						</div>
					</div> <!-- Box Finish -->
				</div> <!-- col-md-9 Finish -->
			</div>
		</div>
	</div>


	<?php
		include("includes/footer.php");
	?>





















	<script src="lib/jquery-3.4.1.min.js"></script>
	<script src="lib/popper.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/bootstrap-337.min.js"></script>
</body>
</html>