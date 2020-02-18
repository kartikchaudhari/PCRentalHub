<body class="ltr">	
	<!-- Navigation -->
		<?php $this->load->view('common/nav');?>	
	<!-- //Navigation -->
	<!-- header -->
		<?php $this->load->view('common/top_header');?>	
	<!-- //header -->

	<!-- Slider -->
		<div class="slider">
			<ul class="rslides" id="slider">
				<?php foreach ($categories_data as $category):?>
				<li>
					<div class="w3ls-slide-text">
						<h3><?=strtoupper($category['cat_name']);?> RENTALS</h3>
						<a href="<?=base_url('categories'.'#parentVerticalTab'.$category['cat_id']);?>" class="w3layouts-explore">Explore</a>
					</div>
				</li>
			<?php endforeach;?>
			</ul>
		</div>
	<!-- //Slider -->
	
	<!-- content-starts-here -->
		<div class="main-content">
			<!-- categories -->
			<div class="w3-categories">
				<h3>Browse Categories</h3>
				<div class="container">
					<div class="row">
						<div class="col-md-3">
							<div class="focus-grid w3layouts-boder1">
								<a class="btn-8" href="categories.html">
									<div class="focus-border">
										<div class="focus-layout">
											<div class="focus-image"><i class="fa fa-mobile"></i></div>
											<h4 class="clrchg">Mobiles</h4>
										</div>
									</div>
								</a>
							</div>
						</div>
						<div class="col-md-3">
							<div class="focus-grid w3layouts-boder2">	
								<a class="btn-8" href="categories.html#parentVerticalTab2">
									<div class="focus-border">
										<div class="focus-layout">
											<div class="focus-image"><i class="fa fa-laptop"></i></div>
											<h4 class="clrchg"> Electronics & Appliances</h4>
										</div>
									</div>
								</a>
							</div>
						</div>
						<div class="col-md-3">
							<div class="focus-grid w3layouts-boder3">
								<a class="btn-8" href="categories.html#parentVerticalTab3">
									<div class="focus-border">
										<div class="focus-layout">
											<div class="focus-image"><i class="fa fa-car"></i></div>
											<h4 class="clrchg">Cars</h4>
										</div>
									</div>
								</a>
							</div>	
						</div>
						<div class="col-md-3">
							<div class="focus-grid w3layouts-boder4">
								<a class="btn-8" href="categories.html#parentVerticalTab4">
									<div class="focus-border">
										<div class="focus-layout">
											<div class="focus-image"><i class="fa fa-motorcycle"></i></div>
											<h4 class="clrchg">Bikes</h4>
										</div>
									</div>
								</a>
							</div>	
						</div>
					</div>
					<br><br>
					<div class="row">
						<div class="col-12" style="text-align: center;">
							<a href="<?=base_url('categories');?>"><button class="btn btn-success btn-blok btn-lg">Explore all Categories</button></a>
						</div>
					</div>
					<div class="clearfix"></div>
				</div>
			</div>
			<!--/categories -->

			<!-- Popular Ads -->								
			<div class="trending-ads"  style="border:1px solid blue;display: none;">
				<div class="container">
				<!-- slider -->
					<div class="agile-trend-ads">
						<h2>Popular Ads</h2>
						<ul id="flexiselDemo3">
							<?php for ($i=0; $i <2; $i++):?>
							<li>
								<div class="col-md-3 biseller-column">
									<a href="single.html">
										<img src="<?=base_url('assets/images/p1.jpg')?>" alt="" />
										<span class="price">&#36; 450</span>
									</a> 
									<div class="w3-ad-info">
										<h5>There are many variations of passages</h5>
										<span>1 hour ago</span>
									</div>
								</div>
								<div class="col-md-3 biseller-column">
									<a href="single.html">
										<img src="<?=base_url('assets/images/p2.jpg')?>" alt="" />
										<span class="price">&#36; 399</span>
									</a> 
									<div class="w3-ad-info">
										<h5>Lorem Ipsum is simply dummy</h5>
										<span>3 hour ago</span>
									</div>
								</div>
								<div class="col-md-3 biseller-column">
									<a href="single.html">
										<img src="<?=base_url('assets/images/p3.jpg')?>" alt="" />
										<span class="price">&#36; 199</span>
									</a> 
									<div class="w3-ad-info">
										<h5>It is a long established fact that a reader</h5>
										<span>8 hour ago</span>
									</div>
								</div>
								<div class="col-md-3 biseller-column">
									<a href="single.html">
										<img src="<?=base_url('assets/images/p4.jpg')?>" alt="" />
										<span class="price">&#36; 159</span>
									</a> 
									<div class="w3-ad-info">
										<h5>passage of Lorem Ipsum you need to be</h5>
										<span>19 hour ago</span>
									</div>
								</div>
							</li>
							<?php endfor; ?>
						</ul>
					</div> 
				</div>
			</div>
			<!--/Popular Ads-->
			<div class="trending-ads">
				<div class="container">
					<div class="agile-trend-ads">
						<style type="text/css">
							.biseller-column:hover{
								border:1px dashed grey;
							}
						</style>
						<h2>Rencet Ads</h2>
							<?php 
							$i=0; 
							foreach($popular_ads_data as $ad):
							?>
								<?php if ($i%4==0){
									echo "<div class='row'><div class='col-md-12'>";		
								}
								?>
								<div class="col-md-3 biseller-column" style="margin-top: 20px;padding-bottom: 15px;">
										<a href="<?=base_url('classifieds/ad/'.$ad['id'].'/'.$ad['slug']);?>" target="_blank" title="<?=$ad['product_name'];?>">
											<?php $ad_img_array=explode(',',$ad['screen_shot']);?>
											<img src="<?=base_url(AD_IMAGE_PATH.$ad_img_array[0])?>" alt="" style="width: 100%;min-height: 150px;height: 150px;" />
											<!-- <span class="price">&#36; </span> -->
										</a> 
										<div class="w3-ad-info">
											<a href="<?=base_url('classifieds/ad/'.$ad['id'].'/'.$ad['slug']);?>" target="_blank" title="<?=$ad['product_name'];?>">
												<h5><?=substr(trim($ad['product_name']),0,25)." ...";?></h5>
											</a>
											<span>1 hour ago</span>
										</div>
										<hr>
										<div class="w3-ad-info">
											<span class="pull-left">
												<?=$this->lang->line('rs');?> <?=$ad['price']?> (Per day Charge)
												</span>
											<span class="pull-right"><a href="#" title="Add this as Favourite"><i class="fa fa-heart"></i></a></span>
											<div class="clearfix"></div>
										</div>
									</div>
								<?php if ($i%4==3){
									echo "</div></div>";		
								}
								$i++;
								?>
							<?php endforeach; ?>
					</div> 
				</div>
			</div>
			<!--Latest Ads -->
			
		<!--partners-->
			<div class="w3layouts-partners">
				<h3>Our Partners</h3>
					<div class="container">
						<ul>
							<li><a href="#"><img class="img-responsive" src="<?=base_url('assets/images/p-1.png')?>" alt=""></a></li>
							<li><a href="#"><img class="img-responsive" src="<?=base_url('assets/images/p-2.png')?>" alt=""></a></li>
							<li><a href="#"><img class="img-responsive" src="<?=base_url('assets/images/p-3.png')?>" alt=""></a></li>
							<li><a href="#"><img class="img-responsive" src="<?=base_url('assets/images/p-4.png')?>" alt=""></a></li>
							<li><a href="#"><img class="img-responsive" src="<?=base_url('assets/images/p-5.png')?>" alt=""></a></li>
							<li><a href="#"><img class="img-responsive" src="<?=base_url('assets/images/p-6.png')?>" alt=""></a></li>
							<li><a href="#"><img class="img-responsive" src="<?=base_url('assets/images/p-7.png')?>" alt=""></a></li>
							<li><a href="#"><img class="img-responsive" src="<?=base_url('assets/images/p-8.png')?>" alt=""></a></li>
							<li><a href="#"><img class="img-responsive" src="<?=base_url('assets/images/p-9.png')?>" alt=""></a></li>
							<li><a href="#"><img class="img-responsive" src="<?=base_url('assets/images/p-10.pn')?>g" alt=""></a></li>	
						</ul>
					</div>
				</div>	
		<!--//partners-->	

		<!-- mobile app -->
			<div class="agile-info-mobile-app">
				<div class="container">
					<div class="col-md-5 w3-app-left">
						<a href="mobileapp.html"><img src="<?=base_url('assets/images/app.png')?>" alt=""></a>
					</div>
					<div class="col-md-7 w3-app-right">
						<h3>Resale App is the <span>Easiest</span> way for Selling and buying second-hand goods</h3>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam auctor Sed bibendum varius euismod. Integer eget turpis sit amet lorem rutrum ullamcorper sed sed dui. vestibulum odio at elementum. Suspendisse et condimentum nibh.</p>
						<div class="agileits-dwld-app">
							<h6>Download The App : 
								<a href="#"><i class="fa fa-apple"></i></a>
								<a href="#"><i class="fa fa-windows"></i></a>
								<a href="#"><i class="fa fa-android"></i></a>
							</h6>
						</div>
					</div>
					<div class="clearfix"></div>
				</div>
			</div>
			<!-- //mobile app -->
		</div>
<!-- site main footer -->
<?php 
	$data['page']='home';
$this->load->view('common/footer',['data'=>$data]); ?>
<!-- -->


