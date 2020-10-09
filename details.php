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

		$pro_title = $row_product['product_title'];

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
	<link rel="stylesheet" href="styles/bootstrap-337.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.0.0/animate.min.css"/>

	<link rel="stylesheet" type="text/css" href="css/swiper.min.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" type="text/css" href="css/styleswiper.css">
	<script typy="text/javascript" src="js/swiperjs.js"></script>

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
							<a href="checkout.php">My Account</a>
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
					        <a class="nav-link" href="index.php">Home</a>
					    </li>
					    <li class="nav-item active">
					        <a class="nav-link" href="shop.php">Shop</a>
					    </li>
					    <li class="nav-item">
					        <a class="nav-link" href="checkout.php">My Account</a>
					    </li>
					    <li class="nav-item">
					        <a class="nav-link" href="cart.php">Shopping Cart</a>
					    </li>
					    <li class="nav-item">
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
						Shop
					</li>

					<li>
						<a href="shop.php?p_cat=<?php echo '$p_cat_id'; ?>">
							<?php
								echo "$p_cat_title";
							?>

						</a>
					</li>

					<li>
						<?php
							echo "
								$pro_title
							";
						 ?>
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
					<div id="productMain" class="row">
						<div class="col-sm-6"> <!-- col-md-6 Begin -->
							<div id="mainImage">
								<div id="myCarousel" class="carousel slide" data-ride="carousel" style="height: 30rem;">
									<div class="carousel-inner">
										<div class="carousel-item active" >
        									<center><img style="height: 508px;max-width: 100%;" src="images/products/<?php echo $pro_img1 ;?>"></center>
    									</div>
    									<div class="carousel-item">
        									<center><img style="height: 508px;max-width: 100%;max-width: 100%;" src="images/products/<?php echo $pro_img2 ;?>"></center>
    									</div>
    									<div class="carousel-item">
        									<center><img style="height: 508px; max-width: 100%;" src="images/products/<?php echo $pro_img3 ;?>"></center>
    									</div>
								    </div>

								    <a class="carousel-control-prev" href="#myCarousel" data-slide="prev">
   										<span class="carousel-control-prev-icon"></span>
    								</a>
    								<a class="carousel-control-next" href="#myCarousel" data-slide="next">
    									<span class="carousel-control-next-icon"></span>
    								</a>
								</div>
							</div>
						</div> <!-- col-md-6 Finish -->

						<div class="col-sm-6">  <!-- col-sm-6 Begin -->
							<div class="box">
								<h1 class="text-center"> <?php echo $pro_title; ?> </h1>
								<form action="index.php?add_cart=<?php echo $pro_id; ?>" method="post"> <!-- Form Begin -->

									<div class="form-group">
										<div class="row">
											<div class="col-md-7">
												<p class="new text-center">NEW</p>
												<p>Procuct Code: NK4521</p>
												<div class="star">
    												<i class="fas fa-star"></i>
													<i class="fas fa-star"></i>
													<i class="fas fa-star"></i>
													<i class="fas fa-star-half-alt"></i>
													<i class="far fa-star"></i>
    											</div>
    											<p class="price"> <?php echo $pro_price; ?> </p>
    											<p><b>Availability:</b> In Stock</p>
    											<p><b>Condition:</b> New</p>
    											<p><b>Brand:</b> Nikon Company</p>
											</div>
										</div>
									</div>

									<div class="form-group"> <!-- form-group Begin -->
										<div class="row">
											<label for="" class="col-md-5 form-control-label"><b>Products Quantity</b></label>
											<div class="col-md-7">
												<select name="product_qty" class="form-control">
													<option>1</option>
													<option>2</option>
													<option>3</option>
													<option>4</option>
													<option>5</option>
												</select>
											</div>
										</div>
									</div> <!-- form-group Finish -->

									<p class="buttons">
    									<button class="btn btn-primary i fa fa-shopping-cart">Add To Cart</button>
    								</p>

								</form> <!-- Form Finish -->
							</div>
						</div> <!-- col-sm-6 Finish -->

					</div>

					<div class="box" id="details">  <!-- Box Begin -->
						<h4>Product Details</h4>
						<p>

							<?php echo $pro_desc; ?>

						</p>
					</div> <!-- Box Finish -->
				</div>  <!-- col-md-9 Finish -->
			</div>

			<div class="box">
				<div class="product-ucl text-center">
					<h3>Products You Maybe Like</h3>
				</div>
			</div>

			<div class="body-swiper">
				<div class="swiper-container">
    				<div class="swiper-wrapper">
        				<div class="swiper-slide" ><img src="images/swiper/swiper1.jpg"></div>
        				<div class="swiper-slide" ><img src="images/swiper/swiper2.jpg"></div>
        				<div class="swiper-slide" ><img src="images/swiper/swiper3.jpg"></div>
        				<div class="swiper-slide" ><img src="images/swiper/swiper4.jpg"></div>
        				<div class="swiper-slide" ><img src="images/swiper/swiper5.jpg"></div>
        				<div class="swiper-slide" ><img src="images/swiper/swiper6.jpg"></div>
        				<div class="swiper-slide" ><img src="images/swiper/swiper7.jpg"></div>
        				<div class="swiper-slide" ><img src="images/swiper/swiper8.jpg"></div>
        				<div class="swiper-slide" ><img src="images/swiper/swiper9.jpg"></div>
        				<div class="swiper-slide" ><img src="images/swiper/swiper10.jpg"></div>
    				</div>

    			<!-- Add Pagination -->
    			<div class="swiper-pagination"></div>

    			</div>
			</div>


		</div>
	</div>

	<?php
		include("includes/footer.php");
	?>



















	<script src="js/swiper.min.js"></script>
	<script src="lib/jquery-3.4.1.min.js"></script>
	<!-- SWIPER SCRIPT BEGIN -->
	<script>
    	var swiper = new Swiper('.swiper-container', {
    		effect: 'coverflow',
    		grabCursor: true,
    		centeredSlides: true,
    		slidesPerView: 'auto',
    		coverflowEffect: {
        		rotate: 50,
        		stretch: 0,
        		depth: 100,
        		modifier: 1,
        		slideShadows: true,
    		},

     		loop: true,
     		autoplay: {
        		delay: 500,
        		disableOnInteraction: false,
      		},
    	});
	</script>
	<!-- SWIPER SCRIPT FINISH -->

	<script src="lib/popper.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/bootstrap-337.min.js"></script>
</body>
</html>