<?php
	$data=array('title'=>$cat_title,'page'=>'ad-by-cat');
	$this->load->view('common/head',['data'=>$data]); 
	$this->load->view('common/top_header');
	$this->load->helper(array('city','tag','seller'));
?>
<body>
	<!--breadcrumbs -->
	<div class="w3layouts-breadcrumbs text-center">
		<div class="container">
			<span class="agile-breadcrumbs">
				<a href="index.html">
					<i class="fa fa-home home_1"></i>
				</a> / 
				<a href="<?=base_url('categories');?>">All Categerories</a> / 
				<span><?=$cat_title;?></span> 
			</span>
		</div>
	</div>
	<!-- //breadcrumbs -->
	<div class="total-ads main-grid-border">
		<div class="container">
			<h2 class="w3-head" align="center"><?=$cat_title;?></h2>
			<hr>
			<div class="ads-grid">
				<!-- searh product -->
				<div class="side-bar col-md-3">
					<div class="search-hotel">
					<h3 class="agileits-sear-head">Name contains</h3>
					<form>
						<input type="text" value="Product name..." onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Product name...';}" required="">
						<input type="submit" value=" ">
					</form>
				</div>
				<!--/search product -->

				<!-- product range meter -->
				<div class="range">
					<h3 class="agileits-sear-head">Price range</h3>
					<ul class="dropdown-menu6">
						<li>
							<div id="slider-range"></div>							
							<input type="text" id="amount" style="border: 0; color: #ffffff; font-weight: normal;" />
						</li>			
					</ul>
				</div>
				<!--/product range meter-->

				<!--featured ads-->
				<div class="w3ls-featured-ads">
					<h2 class="sear-head fer">Featured Ads</h2>
					<?php
						if (count($featurd_ads)>0):
							foreach ($featurd_ads as $featurd_ad):
					?>
					<div class="w3l-featured-ad">
						<a href="single.html">
							<div class="w3-featured-ad-left" style="padding: 4px;">
								<?php 
									$ad_image_array=array();
									$ad_image_array=explode(',',$featurd_ad['screen_shot']);
								?>
								<img src="<?=base_url(AD_IMAGE_PATH.$ad_image_array[0])?>" title="<?=$featurd_ad['product_name']?>" alt="<?=$featurd_ad['product_name']?>" />
							</div>
							<div class="w3-featured-ad-right">
								<h4 title="<?=$featurd_ad['product_name']?>"><?=substr(trim($featurd_ad['product_name']),0,25)." ...";?></h4>
								<p style="font-size: 12px;"><?=$this->lang->line('rs');?> <?=$featurd_ad['price']?> (Per day Charge)</p>
							</div>
							<div class="clearfix"></div>
						</a>
					</div>
					<?php 
							endforeach;
						endif;
					?>
					<div class="clearfix"></div>
				</div>
				<!--/featured ads -->
			</div>

			<!--all products -->
			<div class="agileinfo-ads-display col-md-9">
				<div class="wrapper">					
					<div class="bs-example bs-example-tabs" role="tabpanel" data-example-id="togglable-tabs">
				    	<ul id="myTab" class="nav nav-tabs nav-tabs-responsive" role="tablist">
							<li role="presentation" class="active">
							  <a href="#home" id="home-tab" role="tab" data-toggle="tab" aria-controls="home" aria-expanded="true">
								<span class="text">All Ads</span>
							  </a>
							</li>
						</ul>
				  		<div id="myTabContent" class="tab-content">
							<div role="tabpanel" class="tab-pane fade in active" id="home" aria-labelledby="home-tab">
					   		<div>
								<div id="container">
									<div class="view-controls-list" id="viewcontrols">
										<label>view :</label>
										<!-- <a class="gridview"><i class="glyphicon glyphicon-th"></i></a> -->
										<a class="listview active"><i class="glyphicon glyphicon-th-list"></i></a>
									</div>
							<div class="sort">
							   <div class="sort-by">
									<label>Sort By : </label>
									<select>
										<option value="">Most recent</option>
										<option value="">Price: Rs Low to High</option>
										<option value="">Price: Rs High to Low</option>
									</select>
								</div>
							</div>
							<div class="clearfix"></div>
								<?php
									if(count($ads_data)>0):
										foreach ($ads_data as $ad_data):
								?>
								<ul class="list">
									<a href="<?=base_url('classifieds/ad/'.$ad_data['id'].'/'.urlencode($ad_data['slug']));?>" target="_blank" title="<?=$ad_data['product_name'];?>">
										<li>
											<?php $ad_img_array=explode(',',$ad_data['screen_shot']);?>
											<img src="<?=base_url(AD_IMAGE_PATH.$ad_img_array[0])?>" alt="<?=$ad_data['product_name'];?>" style="width: 150px;min-height: 150px;height: 150px;" />
											<section class="list-left">
												<h5 class="title"><?=$ad_data['product_name'];?></h5>
												<span class="adprice"><?=$this->lang->line('rs');?> <?=$ad_data['price']?> (Per day Charge)</span>
												<p class="catpath"><?=$cat_title;?></p>
											</section>
											
											<section class="list-right">
												<span class="date"><?=$ad_data['created_at']?></span>
												<a class="gmap_link" href="<?=GMAP_LINK.urlencode($ad_data['latlong'])?>" target="_blank"><span class="cityname"><i class="glyphicon glyphicon-map-marker"></i> <?=getCityState($ad_data['city']);?></span></a>
											</section>
											<div class="clearfix"></div>
										</li> 
									</a>
									<div class="clearfix"></div>
									</a>
								</ul>
							<?php endforeach; ?>
							<?php else: ?>
								<hr>
								<h3 style="margin: 20px;">There is no classifieds posted in "<i><?=$cat_title?></i>" category, you can post one by clicking <a href="<?=base_url('post-ad');?>" title="Post an Ad">here</a>.</h3>
							<?php endif; ?>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!--/all products -->
			<div class="clearfix"></div>
		</div>
	</div>	
	</div>	
	</div>
	<!--//single-page-->
	<!--footer section start-->		
<?php 
	$data['page']='ad-by-cat';
$this->load->view('common/footer.php',['data'=>$data]); ?>