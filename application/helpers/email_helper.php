 <?php
	
	// Send Gmail to another user
	function Send_Mail($data) {
		$ci=&get_instance();
		$config = Array(
		    'protocol' => 'smtp',
		    'smtp_host' => 'ssl://smtp.googlemail.com',
		    'smtp_port' => 465,
		    'smtp_timeout'=>20,
		    'smtp_user' => 'myciapps2018@gmail.com',
		    'smtp_pass' => 'Codeigniter@2018',
		    'mailtype'  => 'html', 
		    'charset'   => 'iso-8859-1'
		);
		$ci->load->library('email', $config);
		$ci->email->set_newline("\r\n");
		$receiver_email = $UserAndOrderInfo['email'];
		$username = $this->lang->line('system_name');
		$subject = $this->lang-line('system_name').' - Email Confirmation'.;
		$message = '';
		// Sender email address
		$ci->email->from($config['smtp_user'], $username);

		// Receiver email address
		$ci->email->to($receiver_email);

		// Subject of email
		$ci->email->subject($subject);

		// Message in email
		$ci->email->message($message);


		if($ci->email->send()){
			//genrate pdf
			//$ci->Dom_pdf->load_view($message);
		   
		   //echo $ci->email->print_debugger();
		}else{
		   //Email Failed To Send
		   echo $ci->email->print_debugger();
		}
		
	}

?>