<style type="text/css">
	#product_detail_modal{width: 80%;}
</style>
<!-- view product details model -->
<div class="modal" id="product_detail_modal">
	
</div>
<!-- view product details model -->
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
<script type="text/javascript" src="<?= base_url('assects/jquery/jquery.js'); ?>"></script>
<!-- materlalize js file include -->
<script type="text/javascript" src="<?= base_url('assects/materialize/js/materialize.js'); ?>"></script>
<!-- chart js file include -->
<script type="text/javascript" src="<?= base_url('assects/chart/chart.js'); ?>"></script>
<!-- custom js file -->
<script type="text/javascript">
	$(document).ready(function(){
		//model script
		$('.modal').modal();
		//$('#product_detail_modal').modal('open');
		//collapsible script
		$('.collapsible').collapsible();
		//sidenav script
		$('.sidenav').sidenav();
		// dropdown script
		$('.dropdown-trigger').dropdown({
			coverTrigger:false
		});
		$('.carousel.carousel-slider').carousel({
   			fullWidth: true,
    		indicators: true
  		 });
	});
</script>
<!-- custom ajax script -->
<script type="text/javascript">
	function view_product_details(product_id)
	{
		//alert(product_id);
		$.ajax({
			type:'ajax',
			method:'GET',
			url:'<?= base_url('home/get_product_details/'); ?>'+product_id,
			beforeSend:function(data){
				$('#preloader').modal('open');
				$('#preloader_heading').text('Fetch Product Details');
			},
			success:function(data){
				$('#product_detail_modal').modal('open');
				$('#product_detail_modal').html(data);
				$('#preloader').modal('close');
			},
			error:function(){
				alert('Error ! Fetch product Details.');
			}
		});
	}
	// add to cart script
	function add_to_cart(product_id)
	{
		$.ajax({
			type:'ajax',
			method:'GET',
			url:'<?= base_url('home/add_to_cart/'); ?>'+product_id,
			beforeSend:function(data){
				$('#preloader').modal('open');
				$('#preloader_heading').text('Product Add In Your Cart.');
			},
			success:function(data){
				$('#preloader').modal('close');
				if(data == "1"){
					M.toast({html:'Product Successfully Add  In Cart.'});
					calculate_carts_products();
				}
				else{
					M.toast({html:'Product Not Add  In Cart.'});
				}
				
			},
			error:function(){
				alert('Error ! Add  To Cart.');
			}
		});
	}
	// add to cart script

	//update quantity script
	function update_quantity(type,product_id,id)
	{
		var qname = "quantity_"+id;
		 var quantity = $('input[name="'+qname+'"]').val();
		
		$.ajax({
			type:'ajax',
			method:'GET',
			url:'<?= base_url('home/update_quantity/'); ?>'+quantity+'/'+type+'/'+product_id,
			beforeSend:function(data){
				$('#preloader').modal('open');
				$('#preloader_heading').text('Update Product Quantity.');
			},
			success:function(data){
				$('#preloader').modal('close');
				if(data == "1"){
					M.toast({html:'Product Quantity Update Successfully.'});
					location.reload();
				}
				else{
					M.toast({html:'Product Quantity Update Fail.'});
				}
				
			},
			error:function(){
				alert('Error ! Update Quantity.');
			}
		});
	}
	//update quantity script

	// calculate carts products script
	calculate_carts_products();
	function calculate_carts_products()
	{
		$.ajax({
			type:'ajax',
			method:'GET',
			url:'<?= base_url('home/calculate_cart_products'); ?>',
			beforeSend:function(data){
				//$('#preloader').modal('open');
				//$('#preloader_heading').text('Update Product Quantity.');
			},
			success:function(data){
				//$('#preloader').modal('close');
				var json_data = JSON.parse(data);
				$('#total_products').html(json_data.total_products);
				$('#total_amount').html(json_data.total_amount);
				
			},
			error:function(){
				alert('Error ! Update Quantity.');
			}
		});
	}
	// calculate carts products script

	// search products script
	$('body').click(function(){
		$('#show_product_list').hide();
	});
	function search_products(val){
		if(val.length > 2){
			$.ajax({
			type:'ajax',
			method:'GET',
			url:'<?= base_url('home/search_products/'); ?>'+val,
			beforeSend:function(data){
				//$('#preloader').modal('open');
				//$('#preloader_heading').text('Update Product Quantity.');
			},
			success:function(data){
				//$('#preloader').modal('close');
				$('#show_product_list').show();
				$('#show_product_list').html(data);
				
			},
			error:function(){
				alert('Error ! Product Search.');
			}
		});
		}
		
	}
	// search products script

</script>