<?php


class profil_guncelle_controller extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		
		 $this->load->helper('url');
        $this->load->helper('form');
        $this->load->model('profil_guncelle_model');
        $this->load->library('session');
         $this->load->library('form_validation');
         $this->load->model('anasayfa_model');
 	
	}
	
	function index(){
		 $id=$this->session->id;

		$result=$this->anasayfa_model->bilgileriGetir($id);
          		
        $dataArray=array("bilgiler"=>$result);
    
         $this->load->view("profil_guncelle",$dataArray);
		

	}


	public function kontrolEt()
	{
		if(isset($_POST['guncelle']))
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

        $config=array(
		'upload_path'=>'./upload/',
		'allowed_types'=>'jpg|jpeg|png|bmp',
		'max_size'=>0,
		'filename'=>url_title($this->input->post('resim')),//resim->resmi seçeceğimiz inputun name'i
		'encrypt_name'=>true
			);

		$this->load->library('upload',$config);

		if($this->upload->do_upload('resim')){
			$file_name=$this->upload->file_name;          
		}
	
		$this->session->set_flashdata('msg','Success!');


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
           'file_name'=>$file_name
   
           );

                
            $id=$this->session->id;
            $this->profil_guncelle_model->uyeGuncelle($formData,$id);
            redirect('anasayfa_controller/index');
       

		}

		
        }
    }






}
?>