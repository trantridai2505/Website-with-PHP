<?php

	include("includes/db.php");

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<meta charset="UTF-8">
	<title>Insert Products</title>
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/bootstrap-337.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.0.0/animate.min.css"/>
</head>
<body>

	<div class="row"  > <!-- Row Begin -->

		<div class="col-lg-12"> <!-- Col-12 Begin -->

			<ol class="breadcrumb">  <!-- Breadcrumb Begin -->
				<li class="active">
					<i class="fas fa-tachometer-alt"></i> Dashboard / Insert Products
				</li>
			</ol> <!-- Breadcrumb Finish -->

		</div> <!-- Col-12 Finish -->

	</div>  <!-- Row Finish -->

	<div class="row"  > <!-- Row Begin -->

		<div class="col-lg-12"> <!-- Col-12 Begin -->

			<div class="panel panel-default">  <!-- Panel Begin -->
				<div class="panel-heading"> <!-- Panel-heading Begin -->
					<h3 class="panel-title" >
						<i class="fa fa-money fa-fw"></i> Insert Products
					</h3>
				</div> <!-- Panel-heading Finish -->

				<div class="panel-body"> <!-- Panel-body Begin -->
					<form method="post" class="form-horizontal" enctype="multipart/form-data"> <!-- form-horizontal Begin -->

						<div class="form-group"> <!-- Form-group Begin -->
							<label class="col-md-3 control-label">Product Title</label>
							<div class="col-md-6">
								<input type="text" name="product_title" class="form-control" required>
							</div>
						</div> <!-- Form-group Finish -->

						<div class="form-group"> <!-- Form-group Begin -->
							<label class="col-md-3 control-label">Product Category</label>
							<div class="col-md-6">
								<select name="product_cat" class="form-control" style="height: 34px;">
									<option >Select A Category Product</option>

									<?php

										$get_p_cats = "select * from product_categories";
										$run_p_cats = mysqli_query($con,$get_p_cats);
										while ($row_p_cats = mysqli_fetch_array($run_p_cats)) {
											$p_cat_id = $row_p_cats['p_cat_id'];
											$p_cat_title = $row_p_cats['p_cat_title'];

											echo"
												<option value='$p_cat_id'> $p_cat_title </option>
											";
										}

									?>
								</select>
							</div>
						</div> <!-- Form-group Finish -->

						<div class="form-group"> <!-- Form-group Begin -->
							<label class="col-md-3 control-label">Category</label>
							<div class="col-md-6"> <!-- col-md-6 Begin -->
								<select name="cat" class="form-control" style="height: 34px;">
									<option >Select A Category</option>

									<?php

										$get_cat = "select * from categories";
										$run_cat = mysqli_query($con,$get_cat);
										while ($row_cat = mysqli_fetch_array($run_cat)) {
											$cat_id = $row_cat['cat_id'];
											$cat_title = $row_cat['cat_title'];

											echo"
												<option value='$cat_id'> $cat_title </option>
											";
										}

									?>
								</select>
							</div> <!-- col-md-6 Finish -->

						</div> <!-- Form-group Finish -->

						<div class="form-group"> <!-- Form-group Begin -->
							<label class="col-md-3 control-label">Product Image 1</label>
							<div class="col-md-6">
								<input type="file" name="product_img1" class="form-control" required>
							</div>
						</div> <!-- Form-group Finish -->

						<div class="form-group"> <!-- Form-group Begin -->
							<label class="col-md-3 control-label">Product Image 2</label>
							<div class="col-md-6">
								<input type="file" name="product_img2" class="form-control" required>
							</div>
						</div> <!-- Form-group Finish -->

						<div class="form-group"> <!-- Form-group Begin -->
							<label class="col-md-3 control-label">Product Image 3</label>
							<div class="col-md-6">
								<input type="file" name="product_img3" class="form-control" required>
							</div>
						</div> <!-- Form-group Finish -->

						<div class="form-group"> <!-- Form-group Begin -->
							<label class="col-md-3 control-label">Product Price</label>
							<div class="col-md-6">
								<input type="text" name="product_price" class="form-control" required>
							</div>
						</div> <!-- Form-group Finish -->

						<div class="form-group"> <!-- Form-group Begin -->
							<label class="col-md-3 control-label">Product Keywords</label>
							<div class="col-md-6">
								<input type="text" name="product_keywords" class="form-control" required>
							</div>
						</div> <!-- Form-group Finish -->

						<div class="form-group"> <!-- Form-group Begin -->
							<label class="col-md-3 control-label">Product Desc</label>
							<div class="col-md-6">
								<textarea name="product_desc" cols="19" rows="6" class="form-control"></textarea>
							</div>
						</div> <!-- Form-group Finish -->

						<div class="form-group"> <!-- Form-group Begin -->
							<label class="col-md-3 control-label"></label>
							<div class="col-md-6">
								<input name="submit" value="Insert Product" type="submit" class="btn btn-success form-control">
							</div>
						</div> <!-- Form-group Finish -->

					</form> <!-- form-horizontal Finish -->

				</div> <!-- Panel-body Finish -->

			</div> <!-- Panel Finish -->

		</div> <!-- Col-12 Finish -->

	</div>  <!-- Row Finish -->






	<script src="js/tinymce/tinymce.min.js"></script>
	<script>tinymce.init({ selector: 'textarea'});</script>
	<script src="js/jquery-3.4.1.min.js"></script>
	<script src="js/popper.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/bootstrap-337.min.js"></script>
</body>
</html>

<?php

	if (isset($_POST['submit'])) {

		$product_title = $_POST['product_title'];
		$product_cat = $_POST['product_cat'];
		$cat = $_POST['cat'];
		$product_price = $_POST['product_price'];
		$product_keywords = $_POST['product_keywords'];
		$product_desc = $_POST['product_desc'];

		$product_img1 = $_FILES['product_img1']['name'];
		$product_img2 = $_FILES['product_img2']['name'];
		$product_img3 = $_FILES['product_img3']['name'];

		$temp_name1 = $_FILES['product_img1']['tmp_name'];
		$temp_name2 = $_FILES['product_img2']['tmp_name'];
		$temp_name3 = $_FILES['product_img3']['tmp_name'];

		move_uploaded_file($temp_name1,'products_images/$product_img1');
		move_uploaded_file($temp_name2,'products_images/$product_img2');
		move_uploaded_file($temp_name3,'products_images/$product_img3');

		$insert_product = "insert into products
		(p_cat_id,cat_id,date,product_title,product_img1,product_img2,product_img3,product_price,product_keywords,product_desc)

		values('$product_cat','$cat',NOW(),'$product_title','$product_img1','$product_img2','$product_img3','$product_price','$product_keywords','$product_desc')";

		$run_product = mysqli_query($con,$insert_product);

		if ($run_product) {
			echo"<script>alert('Product Has Been Inserted Sucessfully')</script>";
			echo"<script>window.open('insert_product.php','_self')</script>";
		}
	}




 ?>