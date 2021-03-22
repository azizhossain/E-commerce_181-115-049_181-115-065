<!DOCTYPE html>
<html>
<head>
	<title>Upload Product - Daily Bazar</title>
	<?php $this->load->view('home/css-file'); ?>
	<style type="text/css">
		body{background: #f2f2f2;}
		#input_box{border: 1px solid silver;box-shadow: none;box-sizing: border-box;padding-left: 10px;padding-right: 10px;height: 40px;border-radius: 3px;margin-bottom: 0px;display: block;}
		#input_file{border: 1px solid silver;padding: 8px;width: 40%;margin-bottom: 15px;font-size: 14px;}
		textarea{border: 1px solid silver;outline: none;resize: none;padding: 10px;border-radius: 3px;height: 90px;width: 40%;}
		select{display: block;border: 1px solid silver;outline: none;width: 40%;height: 40px;border-radius: 3px;}
		

	</style>
</head>
<body>
<!-- body section -->
<?php $this->load->view('admin/topbar'); ?>
<!-- upload product section -->
<div class="container">
	<div class="card">
		<div class="card-content" style="border-bottom: 1px solid silver;padding: 10px;">
				<h6 style="font-size: 14px;font-weight: 500;">Upload New Product</h6>
		<div class="card-content">
			<?= form_open_multipart('admin/save_product'); ?>
			<h6 style="font-size: 14px;font-weight: 500;">Product Title</h6>
			<input type="text" name="product_title" id="input_box" placeholder="Enter Product Title" required>
			<h6 style="font-size: 14px;font-weight: 500;">Category</h6>
			<input type="file" name="product_image" id="input_file">
			<h6>Category</h6>
			<select name="category_id" required>
				<option value="" selected>Select Category</option>
				<?php if(count($categories)):
				foreach($categories as $cate): ?>
				<option value="<?= $cate->id; ?>"> <?= $cate->category_name; ?></option>
			<?php endforeach;
			else: ?>
				<option value="">Categories Not Found</option>
			<?php endif ?>
			</select>
			<h6 style="font-size: 14px;font-weight: 500;">Short Description</h6>
			<textarea  name="short_desc" placeholder="Product Description"></textarea>
			<h6 style="font-size: 14px;font-weight: 500;">Color</h6>
			<input type="text" name="color" style="width: 40%;" id="input_box" placeholder="Enter Product Color">
			<h6 style="font-size: 14px;font-weight: 500;">Weight</h6>
			<input type="text" name="weight" style="width: 40%;" id="input_box" placeholder="Enter Product weight">
			<h6 style="font-size: 14px;font-weight: 500;">Price</h6>
			<input type="number" name="price" style="width: 40%;" id="input_box" placeholder="Tk 150" required>
			<button type="submit" class="btn waves-effect waves-light" style="background: black;box-shadow: none;text-transform: capitalize;font-weight: 500;height: 40px;margin-top: 15px;">Save Product</button>
			<button type="reset" class="btn waves-effect waves-light" style="background: red;box-shadow: none;text-transform: capitalize;font-weight: 500;height: 40px;margin-top: 15px;">Reset</button>
			<?= form_close(); ?>
		</div>
	</div>
</div>
<!-- upload product section -->
<!-- body section -->
<?php $this->load->view('home/js-file'); ?>
	<?php $this->load->view('admin/custom_js'); ?>
</body>
</html>