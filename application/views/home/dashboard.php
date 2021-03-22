<!DOCTYPE html>
<html>
<head>
	<title>Dashboard - Daily Bazar</title>
	<?php $this->load->view('home/css-file'); ?>
	<style type="text/css">
		body{background: #f2f2f2;}
		
	</style>
</head>
<body>
	<!-- body section -->
	<?php $this->load->view('home/header'); ?>
	<!-- cart section -->
	<h4 style="padding-left: 10px;font-size: 25px;">Welcome to User Dashboard</h4>
	<div class="row">
		<?php if($msg = $this->session->flashdata('success')): ?>
	<!-- message section -->
	<div class="card">
		<div class="card-content" style="padding: 10px;padding-left: 15px;">
			<h6 style="font-weight: 500;font-size: 15px;margin-top: 5px;"><span class="fa fa-check-circle green-text"></span>&nbsp;<?= $msg; ?></h6>
		</div>
	</div>
	<!-- message section -->
	<?php endif; ?>

	<?php if($msg = $this->session->flashdata('error')): ?>
	<!-- message section -->
	<div class="card">
		<div class="card-content" style="padding: 10px;padding-left: 15px;">
			<h6 style="font-weight: 500;font-size: 15px;margin-top: 5px;"><span class="fa fa-exclamation-triangle red-text"></span>&nbsp;<?= $msg; ?></h6>
		</div>
	</div>
	<!-- message section -->
	<?php endif; ?>
		<div class="col l3 m4 s12">
			<!-- card section -->
			<div class="card" style="background: #884dff;">
				<div class="card-content">
				<div class="row" style="margin-bottom: 0px;">
					<div class="col l4 m4 s4">
						<h4><span class="fa fa-shopping-cart" style="color: white;"></span></h4>
					</div>
					<div class="col l8 m8 s8">
						<h6 class="right-align" style="color: white;font-size: 14px;">My Cart</h6>
						<h4 class="right-align" style="margin-top: 0px;color: white;"><b><?= count($cart_products); ?></b></h4>
					</div>
				</div>	
				</div>
				<div class="card-action">
					<a  style="color: white;" href="<?= base_url('home/carts'); ?>">View Cart</a>
				</div>
			</div>
			<!-- card section -->

		</div>
		<div class="col l3 m4 s12">
			<!-- card section -->
			<div class="card" style="background: #ffaa00;">
				<div class="card-content">
				<div class="row" style="margin-bottom: 0px;">
					<div class="col l4 m4 s4">
						<h4><span class="fa fa-address-card" style="color: white;"></span></h4>
					</div>
					<div class="col l8 m8 s8">
						<h6 class="right-align" style="color: white;font-size: 14px;">My Order's</h6>
						<h4 class="right-align" style="margin-top: 0px;color: white;"><b><?= count($orders); ?></b></h4>
					</div>
				</div>	
				</div>
				<div class="card-action">
					<a  style="color: white;" href="<?= base_url('home/my_orders'); ?>">View Order's</a>
				</div>
			</div>
			<!-- card section -->

		</div>
		<div class="col l3 m4 s12">
			<!-- card section -->
			<div class="card" style="background: #99e600;">
				<div class="card-content">
				<div class="row" style="margin-bottom: 0px;">
					<div class="col l4 m4 s4">
						<h4><span class="fa fa-truck" style="color: white;"></span></h4>
					</div>
					<div class="col l8 m8 s8">
						<h6 class="right-align" style="color: white;font-size: 14px;">Delivered Order's</h6>
						<h4 class="right-align" style="margin-top: 0px;color: white;"><b><?= count($delivered_orders); ?></b></h4>
					</div>
				</div>	
				</div>
				<div class="card-action">
					<a style="color: white;" href="<?= base_url('home/my_orders'); ?>">View Order's</a>
				</div>
			</div>
			<!-- card section -->

		</div>
		<div class="col l3 m4 s12">
			<!-- card section -->
			<div class="card" style="background: #4d4dff;">
				<div class="card-content">
				<div class="row" style="margin-bottom: 0px;">
					<div class="col l4 m4 s4">
						<h4><span class="fa fa-clock" style="color: white;"></span></h4>
					</div>
					<div class="col l8 m8 s8">
						<h6 class="right-align" style="color: white;font-size: 14px;">Pending Order's</h6>
						<h4 class="right-align" style="margin-top: 0px;color: white;"><b><?= count($pending_orders); ?></b></h4>
					</div>
				</div>	
				</div>
				<div class="card-action">
					<a style="color: white;" href="<?= base_url('home/my_orders'); ?>">View Order's</a>
				</div>
			</div>
			<!-- card section -->

		</div>
	</div>
<div class="container">
	<p style="text-align: center;font-size: 14px;font-weight: 500;color: grey;">DailyBazar have the super reliable shopping cart for faster order with standard security considerations.</p>
</div>
	<!-- cart section -->

	<?php $this->load->view('home/footer'); ?>
	<!-- body section -->
	<?php $this->load->view('home/js-file'); ?>

</body>
</html>
