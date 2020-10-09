<!DOCTYPE html>
<html lang="en">
<!DOCTYPE html>
<html lang="en">
<head>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<meta charset="UTF-8">
	<title>M-Store</title>
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="styles/bootstrap-337.min.css">
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
							<a href="../customer_register.php">Register</a>
						</li>
						<li>
							<a href="my_account.php">My Account</a>
						</li>
						<li>
							<a href="../cart.php">Go To Cart</a>
						</li>
						<li>
							<a href="../checkout.php">Login</a>
						</li>
					</ul>
				</div>
			</div>

		</div>
	</div>          <!-- Top Finishh -->

	<div id="navtop" class="bg-light">
		<div class="container">
			<nav class="navbar navbar-expand-lg navbar-light bg-light">
  				<a class="navbar-brand" href="index.php">
  					<img src="images/ecom-store-logo.png" alt="">
  				</a>
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
				    <i class="fas fa-align-justify"></i>
				</button>

				<div class="collapse navbar-collapse" id="navbarSupportedContent">
					<ul class="navbar-nav mr-auto menu2">
					    <li class="nav-item ">
					        <a class="nav-link" href="../index.php">Home</a>
					    </li>
					    <li class="nav-item">
					        <a class="nav-link" href="../shop.php">Shop</a>
					    </li>
					    <li class="nav-item active">
					        <a class="nav-link" href="my_account.php">My Account</a>
					    </li>
					    <li class="nav-item">
					        <a class="nav-link" href="../cart.php">Shopping Cart</a>
					    </li>
					    <li class="nav-item ">
					        <a class="nav-link" href="../contact.php">Contact Us</a>
					    </li>
				    </ul>
				    <form method="get" action="results.php" class="form-inline my-2 my-lg-0">
      					<input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      					<button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    				</form>
				</div>
			</nav>
		</div>
	</div>

	<div id="breadcrumb">
		<div class="container">
			<div class="col-md-12"> <!-- col-md-12 Begin -->
				<ul class="breadcrumb"> <!-- Breadcrumb Begin -->
					<li>
						<a href="index.php">Home</a>
					</li>
					<li>
						My Account
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
						<h1 align="center">Please Confirm Your Payment</h1>

						<form action="confirm.php" method="post" enctype="multipart/form-data"> 
							<div class="form-group"> <!-- form-group Begin -->
								<label>Invoice No: </label>
								<input type="text" class="form-control" name="invoice_no" required>
							</div> <!-- form-group Finish -->

							<div class="form-group"> <!-- form-group Begin -->
								<label>Amount Sent: </label>
								<input type="text" class="form-control" name="amount_sent" required>
							</div> <!-- form-group Finish -->

							<div class="form-group"> <!-- form-group Begin -->
								<label>Select Payment Mode: </label>
								<select name="select_payment_mode" class="form-control">
									<option>Select Payment Mode</option>
									<option>Visa</option>
									<option>Bank</option>
									<option>Money</option>
								</select>
							</div> <!-- form-group Finish -->

							<div class="form-group"> <!-- form-group Begin -->
								<label>Transaction / Reference ID: </label>
								<input type="text" class="form-control" name="ref_no" required>
							</div> <!-- form-group Finish -->

							<div class="form-group"> <!-- form-group Begin -->
								<label>Payment Date: </label>
								<input type="text" class="form-control" name="date" required>
							</div> <!-- form-group Finish -->

							<div class="text-center">
								<button class="btn btn-primary btn-lg">
									<i class="fa fa-user-md"></i> Confirm Payment
								</button>
							</div>

						</form>

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