<?php $this->load->helper(array('classifieds')); ?>
<body>
	<!-- Navigation -->
		<?php $this->load->view('common/nav');?>	
	<!-- //Navigation -->
	
	<!-- header -->
		<?php $this->load->view('common/top_header');?>	
	<!-- //header -->

	<!-- breadcrumbs -->
	<div class="w3layouts-breadcrumbs text-center">
		<div class="container">
			<span class="agile-breadcrumbs"><a href="index.html"><i class="fa fa-home home_1"></i></a> / <span>Categories</span></span>
		</div>
	</div>
	<!-- //breadcrumbs -->

    <!-- Categories -->
	<!--Vertical Tab-->
	<div class="categories-section main-grid-border">
		<div class="container">
			<h2 class="w3-head" align="center">All Categories</h2><hr>
			<div class="category-list">
				<div id="parentVerticalTab">
					<div class="agileits-tab_nav">
					<ul class="resp-tabs-list hor_1">
						<?php foreach($categories as $category):?>
							<li><?=$category['cat_name']?></li>
						<?php endforeach;?>
					</ul>
						<a class="w3ls-ads" href="all-classifieds.html">View all Ads</a>
					</div>
					<div class="resp-tabs-container hor_1">
						<?php foreach($categories as $category):?>
							<div>
								<div class="category">
									<div class="category-img">
										<img src="<?=base_url(CAT_IMAGE_PATH.$category['picture']);?>" title="<?=$category['cat_name']?>" alt="<?=$category['cat_name']?>" />
									</div>
									<div class="category-info">
										<h3><?=$category['cat_name']?></h3>
										<span style="font-size: 16px;"><?=getAdCountPerCategory($category['cat_id']);?></span>
										<span style="font-size: 14px;">Average Ratings: 2</span>
									</div>
									<div class="clearfix"></div>
								</div>
								<br>
								<div class="row" style="padding: 20px;">
									<div class="col-md-12" style="padding: 5px;">
										<?=$category['cat_desc']?>
									</div>
									<br>
								</div>
								<br><br>
								<div class="row" >
									<div class="col-md-12" style="padding: 5px;">
										<div class="col-md-4 col-sm-12 col-xs-12 col-lg-4" style="text-align: center;">
											<a href="<?=base_url('classifieds/ads/'.$category['cat_id'].'/recent');?>"><button type="button" class="btn btn-success btn-block">Recent Ads</button></a>
										</div>
										<div class="ol-md-4 col-sm-12 col-xs-12 col-lg-4" style="text-align: center;">
											<a href="<?=base_url('classifieds/ads/'.$category['cat_id'].'/all');?>"><button type="button" class="btn btn-success btn-block">All Ads</button></a>
										</div>
										<div class="ol-md-4 col-sm-12 col-xs-12 col-lg-4" style="text-align: center;">
											<a href="<?=base_url('classifieds/ads/'.$category['cat_id'].'/popular');?>"><btton type="button" class="btn btn-success btn-block">Most Popular Ads</button></a>
										</div>
									</div>
								</div>
							</div>
						<?php endforeach;?>
					</div>
					
					<div class="clearfix"></div>
				</div>
			</div>
		</div>
	</div>
<!-- site main footer -->
<?php 
	$data['page']='cat';
	$this->load->view('common/footer',['data'=>$data]); 
?>
