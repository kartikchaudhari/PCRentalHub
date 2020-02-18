<?php
$data=array('title'=>'Create Ad','page'=>'ad-post');
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
<body data-role="page">
	<div id="loader-wrapper">
    <div id="loader"></div>

    <div class="loader-section section-left"></div>
    <div class="loader-section section-right"></div>

</div>

	<!-- Submit Ad -->
	<div class="submit-ad main-grid-border">
		<div class="container">
			<h2 align="center" class="w3-head">Post An Advertise</h2>
		</div>
	</div>
	<div class="container">
		<div class="row" style="padding: 3%;">
			<div class="col-sm-8 col-sm-offset-2">
				<div id="the-alert" class="alert alert-danger">
        			<strong>Oh snap!</strong> Change a few things up and try submitting again.
       			</div>
				<?php 
					$attr=array('method' =>'post','id'=>'createAdForm');
					echo form_open_multipart('classifieds/doAddNewClassified',$attr);
				?>
				 	<div class="form-group">
				    	<label class="gen-font">Advertise Category <span class="text-danger">*</span></label>
				    	<select class="form-control" id="sel1" name="cat"  required="required">
				    		<option selected="selected">--- Select Category ---</option>
					    	<?php 
					    		foreach ($categories as $cat) {
					    			echo "<option value='".$cat['cat_id']."'>".$cat['cat_name']."</option>\n";
					    		}
					    	?>
						</select>
				  	</div>
				  	<br>
				  	<div class="form-group">
				  		<label class="gen-font">Title for your advertise <span class="text-danger">*</span></label>
				  		<?php 
				  			$attr=array('type'=>'text','name'=>'ad_title','class'=>'form-control','placeholder'=>'Title  for your advertise','required'=>'required');
				  			echo form_input($attr);
				  		?>
				  	</div>
					<br>
				  	<div class="form-group">
				  		<label class="gen-font">Description <span class="text-danger">*</span></label>
				  		<textarea name="description" class="form-control" id="pageContent" required="required"></textarea>
				  	</div>
					<br>
					<div class="form-group">
				  		<label class="gen-font">Add Images <span class="text-danger">*</span></label>
				  		<input class="form-control" type="file" multiple="multiple" name="ad_images[]" required="required">
				  	</div>
					<br>
					<div class="form-group">
						<label class="gen-font">Price <span class="text-danger">*</span></label>
						<div class="input-group">
					    	<span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
					    	<input type="number" class="form-control" name="price" placeholder="e.g. 1000" required="required">
					  	</div>
					  	<span>Per day charges.</span>
					</div>
					<br>
					<div class="form-group">
						<label class="gen-font">Mobile Number <span class="text-danger">*</span></label>
						<div class="input-group">
					    	<input type="tel" class="form-control" name="phone" placeholder="e.g. 987654321" required="required">
					    	<span class="input-group-addon">
					    		<input type="checkbox" name="phone_hide"><strong> Hide</strong>
					    	</span>
					  	</div>
					</div>
					<br>
					<div class="form-group">
				  		<label class="gen-font">Tags <span class="text-danger">*</span></label>
				  		<input class="form-control" type="text" name="tags">
				  		<span>Enter the tags separated by commas.</span>
				  	</div>
					<br>
					<div class="form-group">
						<label class="gen-font">City <span class="text-danger">*</span></label><br>
						<select id="postadcity" class="form-control" name="ad_city"></select>
					</div>
					<br>
					<input type="hidden" name="user_id" value="<?= ($this->session->userdata('rs_seller_id'))?$this->session->userdata('rs_seller_id'):0; ?>">
					
				<?php if(!$this->session->userdata('rs_seller_id')):?>
					<div class="form-group">
						<label class="gen-font">Seller information <span class="text-danger">*</span></label>
						<div class="row">
							<div class="col-md-12">
								<div class="col-md-6">
									<input class="form-control" type="text" name="seller_name" placeholder="Seller Name" required="required">
								</div>
								<div class="col-md-6">
									<input class="form-control" type="email" name="seller_email" placeholder="Seller Email" required="required">
								</div>
							</div>
						</div>
					</div>
				<?php endif; ?>
					<br>

				  	<div class="checkbox">
				    	<span class="gen-font"><input type="checkbox" required="required"> I accept <a href="<?=base_url('terms');?>">Terms of Use</a> and <a href="<?=base_url('privacy');?>">Privacy Policy</a> of RentalHub </span>
				  	</div>
				  	<button type="submit" class="btn btn-success">Submit</button>
				</form>
			</div>
		</div>
	</div>
	<!-- // Submit Ad -->
	<!--footer section start-->		
<?php 
	$data['page']='ad-post';
$this->load->view('common/footer.php',['data'=>$data]); ?>