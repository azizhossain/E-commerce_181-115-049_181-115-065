<!DOCTYPE html>
<html>
<head>
	<title>My Orders - Daily Bazar</title>
	<?php $this->load->view('home/css-file'); ?>
	<style type="text/css">
		body{background: #f2f2f2;}
		
	</style>
</head>
<body>
	<!-- body section -->
	<?php $this->load->view('home/header'); ?>
	<!-- cart section -->
	<h4 style="padding-left: 10px;font-size: 25px;">My Orders(<?= count($orders); ?>)</h4>
	<div class="container">
		<?php if(count($orders)):
		 foreach($orders as $ord): ?>
		<!-- card section -->
		<div class="card">
			<div class="card-content" style="border-bottom: 1px solid silver;">
				<a href="" class="btn waves-effect waves-light" style="background: blue;box-shadow: none;">Order Id - <?= $ord->id; ?></a>
				<a href="" class="btn waves-effect waves-dark right" style="background: none;color: grey;box-shadow: none;border: 1px solid silver;">Track Order</a>
			</div>
			<div class="card-content" style="border-bottom: 1px solid silver;">
				<?php $this->load->helper('product'); 
				$order_items = get_order_products('ms_order_products',$ord->id); ?>
				<?php if(count($order_items)): 
					foreach($order_items as $ord_item): ?>
				<div class="row" style="margin-bottom: 0px;">
					<div class="col l2 m3 s12">
						<img src="<?= base_url().'uploads/product_image/'.$ord_item->image; ?>" class="responsive-img" style="width: 100px;height: 100px;">
					</div>
					<div class="col l5 m5 s12">
						<h5 style="font-size: 20px;font-weight: 500;"><?= $ord_item->product_name; ?></h5>
						<h6 style="font-size: 14px;color: grey;margin-top: 0px;">Quantity: <?= $ord_item->quantity; ?></h6>
					</div>
					<div class="col l5 m4 s12">
						<h5 style="font-size: 20px;font-weight: 500;"><span style="font-weight: 800;font-size: 20px;"> &#2547; </span>&nbsp;<?= $ord_item->rate; ?></h5>
						<h6 style="font-size: 14px;color: grey;margin-top: 0px;">
							<?php if($ord->order_status == 'Delivered'): 
							$status = "Delivered"; ?>
								<?php else: 
									$status = "Not Delivered"; ?>
								<?php endif; ?>
						Your Product is <?=$status; ?></h6>
					</div>
				</div>
			<?php endforeach; 
			else: ?>
				<h6 style="text-align: center;">Product Not Found.</h6>
			<?php endif; ?>
			</div>
			<div class="card-content" style="padding: 10px;">
				<h6 style="margin-top: 5px;">Ordered On : <b><?= date('D, d-M-Y',strtotime($ord->order_date)); ?></b><span class="right">Order Total : <b><span style="font-weight: 800;font-size: 15px;"> &#2547; </span><?= number_format($ord->total_amount); ?></b></span></h6>
			</div>
		</div>
		<!-- card section -->
	<?php endforeach; 
	else: ?>
		<h6 style="text-align: center;">Order's Not Found</h6>
	<?php endif; ?>
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
