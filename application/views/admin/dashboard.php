<!DOCTYPE html>
<html>
<head>
	<title>Dashboard - Daily Bazar</title>
	<?php $this->load->view('home/css-file'); ?>
	<style type="text/css">
		body{background: #f2f2f2;}
		#order_dropdown,#product_dropdown{width: 200px!important;padding-top: 8px;padding-bottom: 8x;}
		#category_dropdown,#customer_dropdown{width: 230px!important;padding-top: 8px;padding-bottom: 8x;}
		#order_dropdown a,#category_dropdown a,#product_dropdown a,#customer_dropdown a{color: grey;font-size: 14x;font-weight: 500;}
		#top_sold_products li{border-bottom: 1px dashed silver;padding: 10px;}
		#top_sold_products li:hover{background: rgba(0,0,0,0.1);}

	</style>
</head>
<body>
	<!-- body section -->
	<?php $this->load->view('admin/topbar'); ?>
	<!-- 4 card section -->
	<div class="row" style="margin-top: 10px;margin-bottom: 0px;">
		<div class="col l3 m4 s12">
			<div class="card" style="background: #884dff;">
				<div class="card-content">
					<h6 style="font-weight: 500;font-size: 15px;color: white;">Order's<span class="right"><span class="fa fa-ellipsis-v dropdown-trigger" data-target="order_dropdown" style="cursor: pointer;color: white;"></span></span></h6>
					<h5 style="margin-top: 25px;color: white;"><b><span id="show_orders">0</span></b><span class="right"><span class="fa fa-shopping-cart white-text"></span></span></h5>
					<h6 style="font-size: 14px;color: white;"><span id="show_orders_heading">Last 30 Days</span></h6>
					<!-- order dropdown -->
					<ul class="dropdown-content" id="order_dropdown">
						<li><a href="#!" onclick="count_orders('today')">Today Order</a></li>
						<li><a href="#!" onclick="count_orders('yesterday')">Privious Day Order</a></li>
						<li><a href="#!" onclick="count_orders('last_30_days')">Last 30 Days Orders</a></li>
						<div class="divider"></div>
						<li><a href="#!" onclick="count_orders('all')">All Orders</a></li>
					</ul>
					<!-- order dropdown -->
				</div>
			</div>
		</div>
		<div class="col l3 m4 s12">
			<div class="card" style="background: #ffaa00;">
				<div class="card-content">
					<h6 style="font-weight: 500;font-size: 15px;color: white;">Categories<span class="right"><span class="fa fa-ellipsis-v dropdown-trigger" data-target="category_dropdown" style="cursor: pointer;color: white;"></span></span></h6>
					<h5 style="margin-top: 25px;color: white;"><b><span id="show_categories">0</span></b><span class="right"><span class="fa fa-list-alt white-text"></span></span></h5>
					<h6 style="font-size: 14px;color: white;"><span id="show_categories_heading">Last 30 Days</span></h6>
					<!-- category dropdown -->
					<ul class="dropdown-content" id="category_dropdown">
						<li><a href="#!" onclick="count_categories('today')">Today Category</a></li>
						<li><a href="#!" onclick="count_categories('yesterday')">Privious Day Category</a></li>
						<li><a href="#!" onclick="count_categories('last_30_days')">Last 30 Days Categories</a></li>
						<div class="divider"></div>
						<li><a href="#!" onclick="count_categories('all')">All Categories</a></li>
					</ul>
					<!-- category dropdown -->
				</div>
			</div>
		</div>
		<div class="col l3 m4 s12">
			<div class="card" style="background: #99e600;">
				<div class="card-content">
					
					<h6 style="font-weight: 500;font-size: 15px;color: white;">Products<span class="right"><span class="fa fa-ellipsis-v dropdown-trigger" data-target="product_dropdown" style="cursor: pointer;color: white;"></span></span></h6>
					<h5 style="margin-top: 25px;color: white;"><b><span id="show_products">0</span></b><span class="right"><span class="fa fa-cubes white-text"></span></span></h5>
					<h6 style="font-size: 14px;color: white;"><span id="show_products_heading">Last 30 Days</span></h6>
					<!-- product dropdown -->
					<ul class="dropdown-content" id="product_dropdown">
						<li><a href="#!" onclick="count_products('today')">Today Product</a></li>
						<li><a href="#!" onclick="count_products('yesterday')">Privious Day Product</a></li>
						<li><a href="#!" onclick="count_products('last_30_days')">Last 30 Days Products</a></li>
						<div class="divider"></div>
						<li><a href="#!" onclick="count_products('all')">All Products</a></li>
					</ul>
					<!-- product dropdown -->
					
				</div>
			</div>
		</div>
		<div class="col l3 m4 s12">
			<div class="card" style="background: #4d4dff;">
				<div class="card-content">
					<h6 style="font-weight: 500;font-size: 15px;color: white;">Customers<span class="right"><span class="fa fa-ellipsis-v dropdown-trigger" data-target="customer_dropdown" style="cursor: pointer;color: white;"></span></span></h6>
					<h5 style="margin-top: 25px;color: white;"><b><span id="show_users">0</span></b><span class="right"><span class="fa fa-users white-text"></span></span></h5>
					<h6 style="font-size: 14px;color: white;"><span id="show_users_heading">Last 30 Days</span></h6>
					<!-- customer dropdown -->
	               <ul class="dropdown-content" id="customer_dropdown">
						<li><a href="#!" onclick="count_users('today')">Today Customers</a></li>
						<li><a href="#!" onclick="count_users('yesterday')">Privious Day Customers</a></li>
						<li><a href="#!" onclick="count_users('last_30_days')">Last 30 Days Customers</a></li>
						<div class="divider"></div>
						<li><a href="#!" onclick="count_users('all')">All Customers</a></li>
				   </ul>
				<!-- customer dropdown -->
				</div>
			</div>
		</div>
	</div>
	
	<!-- 4 card section -->
	<!-- 2 card section -->
	<div class="row">
		<div class="col l7 m7 s12">
			<div class="card">
				<div class="card-content">
					<div id="chartContainer" style="height: 300px; width: 100%;"></div>
				</div> 
			</div>
		</div>
		<div class="col l5 m5 s12">
			<div class="card">
				<div class="card-content">
					<h6>Top Products Sold</h6>
					<ul id="top_sold_products">
						<?php if(count($top_sold_products)): 
							foreach($top_sold_products as $t_s_pro): ?>
						<li>
							<h6 style="font-size: 14px;font-weight: 500;"><a href="<?= base_url('home/product_detail/'.$t_s_pro->id); ?>" target="_blank" style="color: black;"><?= $t_s_pro->product_title; ?></a></h6><h6 style="font-size: 15px;"><span style="font-weight: 800;font-size: 14px;"> &#2547; </span>&nbsp;<?= number_format($t_s_pro->price); ?><span class="right"><b>Units- <?= $t_s_pro->count_sales; ?></b></h6>
						</li>
					    <?php endforeach; 
					    else: ?>
					    <?php endif; ?>
					</ul>
				</div> 
			</div>
		</div>
	</div>
	<!-- 2 card section -->
	<!-- body section -->
	<?php $this->load->view('home/js-file'); ?>
	<?php $this->load->view('admin/custom_js'); ?>

</body>
</html>
