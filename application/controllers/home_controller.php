<?php
class home_controller extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		$this->load->model("anasayfa_model");
		$this->load->model("home_model");			
	}

	function index()
	{
		$id=$this->session->id;
		$result=$this->anasayfa_model->bilgileriGetir($id);
		$result2=$this->home_model->makaleBilgileriniGetir($id);
		$dataArray=array("bilgiler"=>$result,
          		         "makaleBilgileri"=>$result2
  		    			);
    	$this->load->view("home",$dataArray);		   
	}
}

?>