<?php

class Daftar extends CI_Controller
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
    $data['daftar'] = $this->M_daftar->get_data('tb_registrasi')->result();
    $data['daftar'] = $this->M_daftar->show_data()->result();
    $data['prodi'] = $this->M_daftar->tampil_prodi()->result();
    $this->load->view('admin/template/header');
    $this->load->view('admin/template/sidebar');
    $this->load->view('admin/v_daftar', $data);
    $this->load->view('admin/template/footer');
  }

  public function update_data_aksi()
  {
    $id                    = $this->input->post('id_registrasi');
    $id_prodi              = $this->input->post('id_prodi');
    $nama            = $this->input->post('nama');

    $data = array(
      'id_prodi'     => $id_prodi,
      'nama'   => $nama,
    );

    $where = array(
      'id_registrasi' => $id
    );

    $this->M_daftar->update_data('tb_registrasi', $data, $where);
    $this->session->set_flashdata('pesan', '<div class="alert alert-warning alert-dismissible fade show" role="alert">
			<strong>Data berhasil diupdate !</strong>
			<button type="button" class="close" data-dismiss="alert" aria-label="Close">
			  <span aria-hidden="true">&times;</span>
			</button>
		  </div>');
    redirect('admin/daftar');
  }

  public function delete_data($id)
  {
    $where = array('id_registrasi' => $id);
    $this->M_daftar->delete_data($where, 'tb_registrasi');
    $this->session->set_flashdata('pesan', '<div class="alert alert-danger alert-dismissible fade show" role="alert">
			<strong>Data berhasil dihapus !</strong>
			<button type="button" class="close" data-dismiss="alert" aria-label="Close">
			  <span aria-hidden="true">&times;</span>
			</button>
		  </div>');
    redirect('admin/daftar');
  }
}
