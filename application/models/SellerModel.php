<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class SellerModel extends My_Model {
	//method for sellere registration
	public function insertSellerdataInitial($SellerInitialData){
		$this->db->insert('user', $SellerInitialData);
		return $this->db->insert_id();	
	}

	//method for login
	public function loginSeller($email,$password){
		$sql="SELECT id FROM user WHERE user_type='seller' AND status='1' AND email='$email' AND password='$password'";
		$query=$this->db->query($sql);
		return $query->row_array();
	}

	//get seller info
	public function getSellerInfo($sellerId){
		$sql="SELECT * FROM user WHERE user_type='seller' AND id=$sellerId";
		$query=$this->db->query($sql);
		return $query->row_array();
	}

	public function checkUserName($uname){
		$sql="SELECT * FROM user WHERE username='$uname'";
		$query=$this->db->query($sql);
		return $query->result_array();
		
	}

	//check email 
	public function checkEmail($email){
		$sql="SELECT * FROM user WHERE email='$email'";
		$query=$this->db->query($sql);
		return $query->result_array();
	}


	//pull classifieds data
	public function pullAllAdds($sellerId){
		$sql="SELECT * FROM product WHERE product.user_id=$sellerId";
		$query=$this->db->query($sql);
		return $query->result_array();
	}

	//counts for seller dashboard sidebar
	public function pullAdCount($sellerId){
		$sql="SELECT count(id) as 'ad_count' FROM product WHERE product.user_id=$sellerId";
		$query=$this->db->query($sql);
		return $query->row_array();
	}

	//pull panding classifieds data
	public function pullPendingAds($sellerId){
		$sql="SELECT * FROM product WHERE product.user_id=$sellerId AND status='pending'";
		$query=$this->db->query($sql);
		return $query->result_array();
	}

	//count pending classifieds
	public function pullPandingAdCount($sellerId){
		$sql="SELECT count(id) as 'pending_ad_count' FROM product WHERE product.status='pending' AND product.user_id=$sellerId";
		$query=$this->db->query($sql);
		return $query->row_array();
	}


	//pull hidden classifieds data
	public function pullHiddenAds($sellerId){
		$sql="SELECT * FROM product WHERE product.user_id=$sellerId AND hide='1'";
		$query=$this->db->query($sql);
		return $query->result_array();
	}

	//count hidden classifieds data
	public function pullHiddenAdCount($sellerId){
		$sql="SELECT count(id) as 'hidden_ad_count' FROM product WHERE product.user_id=$sellerId AND hide='1'";
		$query=$this->db->query($sql);
		return $query->row_array();
	}

	

}

/* End of file SellerModel.php */
/* Location: ./application/models/SellerModel.php */