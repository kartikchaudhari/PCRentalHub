<?php $this->load->helper('seller'); ?>
<header>
	<div class="w3ls-header"> 
		<div class="w3ls-header-left">
			<p><a href="mobileapp.html"><i class="fa fa-download" aria-hidden="true"></i>Download Mobile App </a></p>
		</div>
		<div class="w3ls-header-right">
			<ul>
				<li class="dropdown head-dpdn">
					<a href="<?=base_url('seller');?>" aria-expanded="false">[ <i class="fa fa-user" aria-hidden="true"></i>Seller Zone ]</a>
				</li>
				<?php if($this->session->userdata('rs_seller_id')):?>
				<li class="dropdown head-dpdn" style="border:1px dashed white;">
					<a href="<?=base_url('seller/dashboard');?>" aria-expanded="false"><i class="fa fa-user" aria-hidden="true" title="Go to Seller Dashboard"></i> <?=getSellerName($this->session->userdata('rs_seller_id'));?></a>
				</li>
				<?php else: ?>
				<li class="dropdown head-dpdn">
					<a href="<?=base_url('signin');?>" aria-expanded="false"><i class="fa fa-user" aria-hidden="true"></i> sign in</a>
				</li>
				
				<li class="dropdown head-dpdn">
					<a href="<?=base_url('help');?>"><i class="fa fa-question-circle" aria-hidden="true"></i> Help</a>
				</li>
			<?php endif;?>
			</ul>
		</div>
		<div class="clearfix"> </div> 
	</div>
	<nav class="navbar-custom navbar-default" style="padding: 3px;">
		<div class="container-fluid">
			<div class="navbar-header">
				<div class="logo">
					<a class="navbar-brand" href="#"><?=$this->lang->line('logo');?></a></a>
				</div>
			</div>
		    <form class="navbar-form navbar-left form-inline" action="/action_page.php">
		      <div class="col-md-12">
		      	<div class="form-group">
		        <input type="text" class="form-control" placeholder="Search">
		      </div>
		      <button type="submit" class="btn btn-default">Submit</button>
		      </div>

		      
		    </form>
	  </div>
	</nav>

	<div class="container-fluid top-header">
		
<!-- 		<div class="agile-its-header">
			

			<div class="clearfix"></div>
		</div> -->
	</div>
</header>