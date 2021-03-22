<style type="text/css">
	nav{background: #b30000;height: 45px;line-height: 45px;}
	nav .brand-logo{font-weight: 500;font-size: 20px;}
	.collapsible-header{padding-left: 30px!important;font-weight: 500;font-size: 14px;}
	.collapsible-header:hover{background: #4CAF50!important;}
	#side_manu li a:hover{background: #4CAF50;}
</style>
<!-- navbar section -->
	<nav>
	<div class="nav-wrapper">
		<a href="<?= base_url('admin/dashboard'); ?>" class="brand-logo">&nbsp;Admin Panel</a>
		<!-- right section -->
		<ul class="right">
			<li><a href="#!" class="sidenav-trigger" data-target="side_manu" style="display: block;height: 45px;line-height: 45px;"><span class="fa fa-bars"></span>&nbsp;Menu</a></li>
		</ul>
		<!-- right section -->
	</div>
    </nav>
	<!-- navbar section -->
	<!-- side menu section -->
	<ul class="sidenav collapsible" id="side_manu">
		<li><a href="<?= base_url('admin/dashboard'); ?>">Dashboard</a></li>
		<li>
			<div class="collapsible-header">Categories</div>
			<div class="collapsible-body">
				<ul>
					<li><a href="<?= base_url('admin/add_category'); ?>">Add Category</a></li>
					<li><a href="<?= base_url('admin/manage_category'); ?>">Manage Categories</a></li>
				</ul>
			</div>
		</li>
		<li>
			<div class="collapsible-header">Products</div>
			<div class="collapsible-body">
				<ul>
					<li><a href="<?= base_url('admin/add_product'); ?>">Add Product</a></li>
					<li><a href="<?= base_url('admin/manage_products'); ?>">Manage Products</a></li>
				</ul>
			</div>
		</li>
		<li>
			<div class="collapsible-header">Orders</div>
			<div class="collapsible-body">
				<ul>
					<li><a href="<?= base_url('admin/pending_orders'); ?>">Pending Orders</a></li>
					<li><a href="<?= base_url('admin/delivered_orders'); ?>">Delivered Orders</a></li>
					<li><a href="<?= base_url('admin/manage_orders'); ?>">Manage Orders</a></li>
				</ul>
			</div>
		</li>
		<li>
			<div class="collapsible-header">Sales</div>
			<div class="collapsible-body">
				<ul>
					<li><a href="<?= base_url('admin/today_sales'); ?>">Today Sales</a></li>
					<li><a href="<?= base_url('admin/all_sales'); ?>">All Time Sales</a></li>
				</ul>
			</div>
		</li>
		<li>
			<div class="collapsible-header">Customers</div>
			<div class="collapsible-body">
				<ul>
					
					<li><a href="<?= base_url('admin/manage_customers'); ?>">Manage Customers</a></li>
				</ul>
			</div>
		</li>
		<li><a href="<?= base_url('admin/signout'); ?>">Sign Out</a></li>
	</ul>
	<!-- side menu section -->
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