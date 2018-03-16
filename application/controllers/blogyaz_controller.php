<?php


class blogyaz_controller extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		
		 $this->load->helper('url');
        $this->load->helper('form');
        $this->load->model('blogyaz_model');
        $this->load->library('session');
        $this->load->library('form_validation');
        $this->load->model('anasayfa_model');
        $this->load->model('home_model');
 	
	}
	
	function index(){
		 $id=$this->session->id;

			$result=$this->anasayfa_model->bilgileriGetir($id);


			$result2=$this->home_model->makaleBilgileriniGetir($id);
          		
          	$dataArray=array("bilgiler"=>$result,
          		             "makaleBilgileri"=>$result2
  		    );
    
          	$this->load->view("blogyaz",$dataArray);


	}


	public function kontrolEt()
	{

		if(isset($_POST['blogGonder']))
		{
			$this->form_validation->set_rules('makaleBaslik','makaleBaslik','required');
			$this->form_validation->set_rules('makaleIcerik','makaleIcerik','required');
	
           if(!empty($this->session->id)){
			$uyeId=$this->session->id;
		     }
         
	     if($this->form_validation->run()==TRUE){

	     $config=array(
		'upload_path'=>'./upload/',
		'allowed_types'=>'jpg|jpeg|png|bmp',
		'max_size'=>0,
		'filename'=>url_title($this->input->post('blogResim')),//resim->resmi seçeceğimiz inputun name'i
		'encrypt_name'=>true
			);

		$this->load->library('upload',$config);

		if($this->upload->do_upload('blogResim')){
			$file_name=$this->upload->file_name;          
		}
	     	$date=date('d F Y l');
			$formData =array (
           'makaleBaslik'=>$this->input->post('makaleBaslik'),
           'makaleIcerik'=>$this->input->post("makaleIcerik"),
           'uyeId'=>$uyeId,
           'tarih'=>$date,
           'makaleResim'=>$file_name
           );

			$this->blogyaz_model->blogYazisiEkle($formData);
            redirect("home_controller/index");
		}
			else
			{
				echo '<script>alert("Lutfen bos bırakma !");</script>';
				redirect("blogyaz_controller");
			}
		
        }

		else 
		{
				$data['validation_error']="Tüm Alanları Doldurun";
				$this->load->view('login',$data);
		}
	}




	public function blogYazisiSil($makaleId)
	{
       
         	$this->blogyaz_model->blogYazisiSil($makaleId);
		    redirect("post_controller");
         
		
	}
}
?>