<!DOCTYPE html>
<html>
<head>
	<title>Cart(2) - Daily Bazar</title>
	<?php $this->load->view('home/css-file'); ?>
	<style type="text/css">
		body{background: #f2f2f2}
		.btn-flat:hover{background: #4CAF50;color: white;}
		#input-box{border: 1px solid silver;box-shadow: none;box-sizing: border-box;padding-left: 10px;padding-right: 10px;height: 40px;border-radius: 3px;}
		#quantity_form{display: flex;}
		#quantity_form li{margin: 3px;}
	</style>
</head>
<body>
<!-- body section -->
<?php $this->load->view('home/header'); ?>
<!-- cart section -->
<div class="row" style="margin-bottom: 0px;margin-top: 10px;">
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
	<div class="col l8 m7 s12">
		<!-- card section -->
		<div class="card">
		<div class="card-content" style="padding: 10px; border-bottom: 1px solid rgba(0,0,0,0.1);">
		<h5 style="font-size: 20px;margin-top: 5px;">My Cart(<?= count($products); ?>)</h5>
	</div>
	<div class="card-content">
		<?php if(count($products)):
		foreach($products as $pro):
		$product_detail = get_product_detail($pro->product_id); ?>
		<div class="row">
			<div class="col 13 m3 s12">
				<img src="<?= base_url().'uploads/product_image/'.$product_detail[0]->image; ?>" class="responsive-img">
				<!-- quantity form -->
				<ul id="quantity_form">
					<li>
						<button type="button" class="btn btn-floating" onclick="update_quantity('sub','<?= $pro->product_id; ?>','<?= $pro->id; ?>')" style="background: #4CAF50;box-shadow: none;">-
						</button>
					</li>
					<input type="text" name="quantity_<?= $pro->id; ?>" id="input-box" value="<?= $pro->quantity; ?>" readonly>
					<li>
						<button type="button" class="btn btn-floating" onclick="update_quantity('add','<?= $pro->product_id; ?>','<?= $pro->id; ?>')" style="background: #4CAF50;box-shadow: none;">+	
						</button>
					</li>
				</ul>
				<!-- quantity form -->

			</div>
			<div class="col 19 m9 s12">
				<h6 style="font-size: 15px;font-weight: 500;"><?= $pro->product_name; ?></h6>
				<h5 style="font-size: 20px;"><b><span style="font-weight: 800;font-size: 20px;"> &#2547; </span>&nbsp;<?php $calculate =  $pro->quantity * $pro->rate;
				echo number_format($calculate); ?></b></h5>
				<h6 style="font-size: 14px;color: silver;"><?= $pro->quantity; ?> Item x <?= number_format($pro->rate); ?></h6>
				<a href="<?= base_url('home/product_detail/'.$pro->product_id); ?>" class="btn btn-flat" target="_blank">View Item</a>
				<a href="<?= base_url('home/remove_product/'.$pro->product_id); ?>" class="btn btn-flat">Remove Item</a>
			</div>
			
		</div>
		<?php endforeach;
		else: ?>
			<center>
				<h3><span class="fa fa-shopping-cart" style="color: #663300;"></span></h3>
				<h6 style="font-size: 14px;font-weight: 500;">Your Cart Is Empty ? <a href="<?= base_url('index'); ?>"> Start Shopping Now</a></h6>
			</center>
		<?php endif; ?>
	</div>
</div>
<!-- card section -->
</div>
<div class="col l4 m5 s12">
	<!-- card section -->
	<div class="card">
		<div class="card-content" style="padding: 10px; border-bottom: 1px solid rgba(0,0,0,0.1);">
		<h5 style="font-size: 20px;margin-top: 5px;">Price Details</h5>
		</div>
		<div class="card-content">
			<h6 style="font-size: 15px;font-weight: 500;margin-top: 0px;border-bottom: 1px dashed silver;padding-bottom: 15px;">Price (<?= count($products); ?> Items)<span class="right"><span style="font-size: 15px;font-weight: 800;"> &#2547; </span>&nbsp;
				<?php if(count($products)):
					$t_amount = 0;
					foreach($products as $cpro):
					$t_amount += ($cpro->quantity * $cpro->rate);
				endforeach; ?>
					<?php else:
					$t_amount = 0;
				endif;
				echo ($t_amount > 0) ? number_format($t_amount) : '0'; ?>
		    </span></h6>
			<h5 style="font-size: 20px;font-weight: 500;margin-top: 0px;border-bottom: 1px dashed silver;padding-bottom: 15px;">Total Amount<span class="right" style="font-weight: 800;font-size: 20px;"><span> &#2547; </span>&nbsp;<?= ($t_amount > 0) ? number_format($t_amount) : '0'; ?></span></h5>
			<!-- button section -->
			<div class="row" style="margin-top: 18px;margin-bottom: 0px;">
				<?php if(count($products)): ?>
				<div class="col 16 m6 s6">
					<a href="<?= base_url('index'); ?>" class="btn waves-effect waves-light" style="font-size: 12px;text-transform: capitalize;font-weight: 500;width: 100%;background: red;box-shadow: none;height: 40px;">Continue Shopping</a>
				</div>
				<div class="col 16 m6 s6">
					<a href="<?= base_url('home/place_order'); ?>" class="btn waves-effect waves-light" style="font-size: 12px;text-transform: capitalize;font-weight: 500;width: 100%;background: black;box-shadow: none;height: 40px;">Place Order</a>
				</div>
				<?php else: ?>
					<div class="col 112 m12 s12">
						<a href="<?= base_url('home/index'); ?>" class="btn waves-effect waves-light" style="font-size: 12px;text-transform: capitalize;font-weight: 500;width: 100%;background: black;box-shadow: none;height: 40px;">Continue Shopping</a>
					</div>
				<?php endif; ?>
				
			</div>



			<!-- button section -->

		</div>
	</div>
	<!-- card section -->
</div>
</div>
<?php $this->load->view('home/footer'); ?>
<!-- body section -->	
<?php $this->load->view('home/js-file'); ?>

</body>
</html>
