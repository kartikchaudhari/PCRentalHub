

	<!--footer section start-->		
	<footer>
		<div class="w3-agileits-footer-top">
			<div class="container">
				<div class="wthree-foo-grids">
					<div class="col-md-3 wthree-footer-grid">
						<h4 class="footer-head">Who We Are</h4>
						<p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.</p>
						<p>The point of using Lorem Ipsum is that it has a more-or-less normal letters, as opposed to using 'Content here.</p>
					</div>
					<div class="col-md-3 wthree-footer-grid">
						<h4 class="footer-head">Help</h4>
						<ul>
							<li><a href="<?=base_url('howitworks');?>"><i class="fa fa-long-arrow-right" aria-hidden="true"></i>How it Works</a></li>						
							<li><a href="<?=base_url('sitemap');?>"><i class="fa fa-long-arrow-right" aria-hidden="true"></i>Sitemap</a></li>
							<li><a href="<?=base_url('faq');?>"><i class="fa fa-long-arrow-right" aria-hidden="true"></i>Faq</a></li>
							<li><a href="<?=base_url('feedback');?>"><i class="fa fa-long-arrow-right" aria-hidden="true"></i>Feedback</a></li>
							<li><a href="<?=base_url('contact');?>"><i class="fa fa-long-arrow-right" aria-hidden="true"></i>Contact</a></li>
						</ul>
					</div>
					<div class="col-md-3 wthree-footer-grid">
						<h4 class="footer-head">Information</h4>
						<ul>
							<li><a href="<?=base_url('locations');?>"><i class="fa fa-long-arrow-right" aria-hidden="true"></i>Locations Map</a></li>	
							<li><a href="<?=base_url('terms');?>"><i class="fa fa-long-arrow-right" aria-hidden="true"></i>Terms of Use</a></li>
							<li><a href="<?=base_url('populer_searches');?>"><i class="fa fa-long-arrow-right" aria-hidden="true"></i>Popular searches</a></li>	
							<li><a href="<?=base_url('privacy');?>"><i class="fa fa-long-arrow-right" aria-hidden="true"></i>Privacy Policy</a></li>	
						</ul>
					</div>
					<div class="col-md-3 wthree-footer-grid">
						<h4 class="footer-head">Contact Us</h4>
						<span class="hq">Our headquarters</span>
						<address>
							<ul class="location">
								<li><span class="glyphicon glyphicon-map-marker"></span></li>
								<li>CENTER FOR FINANCIAL ASSISTANCE TO DEPOSED NIGERIAN ROYALTY</li>
							</ul>	
							<div class="clearfix"> </div>
							<ul class="location">
								<li><span class="glyphicon glyphicon-earphone"></span></li>
								<li>+0 561 111 235</li>
							</ul>	
							<div class="clearfix"> </div>
							<ul class="location">
								<li><span class="glyphicon glyphicon-envelope"></span></li>
								<li><a href="mailto:info@example.com">mail@example.com</a></li>
							</ul>						
						</address>
					</div>
					<div class="clearfix"></div>
				</div>						
			</div>	
		</div>	
		<div class="agileits-footer-bottom text-center">
		<div class="container">
			<div class="w3-footer-logo">
				<h1><a href="index.html"><?=$this->lang->line('logo');?></a></h1>
			</div>
			<div class="w3-footer-social-icons">
				<ul>
					<li><a class="facebook" href="#"><i class="fa fa-facebook" aria-hidden="true"></i><span>Facebook</span></a></li>
					<li><a class="twitter" href="#"><i class="fa fa-twitter" aria-hidden="true"></i><span>Twitter</span></a></li>
					<li><a class="flickr" href="#"><i class="fa fa-flickr" aria-hidden="true"></i><span>Flickr</span></a></li>
					<li><a class="googleplus" href="#"><i class="fa fa-google-plus" aria-hidden="true"></i><span>Google+</span></a></li>
					<li><a class="dribbble" href="#"><i class="fa fa-dribbble" aria-hidden="true"></i><span>Dribbble</span></a></li>
				</ul>
			</div>
			<div class="copyrights">
				<p> © 2019 PCrental. All Rights Reserved | Design and Developed by Kartik Chaudhari <!-- & Riddhi Kevat --></p>
			</div>
			<div class="clearfix"></div>
		</div>
	</div>
	</footer>
    <!--footer section end-->
		


	<!-- js -->
	<script type="text/javascript" src="<?=base_url('assets/js/jquery.min.js')?>"></script>
	<!-- js -->
		
	<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
	<script src="<?=base_url('assets/js/bootstrap.js')?>"></script>


	<?php 
		switch ($data['page']):
			case 'home':
	?>

		<!-- flexisel-js -->
		<script type="text/javascript" src="<?=base_url('assets/js/jquery.flexisel.js')?>"></script>	
		<script type="text/javascript">
			$(window).load(function() {
				$("#flexiselDemo3").flexisel({
					visibleItems:1,
					animationSpeed: 1000,
					autoPlay: true,
					autoPlaySpeed: 5000,    		
					pauseOnHover: true,
					enableResponsiveBreakpoints: true,
					responsiveBreakpoints: { 
						portrait: { 
							changePoint:480,
							visibleItems:1
						}, 
						landscape: { 
							changePoint:640,
							visibleItems:1
						},
						tablet: { 
							changePoint:768,
							visibleItems:1
						}
					}
				});

				$("#recentAd").flexisel({
					visibleItems:1,
					animationSpeed: 500,
					autoPlay: true,
					autoPlaySpeed: 5000,    		
					pauseOnHover: true,
					enableResponsiveBreakpoints: true,
					responsiveBreakpoints: { 
						portrait: { 
							changePoint:480,
							visibleItems:1
						}, 
						landscape: { 
							changePoint:640,
							visibleItems:1
						},
						tablet: { 
							changePoint:768,
							visibleItems:1
						}
					}
				});
			});
		</script>
		
	<!-- Slider-JavaScript -->
		<script src="<?=base_url('assets/js/responsiveslides.min.js');?>"></script>	
		<script>
			$(function () {	
		  		$("#slider").responsiveSlides({
					auto: true,
					pager: false,
					nav: true,
					speed: 500,
					maxwidth: 800,
					namespace: "large-btns"
		  		});
			});
	    </script>
	<!-- //Slider-JavaScript -->
	<?php break; ?>
	

	<?php case 'ad-post': ?>
	<!-- select2 plugin -->
	<link rel="stylesheet" type="text/css" href="<?=base_url(SELECT2_DIR.'select2.min.css')?>" />	
	<script src="<?=base_url(SELECT2_DIR.'select2.min.js')?>"></script>
	<script type="text/javascript">
		
	</script>
	<!--./select2 plugin -->
	
	<!--simpditor plugin -->
	<link media="all" rel="stylesheet" type="text/css" href="<?=base_url(SIMDITOR_DIR.'styles/simditor.css')?>" />
	<script src="<?=base_url(SIMDITOR_DIR.'scripts/mobilecheck.js')?>"></script>
	<script src="<?=base_url(SIMDITOR_DIR.'scripts/module.js')?>"></script>
	<script src="<?=base_url(SIMDITOR_DIR.'scripts/uploader.js')?>"></script>
	<script src="<?=base_url(SIMDITOR_DIR.'scripts/hotkeys.js')?>"></script>
	<script src="<?=base_url(SIMDITOR_DIR.'scripts/simditor.js')?>"></script>
<?php break; ?>


<?php case 'success': ?>
<script type="text/javascript">
	function redirect(){
		var delay = 3000; 
		setTimeout(function(){ window.location = '<?=base_url("classifieds/ad/".$data['ad_id'])?>'; }, delay);
	}
</script>
<?php break; ?>


<?php case 'ad-single': ?>
<!--flexslider-->
	<script src="<?=base_url('assets/js/jquery.flexslider.js');?>"></script>
	<script type="text/javascript">
	// Can also be used with $(document).ready()
	$(document).ready(function() {
	  $('.flexslider').flexslider({
		animation: "slide",
		controlNav: "thumbnails"
	  });
	});
	</script>
<!--./flexslider-->
<?php break; ?>

<?php case 'cat': ?>
<!-- responsive tabs -->
	<script src="<?=base_url('assets/js/easyResponsiveTabs.js');?>"></script>
	<script type="text/javascript">
		$(document).ready(function() {
	    	$('#parentVerticalTab').easyResponsiveTabs({
	        type: 'vertical', //Types: default, vertical, accordion
	        width: 'auto', //auto or any width like 600px
	        fit: true, // 100% fit in a container
	        closed: 'accordion', // Start closed if in accordion view
	        tabidentify: 'hor_1', // The tab groups identifier
	        activate: function(event) { // Callback function if tab is switched
	            	var $tab = $(this);
	            	var $info = $('#nested-tabInfo2');
	            	var $name = $('span', $info);
	            	$name.text($tab.text());
	            	$info.show();
	        	}
	    	});
		});
	</script>
<!-- /responsive tabs -->
<?php break; ?>

<?php case 'ad-by-cat': ?>
<!-- switcher-grid and list alignment -->
<script src="<?=base_url('assets/js/tabs.js');?>"></script>
<script type="text/javascript">
$(document).ready(function () {    
var elem=$('#container ul');      
	$('#viewcontrols a').on('click',function(e) {
		if ($(this).hasClass('gridview')) {
			elem.fadeOut(1000, function () {
				$('#container ul').removeClass('list').addClass('grid');
				$('#viewcontrols').removeClass('view-controls-list').addClass('view-controls-grid');
				$('#viewcontrols .gridview').addClass('active');
				$('#viewcontrols .listview').removeClass('active');
				elem.fadeIn(1000);
			});						
		}
		else if($(this).hasClass('listview')) {
			elem.fadeOut(1000, function () {
				$('#container ul').removeClass('grid').addClass('list');
				$('#viewcontrols').removeClass('view-controls-grid').addClass('view-controls-list');
				$('#viewcontrols .gridview').removeClass('active');
				$('#viewcontrols .listview').addClass('active');
				elem.fadeIn(1000);
			});									
		}
	});
});
</script>
<!-- //switcher-grid and list alignment -->
<!---->
<!-- jquery ui -->
<script type="text/javascript" src="<?=base_url('assets/js/jquery-ui.js');?>"></script>
<script type='text/javascript'>//<![CDATA[ 
$(window).load(function(){
 $( "#slider-range" ).slider({
			range: true,
			min: 0,
			max: 9000,
			values: [ 50, 6000 ],
			slide: function( event, ui ) {  $( "#amount" ).val( "$" + ui.values[ 0 ] + " - $" + ui.values[ 1 ] );
			}
 });
$( "#amount" ).val( "$" + $( "#slider-range" ).slider( "values", 0 ) + " - $" + $( "#slider-range" ).slider( "values", 1 ) );

});//]]>  

</script>
<?php break; ?>

<?php endswitch;?>
	
	<!-- here stars scrolling icon -->
		<script type="text/javascript">
			$(document).ready(function() {
				$().UItoTop({ easingType: 'easeOutQuart' });
									
			});
		</script>
		<script type="text/javascript" src="<?=base_url('assets/js/move-top.js')?>"></script>
		<script type="text/javascript" src="<?=base_url('assets/js/easing.js')?>"></script>
		<script type="text/javascript">
			jQuery(document).ready(function($) {
				$(".scroll").click(function(event){		
					event.preventDefault();
					$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
				});
			});
		</script>
	<!-- //here ends scrolling icon -->
	<script type="text/javascript" src="<?=base_url('assets/js/site.js')?>"></script
</body>		
</html>