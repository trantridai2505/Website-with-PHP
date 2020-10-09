<?php

	$db = mysqli_connect("localhost","root","","ecom_store");

	/// begin getPro funtion ///

	function getPro(){
		global $db;

		$get_products = "select * from products order by 1 DESC LIMIT 0,6";

		$run_products = mysqli_query($db,$get_products);

		while ($row_products = mysqli_fetch_array($run_products)) {
			$pro_id = $row_products['product_id'];
			$pro_title = $row_products['product_title'];
			$pro_price = $row_products['product_price'];
			$pro_img1 = $row_products['product_img1'];
			$pro_desc = $row_products['product_desc'];

			echo"

				<div class='col-md-4 col-sm-6 single '>
					<div class='card shadow product' style='width: 20rem;'>
						<div class='inner'>
							<img class='card-img-top' src='admin/products_images/$pro_img1' alt='Card image cap'>
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

    						<div class='star'>
    							<i class='fas fa-star'></i>
								<i class='fas fa-star'></i>
								<i class='fas fa-star'></i>
								<i class='fas fa-star-half-alt'></i>
								<i class='far fa-star'></i>
    						</div>

    						<p class='card-text price'>
    							$pro_price
    						</p>

    						<p class='button'>
    							<a href='details.php?pro_id=$pro_id' class='btn btn-default'>View Details</a>

    							<a href='details.php?pro_id=$pro_id' class='btn btn-success'>
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

	/// finish getPro funtion ///

	/// begin getPCats funtion ///

	function getPCats(){

		global $db;

		$get_p_cats = "select * from product_categories";

		$run_p_cats= mysqli_query($db,$get_p_cats);

		while ($row_p_cats = mysqli_fetch_array($run_p_cats)) {

			$p_cat_id = $row_p_cats['p_cat_id'];

			$p_cat_title = $row_p_cats['p_cat_title'];

			echo"

				<li class='liside'>

					<a href='shop.php?p_cat=$p_cat_id'> $p_cat_title </a>

				</li>

			";
		}
	}

	/// finish getPCats funtion ///

	/// begin getCats funtion ///

	function getCats(){

		global $db;

		$get_cats = "select * from categories";

		$run_cats= mysqli_query($db,$get_cats);

		while ($row_cats = mysqli_fetch_array($run_cats)) {

			$cat_id = $row_cats['cat_id'];

			$cat_title = $row_cats['cat_title'];

			echo"

				<li class='liside'>

					<a href='shop.php?cat=$cat_id'> $cat_title </a>

				</li>

			";
		}
	}

	/// finish getCats funtion ///

	/// begin getpcatpro funtion ///

	function getpcatpro()
	{
		global $db;

		if (isset($_GET['p_cat'])) {

			$p_cat_id = $_GET['p_cat'];

			$get_p_cat = "select * from product_categories where p_cat_id = '$p_cat_id'";

			$run_p_cat = mysqli_query($db,$get_p_cat);

			$row_p_cat = mysqli_fetch_array($run_p_cat);

			$p_cat_title = $row_p_cat['p_cat_title'];

			$p_cat_desc = $row_p_cat['p_cat_desc'];

			$get_products = "select * from products where p_cat_id = '$p_cat_id'";

			$run_products = mysqli_query($db,$get_products);

			$count = mysqli_num_rows($run_products);

			if ($count==0) {

				echo"

					<div class = 'box'>
						<h1> No Product Found In This Product Categories </h1>
					</div>

				";

			}else{

				echo"

					<div class = 'box' style='margin-bottom:5px;'>
						<h1> $p_cat_title </h1>
						<p> $p_cat_desc </p>
					</div>

				";

			}

			while ($row_products = mysqli_fetch_array($run_products)) {

				$pro_id = $row_products['product_id'];
				$pro_title = $row_products['product_title'];
				$pro_price = $row_products['product_price'];
				$pro_img1 = $row_products['product_img1'];
				$pro_desc = $row_products['product_desc'];

				echo "
					<div class='col-md-4 col-sm-6 center-reponsive' style='margin-top:20px;'>
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
    								<a href='details.php?pro_id=$pro_id' class='btn btn-default'>
    									View Details
    								</a>

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

	/// finish getpcatpro funtion ///

	/// begin getcatpro funtion ///

	function getcatpro(){

		global $db;

		if (isset($_GET['cat'])) {

			$cat_id = $_GET['cat'];

			$get_cat = "select * from categories where cat_id = '$cat_id'";

			$run_cat = mysqli_query($db,$get_cat);

			$row_cat = mysqli_fetch_array($run_cat);

			$cat_title = $row_cat['cat_title'];

			$cat_desc = $row_cat['cat_desc'];

			$get_cat = "select * from products where cat_id = '$cat_id'";

			$run_products = mysqli_query($db,$get_cat);

			$count = mysqli_num_rows($run_products);

			if ($count==0) {

				echo"

					<div class='box'>
						<h1> No Product Found In This Categories </h1>
					</div>

				";

			}else{

				echo"

					<div class='box'>
						<h1> $cat_title </h1>
						<p> $cat_desc </p>
					</div>

				";

			}

			while ($row_products = mysqli_fetch_array($run_products)) {

				$pro_id = $row_products['product_id'];
				$pro_title = $row_products['product_title'];
				$pro_price = $row_products['product_price'];
				$pro_img1 = $row_products['product_img1'];
				$pro_desc = $row_products['product_desc'];

				echo "

					<div class='col-md-4 col-sm-6 center-reponsive' style='margin-top:20px;'>
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
    								<a href='details.php?pro_id=$pro_id' class='btn btn-default'>
    									View Details
    								</a>

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

	// finish getcatpro funtion ///
 ?>