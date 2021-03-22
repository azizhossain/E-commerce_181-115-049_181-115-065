<!DOCTYPE html>
<html>
<head>
	<title>Manage Sales - Daily Bazar</title>
	<?php $this->load->view('home/css-file'); ?>
	<style type="text/css">
		body{background: #f2f2f2;}
		
		table tr td{font-size: 14px;padding: 5px;}
		#input_box{border: 1px solid silver;height: 35px;padding-left: 10px;box-shadow: none;box-sizing: border-box;}
		#customize_sale_modal{width: 40%;}
	</style>
</head>
<body>
<!-- body section -->
<?php $this->load->view('admin/topbar'); ?>
<!-- category section -->
<div class="container">
	<div class="card">
		<div class="card-content" style="border-bottom: 1px solid silver;padding: 10px;">
			<h5>Manage Sales<span class="right"><a href="#!" class="modal-trigger" data-target="customize_sale_modal" style="font-size: 15px;font-weight: 500;">Customize Sales</a></span></h5>
			<h6>27-06-2021 To 27-10-2021<span class="right"><a href="<?= base_url('admin/all_sales'); ?>"  style="font-size: 15px;color: red;">Reset</a></span></h6>
			<!-- customize sale modal -->
			<div class="modal" id="customize_sale_modal">
				<div class="modal-content" style="padding: 10px;border-bottom: 1px solid silver;">
					<h6 style="font-size: 15px;color: grey;">Customize Sales Report</h6>
				</div>
				<div class="modal-content" style="padding: 10px;">
					<?= form_open('admin/search_sales'); ?>
					<div class="row" style="margin-bottom: 0px;margin-top: 10px;">
						<div class="col l6 m6 s12">
							<input type="date" name="start_date" id="input_box" required>
						</div>
						<div class="col l6 m6 s12">
							<input type="date" name="last_date" id="input_box" required>
						</div>
						<div class="col l12 m12 s12">
							<button type="submit" class="btn waves-effect waves-light" style="background: black;margin-top: 10px;text-transform: capitalize;">Search Reports</button>
						</div>
					</div>
					<?= form_close(); ?>
				</div>
			</div>
			<!-- customize sale modal -->
		</div>
		<div class="card-content" style="padding: 0px;padding-right: 10px;">
			<table class="table">
				<tr>
					<th style="text-align: center;">Date</th>
					<th>Customers</th>
					<th  style="text-align: right;">Units Sale</th>
					<th  style="text-align: right;">Amount</th>
				</tr>
				<?php if(count($sales)): 
					foreach($sales as $sale): ?>
				<tr>
					<td style="text-align: center;"><?= $sale['order_date']; ?></td>
					<td><?= $sale['COUNT(order_date)']; ?> Customers<br/>
						<?php 
						$total_customers = get_all_customers($sale['order_date']);
						?>
						<?php if(count($total_customers)): 
							foreach($total_customers as $total_cus): ?>
						<i><span style="color: silver;">Sold By : <?= $total_cus->user_name; ?></span></i><br/>
						<?php endforeach; 
						else: ?>
							<i>Customers Not Found.</i>
						<?php endif; ?>
						</td>
					<td style="text-align: right;"><?= $sale['SUM(total_quantity)']; ?><br/>
						<?php 
						$total_customers = get_all_customers($sale['order_date']);
						?>
						<?php if(count($total_customers)): 
							foreach($total_customers as $total_cus): ?>
						<i><span style="color: silver;">Unit : <?= $total_cus->total_quantity; ?></span></i><br/>
						<?php endforeach; 
						else: ?>
							<i>Quantity Not Found.</i>
						<?php endif; ?>
					</td>
					<td style="text-align: right;"><?= number_format($sale['SUM(total_amount)'],2,'.',','); ?>/-<br/>
						<?php if(count($total_customers)): 
							foreach($total_customers as $total_cus): ?>
						<i><span style="color: silver;"><?= number_format($total_cus->total_amount,2,'.',','); ?>/-</span></i><br/>
						<?php endforeach; 
						else: ?>
							<i>Amount Not Found.</i>
						<?php endif; ?>
					</td>

				</tr>
	
			<?php endforeach; 
			else: ?>
				<tr>
					<td style="text-align: center;" colspan="4">Sales Not Found.</td>
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