<?php

class Kategori extends CI_Controller
{

  public function __construct()
  {
    parent::__construct();

    if ($this->session->userdata('id_level') != '1') {
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
    $data['kategori'] = $this->M_penerbit->get_data_kategori('tb_kategori')->result();
    $this->load->view('admin/template/header');
    $this->load->view('admin/template/sidebar');
    $this->load->view('admin/menu_master/v_kategori', $data);
    $this->load->view('admin/template/footer');
  }

  public function tambah_data_aksi()
  {
    $nama_kategori              = $this->input->post('nama_kategori');

    $data = array(
      'nama_kategori'     => $nama_kategori,
    );

    $this->M_penerbit->insert_data($data, 'tb_kategori');
    $this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible fade show" role="alert">
			<strong>Data berhasil ditambahkan !</strong>
			<button type="button" class="close" data-dismiss="alert" aria-label="Close">
			  <span aria-hidden="true">&times;</span>
			</button>
		  </div>');
    redirect('admin/kategori');
  }

  public function update_data_aksi()
  {
    $id                        = $this->input->post('id_kategori');
    $nama_kategori              = $this->input->post('nama_kategori');

    $data = array(
      'nama_kategori'     => $nama_kategori,
    );

    $where = array(
      'id_kategori' => $id
    );

    $this->M_penerbit->update_data('tb_kategori', $data, $where);
    $this->session->set_flashdata('pesan', '<div class="alert alert-warning alert-dismissible fade show" role="alert">
			<strong>Data berhasil diupdate !</strong>
			<button type="button" class="close" data-dismiss="alert" aria-label="Close">
			  <span aria-hidden="true">&times;</span>
			</button>
		  </div>');
    redirect('admin/kategori');
  }

  public function delete_data($id)
  {
    $where = array('id_kategori' => $id);
    $this->M_penerbit->delete_data($where, 'tb_kategori');
    $this->session->set_flashdata('pesan', '<div class="alert alert-danger alert-dismissible fade show" role="alert">
			<strong>Data berhasil dihapus !</strong>
			<button type="button" class="close" data-dismiss="alert" aria-label="Close">
			  <span aria-hidden="true">&times;</span>
			</button>
		  </div>');
    redirect('admin/kategori');
  }
}
