<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cities extends My_Controller {

	public function __construct() {
  		parent::__construct();
	}


	public function searchCityFromCountry(){
    	$this->load->model('CitiesModel');

    	$dataString = $this->input->get('q') ? $this->input->get('q'): "";
        $sortname = 'IN'; //check_user_country($config);

        $perPage = 10;
        $page = isset($_GET['page']) ? $_GET['page'] : "1";
        $start = ($page-1)*$perPage;
        if($start < 0) $start = 0;

        $total=$this->CitiesModel->getCityCountSimilarToGivenQuqey($dataString,$sortname);
        $result = $this->CitiesModel->getCityFromCountry($dataString,$sortname,$start,$perPage);
        echo json_encode($result);
	}
}

/* End of file cities.php */
/* Location: ./application/controllers/cities.php */