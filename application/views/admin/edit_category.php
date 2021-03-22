<!DOCTYPE html>
<html>
<head>
	<title>Edit Category - Daily Bazar</title>
	<?php $this->load->view('home/css-file'); ?>
	<style type="text/css">
		body{background: #f2f2f2;}
		#input_box{border: 1px solid silver;box-shadow: none;box-sizing: border-box;padding-left: 10px;padding-right: 10px;height: 40px;border-radius: 3px;margin-bottom: 0px;}
		#input_file{border: 1px solid silver;padding: 8px;width: 100%;margin-bottom: 15px;font-size: 14px;}
		#category_image{width: 50px;height: 50px;border-radius: 100%;border: 1px  solid silver;}

	</style>
</head>
<body>
<!-- body section -->
<?php $this->load->view('admin/topbar'); ?>
<!-- category section -->
<div class="row" style="margin-top: 10px;">
	<div class="col l5 m5 s12">
		<!-- add category section -->
		<?= form_open_multipart('admin/update_category/'.$category[0]->id); ?>
		<div class="card">
			<div class="card-content" style="border-bottom: 1px solid silver;padding: 10px;">
				<h6 style="font-size: 14px;font-weight: 500;">Edit Category</h6>
			</div>
			<div class="card-content">
				<h6 style="font-size: 14px;font-weight: 500;">Category Name</h6>
				<input type="text" name="category_name" id="input_box" value="<?= $category[0]->category_name;?>" placeholder="Enter Category Name" required>

				<h6 style="font-size: 14px;font-weight: 500;">Image</h6>
				<img src="<?= base_url().'uploads/category_image/'.$category[0]->image; ?>" style="width: 100px;height: 100px;border: 2px dashed silver;">
				<input type="file" name="image" id="input_file" placeholder="Enter Category Name">
				<small style="margin-top: 0px;margin-bottom: 15px;color: red;">Max. Image Size : 2MB | 100px X 100px</small>
				<button type="submit" class="waves-effect waves-light" style="background: black;display: block;color: white; text-transform: capitalize;font-weight: 500;margin-top: 15px;">Update Category</button>
			</div>
		</div>
		<!-- add category section -->
		<?= form_close(); ?>
	</div>
	<div class="col l7 m7 s12">
		<!-- recent category -->
		<div class="card">
			<div class="card-content" style="border-bottom: 1px solid silver;padding: 10px;">
				<h6 style="font-size: 14px;font-weight: 500;">Recent Upload Category <span class="red-text">(Last 7 Days)</span></h6>
			</div>
			<div class="card-content" style="padding: 0px;">
				<table>
					<tr>
						<th class="center-align">Image</th>
						<th>Category Name</th>
						<th>Action</th>
					</tr>
					<?php if(count($categories)): foreach($categories as $cate): ?>
					<tr>
						<td>
							<center>
							<img src="<?= base_url(),'uploads/category_image/' .$cate->image; ?>" class="responsive-img" id="category_image">
							</center>
						</td>
						<td><?= $cate->category_name; ?></td>
						<td><a href="<?= base_url('admin/edit_category/'.$cate->id); ?>"><span class="fa fa-edit"></span></a> - <a href="<?= base_url('admin/delete_category/'.$cate->id); ?>" onclick="return confirm('Are you sure delete this category.')"><span class="fa fa-trash"></span></a></td>
					</tr>
					<?php endforeach;
					else: ?>
					<?php endif; ?>
				</table>
			</div>
		</div>
		<!-- recent category -->
	</div>
</div>
<!-- category section -->
<!-- body section -->
<?php $this->load->view('home/js-file'); ?>
	<?php $this->load->view('admin/custom_js'); ?>
</body>
</html>