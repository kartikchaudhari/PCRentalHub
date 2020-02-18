<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends My_Controller {
	public function __construct() {
  		parent::__construct();  
	}

	public function index()
	{
		$this->load->model(array('ClassifiedsModel','CategoryModel'));
		
		$popular_ads=$this->ClassifiedsModel->pullAllClassifiedsBasicInfo();
		$categories=$this->CategoryModel->pullCategories();
		
		$data=array('title'=>'Home','page'=>'home');
		$this->commonTemplate($data);
		
		$this->load->view('index',['popular_ads_data'=>$popular_ads,'categories_data'=>$categories]);	
		
	}

	public function signin(){
		$data=array('title'=>'Sign in','page'=>'signin');
		$this->commonTemplate($data);
		$this->load->view('signin');
	}

	public function how(){
		$data=array('title'=>'How it Works','page'=>'how');
		$this->commonTemplate($data);
		$this->load->view('how');
	}
	public function sitemap(){
		$data=array('title'=>'Site Map','page'=>'site_map');
		$this->commonTemplate($data);
		$this->load->view('site_map');
	}
	public function faq(){
		$data=array('title'=>'F.A.Q','page'=>'faq');
		$this->commonTemplate($data);
		$this->load->view('faq');
	}

	public function feedback(){
		$data=array('title'=>'Feedback','page'=>'feedback');
		$this->commonTemplate($data);
		$this->load->view('feedback');
	}

	public function contact(){
		$data=array('title'=>'Contact Us','page'=>'contact');
		$this->commonTemplate($data);
		$this->load->view('contact');
	}

	public function locations(){

	}

	public function terms(){
		$data=array('title'=>'Terms of Use','page'=>'terms');
		$this->commonTemplate($data);
		$this->load->view('terms');		
	}

	public function ps(){

	}

	public function privacy(){

	}

}

/* End of file home.php */
/* Location: ./application/controllers/home.php */
?>