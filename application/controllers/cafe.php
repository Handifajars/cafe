<?php
class cafe extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->model('m_data');
	}
	public function index()
	{
		$data['maps'] = $this->m_data->data_map()->result_array();
		$this->load->view('v_home',$data);
	}
	public function map()
	{
		$data['maps'] = $this->m_data->data_map()->result_array();
		$this->load->view('v_maps',$data);
	}	
	function reservasi()
	{
		$nama = $this->session->userdata("nama");
		$tempat = $this->input->post('tempat');
		$jumlah = $this->input->post('jumlah');
		$waktu = $this->input->post('waktu');
		$reservasi = array(
			'nama_pemesan' => $nama,
			'tempat' => $tempat,
			'jumlah_orang' => $jumlah,
			'waktu' => $waktu
		);
		$this->m_data->input_data($reservasi, 'reservation');
		redirect('cafe/index');
	}
	public function resto()
	{
		$data['maps'] = $this->m_data->data_map()->result_array();
		$data['resto'] = $this->m_data->data_resto()->result();
		$this->load->view('restoran/v_resto',$data);
	}
	public function delivery()
	{
		$data['maps'] = $this->m_data->data_map()->result_array();
		$data['resto'] = $this->m_data->data_resto()->result();
		$this->load->view('restoran/v_delivery',$data);
	}
	public function up()
	{
		$this->load->view('v_upload');
	}
}
?>
