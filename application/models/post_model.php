<?php

class post_model extends CI_Model
{
	function __construct()
	{
		parent::__construct();
	}

	function index(){
	
	}

   public function sonMakaleIdBul($id)
   {
   	    $this->db->where('uyeId',$id);//istenilen uye bulunuyor.
   	    $this->db->select_max('makaleId');//istenilen üyeler arasındaki en büyük id bulunuyor.
		$query=$this->db->get('makale');
		
		if($query->num_rows()>0){
			return $query->result();
		}
		else
		{
			return 0;
		}

   }

    public function sonMakaleyiBul($id)
   {
   	    $this->db->where('makaleId',$id);
		$query=$this->db->get('makale');
		
		if($query->num_rows()>0)
		{
			return $query->result();	
		}
		else
		{
			return 0;
		}

   }

   public function yorumlariGetir($makaleId)
   {
	   	 $this->db->where('makaleId',$makaleId);
	   	 $query=$this->db->get('yorum');
	   	  
	   	 if($query->num_rows()>0)
	   	 {
			return $query->result();
		 }
		 else 
		 {
			return 0;
		 }
   }

	public function makaleBilgileriniGetir($id)
	{
		$this->db->where('makaleId',$id);
		$query=$this->db->get('makale');

		if($query->num_rows()>0)
		{
			return $query->result();
		}
		else 
		{
			return 0;
		}
	}

	public function yorumEkle($formData)
	{
		$this->db->insert('yorum',$formData);
	}
}

?>