<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Classifieds extends My_Controller {

	public function __construct() {
  		parent::__construct();
  		$this->load->helper('city');
  		$this->load->model(array('ClassifiedsModel','CategoryModel','SellerModel'));
	}

	public function index()
	{
		
	}

	public function createNew(){
		$CategoryData=$this->CategoryModel->getAllCategoriesForDropDown();
		$this->load->view('classifieds/create',['categories'=>$CategoryData]);
	}

	public function ad_published_success(){
		if($this->session->flashdata('rs_created_ad_id')){
			$ad_id=$this->session->flashdata('rs_created_ad_id');
			$ad_slug=$this->getSlug($ad_id);

			//ad_data array
			$ad_data=array('ad_id'=>$ad_id,'ad_slug'=>$ad_slug);
			$this->load->view('classifieds/success',['ad_data'=>$ad_data]);
		}else{
			echo "Expired";
		}
	}

	/*
		display single ad
	 */
	public function ad($id=null,$slug=null){
		if ($id!=null) {
			$ad_data=$this->ClassifiedsModel->pullNewClassifiedData($id,$slug);
			if (!empty($ad_data)) {
				$this->load->view('classifieds/single',['ad_data'=>$ad_data]);	
			}
		}
		else{	
			show_404();
		}
	}

	/*
	*	display ad(s) by type and categories
	 */
	public function ads($catId=null,$type=null){
		$data=array();
		if ($catId!=null && $type!=null) {
			switch ($type) {
				case 'all':
					$data=$this->ClassifiedsModel->pullClassifiedsByCategory($catId);
					$cat_name=$this->CategoryModel->pullCategoryName($catId);
					$featurd_ads=$this->ClassifiedsModel->pullFeaturedClassifiedsByCategory($catId);
				break;
				
				case 'recent':
					$data['type']='recent';
					$data['cat_id']=$catId;
				break;

				case 'popular':
					$data['type']='popular';
					$data['cat_id']=$catId;
				break;
				
				default:
					# display all classifieds
					$data['type']='all';
					$data['cat_id']=$catId;
				break;
			}
		}

		$this->load->view('classifieds/list',['ads_data'=>$data,'cat_title'=>$cat_name['cat_name'],'featurd_ads'=>$featurd_ads]);
	}

	/*
	* display ad(s) by 
	 */

	public function keyword($keyword=null){

	}

/*
* Form Action methods
 */
	public function doAddNewClassified(){
		if ($this->input->post()) {
			
			//if user already exxist then sumit the ad
			if ($this->session->userdata('rs_seller_id')) {
				$AdData=array();
				$AdData['user_id']=$this->session->userdata('rs_seller_id');
				$AdData['product_name']=$this->input->post('ad_title');
				$AdData['slug']=$this->makeSlug($this->input->post('ad_title'));
				$AdData['description']=$this->input->post('description');
				$AdData['category']=$this->input->post('cat');
				$AdData['price']=$this->input->post('price');
				$AdData['phone']=$this->input->post('phone');
				$AdData['hide_phone']=($this->input->post('phone_hide'))?1:0;
				$AdData['city']=$this->input->post('ad_city');
				$AdData['latlong']=getCityLatLong($this->input->post('ad_city'));
				$AdData['tag']=$this->input->post('tags');

				if (isset($_FILES['ad_images'])) {
					$file_name_array = array();
        			$count = count($_FILES['ad_images']['size']);
        			foreach($_FILES as $key=>$value){
        				for($s=0; $s<=$count-1; $s++) {
				        	$_FILES['userfile']['name']=$value['name'][$s];
					        $_FILES['userfile']['type']    = $value['type'][$s];
					        $_FILES['userfile']['tmp_name'] = $value['tmp_name'][$s];
					        $_FILES['userfile']['error']       = $value['error'][$s];
					        $_FILES['userfile']['size']    = $value['size'][$s];   
				        
					        $config['upload_path'] = './'.AD_IMAGE_PATH;
			            	$config['allowed_types'] = 'gif|jpg|png';
			            	$config['max_size']    = '100';
			        		$config['encrypt_name']=TRUE;

			        		$this->load->library('upload', $config);
					        $this->upload->do_upload();
					        $data = $this->upload->data();
					        $file_name_array[] = $data['file_name'];
		            	}
            			$AdData['screen_shot']=implode(',', $file_name_array);
            		}
				}
				else{
					$this->session->set_flashdata('rs_msg', '<div class="alert alert-warning" role="alert">You will need to upload atleast one image for your advertise.</div>');
					return redirect('post-ad');
				}
				
            	//insert the advertise data to db
            	$created_ad_id=$this->ClassifiedsModel->insertNewClassified($AdData);
            	
            	if ($created_ad_id>0) {
            			$this->session->set_flashdata('rs_created_ad_id', $created_ad_id);
            			return redirect('classifieds/ad_published_success');
            	}
            	else{
            		$this->session->set_flashdata('rs_msg', '<div class="alert alert-danger" role="alert">An error occured while creating your advertisement</div>');
            		return redirect('post-ad');
            	}
			}
			else{
				
				//or else register  that user and post the classified
				$user_data['username']=trim($this->input->post('seller_name'));
				$user_data['email']=trim($this->input->post('seller_email'));
				$user_data['user_type']='seller';
				$user_data['status']='1';
				$seller_id=$this->SellerModel->insertSellerdataInitial();
				if($seller_id>0){//if user inserted successfully
					 
					//create user session
					$this->session->set_userdata('rs_seller_id',$seller_id);

					//then submit ad
					$AdData=array();
					$AdData['user_id']=$this->session->userdata('rs_seller_id');
					$AdData['product_name']=$this->input->post('ad_title');
					$AdData['slug']=$this->makeSlug($this->input->post('ad_title'));
					$AdData['description']=$this->input->post('description');
					$AdData['category']=$this->input->post('cat');
					$AdData['price']=$this->input->post('price');
					$AdData['phone']=$this->input->post('phone');
					$AdData['hide_phone']=($this->input->post('phone_hide'))?1:0;
					$AdData['city']=$this->input->post('ad_city');
					$AdData['latlong']=getCityLatLong($this->input->post('ad_city'));
					$AdData['tag']=$this->input->post('tags');

					//upload ad images
					if (isset($_FILES['ad_images'])) {
						$file_name_array = array();
        				$count = count($_FILES['ad_images']['size']);
	        			foreach($_FILES as $key=>$value){
	        				for($s=0; $s<=$count-1; $s++) {
					        	$_FILES['userfile']['name']=$value['name'][$s];
						        $_FILES['userfile']['type']    = $value['type'][$s];
						        $_FILES['userfile']['tmp_name'] = $value['tmp_name'][$s];
						        $_FILES['userfile']['error']       = $value['error'][$s];
						        $_FILES['userfile']['size']    = $value['size'][$s];   
					        
						        $config['upload_path'] = './'.AD_IMAGE_PATH;
				            	$config['allowed_types'] = 'gif|jpg|png';
				            	$config['max_size']    = '100';
				        		$config['encrypt_name']=TRUE;

				        		$this->load->library('upload', $config);
						        $this->upload->do_upload();
						        $data = $this->upload->data();
						        $file_name_array[] = $data['file_name'];
			            	}
	            			$AdData['screen_shot']=implode(',', $file_name_array);
	            		}
					}
					else{
						$this->session->set_flashdata('rs_msg', '<div class="alert alert-warning" role="alert">You will need to upload atleast one image for your advertise.</div>');
						return redirect('post-ad');
					}
					
					//insert the advertise data to db
            		$created_ad_id=$this->ClassifiedsModel->insertNewClassified($AdData);
	            	if ($created_ad_id>0) {
            			$this->session->set_flashdata('rs_created_ad_id', $created_ad_id);
            			return redirect('classifieds/ad_published_success');
	            	}
	            	else{
	            		$this->session->set_flashdata('rs_msg', '<div class="alert alert-danger" role="alert">An error occured while creating your advertisement</div>');
	            		return redirect('post-ad');
	            	}

				}
				else{
					$this->session->set_flashdata('rs_msg', '<div class="alert alert-danger" role="alert">We are unable to register you as a seller, due to that we are unable to accept your advertisement.</div>');
	            		return redirect('post-ad');
				}
			}
		}
		else{
			show_404();
		}
	}


/*
	utility methods
 */
	public function makeSlug($text){
		$slug=strtolower(implode('-',explode(' ',$text)));
		return $slug;
	}

	public function getSlug($ad_id){
		$slug=$this->ClassifiedsModel->pullSlug($ad_id);
		return $slug;
	}

	public function getLatestProduct($catId){

	}

}

/* End of file classifieds.php */
/* Location: ./application/controllers/classifieds.php */