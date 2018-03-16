<?php


class home_model extends CI_Model
{
	function __construct()
	{
		parent::__construct();
 	
	}

	function index(){

		
	}
	public function makaleBilgileriniGetir($id)
	{
		$this->db->where('uyeId',$id);
		$this->db->order_by("makaleId", "desc");//id'ye göre büyükten küçüğe sıralama
		$query=$this->db->get('makale');

		if($query->num_rows()>0){
			return $query->result();
		}
		else
		{
			return 0;
		}
	}
}
?>