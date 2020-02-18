<?php
$data=array('title'=>'Ad Posted Successfully','page'=>'success');
$this->load->view('common/head',['data'=>$data]); 
?>
<style type="text/css">
	.top-header{
		border-bottom: 1px solid grey;
	}
	label{
		font-size: 20px;
    	line-height: 1.4;
	    color: #1f2836;
	    font-weight: 700;
	    margin-bottom: 8px;
	    border: none;
	}
</style>
<?php 
	$this->load->view('common/top_header');
?>
<body onload="redirect()">

	<div class="submit-ad main-grid-border">
		<div class="container">
			<h2 align="center" class="w3-head">Advertise Posted Successfully</h2>
		</div>
	</div>
	<div class="container">
		<div class="row" style="padding: 3%;">
			<div class="col-md-8 col-sm-offset-2">
				<div class="panel panel-success">
					<div class="panel-body" style="padding-top: 2%;">
						<div class="well">
					       	<strong class="text-success">Your advertisemnet is successfully posted.</strong><br>
					       	<span>You will have to wait untill it gets  approved.</span>
					       	<br>
					       	<span>We are redirecting you to your posted advertisement. Please wait....</span>
					       	<br>
					       	<span class="text-danger"><strong>Ad ID:</strong><?=$ad_data['ad_id'];?></span>
					    </div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!--footer section start-->		
<?php 
$data['page']='success';
$data['ad_id']=$ad_data['ad_id'];
$data['ad_slug']=$ad_data['ad_slug'];
$this->load->view('common/footer.php',['data'=>$data]); ?>