<?php

class post_controller extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
        $this->load->model("post_model");
	
	}

	function index()
	{
			if(!empty($this->session->id)){
			$id=$this->session->id;

			$result=$this->post_model->sonMakaleIdBul($id);           
          	
          	foreach ($result as $b) {
          		 $sonuc=$this->post_model->sonMakaleyiBul($b->makaleId);
          		 $yorum=$this->post_model->yorumlariGetir($b->makaleId);
          	}
            $dataArray=array("makaleBilgileri"=>$sonuc,
            	             "yorumBilgileri"=>$yorum
            	             );
		    $this->load->view("post",$dataArray);
		}
    
	}
		

	

	public function makaleYayinla($makaleId)
	{
      $result=$this->post_model->makaleBilgileriniGetir($makaleId);
      $result2=$this->post_model->yorumlariGetir($makaleId);
      
      	   $dataArray=array("makaleBilgileri"=>$result,
      	                "yorumBilgileri"=>$result2 );
      
   

      $this->load->view("post",$dataArray);
	}


	public function yorumKontrolEt($makaleId)
	{
			if(isset($_POST['commentSend']))
		{

			$this->form_validation->set_rules('commentName','commentName','required');
			$this->form_validation->set_rules('commentEmail','commentEmail','required');
			$this->form_validation->set_rules('commentMessage','commentMessage','required');
			 if($this->form_validation->run()==TRUE){

			$formData =array (
           'yorumYapanAd'=>$this->input->post('commentName'),
           'yorumYapanMail'=>$this->input->post("commentEmail"),
           'yorumYapanYorum'=>$this->input->post("commentMessage"),
           'makaleId'=>$makaleId
           );
			$this->post_model->yorumEkle($formData);
			redirect("post_controller");
       }


		}

	}
}
?>