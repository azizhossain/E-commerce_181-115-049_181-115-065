<!DOCTYPE html>
<html>
<head>
	<title>Place Order - Daily Bazar</title>
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
	<div class="container">
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
			<!-- card section -->
		<div class="card">
			<div class="card-content" style="padding: 10px;border-bottom: 1px solid silver;">
					<h6 style="font-size: 15px;color: grey;font-weight: 500;margin-top: 5px;">User Login & Register</h6>
			</div>
			<?php if($this->session->userdata('email') == ""): ?>
			<div class="card-content">
			<!-- button section -->
				<div class="row" style="margin-top: 18px;margin-bottom: 0px;">
					<div class="col 16 m6 s6">
						<a href="<?= base_url('home/user_signup/cart'); ?>" class="btn waves-effect waves-light" style="font-size: 12px;text-transform: capitalize;font-weight: 500;width: 100%;background: #663300;box-shadow: none;height: 40px;">Register Account</a>
					</div>
					<div class="col 16 m6 s6">
						<a href="<?= base_url('home/user_signin/cart'); ?>" class="btn waves-effect waves-light" style="font-size: 12px;text-transform: capitalize;font-weight: 500;width: 100%;background: black;box-shadow: none;height: 40px;">Login Acoount</a>
					</div>
				
				</div>
			<!-- button section -->
			</div>
			<?php endif; ?>
				<div class="card-content" style="padding: 10px;border-bottom: 1px solid silver;">
					<h6 style="font-size: 15px;color: grey;font-weight: 500;margin-top: 5px;">User Shipping Address</h6>
				</div>
				<?php if($this->session->userdata('email') != "" && $this->session->userdata('password') != ""): ?>
				<?php $this->load->helper('user');
				 $user_detail = get_user_details($this->session->userdata('email'),$this->session->userdata('password'));
				 $check_address = $this->db->get_where('ms_temp_address',['user_id'=>$user_detail[0]->id])->result();
				 if(count($check_address)): 
				 $address = $check_address[0]->address; 
				 else: 
				 	$address = ""; ?>
				 	<div class="card-content">
					<?= form_open('home/save_temp_address/'.$user_detail[0]->id); ?>
					<h6 style="font-size: 14px;font-weight: 500;color: grey;">Shipping Address</h6>
					<textarea name="shipping_address"><?= $address; ?></textarea>
					<button type="submit" class="btn waves-effect waves-light" style="background: black;text-transform: capitalize;margin-top: 10px;">Save Address</button>
					<?= form_close(); ?>
				</div>
				 <?php endif;?>
				
			<?php endif; ?>
			<div class="card-content" style="padding: 10px;border-bottom: 1px solid silver;">
					<h6 style="font-size: 15px;color: grey;font-weight: 500;margin-top: 5px;">Complete Purchase</h6>
				</div>
				<div class="card-content">
					<?php 
					$t_amount = 0;
					if(count($products)):
						foreach($products as $product): 
							$t_amount += ($product->quantity * $product->rate); ?>
					<h6 style="font-size: 14px;color: grey;margin-top: 0px;"><?= $product->product_name; ?><b><span class="right"><span style="font-weight: 800;font-size: 14px;"> &#2547; </span>&nbsp;<?php $sum_amount =  $product->rate * $product->quantity; 
					echo number_format($sum_amount); ?></span></b></h6>
				<?php endforeach; 
				else: 
					$t_amount = 0; ?>
					<h6 style="text-align: center;">Products Not Found.</h6>
				<?php endif; ?>
				<h6>Grand Total<span class="right"><span style="font-weight: 800;font-size: 14px;"> &#2547; </span>&nbsp;<?= number_format($t_amount); ?></span></h6>
				<a href="<?= base_url('home/complete_purchased'); ?>" class="btn btn waves-effect waves-light" style="background: black;text-transform: capitalize;margin-top: 15px;">Complete Purchased</a>
				</div>
		</div>
            <!-- card section -->
    </div>
	<!-- user sign_up form -->
	<?php $this->load->view('home/footer'); ?>
	<!-- body section -->
	<?php $this->load->view('home/js-file'); ?>

</body>
</html>
