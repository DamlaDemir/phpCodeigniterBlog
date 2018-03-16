<?php


class login_controller extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		$this->load->model("login_model");
		$this->load->helper('url');
    $this->load->library('form_validation');
    $this->load->library('session');
 	
	}
	
	function index(){
		$this->load->view('login_view');
	}

	public function GirisKontrol(){

		if(isset($_POST['giris']))
		{
         
        	$this->form_validation->set_rules('Username','Username','required');
			    $this->form_validation->set_rules('Password','Password','required');
			
            if($this->form_validation->run()==TRUE){
            	$username=$this->input->post("Username");
			        $password=$this->input->post("Password");
			        $result=$this->login_model->girisYap($username,$password);
			   
                if($result==1)
          		{
          			
          			$dataArray=$this->login_model->idBul($username);
          			foreach ($dataArray as $d) {
          				$id=$d->uyeId;
          			}

          			$sessionData=array('id'=>$id);
          			$this->session->set_userdata($sessionData);
          			
          			redirect("anasayfa_controller");
           		}
            	else
           		{
            		echo '<script>alert("Kullanıcı adı veya şifre hatalı");</script>';
                //redirect("login_controller");
            	}
            }

            else {
            	echo '<script>alert("Boş bırakma!");</script>';
               //redirect("login_controller");
            }     

	}
	}


	public function logOut(){
		session_destroy();
	}

}
?>