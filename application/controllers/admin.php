<?php

class admin extends CI_Controller
{

	function __construct()
	{
		parent::__construct();
		$this->load->model('m_data_admin');
		$this->load->model('m_data');
		$this->load->helper('url');
	}

	function index()
	{
		$data['menu'] = $this->m_data_admin->tampil_data()->result();
		$this->load->view('admin/v_admin', $data);
	}
	public function maps()
	{
		$data['maps'] = $this->m_data->data_map()->result_array();
		$this->load->view('admin/v_maps',$data);
	}
	public function restoran()
	{
		$data['resto'] = $this->m_data_admin->tampil_data_resto()->result();
		$this->load->view('admin/v_resto', $data);
	}
	public function delivery()
	{
		$data['delivery'] = $this->m_data_admin->tampil_data_delivery()->result();
		$this->load->view('admin/v_delivery', $data);
	}
	function tambah()
	{
		$data['menu'] = $this->m_data_admin->tampil_data_resto()->result();
		$this->load->view('admin/v_input', $data);
	}
	function tambah_resto()
	{
		$data['menu'] = $this->m_data_admin->tampil_data_resto()->result();
		$this->load->view('admin/v_input_resto', $data);
	}
	function tambah_alamat()
	{
		$this->load->view('admin/v_input_map');
	}
	function tambah_map()
	{
		$nama_resto = $this->input->post('nama_resto');
		$alamat = $this->input->post('alamat');
		$lat = $this->input->post('lat');
		$lng = $this->input->post('lng');
		$maps = array(
			'nama_resto' => $nama_resto,
			'alamat_resto' => $alamat,
			'lat' => $lat,
			'lng' => $lng
		);
		$this->m_data_admin->input_data($maps, 'map');
		redirect('admin/index');
	}


	function _uploadImage()
	{
		$config['upload_path']          = './gambar/';
		$config['allowed_types']        = 'gif|jpg|png|jpeg';
		// $config['file_name']            = $this->gambar;
		$config['overwrite']			= true;
		$config['max_size']             = 1048576; // 1MB
		// $config['max_width']            = 1024;
		// $config['max_height']           = 768;

		$this->load->library('upload', $config);

		if ($this->upload->do_upload('gambar')) {
			return $this->upload->data()["file_name"];
		}

		return $this->upload->data()["file_name"];
	}

	function tambah_aksi()
	{
		$id_menu = $this->input->post('id_menu');
		$id_warung = $this->input->post('id_warung');
		$id_resto = $this->input->post('id_resto');
		$nama = $this->input->post('nama');
		$harga = $this->input->post('harga');
		$gambar = $this->gambar = $this->_uploadImage();
		$nama_resto = $this->input->post('nama_resto');
		$alamat = $this->input->post('alamat');

		$data = array(
			'id_menu' => $id_menu,
			'id_warung' => $id_warung,
			'nama' => $nama,
			'harga' => $harga,
			'gambar' => $gambar
		);
		$this->m_data_admin->input_data($data, 'menu');
		redirect('admin/index');
		redirect('admin/index');
	}
	function tambah_aksi_resto()
	{
		$id_resto = $this->input->post('id_resto');
		$gambar = $this->gambar = $this->_uploadImage();
		$nama_resto = $this->input->post('nama_resto');
		$alamat = $this->input->post('alamat');
		$data2 = array(
			'id_resto' => $id_resto,
			'nama_resto' => $nama_resto,
			'alamat' => $alamat,
			'gambar_resto' => $gambar
		);
		$this->m_data_admin->input_data($data2, 'restoran');
		redirect('admin/restoran');
	}

	function hapus($id)
	{
		$where = array('id_menu' => $id);
		$where1 = array('id_resto' => $id);
		$where2 = array('id_delivery' => $id);
		$this->m_data_admin->hapus_data($where, 'menu');
		$this->m_data_admin->hapus_data($where1, 'restoran');
		$this->m_data_admin->hapus_data($where2, 'delivery');
		redirect('admin/index');
	}

	function edit($id)
	{
		$where = array('id_menu' => $id);
		$data['menu'] = $this->m_data_admin->edit_data($where, 'menu')->result();
		$this->load->view('admin/v_edit_menu', $data);
	}
	function edit_resto($id)
	{
		$where1 = array('id_resto' => $id);
		$data['resto'] = $this->m_data_admin->edit_data($where1, 'restoran')->result();
		$this->load->view('admin/v_edit_resto', $data);
	}

	function update()
	{
		$id_menu = $this->input->post('id_menu');
		$id_warung = $this->input->post('id_warung');
		$nama = $this->input->post('nama');
		$harga = $this->input->post('harga');
		$gambar = $this->gambar = $this->_uploadImage();

		$data = array(
			'id_menu' => $id_menu,
			'id_warung' => $id_warung,
			'nama' => $nama,
			'harga' => $harga,
			'gambar' => $gambar
		);

		$where = array(
			'id_menu' => $id_menu
		);

		$this->m_data_admin->update_data($where, $data, 'menu');

		redirect('admin/index');
	}
	function update_resto()
	{
		$id_resto = $this->input->post('id_resto');
		$nama = $this->input->post('nama_resto');
		$alamat = $this->input->post('alamat');
		$gambar = $this->gambar = $this->_uploadImage();

		$data = array(
			'id_resto' => $id_resto,
			'nama_resto' => $nama,
			'alamat' => $alamat,
			'gambar_resto' => $gambar
		);

		$where = array(
			'id_resto' => $id_resto
		);

		$this->m_data_admin->update_data($where, $data, 'restoran');

		redirect('admin/restoran');
	}
}

