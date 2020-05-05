<?php
class cafe extends CI_Controller {

	function __construct(){
		parent::__construct();		
	}
	public function index()
	{
		$this->load->view('v_home');
	}
	public function map()
	{
		$this->load->view('v_maps');
	}
	public function resto()
	{
		$this->load->view('restoran/v_resto');
	}
}
?>
