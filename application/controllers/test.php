<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Test extends My_Controller {

	function __construct()
    {
        parent::__construct();
        $this->load->helper(array('form', 'url'));
    }

    public function a(){
    	$this->load->model('ClassifiedsModel');
    	echo "<pre>";
    	print_r($this->ClassifiedsModel->pullProductCountByCategory(9));
    }

    public function b(){
       
    }


}

/* End of file test.php */
/* Location: ./application/controllers/test.php */