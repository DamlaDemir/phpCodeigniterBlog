<?php


class blogyaz_model extends CI_Model
{
	function __construct()
	{
		parent::__construct();
 	
	}

	function index(){

		
	}
	public function blogYazisiEkle($formData)
	{
	$this->db->insert('makale',$formData);

	}

	public function blogYazisiSil($makaleId)
	{
		 $this->db->delete('makale', array('makaleId' => $makaleId));
	}
}
?>