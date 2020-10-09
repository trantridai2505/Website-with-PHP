<div class="card">
	<div class="card-header box">
		<center>
			<img src="../images/products/face2.jpg" alt="" style="width: 200px;height: 200px;">
			<h5 style="margin-top: 20px;">Name: Miss CuBé</h5>
		</center>
	</div>
	<div class="card-body">
		<ul class="nav-pills flex-column nav">
			<li class="">
				<a class="nav-link <?php if(isset ($_GET['my_orders'])){ echo "active"; } ?>" href="my_account.php?my_orders">
					<i class="fa fa-list"></i> My Orders
				</a>
			</li>

			<li class="">
				<a class="nav-link <?php if(isset ($_GET['pay_offline'])){ echo "active"; } ?> " href="my_account.php?pay_offline">
					<i class="fas fa-bolt"></i> Pay Offline
				</a>
			</li>

			<li class="">
				<a class="nav-link <?php if(isset ($_GET['edit_account'])){ echo "active"; } ?>" href="my_account.php?edit_account">
					<i class="fa fa-edit"></i> Edit Account
				</a>
			</li>

			<li class="">
				<a class="nav-link <?php if(isset ($_GET['change_pass'])){ echo "active"; } ?>" href="my_account.php?change_pass">
					<i class="fa fa-user"></i> Change Password
				</a>
			</li>

			<li class="">
				<a class="nav-link <?php if(isset ($_GET['delete_account'])){ echo "active"; } ?>" href="my_account.php?delete_account">
					<i class="fa fa-trash"></i> Delete Account
				</a>
			</li>

			<li>
				<a class="nav-link" href="logout.php">
					<i class="fas fa-sign-out-alt"></i> Log Out
				</a>
			</li>



		</ul>
	</div>
</div>


<!--<table class="table table-bordered">
	<thead>
		<tr>
			<th>
				<center>
					<img src="../images/products/face2.jpg" alt="" style="width: 200px;height: 200px;">
					<h5>Name: Miss CuBé</h5>
				</center>
			</th>
		</tr>
	</thead>
	<tbody>
		<tr>
			<td></td>
		</tr>
	</tbody>
</table> -->







