<!--<div class="middle">
	<div class="menu-sidebar">
		<li id="categories" class="item ">
			<a href="#categories" class="btn"><i class="fas fa-camera-retro"></i>Categories</a>
			<div class="smenu">
				<a href="#">Product 1</a>
				<a href="#">Product 2</a>
				<a href="#">Product 3</a>
				<a href="#">Product 4</a>
				<a href="#">Product 5</a>
			</div>
		</li>

		<li id="products" class="item">
			<a href="#products" class="btn"><i class="fas fa-camera-retro"></i>Products</a>
			<div class="smenu">
				<a href="#">Product 6</a>
				<a href="#">Product 7</a>
				<a href="#">Product 8</a>
				<a href="#">Product 9</a>
				<a href="#">Product 0</a>
			</div>
		</li>
	</div>
</div> -->

<div class="wrap-sidebar">
	<nav class="sidebar">
		<div class="textside-menu">Products</div>
		<ul class="ul-side">

			<?php
				getPCats();
			?>

		</ul>
	</nav>
	<nav class="sidebar">
		<div class="textside-menu">Categories</div>
		<ul class="ul-side">

			<?php
				getCats();
			?>

		</ul>
	</nav>
</div>





