<style type="text/css">
	#preloader{width: 25%;margin-top: 10%;}
</style>

<!-- preloader section -->
<div class="modal" id="preloader">
	<div class="modal-content" style="padding: 0px;">
		<h5 style="padding-left: 15px;font-size: 22px;font-weight: 500;">Please Wait...</h5>
		<!-- perloader -->
		<div class="progress" style="background: #FFB6C1;">
			<div class="indeterminate" style="background: blue;"></div>
		</div>
		<!-- perloader --> 
	</div>
	<div class="modal-content" style="padding: 10px;">
		<h6 id="preloader_heading" style="margin-top: 0px;">Login Your Account</h6>
		
	</div>
	
</div>


<!-- preloader section -->

<script type="text/javascript">
	$(function() {
		$('.modal').modal({
			dismissible:false
		});
		//$('#preloader').modal('open');
		// admin login script
		$('#btn_sign_in').click(function(){
			var username = $('input[name="username"]').val();
			var password = $('input[name="password"]').val();
			if (username =="") {
				M.toast({html:'Please Enter Username'});
			}
			else if(password ==""){
				M.toast({html:'Please Enter Password'});
			}
			else{
				$.ajax({
					type:'ajax',
					method:'POST',
					url:'<?= base_url('admin/loggedin'); ?>',
					data:{username:username,password:password},
					breforeSend:function(data){
						$('#preloader').modal('open');
					},
					success:function(data){
						$('#preloader').modal('close');
						if(data == '1'){
							window.location.href = '<?= base_url('admin/dashboard'); ?>';

						}
						else{
							M.toast({html:'Your Username & Password Do Not Metch'});

						}
						
					},
					error:function(){
						$('#preloader').modal('close');
						alert('Error ! Admin Login Account');
					}
				});

			}
		});
		// admin login script
	});
		
</script>
<script>
window.onload = function () {

var chart = new CanvasJS.Chart("chartContainer", {
	animationEnabled: true,
	exportEnabled: true,
	theme: "light1", // "light1", "light2", "dark1", "dark2"
	title:{
		text: "Last 7 Days Orders"
	},
  	axisY: {
      includeZero: true
    },
	data: [{
		type: "column", //change type to bar, line, area, pie, etc
		//indexLabel: "{y}", //Shows y value on all Data Points
		indexLabelFontColor: "#5A5757",
      	indexLabelFontSize: 16,
		indexLabelPlacement: "outside",
		dataPoints: [
			{ label:'Today', y: <?= $chart_data['ch_today_order']; ?> },
			{ label:'Yesterday', y: <?= $chart_data['ch_yesterday_order']; ?> },
			{ label:'3rd Day', y: <?= $chart_data['ch_last_3_day_order']; ?> },
			{ label:'4th Day', y:  <?= $chart_data['ch_last_4_day_order']; ?> },
			{ label:'5th Day', y:  <?= $chart_data['ch_last_5_day_order']; ?> },
			{ label:'6th Day', y:  <?= $chart_data['ch_last_6_day_order']; ?> },
			{ label:'7th Day', y:  <?= $chart_data['ch_last_7_day_order']; ?> },
		]
	}]
});
chart.render();

}
</script>
<script type="text/javascript">
	//count orders script
		count_orders();
		function count_orders(type = "all"){
			if(type == 'all'){
				$('#show_orders_heading').text('All');
			}
			else if(type == 'today'){
				$('#show_orders_heading').text('Today');
			}
			else if(type == 'yesterday'){
				$('#show_orders_heading').text('Yesterday');
			}
			else if(type == 'last_30_days'){
				$('#show_orders_heading').text('Last 30 Days');
			}
			else{
				$('#show_orders_heading').text('All');
			}
			$.ajax({
					type:'ajax',
					method:'GET',
					url:'<?= base_url('admin/count_orders/'); ?>'+type,
					beforeSend:function(data){
						$('#show_orders').text('Loading...');
					},
					
					success:function(data){
						$('#show_orders').html(data);
					},
					error:function(){
						$('#show_orders').text('0');
					}
				});
		}
		//count orders script

		// count categories script
		
		count_categories();
		function count_categories(type = "all"){
			if(type == 'all'){
				$('#show_categories_heading').text('All');
			}
			else if(type == 'today'){
				$('#show_categories_heading').text('Today');
			}
			else if(type == 'yesterday'){
				$('#show_categories_heading').text('Yesterday');
			}
			else if(type == 'last_30_days'){
				$('#show_categories_heading').text('Last 30 Days');
			}
			else{
				$('#show_categories_heading').text('All');
			}
			$.ajax({
					type:'ajax',
					method:'GET',
					url:'<?= base_url('admin/count_categories/'); ?>'+type,
					beforeSend:function(data){
						$('#show_categories').text('Loading...');
					},
					
					success:function(data){
						$('#show_categories').html(data);
					},
					error:function(){
						$('#show_categories').text('0');
					}
				});
		}
		// count categories script

		// count products script
		count_products();
		function count_products(type = "all"){
			if(type == 'all'){
				$('#show_products_heading').text('All');
			}
			else if(type == 'today'){
				$('#show_products_heading').text('Today');
			}
			else if(type == 'yesterday'){
				$('#show_products_heading').text('Yesterday');
			}
			else if(type == 'last_30_days'){
				$('#show_products_heading').text('Last 30 Days');
			}
			else{
				$('#show_products_heading').text('All');
			}
			$.ajax({
					type:'ajax',
					method:'GET',
					url:'<?= base_url('admin/count_products/'); ?>'+type,
					beforeSend:function(data){
						$('#show_products').text('Loading...');
					},
					
					success:function(data){
						$('#show_products').html(data);
					},
					error:function(){
						$('#show_products').text('0');
					}
				});
		}
		// count products script

		// count users script
		count_users();
		function count_users(type = "all"){
			if(type == 'all'){
				$('#show_users_heading').text('All');
			}
			else if(type == 'today'){
				$('#show_users_heading').text('Today');
			}
			else if(type == 'yesterday'){
				$('#show_users_heading').text('Yesterday');
			}
			else if(type == 'last_30_days'){
				$('#show_users_heading').text('Last 30 Days');
			}
			else{
				$('#show_users_heading').text('All');
			}
			$.ajax({
					type:'ajax',
					method:'GET',
					url:'<?= base_url('admin/count_users/'); ?>'+type,
					beforeSend:function(data){
						$('#show_users').text('Loading...');
					},
					
					success:function(data){
						$('#show_users').html(data);
					},
					error:function(){
						$('#show_users').text('0');
					}
				});
		}
		// count users script

	
</script>

