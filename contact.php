<?php
	$active ='Contact';
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
						Contact Us
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
								<h2>Feel Free To Contact Us</h2>
								<p class="text-muted">
									If You Have Any Questions, Feel Free To Contact Us. Our Customer Service Works <strong>24/7</strong>.
								</p>
							</center>

							<form action="contact.php" method="post">
								<div class="label-style">
									<label><strong>Name</strong></label>
									<input type="text" class="form-control" name="name" required>
								</div>

								<div class="label-style">
									<label><strong>Email</strong></label>
									<input type="text" class="form-control" name="email" required>
								</div>

								<div class="label-style">
									<label><strong>Subject</strong></label>
									<input type="text" class="form-control" name="subject" required>
								</div>

								<div class="label-style">
									<label><strong>Message</strong></label>
									<textarea name="message" class="form-control"></textarea>
								</div>

								<div class="text-center label-style">
									<button type="submit" name="submit" class="btn btn-primary">
										<i class="fa fa-user-md"></i> Send Message
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