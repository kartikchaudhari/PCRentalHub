<?php 
	function getSellerName($SellerId){
		$ci=&get_instance();
        $ci->load->model('SellerModel');
        
        $data=$ci->SellerModel->getSellerInfo($SellerId);
        return $data['username'];
	}

	function getSellerInfoById($SellerId){
		$ci=&get_instance();
        $ci->load->model('SellerModel');
        
        $data=$ci->SellerModel->getSellerInfo($SellerId);
        return $data;
	}

	function egtAdvertiserContact($SellerId){
		$ci=&get_instance();
        $ci->load->model('SellerModel');
        
        $data=$ci->SellerModel->getSellerInfo($SellerId);
        return $data;
	}


	function getAdCount($SellerId){
		$ci=&get_instance();
        $ci->load->model('SellerModel');
        
        $data=$ci->SellerModel->pullAdCount($SellerId);
        return $data['ad_count'];	
	}

	function getPendingAdCount($SellerId){
		$ci=&get_instance();
        $ci->load->model('SellerModel');
        
        $data=$ci->SellerModel->pullPandingAdCount($SellerId);
        return $data['pending_ad_count'];	
	}

	function getHiddenAdCount($SellerId){
		$ci=&get_instance();
        $ci->load->model('SellerModel');
        
        $data=$ci->SellerModel->pullHiddenAdCount($SellerId);
        return $data['hidden_ad_count'];
	}

?>