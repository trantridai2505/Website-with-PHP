<?php

	include("includes/db.php");
	include("functions/functions.php");

?>

<?php

	if (isset($_GET['pro_id'])) {

		$product_id = $_GET['pro_id'];

		$get_product = "select * from products where product_id = '$product_id'";

		$run_product = mysqli_query($con,$get_product);

		$row_product = mysqli_fetch_array($run_product);

		$p_cat_id = $row_product['p_cat_id'];

		$pro_title = $row_product['product_id'];

		$pro_price = $row_product['product_price'];

		$pro_desc = $row_product['product_desc'];

		$pro_img1 = $row_product['product_img1'];

		$pro_img2 = $row_product['product_img2'];

		$pro_img3 = $row_product['product_img3'];

		$get_p_cat = "select * from product_categories where p_cat_id ='$p_cat_id'";

		$run_p_cat = mysqli_query($con,$get_p_cat);

		$row_p_cat = mysqli_fetch_array($run_p_cat);

		$p_cat_title = $row_p_cat['p_cat_title'];
	}

 ?>



<!DOCTYPE html>
<html lang="en">
<head>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<meta charset="UTF-8">
	<title>M-Store</title>
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="style/bootstrap-337.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.0.0/animate.min.css"/>
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
	<div id="top">  <!-- Top Begin -->
		<div class="container">
			<div class="row">
				<div class="col-md-6 offer">
					<a href="#" class="btn btn-success btn-sm">Welcome</a>
					<a href="checkout.php">4 Items In Your Cart | Total Price: $300</a>
				</div>

				<div class="col-md-6">
					<ul class="menu">
						<li>
							<a href="customer_register.php">Register</a>
						</li>
						<li>
							<a href="customer/my_account.php">My Account</a>
						</li>
						<li>
							<a href="cart.php">Go To Cart</a>
						</li>
						<li>
							<a href="checkout.php">Login</a>
						</li>
					</ul>
				</div>
			</div>

		</div>
	</div>          <!-- Top Finishh -->

	<div id="navtop" class="bg-light">
		<div class="container">  <!-- container begin -->
			<nav class="navbar navbar-expand-lg navbar-light bg-light">
  				<a class="navbar-brand" href="index.php">
  					<img src="images/ecom-store-logo.png" alt="">
  				</a>
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
				    <i class="fas fa-align-justify"></i>
				</button>

				<div class="collapse navbar-collapse" id="navbarSupportedContent">
					<ul class="navbar-nav mr-auto menu2">
					    <li class="<?php if($active =='Home') echo'active'; ?>">
					        <a class="nav-link" href="index.php">Home</a>
					    </li>
					    <li class="<?php if($active =='Shop') echo'active'; ?>">
					        <a class="nav-link" href="shop.php">Shop</a>
					    </li>
					    <li class="<?php if($active =='Account') echo'active'; ?>">
					        <a class="nav-link" href="customer/my_account.php">My Account</a>
					    </li>
					    <li class="<?php if($active =='Cart') echo'active'; ?>">
					        <a class="nav-link" href="cart.php">Shopping Cart</a>
					    </li>
					    <li class="<?php if($active =='Contact') echo'active'; ?>">
					        <a class="nav-link" href="contact.php">Contact Us</a>
					    </li>
				    </ul>
				    <div id="search">
				    	<form action="results.php" method="get" class="search-box form-inline my-2 my-lg-0">
				    		<input class="search-txt" type="text" name="user_query" placeholder="Type To Search">
				    		<button type="submit" name="search" value="Search" class="search-btn">
				    			<i class="fas fa-search"></i>
				    		</button>
				    	</form>
				    </div>

				    <a href="cart.php" class="cart-btn">
				    	<i class="fas fa-cart-arrow-down"></i>
				    </a>

				</div>
			</nav>
		</div> <!-- container finish-->
	</div>

