<!DOCTYPE html>
<html>
<head>
	<title>User sign Up</title>
	<?php $this->load->view('home/css-file'); ?>
	<style type="text/css">
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
					<?= form_open('home/user_registerd/'.$page); ?>
					<center>
						<h5><span class="fa fa-users"></span></h5>
						<h6>Create Account</h6>
				    </center>
				
				<h6 style="font-size: 14px;color: grey;font-weight: 500;">Full Name</h6>
				<input type="text" name="full_name" id="input_box" placeholder="Full Name">
				<h6 style="font-size: 14px;color: grey;font-weight: 500;">Email</h6>
				<input type="text" name="email" id="input_box" placeholder="Email Address">
				<h6 style="font-size: 14px;color: grey;font-weight: 500;">Mobile No</h6>
				<input type="text" name="mobile" id="input_box" placeholder="Mobile No">
				<h6 style="font-size: 14px;color: grey;font-weight: 500;">Password</h6>
				<input type="password" name="password" id="input_box" onkeyup="check_password()" placeholder="XXXXXXXX">
				<h6 style="font-size: 14px;color: grey;font-weight: 500;">Confirm Password</h6>
				<input type="password" name="confirm_password" onkeyup="check_password()" id="input_box" placeholder="XXXXXXXX">
				<h6 style="font-size: 14px;color: grey;font-weight: 500;">Address</h6>
				<textarea name="address" placeholder="Enter Your Address"></textarea>
				<button type="submit" class="btn waves-effect" id="btn_register_now" style="background: red;width: 100%;margin-top: 10px;box-shadow: none;text-transform: capitalize;">Register Now</button>
				<h6 style="font-size: 14px;color: red;font-weight: 500;text-align: center;">I have already Account</h6>
				<a href="<?= base_url('home/user_signin'); ?>" class="btn waves-effect" style="background: black;width: 100%;margin-top: 10px;box-shadow: none;text-transform: capitalize;">Sign In</a>
				<?= form_close(); ?>
				<h6>Notes:</h6>
				<p>Your personal data will be used to support your experience throughout this website, to manage access to your account, and for other purposes described in our </p>
				<a href="<?= base_url('home/policies'); ?>" target="_blank">Privacy Policy</a>
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
<!-- custom js -->
<script type="text/javascript">
		//check password script
		function check_password()
		{
			var password = $('input[name="password"]');
			var confirm_password = $('input[name="confirm_password"]');
			if(password.val().length >6){
				if(password.val() == confirm_password.val() || confirm_password.val() == password.val()){
					$('#btn_register_now').prop('disabled',false);
				}
				else{
					$('#btn_register_now').prop('disabled',true);
				}
			}
			else{
				$('#btn_register_now').prop('disabled',true);
			}
		}
		//check password script

</script>
</body>
</html>
