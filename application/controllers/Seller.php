<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Seller extends My_Controller {
	public function __construct() {
  		parent::__construct();
  		$this->load->model('SellerModel');
	}

	public function index(){
		$data['title']='Seller Zone';
		$this->load->view('seller/index',['data'=>$data]);		
	}

	public function login(){
		$data['title']='Seller Login';
		$this->load->view('seller/login',['data'=>$data]);
	}



	public function publicProfile(){
		
	}

	public function dashboard(){
		if ($this->session->userdata('rs_seller_id')) {
			$userId=$this->session->userdata('rs_seller_id');
			$data['title']='Saler Dashboard';
			$data['page']='dashboard';
			$data['seller_info']=$this->SellerModel->getSellerInfo($userId);
			$this->load->view('seller/includes/head',['data'=>$data]);
			$this->load->view('seller/dashboard');
			$this->load->view('seller/includes/footer');
		}else{
			$this->session->set_flashdata('rs_msg', '<div class="alert alert-danger" role="alert">
       				 <strong>Access Denied !</strong> you need to login first to access yur dashboard.
      				</div>');

			return redirect('seller/login');
		}
		
	}

	public function myads(){
		if ($this->session->userdata('rs_seller_id')) {
			
			$data['title']='My Ads';
			$data['page']='my-ads';
			$this->load->view('seller/includes/head',['data'=>$data]);


			//pull and store seller classifieds into array
			$ads=$this->SellerModel->pullAllAdds($this->session->userdata('rs_seller_id'));

			$this->load->view('seller/myads',['ads'=>$ads]);
			$this->load->view('seller/includes/footer',['data'=>$data]);	
		}
		else{
			$this->session->set_flashdata('rs_msg', '<div class="alert alert-danger" role="alert">
       				 <strong>Access Denied !</strong> you need to login first to access yur dashboard.
      				</div>');

			return redirect('seller/login');
		}
	}

	public function pendingads(){
		if ($this->session->userdata('rs_seller_id')) {
			
			$data['title']='Pending Ads';
			$data['page']='my-ads';
			$this->load->view('seller/includes/head',['data'=>$data]);


			//pull and store seller classifieds into array
			$ads=$this->SellerModel->pullPendingAds($this->session->userdata('rs_seller_id'));

			$this->load->view('seller/pendingads',['ads'=>$ads]);
			$this->load->view('seller/includes/footer',['data'=>$data]);	
		}
		else{
			$this->session->set_flashdata('rs_msg', '<div class="alert alert-danger" role="alert">
       				 <strong>Access Denied !</strong> you need to login first to access yur dashboard.
      				</div>');

			return redirect('seller/login');
		}
	}

	public function hiddenads(){
		if ($this->session->userdata('rs_seller_id')) {
			
			$data['title']='Hidden Ads';
			$data['page']='my-ads';
			$this->load->view('seller/includes/head',['data'=>$data]);


			//pull and store seller classifieds into array
			$ads=$this->SellerModel->pullHiddenAds($this->session->userdata('rs_seller_id'));

			$this->load->view('seller/hiddenads',['ads'=>$ads]);
			$this->load->view('seller/includes/footer',['data'=>$data]);	
		}
		else{
			$this->session->set_flashdata('rs_msg', '<div class="alert alert-danger" role="alert">
       				 <strong>Access Denied !</strong> you need to login first to access yur dashboard.
      				</div>');

			return redirect('seller/login');
		}
	}


	public function plans(){
		$data['title']='Hidden Ads';
			$data['page']='my-ads';
			$this->load->view('seller/includes/head',['data'=>$data]);



			$this->load->view('seller/memmbership_plans');
			$this->load->view('seller/includes/footer',['data'=>$data]);	
	}




	public function doSellerRegister(){
		if ($this->input->post()) {
			$user_data['username']=$this->input->post('username');
			$user_data['password']=$this->input->post('password');
			$user_data['user_type']='seller';
			$user_data['email']=$this->input->post('email');
			$user_data['status']='0';
			$user_data['view']=0;			
			$user_data['name']=$this->input->post('fullname');

			$register_status=$this->SellerModel->insertSellerdataInitial($user_data);


			if ($register_status>0) {
				$this->session->set_userdata('rs_seller_id',$register_status);
				return redirect('seller/dashboard');
			}else{
				$this->session->set_flashdata('msg', '<div class="alert alert-danger" role="alert">
       				 <strong>Oh snap!</strong> an error occured whilre registration.
      				</div>');
				return redirect('seller');
			}

			
		}
	}


	public function doSellerLogin(){
		if (isset($_POST['btnSubmit'])) {
			$email=$this->input->post('email');
			$password=$this->input->post('password');
			$isRemember=$this->input->post('remember');

			$sellerData=$this->SellerModel->loginSeller($email,$password);

			if (!empty($sellerData) && count($sellerData)>0) {
				$this->session->set_userdata('rs_seller_id',$sellerData['id']);
				return redirect('seller/dashboard');
			}
			else{
				$this->session->set_flashdata('rs_msg', '<div class="alert alert-danger" role="alert">
       				 <strong>Sorry !</strong> No user found with the given credentials.
      				</div>');
				return redirect('seller/login');
			}
		}
	}

	


	public function doCheckUsernameAvailabilty(){
		if (isset($_POST['username'])) {
		
			$uname=$this->input->post('username');
			$status =$this->SellerModel->checkUserName($uname);

			if ($status==true) {
				echo "<strong style='color:red;'>Username already exist, plese try something different.</strong>";
			}
			else{
				echo "<strong style='color:green;'>Userame is available.</strong>";
			}
			
		}
		else{
			echo "<strong style='color:red;'>Username Required.</strong>";
		}
	}

	public function doCheckEmailAvailabilty(){
		if (isset($_POST['seller_email'])) {
		
			$email=$this->input->post('seller_email');
			$status =$this->SellerModel->checkEmail($email);

			if ($status==true) {
				echo "<strong style='color:red;'>email already exist, plese try something different.</strong";
			}else{
				echo "<strong style='color:green;'>email is available.</strong>";
			}
			
		}else{
			echo "Email Required";
		}
	}


	public function resendConfirmationEmail(){
		if (isset($_POST['seller_id'])) {
			echo "got you seller=".$this->input->post('seller_id');
		}
	}


	/*
		seller logout
	 */
	public function logout(){
		$this->session->sess_destroy();
		return redirect('home');
	}


}

/* End of file seller.php */
/* Location: ./application/controllers/seller.php */
?>