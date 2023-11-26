<?php

class Ebooks extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();

        if ($this->session->userdata('id_level') != '3') {
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
        $data['ebooks'] = $this->M_ebooks->show_data()->result();
        $this->load->view('dosen/template/header');
        $this->load->view('dosen/template/sidebar');
        $this->load->view('dosen/v_ebooks', $data);
        $this->load->view('dosen/template/footer');
    }

    public function detail_views($id)
    {
        $this->load->model('M_ebooks');

        $data['ebooks'] = $this->M_ebooks->detail_data_update($id);
        // Meningkatkan jumlah views buku
        $this->M_ebooks->increment_views($id);
        $this->load->view('dosen/v_ebooks_views', $data);
    }
}
