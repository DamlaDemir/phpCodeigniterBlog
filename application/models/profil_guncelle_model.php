<?php


class profil_guncelle_model extends CI_Model
{
	function __construct()
	{
		parent::__construct();
 	
	}

	function index(){
		
	}

	
    public function uyeGuncelle($formData,$id)
    {
    	$this->db->where('uyeId',$id);//1.parametre sutun adı
    	$this->db->update('uyeler', $formData);
	

	}
   


    }




?>