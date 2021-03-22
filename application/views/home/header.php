<style type="text/css">
	#topbar{background: #b30000;padding: 2px;}
	#my_account_dropdown{width:12%!important;padding-top: 10px;padding-bottom: 10px;}
	#my_account_dropdown li a{color: grey;font-size: 14px;}
	#search_bar{background: white;}
	#search_bar #logo{font-size: 30px;font-weight: 700;color: white;}
	#search_form{display: flex;}
	#search_form li:first-child{width: 500px;padding-top: 25px;}
	#search{background: white;padding-left: 10px;padding-right: 10px;box-shadow: none;box-sizing: border-box;border: 2px solid #8EC640;border-right: none;height: 40px;margin-bottom: 2px;font-size: 14px;}
		nav{background: #b30000;height: 40px;line-height: 40px;box-shadow: none;}
		#show_product_list{background: white;margin-top: 0px;position: absolute;z-index: 99;width: 500px;display: none;}
		#show_product_list a{display: block;font-size: 14px;color: grey;font-weight: 500;padding-left: 15px;line-height: 35px;}
		#show_product_list a:hover{background: rgba(0,0,0,0.05);}
		
</style>
<!-- topbar section -->
<div id="topbar">
	<h6 style="color: white;font-size: 14px;font-weight: 500;margin-top: 5px;padding-left: 15px;"><span class="fa fa-phone-square"></span>&nbsp;+8807134705100&nbsp;&nbsp;<span class="fa fa-envelope"></span>&nbsp;azizmh901@gmail.com&nbsp;&nbsp;<span class="right" style="padding-right: 15px;"><a href="#!" class="dropdown-trigger" data-target="my_account_dropdown" style="color: white;"><span class="fa fa-user"></span>&nbsp;My Account</a></span><br/><span class="fa fa-phone-square"></span>&nbsp;+8801757557041&nbsp;&nbsp;<span class="fa fa-envelope"></span>&nbsp;rehenaakther260@gmail.com</h6>
	<!-- my account dropdown -->
	<ul class="dropdown-content" id="my_account_dropdown">
		<?php if($this->session->userdata('email') == "" && $this->session->userdata('password') == ""): ?>
		<li><a href="<?= base_url('home/user_signup'); ?>" class="waves-effect"><span class="fa fa-user-plus"></span>&nbsp;Register</a></li>
		<li><a href="<?= base_url('home/user_signin'); ?>" class="waves-effect"><span class="fa fa-sign-in-alt"></span>&nbsp;Login</a></li>
		<?php else: ?>
			<li><a href="<?= base_url('home/dashboard'); ?>" class="waves-effect"><span class="fa fa-home"></span>&nbsp;Dashboard</a></li>
			<li><a href="<?= base_url('home/carts'); ?>" class="waves-effect"><span class="fa fa-shopping-cart"></span>&nbsp;Carts</a></li>
			<li><a href="<?= base_url('home/my_orders'); ?>" class="waves-effect"><span class="fa fa-truck"></span>&nbsp;My Order's</a></li>
			<li><a href="<?= base_url('home/logout'); ?>" class="waves-effect"><span class="fa fa-sign-out-alt"></span>&nbsp;Logout</a></li>
		<?php endif; ?>
	</ul>
	<!-- my account dropdown -->
</div>
<!-- topbar section -->
<!-- searchbar section -->
<div id="search_bar">
<div class ="row" style="margin-bottom: 0px;">
	<div class="col l3 m3 s12">
		<h6 style="margin-top: 22px;padding-left: 30px;"><a href="<?= base_url('index'); ?>" id="logo"><img src="<?= base_url('assects/image/logo.png'); ?>" class="responsive-img" style="width: 90px;height: 90px;border: 0px  solid silver;"></a></h6>
	</div>
	<div class="col l6 m6 s12">
		<!-- search products form -->
		<ul id="search_form">
			<li>
				<input type="text" name="search" id="search" onkeyup="search_products(this.value)" placeholder="Search Your Products" autocomplete="off">
				<!-- product list section -->
				<div id="show_product_list">
					<a href="">product list</a>
					<a href="">product list</a>
					<a href="">product list</a>
					<a href="">product list</a>
				</div>
				<!-- product list section -->
			</li>
			<li style="padding-top: 25px;">
				<button type="submit" class="btn waves-effects waves-lights" style="box-shadow: none;background: #8EC640;text-transform: capitalize;height: 40px;font-weight: 500;"><span class="fa fa-search"></button>
			</li>
		</ul>
		<!-- search products form -->

	</div>
    <div class="col l3 m3 s12">
    	<h6 style="font-size: 14px;color: #b30000;text-align: center;line-height: 18px;font-weight: 500;margin-top: 15px;padding-top: 25px;"><a href="<?= base_url('home/carts'); ?>" style="color: #b30000;font-size: 14px;color: #b30000;"><span class="fa fa-shopping-cart" style="font-size: 30px;"></span>&nbsp;<br/><span id="total_products">0</span> Items - <span style="font-size: 14px;font-weight: 800"> &#2547; </span><span id="total_amount">0</span></a></h6>
    </div>
</div> 
</div>
<!-- searchbar section -->
<!-- menu bar section -->
<nav>
	<div class="nav-wrapper">
		<!-- left side menu -->
		<ul class="left">
			<li><a href="<?= base_url('home/index'); ?>">Home</a></li>
			<li><a href="<?= base_url('home/company_profile'); ?>">Company Profile</a></li>
			<li><a href="<?= base_url('home/policies'); ?>">Our Policies</a></li>
			<li><a href="<?= base_url('home/terms_condition'); ?>">Terms & Conditions</a></li>
			<li><a href="<?= base_url('home/our_outlets'); ?>">Our Outlets</a></li>
			<li><a href="<?= base_url('home/contact_us'); ?>">Contact Us</a></li>
		</ul>
		
		<!-- left side menu -->
	</div>
</nav>

<!-- menu bar section -->