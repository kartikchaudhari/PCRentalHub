    <!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
<title><?=$data['title']?> :: <?=$this->lang->line('system_name');?></title>

	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta property="og:title" content="How to change the address bar color in Chrome, Firefox, Opera, Safari" />
    <meta property="og:description" content="How to change the address bar color in Chrome, Firefox, Opera, Safari" />
    <meta property="og:url" content="http://webdevelopmentscripts.com/64-how-to-change-the-address-bar-color-in-chrome-firefox-opera-safari" />
    <meta property="og:image" content="http://webdevelopmentscripts.com/post-images/685b-change-browser-address-bar-color-chrome-android.jpeg" />

<?php 
	switch ($data['page']):
			case 'home':
 ?>
    <meta property="fb:app_id" content="" />
    <meta property="og:site_name" content="<?=$this->lang->line('system_name');?>" />
    <meta property="og:locale" content="en_US" />
    <meta property="og:url" content="<?=base_url();?>" />
    <meta property="og:title" content="<?=$data['title']?> ::<?=$this->lang->line('system_name');?> " />
    <meta property="og:description" content="<?=$data['title']?>" />
    <meta property="og:type" content="article" />
    
    <meta property="article:author" content="#" />
    <meta property="article:publisher" content="#" />
    <meta property="og:image" content="" />
    <meta property="og:image:width" content="800" />
    <meta property="og:image:height" content="800" />
    
    

    <meta property="twitter:card" content="summary">
    <meta property="twitter:title" content="<?=$data['title']?>">
    <meta property="twitter:description" content="<?=$data['title']?>">
    <meta property="twitter:domain" content="<?=$data['title'];?>">
<?php endswitch; ?>

<!-- bootstrap-CSS -->
<link rel="stylesheet" href="<?=base_url('assets/css/bootstrap.min.css');?>">

<!-- style.css -->
<link href="<?=base_url('assets/css/style.css');?>" rel="stylesheet" type="text/css" media="all" />

<!-- top and left sidebar -->
<link rel="stylesheet" href="<?=base_url('assets/css/font-awesome.min.css');?>" /><!-- fontawesome-CSS -->
<link rel="stylesheet" href="<?=base_url('assets/css/menu_sideslide.css');?>" type="text/css" media="all">

<!--fonts-->
<link href='//fonts.googleapis.com/css?family=Ubuntu+Condensed' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>
<!--//fonts-->  

<?php 
	switch ($data['page']):
			case 'home':
?>
<!-- flexslider-CSS -->
  <link rel="stylesheet" href="<?=base_url('assets/css/flexslider.css');?>" type="text/css" media="screen" />
<?php break; ?>

<?php case 'ad-post':?>
<link href="<?=base_url('assets/css/loader.css');?>" type="text/css" rel="stylesheet">
<script type="text/javascript" src="<?=base_url('assets/js/jquery.min.js')?>"></script>
<script>
	$('body').toggleClass('loaded');
		$(document).ready(function() {
    	setTimeout(function(){
        	$('body').addClass('loaded');
    	}, 3000);

	});
</script>
<?php break; ?>

<?php case 'ad-single' ?>
  <link rel="stylesheet" type="text/css" href="<?=base_url('assets/css/flexslider.css');?>">
<?php break; ?>

<?php case 'cat' ?>
<!-- responsive tabs -->
<link rel="stylesheet" type="text/css" href="<?=base_url('assets/css/easy-responsive-tabs.css');?>" />
<!-- /responsive tabs -->
<?php break; ?>

<?php case 'ad-by-cat': ?>
<link rel="stylesheet" type="text/css" href="<?=base_url('assets/css/jquery-ui1.css');?>">
<?php break;?>

<?php endswitch;?>

<!-- Navigation-CSS -->
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- //meta tags -->
</head>