<h1 align="center">Edit Account</h1>

<form action="" method="post" enctype="multipart/form-data"> <!-- Form Begin -->
	<div class="form-group"> <!-- Form Group Begin -->
		<label>Customer Name: </label>
		<input type="text" name="c_name" class="form-control" required>
	</div> <!-- Form Group Finish -->

	<div class="form-group"> <!-- Form Group Begin -->
		<label>Customer Email: </label>
		<input type="text" name="c_email" class="form-control" required>
	</div> <!-- Form Group Finish -->

	<div class="form-group"> <!-- Form Group Begin -->
		<label>Customer Country: </label>
		<input type="text" name="c_country" class="form-control" required>
	</div> <!-- Form Group Finish -->

	<div class="form-group"> <!-- Form Group Begin -->
		<label>Customer City: </label>
		<input type="text" name="c_city" class="form-control" required>
	</div> <!-- Form Group Finish -->

	<div class="form-group"> <!-- Form Group Begin -->
		<label>Customer Contact: </label>
		<input type="text" name="c_contact" class="form-control" required>
	</div> <!-- Form Group Finish -->

	<div class="form-group"> <!-- Form Group Begin -->
		<label>Customer Address: </label>
		<input type="text" name="c_address" class="form-control" required>
	</div> <!-- Form Group Finish -->

	<div class="form-group"> <!-- Form Group Begin -->
		<label>Customer Image: </label>
		<input type="file" name="c_image" class="form-control form-height-custom" required>
		<img src="customer-images/face2.jpg" style="width: 200px;height: 200px;">
	</div> <!-- Form Group Finish -->

	<div class="text-center">
		<button name="updata" class="btn btn-primary">
			<i class="fa fa-user-md"></i>Update Now
		</button>
	</div>

</form> <!-- Form Finish -->