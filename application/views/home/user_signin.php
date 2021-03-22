<!DOCTYPE html>
<html>
<head>
	<title>User sign In</title>
	<?php $this->load->view('home/css-file'); ?>
	<style type="text/css">
		body{background: #f2f2f2;}
		#input_box{border: 1px solid silver;box-shadow: none;box-sizing: border-box;padding-left: 10px;padding-right: 10px;height: 40px;border-radius: 3px;}
		textarea{border: 1px solid silver;padding: 10px;outline: none;height: 90px;resize: none;}
	</style>
</head>
<body>
	<!-- body section -->
	<?php $this->load->view('home/header'); ?>
	<!-- user sign_up form -->
	<div class="row" style="margin-top: 10px;margin-bottom: 0px;">
		<div class="col l4 m4 s12"></div>
		<div class="col l4 m4 s12">
			<!-- card section -->
			<div class="card">
				<div class="card-content">
					<?= form_open('home/user_logged_in/'.$page); ?>
					<center>
						<h5><span class="fa fa-users"></span></h5>
						<h6>SignIn Account</h6>
				    </center>
				
				<h6 style="font-size: 14px;color: grey;font-weight: 500;">Username / Email</h6>
				<input type="text" name="email" id="input_box" placeholder="Email">
				<h6 style="font-size: 14px;color: grey;font-weight: 500;">Password</h6>
				<input type="password" name="password" id="input_box" placeholder="XXXXXXXX">
				<button type="submit" class="btn waves-effect" style="background: red;width: 100%;margin-top: 10px;box-shadow: none;text-transform: capitalize;">Sign In</button>
				<h6 style="font-size: 14px;color: red;font-weight: 500;text-align: center;">I don't have an Account</h6>
				<a href="<?= base_url('home/user_signup'); ?>" class="btn waves-effect" style="background: black;width: 100%;margin-top: 10px;box-shadow: none;text-transform: capitalize;">Create an Account</a>
				<?= form_close(); ?>
			</div>
			</div>
            <!-- card section -->
        </div>
		<div class="col l4 m4 s12"></div>
	</div>
	
	<!-- user sign_up form -->
	<?php $this->load->view('home/footer'); ?>
	<!-- body section -->
	<?php $this->load->view('home/js-file'); ?>

</body>
</html>
