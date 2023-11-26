<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Cari_buku extends CI_Controller
{
    // public function index()
    // {
    //     $data['ebooks'] = $this->M_ebooks->get_data('tb_ebooks')->result();
    //     $this->load->view('cari_buku', $data);
    // }
    // function __construct()
    // {
    //     parent::__construct();
    //     $this->load->helper(array('url'));
    //     $this->load->model('M_ebooks');
    // }

    public function index()
    {
        $data['title'] = "e-Books";
        // $ebooks = $this->M_ebooks->jumlah_data();
        $this->load->library('pagination');
        $config['base_url'] = base_url() . '/cari_buku/index';
        $config['total_rows'] = $this->M_ebooks->jumlah_data();
        $config['per_page'] = 6;
        $config['num_links'] = 3;

        // add boostrap class and styles
        $config['full_tag_open'] = '<ul class="pagination">';
        $config['full_tag_close'] = '</ul>';
        $config['first_link'] = 'First';
        $config['last_link'] = 'Last';
        $config['first_tag_open'] = '<li class="page-item"><span class="page-link">';
        $config['first_tag_close'] = '</span></li>';
        $config['prev_link'] = '&laquo';
        $config['prev_tag_open'] = '<li class="page-item"><span class="page-link">';
        $config['prev_tag_close'] = '</span></li>';
        $config['next_link'] = '&raquo';
        $config['next_tag_open'] = '<li class="page-item"><span class="page-link">';
        $config['next_tag_close'] = '</span></li>';
        $config['last_tag_open'] = '<li class="page-item"><span class="page-link">';
        $config['last_tag_close'] = '</span></li>';
        $config['cur_tag_open'] = '<li class="page-item active"><a class="page-link" href="#">';
        $config['cur_tag_close'] = '</a></li>';
        $config['num_tag_open'] = '<li class="page-item"><span class="page-link">';
        $config['num_tag_close'] = '</span></li>';
        // end add boostrap class and styles

        // end add boostrap class and styles
        $this->pagination->initialize($config);
        $data['pagination'] = $this->pagination->create_links();
        $offset = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
        // $data['from'] = $this->uri->segment(3) ? $this->uri->segment(3) : 0;
        $data['ebooks'] = $this->M_ebooks->data($config['per_page'], $offset);

        // $data['ebooks'] = $this->M_ebooks->show_data()->result();
        // $this->load->view('template_landing/header', $data);
        $this->load->view('cari_buku', $data);
        // $this->load->view('template_landing/footer', $data);
    }

    public function detail_views($id)
    {
        $dat = $this->M_ebooks->detail_data_update($id);
        $status_buku = $dat->status_buku;
        // $id_akun = $this->session->userdata('id_akun');
        if ($status_buku == 'Free') {
            $data['ebooks'] = $this->M_ebooks->detail_data_update($id);
        } else {
            $this->session->set_flashdata('pesan', '<div class="alert alert-primary alert-dismissible fade show" role="alert">
			<strong>Anda harus login terlebih dahulu untuk membaca buku !</strong>
			<button type="button" class="close" data-dismiss="alert" aria-label="Close">
			  <span aria-hidden="true">&times;</span>
			</button>
		  </div>');
            redirect('login');
        }
        // var_dump($data);
        // die;
        $this->load->view('v_ebooks_views', $data);
    }

    public function search()
    {
        $data['title'] = "Hasil Pencarian Data";
        $keyword = $this->input->post('keyword');
        $data['ebooks'] = $this->M_ebooks->get_keyword($keyword);
        // $this->load->view('template_landing/header', $data);
        $this->load->view('search', $data);
        // $this->load->view('template_landing/footer', $data);
    }

    public function filter($keyword)
    {
        $data['title'] = "E-books";
        // $keyword = $this->input->post('keyword');
        $data['ebooks'] = $this->M_ebooks->get_keyword($keyword);
        // var_dump($data['ebooks']);
        // die;
        // $this->load->view('template_landing/header', $data);
        $this->load->view('search', $data);
        // $this->load->view('template_landing/footer', $data);
    }

    public function baca($id_ebooks)
    {
        $this->load->model('M_ebooks');

        // Meningkatkan jumlah views buku
        $this->M_ebooks->increment_views($id_ebooks);

        // Redirect ke halaman detail buku
        redirect('cari_buku' . $id_ebooks);
    }
}
