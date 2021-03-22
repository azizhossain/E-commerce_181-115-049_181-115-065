<span class="right modal-close" style="padding: 8px 12px;background: red;color: white;margin-right: 25px;"><b>X</b></span>
<div class="modal-content">
<div class="row">
				<div class="col l4 m4 s12">
					<img src="<?= base_url().'uploads/product_image/'.$product[0]->image; ?>" class="responsive-img" style="border: 1px solid rgba(0,0,0,0.1);">
				</div>
				<div class="col l5 m5 s12">
					<h5 style="margin-top: 0px;font-weight: 500;"><?= $product[0]->product_title; ?></h5>
					<?php
					$category_detail = get_category_details($product[0]->category_id);
					?>
					<h6 style="font-size: 14px;color: silver;"><a href="<?= base_url('index'); ?>">Home</a> /<a href="<?= base_url('home/category_products/'.$product[0]->category_id); ?>"><?= $category_detail[0]->category_name; ?></a> / <?= $product[0]->product_title; ?></h6>
					<div class="divider" style="margin-top: 15px;margin-bottom: 15px;"></div>
					<p style="font-size: 14px;color: grey;line-height: 20px;"><?= $product[0]->short_description; ?></p>
					<h6 style="font-size: 15px;font-weight: 500;color: grey;">Color: <?= $product[0]->color; ?></h6>
					<h6 style="font-size: 15px;font-weight: 500;color: grey;">Weight: <?= $product[0]->weight; ?></h6>
					<div class="divider" style="margin-top: 15px;margin-bottom: 15px;"></div>
					<h5><b><span class="left" style="font-weight: 800;font-size: 25px;"> &#2547;</span>&nbsp;<?= $product[0]->price; ?></b></h5>
					<div class="row">
						<div class="col l6 m6 s12">
							<button type="button" class="btn waves-effect" style="background: red;width: 100%;height: 40px;box-shadow: none;"><span class="fa fa-shopping-cart"></span>&nbsp;Add to Cart</button>
						</div>
						<div class="col l6 m6 s12">
							<button type="button" class="btn waves-effect waves-light" style="background: black;width: 100%;height: 40px;box-shadow: none;"><span class="fa fa-cube"></span>&nbsp;Buy Now</button>
						</div>

					</div>
				</div>
				

			</div>
</div>