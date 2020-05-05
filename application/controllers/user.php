<?php 

class user extends CI_Controller{

	function __construct(){
		parent::__construct();	
		if($this->session->userdata('status') != "login"){
			redirect(base_url("login"));	
		}
	}
	public function index()
	{
		$this->load->view('v_home');
	}
	public function admin(){
        // $data['m_data']= $this->m_data->get_data();
        $this->load->view('v_admin');
	}
	public function daftaruser(){
		// $data['m_data']= $this->m_data->data_u();
		$this->load->view('v_daftaruser');
	}
}