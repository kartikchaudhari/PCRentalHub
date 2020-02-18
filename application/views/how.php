
<body>
	<!-- Navigation -->
		<?php $this->load->view('common/nav');?>	
	<!-- //Navigation -->
	
	<!-- header -->
		<?php $this->load->view('common/top_header');?>	
	<!-- //header -->

	<!-- breadcrumbs -->
	<div class="w3layouts-breadcrumbs text-center">
		<div class="container ">
			<span class="agile-breadcrumbs"><a href="index.html"><i class="fa fa-home home_1"></i></a> / <span>How it Works</span></span>
		</div>
	</div>
	<!-- //breadcrumbs -->
	<!-- How it works -->
		<div class="work-section">
			<div class="container">
				<h2 align="center" class="w3-head">How It Works</h2>
				<hr>
					<div class="work-section-head text-center">
						<p>Fast, easy and free to post an ad and you will find, what you are looking for.</p>
					</div>
					<div class="work-section-grids text-center">
						<div class="col-md-3 work-section-grid">
							<i class="fa fa-pencil-square-o"></i>
							<h4>Post an Ad</h4>
							<p>Seller will post an advertisement about the products he/shw wants to rent.</p>
							<span class="arrow1"><img src="<?=base_url('assets/images/arrow1.png');?>" alt="" /></span>
						</div>
						<div class="col-md-3 work-section-grid">
							<i class="fa fa-eye"></i>
							<h4>Find an item</h4>
							<p>A userw will search for their desired products using advanced search features.</p>
							<span class="arrow2"><img src="<?=base_url('assets/images/arrow2.png');?>" alt="" /></span>
						</div>
						<div class="col-md-3 work-section-grid">
							<i class="fa fa-phone"></i>
							<h4>contact the seller</h4>
							<p>Once the user find an iteam, there will be contact information of the seller, with the help of these information user can contact the seller.</p>
							<span class="arrow1"><img src="<?=base_url('assets/images/arrow1.png');?>" alt="" /></span>
						</div>
						<div class="col-md-3 work-section-grid">
							<i class="fa fa-money"></i>
							<h4>make transactions</h4>
							<p>Once both parties are agreed they have to pay for the products from this portal using secure paymet gateways.</p>
						</div>
						<div class="clearfix"></div>
						<a class="work" href="<?=base_url('post-ad');?>">Get start Now</a>
					</div>
				</div>
		</div>	
		<div class="happy-clients">
				<div class="container">
					<div class="happy-clients-head text-center wow fadeInRight" data-wow-delay="0.4s">
						<h3>Happy Clients</h3>
						<p>We are explain who is using our business solutions</p>
					</div>
					<div class="happy-clients-grids">
						<div class="col-md-6 happy-clients-grid wow bounceIn" data-wow-delay="0.4s">
							<div class="client">
								<img src="<?=base_url('assets/images/client_1.jpg');?>" alt="" />
							</div>
							<div class="client-info">
								<p><img src="<?=base_url('assets/images/open-quatation.jpg');?>" class="open" alt="" />Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make.<img src="<?=base_url('assets/images/close-quatation.jpg');?>" class="closeq" alt="" /></p>
								<h4><a href="#">Darwin Michle, </a>Project manager</h4>
							</div>
							<div class="clearfix"></div>
						</div>
						<div class="col-md-6 happy-clients-grid span_66 wow bounceIn" data-wow-delay="0.4s">
							<div class="client">
								<img src="<?=base_url('assets/images/client_2.jpg');?>" alt="" />
							</div>
							<div class="client-info">
								<p><img src="<?=base_url('assets/images/open-quatation.jpg');?>" class="open" alt="" />Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.<img src="<?=base_url('assets/images/close-quatation.jpg');?>" class="closeq" alt="" /></p>
								<h4><a href="#">Madam Elisabath, </a>Creative Director</h4>
							</div>
							<div class="clearfix"></div>
						</div>
						<div class="col-md-6 happy-clients-grid wow bounceIn" data-wow-delay="0.4s">
							<div class="client">
								<img src="<?=base_url('assets/images/client_3.jpg');?>" alt="" />
							</div>
							<div class="client-info">
								<p><img src="<?=base_url('assets/images/open-quatation.jpg');?>" class="open" alt="" />Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make.<img src="<?=base_url('assets/images/close-quatation.jpg');?>" class="closeq" alt="" /></p>
								<h4><a href="#">Clips arter, </a>Lipsum director</h4>
							</div>
							<div class="clearfix"></div>
						</div>
						<div class="col-md-6 happy-clients-grid span_66 wow bounceIn" data-wow-delay="0.4s">
							<div class="client">
								<img src="<?=base_url('assets/images/client_4.jpg');?>" alt="" />
							</div>
							<div class="client-info">
								<p><img src="<?=base_url('assets/images/open-quatation.jpg');?>" class="open" alt="" />Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.<img src="<?=base_url('assets/images/close-quatation.jpg');?>" class="closeq" alt="" /></p>
								<h4><a href="#">zam cristafr,  </a>manager</h4>
							</div>
							<div class="clearfix"></div>
						</div>
						<div class="clearfix"></div>
					</div>
				</div>
		</div>
	<!-- // How it works -->
	<!--footer section start-->		
<!-- site main footer -->
<?php 
	$data['page']='how';
$this->load->view('common/footer',['data'=>$data]); ?>
<!-- -->

