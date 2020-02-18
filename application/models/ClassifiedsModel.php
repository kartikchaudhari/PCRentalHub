<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ClassifiedsModel extends My_Model {
	public function insertNewClassified($classifiedData){
		$this->db->insert('product',$classifiedData);
		return $this->db->insert_id();
	}

	public function pullNewClassifiedData($adId,$slug){
		$sql="SELECT * FROM product WHERE id='$adId' OR slug='$slug'";
		$query=$this->db->query($sql);
		return $query->row_array();
	}

	public function pullSlug($adId){
		$sql="SELECT slug FROM product WHERE id=$adId";
		$query=$this->db->query($sql);
		return $query->row_array();
	}

	public function pullAllClassifiedsBasicInfo(){
		$sql="SELECT id,product_name,slug,price,screen_shot,created_at FROM product WHERE status='active'  ORDER BY created_at DESC LIMIT 0,8";
		$query=$this->db->query($sql);
		return $query->result_array();
	}

	public function pullProductCountByCategory($catId){
		$sql = "SELECT count(id) AS 'product_count' FROM product WHERE category=$catId AND status='active'";
		$query=$this->db->query($sql);
		return $query->row_array();
	}

	public function pullClassifiedsByCategory($catId){
		$sql="SELECT * FROM product WHERE category=$catId AND status='active'";
		$query=$this->db->query($sql);
		return $query->result_array();	
	}

	public function pullFeaturedClassifiedsByCategory($catId){
		$sql="SELECT * FROM product WHERE featured='1' AND highlight='1' AND status='active' AND category=$catId";
		$query=$this->db->query($sql);
		return $query->result_array();	
	}

	public function pullRecentClassifiedByCategory(){}
}


/* End of file ClassifiedsModel.php */
/* Location: ./application/models/ClassifiedsModel.php */