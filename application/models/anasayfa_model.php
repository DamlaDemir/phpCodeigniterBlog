<?php


class anasayfa_model extends CI_Model
{
	function __construct()
	{
		parent::__construct(); 	
	}

	function index(){	

	}

	public function bilgileriGetir($id)
	{
		$this->db->where('uyeId',$id);
		$query=$this->db->get('uyeler');

		if($query->num_rows()>0)
		{
			return $query->result();
		}
		else
		{
			return 0;
		}		
	}
}

?>