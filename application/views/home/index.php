<?php $this->load->helper('product'); ?>
<!DOCTYPE html>
<html>
<head>
	<title>DailyBazar.com</title>
	<?php $this->load->view('home/css-file'); ?>
	<style type="text/css">
		body{background: #f2f2f2;}
		.btn-flat:hover{background: #4CAF50;color: white;}

	</style>
</head>
<body>
<!-- body section -->
<?php $this->load->view('home/header'); ?>
<!-- image slider section -->
<div class="carousel carousel-slider center">
    
    <div class="carousel-item red white-text" href="#one!">
      <img src="<?= base_url('assects/image/banner_1.jpg');?>" class="responsive-img">
    </div>
    <div class="carousel-item amber white-text" href="#two!">
      <img src="<?= base_url('assects/image/banner_2.jpg');?>" class="responsive-img">
    </div>
    <div class="carousel-item green white-text" href="#three!">
      <img src="<?= base_url('assects/image/banner_3.jpg');?>" class="responsive-img">
    </div>
    <div class="carousel-item blue white-text" href="#four!">
    <img src="<?= base_url('assects/image/banner_4.jpg');?>" class="responsive-img">
    </div>
  </div>
	
</div>
<!-- image slider section -->
<!-- category section -->
<div class="row" style="margin-top: 15px;">
	<?php if(count($categories)):
	foreach ($categories as $cate): ?>
    <div class="col l3 m6 s12">
	<!-- card section -->
	<div class="card waves-effect" style="box-shadow: none;">
		<div class="card-content"  style="padding: 5px;padding-left: 10px;">
			<div class="row">
				<div class="col l7 m7 s7">
					<h6 style="font-size: 15px;color: blue;font-weight: 500;margin-top: 5px;"><?= $cate->category_name; ?></h6>
					<?php $count_products = get_category_products($cate->id); ?>
					<h6 style="font-size: 13px;color:grey;box-shadow: none;margin top: 5px;"><?= count($count_products); ?> Products</h6>
					<a href="<?= base_url('home/category_products/'.$cate->id); ?>" class="btn waves-effect waves-light" style="background: #4CAF50;">View More</a>
				</div>
				<div class="col l5 m5 s5">
					<img src="<?= base_url().'uploads/category_image/'.$cate->image; ?>" class="responsive-img" style="border:none solid rgba(0,0,0,0.1);width: 100%;height: 80px; margin-top: 10px;">
				</div>
		    </div>
	    </div>
    </div>
	<!-- card section -->
</div>
  <?php endforeach; 
  else: ?>
  	<h6>Category Not Found.</h6>
  <?php endif; ?>
</div>
<!-- category section -->

<!--category-product-list-section -->
<div class="row">
	<h6 style="padding-left: 10px;"><b>Top Sold Products</b></h6>
	<?php
	
	if(count($top_sold_products)):
		foreach($top_sold_products as $t_s_pro):
	 ?>
	<div class="col l2 m3 s6">
		<!-- card-section -->
		<a href="<?= base_url('home/product_detail/'.$t_s_pro->id); ?>" target="_blank">
		<div class="card">
			<div class="card-image">
				<img src="<?= base_url().'uploads/product_image/'.$t_s_pro->image; ?>" class="responsive-img" style="width: 100%;height: 190px;">
			</div>
			<div class="card-content" style="padding: 10px;border-bottom: 1px solid silver;">
				<h6 style="font-size: 14px;color: blue;font-weight: 500;margin-top: 5px;"><?= $t_s_pro->product_title; ?></h6>
				
				<h5 style="font-size: 20px;color: green;font-weight: 500;margin-top: 5px;margin-bottom: 5px;"><span style="font-weight: 800;font-size: 20px;"> &#2547; </span>&nbsp;<?= number_format($t_s_pro->price); ?></h5>
			</div>
			<div class="card-content" style="padding: 3px;">
				<center>
				     <a href="#!" class="btn btn-flat btn-floating waves-effect" onclick="add_to_cart('<?= $t_s_pro->id; ?>');"><span class="fa fa-shopping-cart"></span></a>
				     <a href="#!" class="btn btn-flat btn-floating waves-effect" onclick="view_product_details('<?= $t_s_pro->id; ?>')"><span class="fa fa-eye"></span></a>
			    </center>

		    </div>
		</div>
	</a>
		<!-- card-section -->
	</div>
	<?php endforeach;
	else: ?>
		<h6 style="padding-left: 15px;font-size: 14px;font-weight: 500;">Product Not Found.</h6>
	<?php endif; ?>
</div>
<!--category-product-list-section -->

<?php $this->load->view('home/footer'); ?>
<!-- body section -->
<!-- jquery js file include -->
<?php $this->load->view('home/js-file'); ?>
</body>
</html>
