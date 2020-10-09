<?php
	$active ='Shop';
	include("includes/header.php");
	include("includes/db.php");

 ?>

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
				</ul> <!-- Breadcrumb Finish -->
			</div>  <!-- col-md-12 Finish -->

			<div class="row"> <!-- row Begin -->

				<div class="col-md-3"> <!-- col-md-3 Begin -->
					<?php
						include("includes/sidebar.php");
					?>
				</div>  <!-- col-md-3 Finish -->

				<div class="col-md-9 side-product"> <!-- col-md-9 Begin -->

					<?php

						if (!isset($_GET['p_cat'])) {
							if (!isset($_GET['cat'])) {

								echo"

								<div class='box'>
									<h1>Shop</h1>
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
								tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
								quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
								consequat.</p>
								</div>

								";

							}
						}


					?>

					<div class="row">  <!-- Row Begin -->

						<?php

							if (!isset($_GET['p_cat'])) {

								if (!isset($_GET['cat'])) {

									$per_page=6;

									if (isset($_GET['page'])) {

											$page = $_GET['page'];

										}

										else
										{

											$page = 1;
										}

										$start_from = ($page-1) * $per_page;

										$get_products = "select * from products order by 1 DESC LIMIT $start_from,$per_page";

										$run_products = mysqli_query($con,$get_products);

										while ($row_products = mysqli_fetch_array($run_products)) {

											$pro_id = $row_products['product_id'];
											$pro_title = $row_products['product_title'];
											$pro_price = $row_products['product_price'];
											$pro_img1 = $row_products['product_img1'];
											$pro_desc = $row_products['product_desc'];

											echo"

												<div class='col-md-4 col-sm-6 center-reponsive'>
													<div class='card shadow product' >

														<div class='inner'>
															<img class='card-img-top' src='images/products/$pro_img1' alt='Card image cap'>
														</div>

  														<div class='card-body text'>
    														<h5 class='card-title text-center'>
    															<a href='details.php?pro_id=$pro_id'>
    																$pro_title
    															</a>
    														</h5>
    														<p class='card-text'>
    															$pro_desc
    														</p>
    														<div class='star text-center'>
    															<i class='fas fa-star'></i>
																<i class='fas fa-star'></i>
																<i class='fas fa-star'></i>
																<i class='fas fa-star-half-alt'></i>
																<i class='far fa-star'></i>
    														</div>
    														<p class='card-text price text-center'>
    															$pro_price
    														</p>
    														<p class='button'>
    															<a href='details.php?pro_id=$pro_id' class='btn btn-default'>View Details</a>

    															<a href='details.php?pro_id=$pro_id'class='btn btn-success' style='margin-top: 10px;'>
																	<i class='fa fa-shopping-cart'>
																		Add To Cart
																	</i>
																</a>
    														</p>
    													</div>

													</div>

												</div>

											";

										}
								}
							}

						 ?>

					<!--<div class="col-md-4 col-sm-6 center-reponsive">
							<div class="card shadow product" >
								<div class="inner">
									<img class="card-img-top" src="images/products/product1.jpg" alt="Card image cap">
								</div>
  								<div class="card-body text">
    								<h5 class="card-title text-center">
    									<a href="details.php">Nikon</a>
    								</h5>
    								<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    								<div class="star text-center">
    									<i class="fas fa-star"></i>
										<i class="fas fa-star"></i>
										<i class="fas fa-star"></i>
										<i class="fas fa-star-half-alt"></i>
										<i class="far fa-star"></i>
    								</div>
    								<p class="card-text price text-center">$400.00</p>
    								<p class="button">
    									<a href="details.php" class="btn btn-default">View Details</a>
    									<a href="details.php" class="btn btn-success" style="margin-top: 10px;">
											<i class="fa fa-shopping-cart">
												Add To Cart
											</i>
										</a>
    								</p>
    							</div>
							</div>
						</div> -->

					</div> <!-- Row Finish -->

					<div class="row">

							<?php
								getpcatpro();
								getcatpro();
							?>

					</div>

					<div class="pagi">
						<ul class="pagination">

							<?php

								$per_page = 6;

								$query = "select * from products";

								$result = mysqli_query($con,$query);

								$total_records = mysqli_num_rows($result);

								$total_pages = ceil($total_records / $per_page);

								echo"
									<li class='page-item'>
										<a class='page-link' href='shop.php?page=1'>First Page</a>
									</li>


								";

								for ($i=1; $i <= $total_pages ; $i++) {
									echo"
										<li class='page-item'>
											<a class='page-link' href='shop.php?page=$i'>$i</a>
										</li>

									";
								}

								echo"

									<li class='page-item'>
										<a class='page-link' href='shop.php?page=$total_pages'>Last Page</a>
									</li>

								";


							 ?>


							<!--<li class="page-item"><a class="page-link" href="#">First Page</a></li>
							<li class="page-item"><a class="page-link" href="#">1</a></li>
							<li class="page-item"><a class="page-link" href="#">2</a></li>
							<li class="page-item"><a class="page-link" href="#">3</a></li>
							<li class="page-item"><a class="page-link" href="#">4</a></li>
							<li class="page-item"><a class="page-link" href="#">5</a></li>
							<li class="page-item"><a class="page-link" href="#">Last Page</a></li>-->
						</ul>
					</div>





				</div> <!-- col-md-9 Finish -->
			</div> <!-- row Finish -->

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