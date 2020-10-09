<?php
	$active='Home';
	include("includes/header.php");

 ?>

	<div id="carouselExampleIndicators" class="carousel slide coverindex " data-ride="carousel"> <!--Slider Begin -->
			<ol class="carousel-indicators">
    			<li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    			<li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    			<li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
			</ol>
			<div class="carousel-inner">
    			<?php

    			$get_slides = "select * from slider LIMIT 0,1";

    			$run_slides = mysqli_query($con,$get_slides);

    			while($row_slides = mysqli_fetch_array($run_slides)){

    				$slide_name = $row_slides['slide_name'];
    				$slide_image = $row_slides['slide_image'];
    				echo "
    					<div class='carousel-item active'>
    						<img class='d-block w-100' src='admin/slides_images/$slide_image'>
    						<div class='carousel-caption d-none d-md-block'>
    							<h5 class='animate__animated animate__bounceInRight' style='animation-delay: 1s'>Nikon</h5>
    							<p class='animate__animated animate__bounceInLeft' style='animation-delay: 2s'>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
    								tempor incididunt ut labore et dolore magna aliqua.</p>
    							<p class='animate__animated animate__bounceInRight' style='animation-delay: 3s'><a href='#'>More Info</a></p>
    						</div>
    					</div>
    				";
    			}

    			$get_slides = "select * from slider LIMIT 1,1";

    			$run_slides = mysqli_query($con,$get_slides);

    			while($row_slides = mysqli_fetch_array($run_slides)){

    				$slide_name = $row_slides['slide_name'];
    				$slide_image = $row_slides['slide_image'];
    				echo "
    					<div class='carousel-item'>
    						<img class='d-block w-100' src='admin/slides_images/$slide_image'>
    						<div class='carousel-caption d-none d-md-block'>
    							<h5 class='animate__animated animate__slideInDown' style='animation-delay: 1s'>Nikon</h5>
    							<p class='animate__animated animate__fadeInUp' style='animation-delay: 2s'>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quos, beatae.</p>
    							<p class='animate__animated animate__zoomIn' style='animation-delay: 3s'><a href='#'>More Inf</a></p>
    						</div>
    					</div>
    				";
    			}

    			$get_slides = "select * from slider LIMIT 2,1";

    			$run_slides = mysqli_query($con,$get_slides);

    			while($row_slides = mysqli_fetch_array($run_slides)){

    				$slide_name = $row_slides['slide_name'];
    				$slide_image = $row_slides['slide_image'];
    				echo "
    					<div class='carousel-item'>
    						<img class='d-block w-100' src='admin/slides_images/$slide_image'>
    						<div class='carousel-caption d-none d-md-block'>
    							<h5 class='animate__animated animate__zoomIn' style='animation-delay: 1s'>Nikon</h5>
    							<p class='animate__animated animate__fadeInLeft' style='animation-delay: 2s' >Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quos, beatae.</p>
    							<p class='animate__animated animate__zoomIn' style='animation-delay: 3s' ><a href='#'>More Info</a></p>
    						</div>
    					</div>
    				";
    			}

    			?>
			</div>
			<a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    			<span class="carousel-control-prev-icon" aria-hidden="true"></span>
    			<span class="sr-only">Previous</span>
			</a>
			<a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    			<span class="carousel-control-next-icon" aria-hidden="true"></span>
    			<span class="sr-only">Next</span>
			</a>
	</div>  <!--Slider Finish -->

	<div id="advantages"> <!-- Advantages Begin -->
		<div class="container">
			<div class="same-height-row row">
				<div class="col-sm-4">
					<div class="box same-height">
						<div class="icon">
							<i class="fa fa-heart"></i>
						</div>
						<h3><a href="#">Best Offer</a></h3>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cumque repellendus ipsam sapiente a architecto eum, ab molestiae consequuntur, ea doloremque?</p>
					</div>
				</div>
				<div class="col-sm-4">
					<div class="box same-height">
						<div class="icon">
							<i class="fa fa-tag"></i>
						</div>
						<h3><a href="#">Best Prices</a></h3>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Pariatur nihil blanditiis sunt cumque non obcaecati cupiditate tenetur saepe itaque explicabo.</p>
					</div>
				</div>
				<div class="col-sm-4">
					<div class="box same-height">
						<div class="icon">
							<i class="fa fa-thumbs-up"></i>
						</div>
						<h3><a href="#">100% Original</a></h3>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cumque repellendus ipsam sapiente a architecto eum, ab molestiae consequuntur, ea doloremque?</p>
					</div>
				</div>
			</div>
		</div>
	</div>  <!-- Advantages Finish -->

	<div id="hot">
		<div class="box">
			<div class="container">
				<div class="col-md-12">
					<h2>
						Our Latest Products
					</h2>
				</div>
			</div>
		</div><!-- Hot Begin -->
	</div>   <!-- Hot Finish -->

	<div id="content" class="container" style="margin-top: 5%;">
		<div class="row justify-content-center">

			<?php

				getPro();

			 ?>
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