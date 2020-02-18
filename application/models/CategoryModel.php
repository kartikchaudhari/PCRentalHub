<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class CategoryModel extends My_Model {

	public function pullCategories(){
		$query=$this->db->query("SELECT * FROM catagory_main");
		return $query->result_array();
	}

	public function getAllCategoriesForDropDown(){
		$query=$this->db->query("SELECT cat_id,cat_name FROM catagory_main");
		return $query->result_array();
	}

	public function pullCategoryName($catId){
		$query=$this->db->query("SELECT cat_name FROM catagory_main WHERE cat_id=$catId");
		return $query->row_array();
	}

}

/* End of file CategoryModel.php */
/* Location: ./application/models/CategoryModel.php */
?>