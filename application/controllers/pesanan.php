<?php
class pesanan extends CI_Controller {

	function __construct(){
        parent::__construct();
        $this->load->library('form_validation');		
	}
    public function menu()
    {
        $id = $this->input->get('id');
        $data['title'] = 'Menu';
        $data['kantin'] = $this->db->get_where('menu', ['id_warung' => $id])->result_array();

        if ($this->input->post()) {
            $id = $this->input->post('id');
            $meja = $this->input->post('meja');
            $nama = $this->session->userdata('nama');
            $pesanan = array(
                'id_warung' => $id,
                'no_meja' => $meja,
                'nama_pesanan' => $nama
            );
            $this->db->insert('pesanan', $pesanan);

            $last = $this->db->query("SELECT * FROM pesanan ORDER BY id_pesanan DESC LIMIT 1")->row_array();
            $hasil = $this->db->get_where('menu', ['id_warung' => $id])->result_array();
            $no = 1;
            foreach ($hasil as $x) {
                if ($this->input->post("jumlah$no") > 0) {
                    $pesan = htmlspecialchars($this->input->post("jumlah$no"));
                    $menu = $x['nama'];
                    $harga = $x['harga'];
                    $total = $pesan * $harga;
                    $data2 = array(
                        'id_pesanan' => $last['id_pesanan'],
                        'nama_menu' => $menu,
                        'harga_menu' => $harga,
                        'jumlah_pesanan' => $pesan,
                        'harga_total' => $total
                    );
                    $this->db->insert('detail_pesanan', $data2);
                }
                $no++;
            }
            echo "<script>alert('Pesanan Telah Diterima');</script>";
            redirect(base_url().'pesanan/pesanan?id=' . $last['id_pesanan']);
        } else {
            $this->load->view('restoran/v_menu', $data);
        }
    }

    public function pesanan()
    {
        $data['title'] = 'Pesanan';

        $id = $this->input->get('id');
        $data['pesanan'] = $this->db->get_where('detail_pesanan', ['id_pesanan' => $id])->result_array();
        $data['warung'] = $this->db->query("SELECT * FROM pesanan JOIN detail_pesanan ON pesanan.id_pesanan=detail_pesanan.id_pesanan WHERE pesanan.id_pesanan=$id")->row_array();

       
        $this->load->view('restoran/v_pesanan', $data);
       
    }
}
?>
