<!DOCTYPE html>
<html lang="en">
<head>
  <title><?=$this->lang->line('system_name')?> :: <?=$data['title']?></title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="<?=base_url('assets/css/bootstrap.min.css');?>">
  <link rel="stylesheet" href="<?=base_url('assets/css/sb-admin.css');?>">
  <link rel="stylesheet" href="<?=base_url('assets/css/font-awesome.min.css');?>">
  <?php 
	switch ($data['page']):
			case 'my-ads':
 ?>
	<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css">
 <?php break; ?>
<?php endswitch; ?>  
</head>
<body>