<?php

class kayit_controller extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		$this->load->model("kayit_model");
		 $this->load->helper('url');
        $this->load->library('form_validation');
	
	}

	function index()
	{
		$this->load->view("kayit");
	}

	public function kontrolEt()
	{
		if(isset($_POST['kayit']))
		{
			$this->form_validation->set_rules('username','Username','required');
			$this->form_validation->set_rules('password','Password','required');
			$this->form_validation->set_rules('first_name','Name','required');
			$this->form_validation->set_rules('last_name','Surname','required');
			$this->form_validation->set_rules('email','E-mail','required');
			$this->form_validation->set_rules('city','City','required');
			$this->form_validation->set_rules('address','Adress','required');
			$this->form_validation->set_rules('website','Website','required');
			$this->form_validation->set_rules('comment','Comment','required');
			$this->form_validation->set_rules('phone','Phone','required');
           
         
	     if($this->form_validation->run()==TRUE){
			$formData =array (
           'ad'=>$this->input->post('first_name'),
           'soyad'=>$this->input->post("last_name"),
           'email'=>$this->input->post("email"),
           'sifre'=>$this->input->post("password"),
           'kullaniciAdi'=>$this->input->post("username"),
           'telefon'=>$this->input->post("phone"),
           'sehir'=>$this->input->post("city"),
           'adres'=>$this->input->post("address"),
           'website'=>$this->input->post("website"),
           'kendiniTanit'=>$this->input->post("comment"),
           'ulke'=>$this->input->post("country"),
           'cinsiyet'=>$this->input->post("gender"),


           );

            $this->kayit_model->uyeEkle($formData);
            redirect("login_controller/index");

		}

		
        }

		else 
		{
				$data['validation_error']="Tüm Alanları Doldurun";
				$this->load->view('login',$data);
		}
	}

}
?>