<?php


class login_model extends CI_Model
{
	function __construct()
	{
		parent::__construct();
 	
	}

	function index(){
		
	}

	public function girisYap($username,$password)
	{
		$this->db->where('kullaniciAdi',$username);
		$this->db->where('sifre',$password);
		$query=$this->db->get('uyeler');
  
		
		if($query->num_rows()>0){
			return 1;
		}
		else
		{
			return 0;
		}
		
	}

  
	public function idBul($username)
	{
		$this->db->where('kullaniciAdi',$username);
		$query=$this->db->get('uyeler')->result();
		return $query;

	}

		
	}




?>