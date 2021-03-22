<!DOCTYPE html>
<html>
<head>
	<title>Manage Products - Daily Bazar</title>
	<?php $this->load->view('home/css-file'); ?>
	<style type="text/css">
		body{background: #f2f2f2;}
		#category_image{width: 40px;height: 40px;border-radius: 100%;border: 1px  solid silver;}
		.btn-flat:hover{background: #996633;color: white;}
		.action_dropdown{width: 120px!important}
		.action_dropdown li a{color: grey;font-size: 14px;font-weight: 500;}
		#category_filter{width: 180px!important;padding-top: 8px;padding-bottom: 8px;}
		#category_filter li a{color: grey;font-size: 14px;font-weight: 500;}
		#search_category{display: flex;}
		#search_category li:first-child{width: 250px;}
		#input_box{border: 1px solid silver;box-shadow: none;box-sizing: border-box;padding-left: 10px;padding-right: 10px;height: 40px;border-radius: 0px;}
		#pagination a{color: black;font-weight: 500;border: 1px solid black;padding: 5px 10px;margin-left: 5px;}
		#pagination strong{font-weight: 500;border: 1px solid black;padding: 5px 10px;margin-left: 5px;background: black;color: white;}

	</style>
</head>
<body>
<!-- body section -->
<?php $this->load->view('admin/topbar'); ?>
<!-- category section -->
<div class="container">
	<div class="card">
		<div class="card-content" style="border-bottom: 1px solid silver;padding: 10px;">
			<h5>Manage Products</h5>
			<!-- category search form -->
			<div class="row">
				<div class="col l6 m6 s12">
					<?= form_open('admin/search_product'); ?>
					<ul id="search_category">
						<li>
							<input type="text" name="product_name" id ="input_box" placeholder="Enter Product Name" value="<?= set_value('product_name'); ?>" required> 
						</li>
						<li>
							<button type="submit" class="btn waves-effect waves-light" style="background: black;box-shadow: none;text-transform: capitalize;font-weight: 500;height: 40px;">Search Now</button>
						</li>
					</ul>
					<?= form_close(); ?>
				</div>
				<div class="col l6 m6 s12">
					<span class="right">
						<button type="button" class="btn waves-effect waves-light dropdown-trigger" data-target="category_filter" style="background: black;box-shadow: none;text-transform: capitalize;font-weight: 500;height: 40px;margin-top: 15px;"><span class="fa fa-filter"></span>&nbsp;Filter</button>
					</span>
					<!-- category filter -->
					<ul class="dropdown-content" id="category_filter">
						<li><a href="<?= base_url('admin/filter_product/new_product'); ?>" class="waves-effect">New Products First</a></li>
						<li><a href="<?= base_url('admin/filter_product/old_product'); ?>" class="waves-effect">Old Products First</a></li>
						<li><a href="<?= base_url('admin/filter_product/highest_price'); ?>" class="waves-effec<??>t">Highest Price</a></li>
						<li><a href="<?= base_url('admin/filter_product/lowest_price'); ?>" class="waves-effect">Lowest Price</a></li>
					</ul>
					<!-- category filter -->
				</div>
			</div>
			<!-- category search form -->
		</div>
		<div class="card-content" style="padding: 0px;">
			<table class="table">
				<tr>
					<th style="text-align: center;">IMAGE</th>
					<th>NAME</th>
					<th>CATEGORY</th>
					<th>PRICE</th>
					<th>COUNT SOLD</th>
					<th>STATUS</th>
					<th style="text-align: center;">ACTION</th>
				</tr>
				<?php if(count($products)):
					foreach($products as $pro): ?>
				<tr>
					<td>
						<center>
							<img src="<?= base_url().'uploads/product_image/'.$pro->image ?>" class="responsive-img" id="category_image">
						</center>
					</td>
					<td style="font-size: 14px;color: grey;"><?= $pro->product_title; ?><br/>
						<a href="<?= base_url('home/product_detail/'.$pro->id); ?>" target= "_blank">View On Home</a></td>
					<td style="font-size: 14px;color: grey;"><a href=""><?php 
						$category_data = get_category_details($pro->category_id);
						echo $category_data[0]->category_name;
						?></a></td>
						<td><?= number_format($pro->price); ?></td>
						<td><?= $pro->count_sales; ?></td>
					<td style="font-size: 14px;color: grey;"><?= ($pro->status == "0") ? 'Active':'Inactive'; ?></td>
					<td>
						<center>
							<a href="#!" class="btn btn-flat btn-floating dropdown-trigger" data-target="action_dropdown_<?= $pro->id; ?>"><span class="fa fa-ellipsis-v"></span></a>
						</center>
						<!-- action dropdown -->
						<ul class="dropdown-content action_dropdown" id="action_dropdown_<?= $pro->id; ?>">
							<li><a href="<?= base_url('admin/edit_product/'.$pro->id); ?>"><span class="fa fa-edit"></span>&nbsp;Edit</a></li>
							<li><a href="<?= base_url('admin/delete_product/'.$pro->id); ?>" onclick="return confirm('Are you sure delete this product.')"><span class="fa fa-trash"></span>&nbsp;Delete</a></li>
							<?php if($pro->status == "0"): ?>
							<li><a href="<?= base_url('admin/change_product_status/'.$pro->id.'/1'); ?>"><span class="fa fa-eye-slash"></span>&nbsp;Inactive</a></li>
							<?php else: ?>
								<li><a href="<?= base_url('admin/change_product_status/'.$pro->id.'/0'); ?>"><span class="fa fa-eye"></span>&nbsp;Active</a></li>
							<?php endif; ?>
						</ul>
						<!-- action dropdown -->
					</td>
				</tr>
			<?php endforeach;
			else: ?>
				<tr>
					<td colspan="5" style="text-align: center;">Products Not Found</td>
				</tr>
			<?php endif; ?>
			<tr>
				<td colspan="7">
					<div id="pagination">
						<?= $this->pagination->create_links(); ?>
				 	</div>
				</td>
			</tr>
			</table>
		</div>
	</div>
</div>
<!-- category section -->
<!-- body section -->
<?php $this->load->view('home/js-file'); ?>
	<?php $this->load->view('admin/custom_js'); ?>
</body>
</html>