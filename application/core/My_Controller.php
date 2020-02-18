<?php 
    
    defined('BASEPATH') OR exit('No direct script access allowed');
    
    class My_Controller extends CI_Controller {
    	function __construct(){
    		parent::__construct();
            $this->lang->load('en','english');
            $this->load->helper(array('form','url','security','language','string'));
        }


        public function commonTemplate($data){
            $this->load->view('common/head',['data'=>$data]);
        }

    }
    
    /* End of file Controllername.php */
    
?>