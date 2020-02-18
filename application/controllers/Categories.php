
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Categories extends My_Controller {

	public function __construct() {
  		parent::__construct(); 
  		$this->load->model('CategoryModel'); 
	}
	public function index(){
		$data=array('title'=>'Categories','page'=>'cat');
		$categories=$this->CategoryModel->pullCategories();
		$this->commonTemplate($data);
		$this->load->view('categories',['categories'=>$categories]);
	}


}

/* End of file categories.php */
/* Location: ./application/controllers/categories.php */