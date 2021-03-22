<!DOCTYPE html>
<html>
<head>
	<title>Shipping Label - Daily Bazar</title>
	<?php $this->load->view('home/css-file'); ?>
	<style type="text/css">
		table tr th{font-size: 14px;}
	</style>
</head>
<body onload="window.print();">
<!-- body section -->
<h5>Daily Bazar</h5>
<table class="table">
	<tr>
		<td>
			<h6 style="font-size: 15px;"><b>SHIP TO</b></h6>
			<h6 style="line-height: 20px;font-size: 14px;"><?= $order_details[0]->user_name; ?><br/>
			<?= $order_details[0]->shipping_address; ?></h6>
			<h6 style="font-size: 14px;">Order Date : <?= date('d M, Y',strtotime($order_details[0]->order_date)); ?></h6>
		</td>
		<td>
			<h6 style="font-size: 15px;text-align: right;"><b>Daily Bazar</b></h6>
			<h6 style="font-size: 14px;text-align: right;">Block:D, Main Road,<br/>Shajalal Uposhohor, Sylhet</h6>
		</td>
	</tr>
</table>
<table class="table">
	<tr>
		<th>Product Name</th>
		<th style="text-align: right;">Quantity</th>
		<th style="text-align: right;">Rate</th>
		<th style="text-align: right;">Total Amount</th>
	</tr>
	<?php 
	$grand_total = 0;
	if(count($product_list)): 
		foreach($product_list as $pro_list): 
			$grand_total += $pro_list->quantity * $pro_list->rate; ?>
	<tr style="font-size: 14px;">
		<td><?= $pro_list->product_name; ?></td>
		<td style="text-align: right;"><?= $pro_list->quantity; ?></td>
		<td style="text-align: right;"><?= number_format($pro_list->rate); ?></td>
		<td style="text-align: right;"><?php $total_amount = $pro_list->quantity * $pro_list->rate; 
		echo number_format($total_amount); ?></td>
	</tr>
<?php endforeach; 
else: 
	$grand_total = 0;
	?>
<?php endif; ?>
	<tr>
		<th colspan="3">Grand Total</th>
		<th style="text-align: right;"><?= number_format($grand_total); ?></th>
	</tr>
</table>
<table class="table">
	<tr>
		<td>
			<h6 style="font-size: 15px;"><b>Notes : </b></h6>
			<p style="font-size: 14px;line-height: 20px;">Thanks For Visiting.</p>
		</td>
	</tr>
	
</table>
<!-- body section -->
<?php $this->load->view('home/js-file'); ?>
</body>
</html>