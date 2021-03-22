<!DOCTYPE html>
<html>
<head>
	<title>Manage Customers - Daily Bazar</title>
	<?php $this->load->view('home/css-file'); ?>
	<style type="text/css">
		body{background: #f2f2f2;}
		
		.btn-flat:hover{background: #996633;color: white;}
		.action_dropdown{width: 150px!important}
		.action_dropdown li a{color: grey;font-size: 14px;font-weight: 500;}
		
		#search_customer{display: flex;}
		#search_customer li:first-child{width: 250px;}
		#input_box{border: 1px solid silver;box-shadow: none;box-sizing: border-box;padding-left: 10px;padding-right: 10px;height: 40px;border-radius: 0px;}
		#pagination a{color: black;font-weight: 500;border: 1px solid black;padding: 5px 10px;margin-left: 5px;}
		#pagination strong{font-weight: 500;border: 1px solid black;padding: 5px 10px;margin-left: 5px;background: black;color: white;}
		table tr td{font-size: 14px;padding: 5px;}

	</style>
</head>
<body>
<!-- body section -->
<?php $this->load->view('admin/topbar'); ?>
<!-- category section -->
<div class="container">
	<div class="card">
		<div class="card-content" style="border-bottom: 1px solid silver;padding: 10px;">
			<h5>Manage Customer's</h5>
			<!-- category search form -->
			<div class="row">
				<div class="col l6 m6 s12">
					<?= form_open('admin/search_customers'); ?>
					<ul id="search_customer">
						<li>
							<input type="text" name="fullname" id ="input_box" placeholder="Enter Customer Fullname" value="<?= set_value('fullname'); ?>" required> 
						</li>
						<li>
							<button type="submit" class="btn waves-effect waves-light" style="background: black;box-shadow: none;text-transform: capitalize;font-weight: 500;height: 40px;">Search Now</button>
						</li>
					</ul>
					<?= form_close(); ?>
				</div>
				<div class="col l6 m6 s12">
					
					
				</div>
			</div>
			<!-- category search form -->
		</div>
		<div class="card-content" style="padding: 0px;">
			<table class="table">
				<tr>
					<th style="text-align: center;">FULLNAME</th>
					<th>EMAIL</th>
					<th>PASSWORD</th>
					<th>MOBILE NO</th>
					<th>ADDRESS</th>
					<th>REGISTER DATE</th>
					<th style="text-align: center;">ACTION</th>
				</tr>
				<?php if(count($users)): 
					foreach($users as $user): ?>
				<tr>
					<td><?= $user->fullname; ?></td>
					<td><?= $user->email; ?></td>
					<td><?= $user->password; ?></td>
					<td><?= $user->mobile_no; ?></td>
					<td><?= $user->address; ?></td>
					<td><?= date('d M Y',strtotime($user->register_date)); ?></td>
					
					<td>
						<center>
							<button type="button" class="btn btn-flat btn-floating dropdown-trigger" data-target = "user_action_<?= $user->id; ?>"><span class="fa fa-ellipsis-v"></span></button>
						</center>
						<ul class="dropdown-content action_dropdown" id="user_action_<?= $user->id; ?>">
						<li><a href="<?= base_url('admin/user_delete/'.$user->id); ?>" onclick="return confirm('Confirm ! Are You Sure Delete This Customer.')" class="waves-effect">Delete Customer</a></li>
						
						
					</ul>
					</td>
				</tr>
				<?php endforeach; 
				else: ?>
					<tr>
						<td colspan="7" style="text-align: center;">Customer's Not Found.</td>
					</tr>
				<?php endif; ?>
			
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