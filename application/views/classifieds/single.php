<?php
	$data=array('title'=>$ad_data["product_name"],'page'=>'ad-single');
	$this->load->view('common/head',['data'=>$data]); 
	$this->load->view('common/top_header');
	$this->load->helper(array('city','tag','seller'));
?>
<body>
	<div class="w3layouts-breadcrumbs text-center">
		<div class="container">
			<span class="agile-breadcrumbs">
			<a href="index.html"><i class="fa fa-home home_1"></i></a> / 
			<a href="all-classifieds.html">All Ads</a> / 
			<a href="cars.html">Cars</a> / 
			<span>Car name</span></span>
		</div>
	</div>
	<!-- //breadcrumbs -->
	
	<!--single-page-->
	<div class="single-page main-grid-border">
		<div class="container">
			<div class="product-desc">
				<div class="col-md-7 product-view">
					<h2><?=$ad_data['product_name']?></h2>
					<p> <i class="glyphicon glyphicon-map-marker"></i><?=getCityState($ad_data['city']);?>| Added at <span><?=$ad_data['created_at'];?></span>, Ad ID: <span><?=$ad_data['id'];?></span>
					</p>
					<hr>

					<!-- product images -->
					<div class="flexslider">
						<style type="text/css">
							.flexslider {
							    width: 100%;
							    height: 550px;
							}

							.flexslider .slides img {
							 width:auto;
							    height: 450px;
							}
						</style>
						<ul class="slides">
							<?php 
								$ad_image_array=array();
								$ad_image_array=explode(',',$ad_data['screen_shot']);

								for ($i=0; $i<count($ad_image_array); $i++) { 
									echo "<li data-thumb='".base_url(AD_IMAGE_PATH.$ad_image_array[$i])."'>
										  	<img src='".base_url(AD_IMAGE_PATH.$ad_image_array[$i])."'/>
										  </li>";
								}
							?>
						</ul>
					</div>
					<!--./product images -->
					
					<!-- product detils -->
					<div class="product-details"><br><br><br>
						<div class="but_list">
	       					<div class="bs-example bs-example-tabs" role="tabpanel" data-example-id="togglable-tabs">
								<ul id="myTab" class="nav nav-tabs" role="tablist">
			  						<li role="presentation" class="active">
			  							<a href="#home" id="home-tab" role="tab" data-toggle="tab" aria-controls="home" aria-expanded="true"><strong>AD DETAILS</strong></a>
			  						</li>
			  						<li role="presentation" class="">
			  							<a href="#profile" role="tab" id="profile-tab" data-toggle="tab" aria-controls="profile" aria-expanded="false"><strong>PRPDOUCT RENTAL DETAILS</strong><strong class="text-danger">*</strong></a>
			  						</li>
								</ul>
							<div id="myTabContent" class="tab-content">
		  						<div role="tabpanel" class="tab-pane fade active in" id="home" aria-labelledby="home-tab">
							    	<div style="padding: 6px;">
							    		<?=$ad_data['description'];?>
							    	</div>
							    </div>
		  						<div role="tabpanel" class="tab-pane fade" id="profile" aria-labelledby="profile-tab">
		    						<h4><strong>The Owner of this Product has provided following product retal detals.</strong></h4>
		    						<hr>
		    						<li><strong>Charges to be paid per day: </strong><span><?=$this->lang->line('rs').' '.$ad_data['price']?></span></li>
		  						</div>
							</div>
							<br>
							<div class="col-md-12 product-tag-container">
        						<h4>
        							<strong>
        								<span class="fa fa-tags"></span> Product Tags
        							</strong>
        						</h4>
        						<hr class="custom-hr">
        						<div class="col-md-12">
									<?php decodeTagArray($ad_data['tag']);?>
        						</div>
							</div>
							<div class="col-md-12 product-tag-container">
        						<h4>
        							<strong>
        								<span class="fa fa-map-marker"></span> Location
        							</strong>
        						</h4>
        						<hr class="custom-hr">
        						<div class="col-md-12">
									<div class="embed-responsive embed-responsive-4by3">
										<iframe class="embed-responsive-item" width="600" height="200" id="gmap_canvas" src="https://maps.google.com/maps?q=<?=urlencode($ad_data['latlong']); ?>&t=k&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>
									</div>
        						</div>
							</div>
   						</div>
   					</div>
					<!--./product detils -->
				</div>
			</div>
			<div class="col-md-5 product-details-grid" style="padding-left: 5%;">
				<div class="row">
					<div class="panel panel-info">
						<div class="panel-heading" style="padding: 8px 15px;font-size: 18px;text-align: center;">Contact Advertiser
						</div>
						<div class="panel-body" style="padding: 10px 15px;box-sizing: border-box;">
							<div class="table-responsive">
								<?php $seller_data=egtAdvertiserContact($ad_data['user_id']);
								 ?>
								<table class="table text-center table-responsive">
								<tr>
									<td align="center" style="line-height: 3em;">
										<img width="70px" class="thumbnail" style="min-height:73px;margin-bottom: 8px;" src="<?=base_url($seller_data['image']);?>" alt="Kartik1234">
										<span class="text-center" style="font-size: 18px;margin-bottom: 20px;"><?=$seller_data['username'];?></span>
										<br>
										<span class="text-center" style="font-size: 18px;margin-top: 20px;margin-bottom:20px;"><strong>Joined:</strong> <?=$seller_data['created_at']?></span>
										<br>
										<?php if ($ad_data['hide_phone']==1):?>
										<span class="text-center" style="font-size: 18px;margin-top: 20px;margin-bottom:20px;"><strong>Phone:</strong> <?=$seller_data['phone']?></span>
										<br>
									<?php endif; ?>
										<button type="button" class="btn btn-info" data-toggle="modal" data-target="#emailToSellerModal"><span class="glyphicon glyphicon-envelope"></span>&nbsp;Reply by email</button>
									</td>
								</tr>
							</table>
							</div>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="panel panel-info">
						<div class="panel-heading" style="padding: 8px 15px;font-size: 18px;text-align: center;">Share this Ad
						</div>
						<div class="panel-body" style="padding: 10px 15px;box-sizing: border-box;">
							<div class="row" style="padding: 10px;">
								<div class="col-md-12 text-center">
									<a href="" class="btn" style="background-color:#337ab7;color:white;"><span class="fa fa-facebook"></span></a>
									<a href="" class="btn btn-info"><span class="fa fa-twitter"></span></a>
									<a href="" class="btn btn-danger"><span class="fa fa-google-plus"></span></a>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="panel panel-info">
						<div class="panel-heading" style="padding: 8px 15px;font-size: 18px;text-align: center;">More info
						</div>
						<div class="panel-body" style="padding: 10px 15px;box-sizing: border-box;line-height: 3em;">
							<div class="row">
								<div class="col-md-6 col-md-offset-3"><span class="fa fa-heart"></span>&nbsp;&nbsp;&nbsp;<a href="#">Save ad as Favourite</a></div>
							</div>
							<div class="row">
								<div class="col-md-6 col-md-offset-3"><span class="fa fa-user-plus"></span>&nbsp;&nbsp;&nbsp;More ads by&nbsp;<a href="#">Kartik1234</a></div>
							</div>
							<div class="row">
								<div class="col-md-6 col-md-offset-3"><span class="fa fa-exclamation-triangle"></span>&nbsp;&nbsp;&nbsp;<a href="#">Report this ad</a></div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="clearfix"></div>
		</div>

		<!--recommanded products -->
		<div class="container">
			<div class="row">
				<div class="col-md-12 product-tag-container">
					<h4><strong>Recommended Ads for You</strong></h4>
					<hr>
					<div class="col-md-12">
						-- Ads Here --
					</div>
				</div>
			</div>
		</div>
		<!--./recommanded products -->
	</div>
</div>
	<!--//single-page-->
	<!--footer section start-->		
<!--emailToSellerModal-->
<div id="emailToSellerModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header" style="padding:10px;">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Send Mail to <?=$seller_data['username'];?></h4>
      </div>
      <div class="modal-body" style="padding-top: 0px;">
      	<div id="msg" style="padding-top: 5px;"></div>
        <form>
        	<div class="form-group">
		    	<input type="text" class="form-control" id="fname" required="required" placeholder="First Name">
		    </div>
		  	<div class="form-group">
		    	<input type="email" class="form-control" id="email" required="required" placeholder="Email Address">
		  	</div>
		  	<div class="form-group">
		    	<input type="tel" class="form-control" id="phone" placeholder="Contact Number">
		  	</div>
		  	<div class="form-group">
			    <textarea type="text" class="form-control" name="message" placeholder="Enter your message..." required="" rows="2" style="width: 100%;height: 100px"></textarea>
		  	</div>
		  <button type="submit" class="btn btn-info">Submit</button>
		</form> 
      </div>
    </div>

  </div>
</div>
<!--./emailToSellerModal-->
<?php 
	$data['page']='ad-single';
$this->load->view('common/footer.php',['data'=>$data]); ?>