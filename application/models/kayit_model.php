<?php


class kayit_model extends CI_Model
{
	function __construct()
	{
		parent::__construct();
		$this->load->database();
 	
	}

	function index(){
		
	}

	public function uyeEkle($formData){
		
		$this->db->insert('uyeler',$formData);
		
	}
}



?>