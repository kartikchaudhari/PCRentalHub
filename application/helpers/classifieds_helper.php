<?php 
	function getAdCountPerCategory($catId){
		$ci=&get_instance();
        $ci->load->model('ClassifiedsModel');
    	$data=$ci->ClassifiedsModel->pullProductCountByCategory($catId);

    	return ($data['product_count']>1)?$data['product_count'].' Ads':$data['product_count'].' Ad';
	}

	function printProductStatus($status){
		switch ($status) {
			case 'active':
				return '<span class="label label-success">active</span>';
				break;
			
			case 'pending':
				return '<span class="label label-warning">pending</span>';
				break;

			case 'hide':
				return '<span class="label label-info">hide</span>';
				break;
			default:
				# code...
				break;
		}
	}

?>