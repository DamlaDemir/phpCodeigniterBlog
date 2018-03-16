<?php


class anasayfa_controller extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		
		$this->load->helper('url');
        $this->load->helper('form');
        $this->load->model('anasayfa_model');
        $this->load->library('session');
 	
	}
	
	function index(){
		
		if(!empty($this->session->id)){
			$id=$this->session->id;

			$result=$this->anasayfa_model->bilgileriGetir($id);
          		
          	$dataArray=array("bilgiler"=>$result);
    
          	$this->load->view("anasayfa",$dataArray);
		}
		else
		{
			redirect("login_controller/index");
		}
	}
}
?>