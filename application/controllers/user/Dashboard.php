<?php

class Dashboard extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();

        if ($this->session->userdata('id_level') != '2') {
            $this->session->set_flashdata('pesan', '<div class="alert alert-danger alert-dismissible fade show" role="alert">
    		<strong>Anda Belum Login !</strong>
    		<button type="button" class="close" data-dismiss="alert" aria-label="Close">
    		  <span aria-hidden="true">&times;</span>
    		</button>
    	  </div>');
            redirect('login');
        }
    }

    public function index()
    {
        $akun = $this->db->query("SELECT * FROM tb_akun");
        $data['akun'] = $akun->num_rows();

        $ebooks = $this->db->query("SELECT * FROM tb_ebooks");
        $data['ebooks'] = $ebooks->num_rows();

        $pkl = $this->db->query("SELECT * FROM tb_pkl");
        $data['pkl'] = $pkl->num_rows();

        $ta = $this->db->query("SELECT * FROM tb_ta");
        $data['ta'] = $ta->num_rows();

        $id = $this->session->userdata('id_akun');
        $data['aakun'] = $this->db->query("SELECT * FROM tb_akun 
        JOIN tb_prodi on tb_akun.id_prodi=tb_prodi.id_prodi
        JOIN tb_level on tb_akun.id_level=tb_level.id_level WHERE id_akun='$id'")->result();
        // var_dump($data);
        // die;

        $this->load->view('user/template/header');
        $this->load->view('user/template/sidebar');
        $this->load->view('user/v_dashboard', $data);
        $this->load->view('user/template/footer');
    }
}
