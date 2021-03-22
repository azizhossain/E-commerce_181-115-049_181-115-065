<!DOCTYPE html>
<html>
<head>
	<title>Company Profile - Daily Bazar</title>
	<?php $this->load->view('home/css-file'); ?>
	<style type="text/css">
		body{background: #f2f2f2;}
		
	</style>
</head>
<body>
	<?php $this->load->view('home/header'); ?>
	<div class="container">
	 	<div class="card">
	 		<div class="row">
	 			<div class="card-content">
	 				<h6 style="text-align: center;font-weight: 500;font-size: 25px;padding-left: 50px;padding-bottom: 10px;">Daily Bazar Family</h6>
	 				<img src="<?= base_url('assects/image/d_family.jpg');?>" class="responsive-img">
	 				<h6 style="padding-bottom: 10px;">Since 2008, Daily Bazar has been providing our customers with the very best fresh produce, local and imported household needs, as well as an exquisite range of fashions, home accessories, appliances, and more. In 2016, Daily Bazar was recognized as the Best Retail Brand in the country, as awarded jointly by Kantar Millward Brown and Bangladesh Brand Forum.</h6>
	 				<img src="<?= base_url('assects/image/company_profile.jpg');?>" class="responsive-img">
	 				<h6 style="text-align: center;font-weight: 500;font-size: 25px;padding-left: 50px;padding-bottom: 10px;">Everyday A Better Life</h6>
	 				<h6 style="padding-bottom: 10px;text-align: center;padding-left: 20px;">Discover a world of freshness, warm service and value.</h6>
	 				<h6>With over 60 outlets, Daily Bazar is the largest grocery chain in Bangladesh and Best Retail Brand in the country. As part of the Daily Bazar family, your satisfaction and wellbeing are what we work diligently to ensure. Most of all, we want to always leave you with a smile, whether you visit our stores or order online, and we are happy to serve you in whatever way we can.</h6>
	 				<h6 style="padding-bottom: 10px;text-align: center;padding-left: 20px;">So expect more. Come and discover a different shopping experience.</h6>
	 			</div>
	 		</div>
	 	</div>
	</div>

	<?php $this->load->view('home/footer'); ?>
	<!-- body section -->
	<?php $this->load->view('home/js-file'); ?>

</body>
</html>
