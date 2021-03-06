<?php

class login extends CI_Controller
{

	function __construct()
	{
		parent::__construct();
		$this->load->model('m_login');
	}

	function index()
	{
		$this->load->view('v_login');
	}
	public function add_user()
	{
		$nama = $this->input->post('nama');
		$nohp = $this->input->post('no_hp');
		$alamat = $this->input->post('alamat');
		$password = md5($_POST['password']);
		$jenis = $this->input->post('gender');
		$user = array(
			'nama' => $nama,
			'no_hp_user' => $nohp,
			'alamat_user' => $alamat,
			'password' => $password,
			'jenis_kelamin' => $jenis
		);
		$this->m_login->input_data($user, 'user');
		redirect('login/index');
	}
	function aksi_login()
	{
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		$where = array(
			'nama' => $username,
			'password' => md5($password)
		);
		$cek = $this->m_login->cek_login("user", $where)->num_rows();
		$cek1 = $this->m_login->cek_login("admin", $where)->num_rows();
		if ($cek > 0) {

			$data_session = array(
				'nama' => $username,
				'status' => "login"
			);

			$this->session->set_userdata($data_session);

			redirect(base_url("cafe"));
		} elseif ($cek1 > 0) {

			$data_session = array(
				'nama' => $username,
				'status' => "login"
			);

			$this->session->set_userdata($data_session);

			redirect(base_url("admin/index"));
		} else {
			echo "Username dan password salah !";
		}
	}

	function logout()
	{
		$this->session->sess_destroy();
		redirect(base_url('login'));
	}
}
