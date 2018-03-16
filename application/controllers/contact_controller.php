<?php

class contact_controller extends CI_Controller
{
	function __construct()
	{
		parent::__construct();

	
	}

	function index()
	{
		$this->load->view("contact");
	}

	public function mailGonder()
	{
		if(isset($_POST['mailGonder']))
		{
			$this->form_validation->set_rules('name','name','required');
			$this->form_validation->set_rules('email','email','required');
			$this->form_validation->set_rules('phone','phone','required');
			$this->form_validation->set_rules('message','message','required');
			if($this->form_validation->run()==TRUE){
			
			    $config=array(
				"protocol"=>"smtp",
				"smtp_host"=>"ssl://smtp.gmail.com",
				"smptp_port"=>"587",
				"smtp_user"=>"damlanin.blogu@gmail.com",
				"smtp_pass"=>"01122014Db",
				"starttls"=>true,
				"charset"=>"utf-8",
				"mailtype"=>"html",
				"wordwrap"=>true,
				"newline"=>"\r\n"
				);

			$this->load->library("email",$config);
            $name=$this->input->post('name');
            $email=$this->input->post('email');
            $phone=$this->input->post('phone');
            $message=$this->input->post('message');

		
			$this->email->from("damlanin.blogu@gmail.com");
			$this->email->to("dmldemirr@gmail.com");
			$this->email->subject("Konu");
			$this->email->message("sdgdsgdsgsgdsgs");
			$send=$this->email->send();
			if($send)
			{
					echo "BAŞARILI";
			}
			else
			{
					echo "BAŞARISIZ";
					echo $this->email->print_debugger();
			}
	}

  }
	}
}
?>