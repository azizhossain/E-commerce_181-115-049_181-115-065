<!DOCTYPE html>
<html>
<head>
	<title><?= (count($product))?$product[0]->product_title : 'Product Not Found.'; ?> - Daily Bazar</title>
	<?php $this->load->view('home/css-file'); ?>
	<style type="text/css">
		body{background: #f2f2f2;}
		.btn-flat:hover{background: #4CAF50;color: white;}
		
	</style>
</head>
<body>
	<!-- body section -->
	<?php $this->load->view('home/header'); ?>
	<!-- cart section -->
	<div class="card" style="margin-top: 10px;">
		<div class="card-content" style="padding: 10px;">
			<!-- product details section-->
			<div class="row">
				<div class="col l4 m4 s12">
					<img src="<?= base_url().'uploads/product_image/'.$product[0]->image; ?>" class="responsive-img" style="border: 1px solid rgba(0,0,0,0.1);">
				</div>
				<div class="col l5 m5 s12">
					<h5 style="margin-top: 0px;font-weight: 500;"><?= $product[0]->product_title; ?></h5>
					<?php
					$category_detail = get_category_details($product[0]->category_id);
					?>
					<h6 style="font-size: 14px;color: silver;"><a href="<?= base_url('index'); ?>">Home</a> /<a href="<?= base_url('home/category_products/'.$product[0]->category_id); ?>"><?= $category_detail[0]->category_name; ?></a> / <?= $product[0]->product_title; ?></h6>
					<div class="divider" style="margin-top: 15px;margin-bottom: 15px;"></div>
					<p style="font-size: 14px;color: grey;line-height: 20px;"><?= $product[0]->short_description; ?></p>
					<h6 style="font-size: 15px;font-weight: 500;color: grey;">Color: <?= $product[0]->color; ?></h6>
					<h6 style="font-size: 15px;font-weight: 500;color: grey;">Weight: <?= $product[0]->weight; ?></h6>
					<div class="divider" style="margin-top: 15px;margin-bottom: 15px;"></div>
					<h5><b><span class="left" style="font-weight: 800;font-size: 25px;"> &#2547;</span>&nbsp;<?= $product[0]->price; ?></b></h5>
					<div class="row">
						<div class="col l6 m6 s12">
							<button type="button" class="btn waves-effect" style="background: red;width: 100%;height: 40px;box-shadow: none;"><span class="fa fa-shopping-cart"></span>&nbsp;Add to Cart</button>
						</div>
						<div class="col l6 m6 s12">
							<button type="button" class="btn waves-effect waves-light" style="background: black;width: 100%;height: 40px;box-shadow: none;"><span class="fa fa-cube"></span>&nbsp;Buy Now</button>
						</div>

					</div>
				</div>
				

			</div>
			<!-- product details section -->
			<!-- related product -->
			<h5 style="padding-left: 15px;font-size: 22px;font-weight: 500;">Related Products</h5>
			<div class="row" style="margin-bottom: 0px;">
				<?php if(count($related_products)):
				foreach($related_products as $r_pro): ?>
	<div class="col l2 m3 s6">
		<!-- card-section -->
		<div class="card">
			<div class="card-image">
				<img src="<?= base_url().'uploads/product_image/'.$r_pro->image; ?>" class="responsive-img" style="width: 100%;height: 190px;">
			</div>
			<div class="card-content" style="padding: 10px;border-bottom: 1px solid silver;">
				<h6 style="font-size: 15px;color: blue;font-weight: 500;margin-top: 5px;"><?= $r_pro->product_title; ?></h6>
				<h6 style="font-size: 13px;color:grey;box-shadow: none;margin top: 5px;"><?php
				$category_data = get_category_details($r_pro->category_id);
				echo $category_data[0]->category_name;
				?></h6>
				<h5 style="font-size: 20px;color: green;font-weight: 500;margin-top: 5px;margin-bottom: 5px;"><span class="left" style="font-weight: 800;font-size: 20px;"> &#2547; </span>&nbsp;<?= $r_pro->price;?></h5>
			</div>
			<div class="card-content" style="padding: 3px;">
				<center>
				     <a href="" class="btn btn-flat btn-floating waves-effect" onclick="add_to_cart('<?= $r_pro->id; ?>');"><span class="fa fa-shopping-cart"></span></a>
				     <a href="" class="btn btn-flat btn-floating waves-effect" onclick="view_product_details('<?= $r_pro->id; ?>')"><span class="fa fa-eye"></span></a>
			    </center>

		    </div>
		</div>
		<!-- card-section -->
	</div>
	<?php endforeach;
	else: ?>
		<h6 style="font-size: 14px;font-weight: 500;padding-left: 15px;">Related Products Not Found.</h6>
	<?php endif; ?>
			</div>
			<!-- related product -->	
		</div>
	</div>
	<!-- cart section -->

	<?php $this->load->view('home/footer'); ?>
	<!-- body section -->
	<?php $this->load->view('home/js-file'); ?>

</body>
</html>
