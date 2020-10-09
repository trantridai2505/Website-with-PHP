<?php
	$active='Cart';
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
						Cart
					</li>
				</ul> <!-- Breadcrumb Finish -->
			</div>  <!-- col-md-12 Finish -->

			<div class="row"> <!-- row Begin -->
				<div id="cart" class="col-md-9"> <!-- col-md-9 Begin -->
					<div class="box"> <!-- Box Begin -->
						<form action="cart.php" method="post" enctype="multipart/formdata">
							<h1>Shopping Cart</h1>
							<p class="text-muted">You Currently Have 3 Item(s) In Your Cart</p>

							<div class="table-responsive"> <!-- Table-reponsive Begin -->
								<table class="table"> <!-- Table Begin -->
									<thead> <!-- Thead Begin -->
										<tr>
											<th colspan="2">Product</th>
											<th>Quantity</th>
											<th>Unit Price</th>
											<th colspan="1">Delete</th>
											<th colspan="2">Sub-Total</th>
										</tr>
									</thead> <!-- Thead Finish -->
									<tbody> <!-- Tbody Begin -->
										<tr>
											<td>
												<img class="img-responsive" src="images//products/product1.jpg" alt="Product">
											</td>
											<td>
												<a href="#">Nikon</a>
											</td>
											<td>
												1
											</td>
											<td>
												$400.00
											</td>
											<td>
												<input type="checkbox" name="remove[]">
											</td>
											<td>
											$400.00
											</td>
										</tr>
									</tbody> <!-- Tbody Finish -->

									<tbody> <!-- Tbody Begin -->
										<tr>
											<td>
												<img class="img-responsive" src="images//products/product2.jpg" alt="Product">
											</td>
											<td>
												<a href="#">Nikon</a>
											</td>
											<td>
												1
											</td>
											<td>
												$400.00
											</td>
											<td>
												<input type="checkbox" name="remove[]">
											</td>
											<td>
												$400.00
											</td>
										</tr>
									</tbody> <!-- Tbody Finish -->

									<tbody> <!-- Tbody Begin -->
										<tr>
											<td>
												<img class="img-responsive" src="images//products/product3.jpg" alt="Product">
											</td>
											<td>
												<a href="#">Nikon</a>
											</td>
											<td>
												1
											</td>
											<td>
												$400.00
											</td>
											<td>
												<input type="checkbox" name="remove[]">
											</td>
											<td>
												$400.00
											</td>
										</tr>
									</tbody> <!-- Tbody Finish -->

									<tfoot> <!-- Tfoot Begin -->
										<tr>
											<th colspan="5">Total</th>
											<th colspan="2">$1600.00</th>
										</tr>
									</tfoot> <!-- Tfoot Finish -->
								</table>  <!-- table Finish -->
							</div> <!-- Table-reponsive Finish -->

							<div class="box-footer"> <!-- box-footer Begin -->
								<div class="row">
									<div class=" col-md-6 pull-md-4">
										<a href="index.php" class="btn btn-primary">
											<i class="fa fa-chevron-left"></i> Continue Shopping
										</a>
									</div>

									<div class=" col-md-6 push-md-4" >
										<button type="submit" name="update" value="Update Cart" class="btn btn-primary" style="margin-left: 60px;">
											<i class="fa fa-refresh"></i> Update Cart
										</button>
										<a href="checkout.php" class="btn btn-primary" style="float: right;">
										Proceed Checkout <i class="fa fa-chevron-right"></i>
										</a>
									</div>
								</div>
							</div> <!-- box-footer Finish -->

						</form>
					</div> <!-- Box Finish -->
				</div> <!-- col-md-9 Finish -->

				<div class="col-md-3"> <!-- col-md-3 Begin -->
					<div id="order-summary" class="box"> <!-- order-summary Begin -->
						<div class="box-header">
							<h3>Order Summary</h3>
						</div>

						<p class="text-muted">
							Shipping And Additional Costs Are Calculated Based On Value You Have Entered.
						</p>

						<div class="table-responsive">
							<table class="table">
								<tbody>
									<tr>
										<td>Order Sub-Total</td>
										<th>$1600.00</th>
									</tr>
									<tr>
										<td>Shipping And Handling</td>
										<td>$0</td>
									</tr>
									<tr>
										<td>Tax</td>
										<td>$0</td>
									</tr>
									<tr class="total">
										<td>Total</td>
										<td>$1600.00</td>
									</tr>
								</tbody>
							</table>
						</div>
					</div> <!-- order-summary Finish -->
				</div> <!-- col-md-3 Finish -->
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