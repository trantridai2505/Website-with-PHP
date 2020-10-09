	<div id="footer">
	<div class="container">
		<div class="row">
			<div class="col-sm-6 col-md-3">

				<h4>Pages</h4>

				<ul>
					<li><a href="cart.php">Shopping Cart</a></li>
					<li><a href="contact.php">Contact Us</a></li>
					<li><a href="shop.php">Shop</a></li>
					<li><a href="customer/my_account.php">My Account</a></li>
				</ul>

				<hr>

				<h4>
					User Section
				</h4>

				<ul>
					<li><a href="checkout.php">Login</a></li>
					<li><a href="customer_register.php">Register</a></li>
				</ul>

				<hr class="hidden-md hidden-lg hidden-sm">
			</div>

			<div class="com-sm-6 col-md-3">
				<h4>Top Products</h4>
				<ul>

					<?php

						$get_p_cats = "select * from product_categories";

						$run_p_cats = mysqli_query($con, $get_p_cats);

						while ($row_p_cats = mysqli_fetch_array($run_p_cats)) {
							$p_cat_id = $row_p_cats['p_cat_id'];

							$p_cat_title = $row_p_cats['p_cat_title'];

							echo"

								<li>
									<a href='shop.php?p_cat = $p_cat_id'>
										$p_cat_title
									</a>
								</li>

							";
						}

					 ?>

				</ul>
				<hr class="hidden-md hidden-lg">
			</div>

			<div class="col-sm-6 col-md-3">
				<h4>Find Us</h4>
				<p>
					<strong>Ellia Media inc.</strong>
					<br>Cibubur
					<br>Ciracas
					<br>0818-0683-3157
					<br>trantridai2505@gmail.com
					<br><strong>MrD</strong>
				</p>
				<a href="contact.php">Check Our Contact Page</a>

				<hr class="hidden-md hidden-lg">
			</div>

			<div class="col-sm-6 col-md-3">
				<h4>Get The News</h4>
				<p class="text-muted">
					Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
					tempor incididunt ut labore et dolore magna aliqua.
				</p>
				<form action="get" method="post">
					<div class="input-group">
						<input class="form-control" type="text" name="email">
						<span class="input-group-btn">
							<input type="submit" value="Subscribe" class="btn btn-default">
						</span>
					</div>
				</form>

				<hr>

				<h4>Keep In Touch</h4>

				<p class="social">
					<a href="#" class="fab fa-facebook"></a>
					<a href="#" class="fab fa-twitter"></a>
					<a href="#" class="fab fa-instagram"></a>
					<a href="#" class="fab fa-google-plus"></a>
					<a href="#" class="fa fa-envelope"></a>
				</p>
			</div>
		</div>
	</div>
</div>

<div id="copyright">
	<div class="container">
		<div class="row">
			<p class="pull-left">&copy; 2020 Eliia Store</p>
		</div>

	</div>
</div>