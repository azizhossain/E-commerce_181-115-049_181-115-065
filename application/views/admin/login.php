<!DOCTYPE html>
<html>
<head>
	<title>Admin Log In - Daily Bazar</title>
	<?php $this->load->view('home/css-file'); ?>
	<style type="text/css">
		body{background: #f2f2f2;}
		#input_box{border: 1px solid silver;box-shadow: none;box-sizing: border-box;padding-left: 10px;padding-right: 10px;height: 40px;border-radius: 3px;}
	</style>
</head>
<body>
	<!-- body section -->
	<!-- login form -->
	<div class="row" style="margin-top: 3%;">
		<div class="col l4 m4 s12"></div>
		<div class="col l4 m4 s12">
			<!-- card section -->
			<div class="card">
				<div class="card-content">
					<h4 class="center-align" style="margin-bottom: 0px;"><span class="fa fa-users"></span></h4>
					<h5 class="center-align" style="margin-top: 0px;">Admin Login</h5>
					<h6 style="font-size: 14px;font-weight: 500;color: grey;">Username</h6>
					<input type="text" name="username" id="input_box" placeholder="Username">
					<h6 style="font-size: 14px;font-weight: 500;color: grey;">Password</h6>
					<input type="password" name="password" id="input_box" placeholder="XXXXXXXX">
					<button type="button" class="btn waves-effect waves-light" id="btn_sign_in" style="background: blue;text-transform: capitalize;width: 40%;font-weight: 500;margin-top: 10px;height: 40px;">Sign In&nbsp;&nbsp;<span class="fa fa-sign-in-alt"></span></button>
					
					
				</div>
			</div>
			<!-- card section -->
		</div>
		<div class="col l4 m4 s12"></div>
	</div>
	<!-- login form -->
	<!-- body section -->
	<?php $this->load->view('home/js-file'); ?>
	<?php $this->load->view('admin/custom_js'); ?>

</body>
</html>
