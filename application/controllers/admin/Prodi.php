<?php

class Prodi extends CI_Controller
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
    $data['prodi'] = $this->M_prodi->get_data('tb_prodi')->result();
    $this->load->view('admin/template/header');
    $this->load->view('admin/template/sidebar');
    $this->load->view('admin/menu_master/v_prodi', $data);
    $this->load->view('admin/template/footer');
  }


  public function tambah_data_aksi()
  {
    $nama_prodi              = $this->input->post('nama_prodi');
    $diploma                   = $this->input->post('diploma');

    $data = array(
      'nama_prodi'     => $nama_prodi,
      'diploma'          => $diploma,
    );

    $this->M_prodi->insert_data($data, 'tb_prodi');
    $this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible fade show" role="alert">
			<strong>Data berhasil ditambahkan !</strong>
			<button type="button" class="close" data-dismiss="alert" aria-label="Close">
			  <span aria-hidden="true">&times;</span>
			</button>
		  </div>');
    redirect('admin/prodi');
  }

  public function update_data_aksi()
  {
    $id                        = $this->input->post('id_prodi');
    $nama_prodi              = $this->input->post('nama_prodi');
    $diploma                   = $this->input->post('diploma');

    $data = array(
      'nama_prodi'     => $nama_prodi,
      'diploma'          => $diploma,
    );

    $where = array(
      'id_prodi' => $id
    );

    $this->M_prodi->update_data('tb_prodi', $data, $where);
    $this->session->set_flashdata('pesan', '<div class="alert alert-warning alert-dismissible fade show" role="alert">
			<strong>Data berhasil diupdate !</strong>
			<button type="button" class="close" data-dismiss="alert" aria-label="Close">
			  <span aria-hidden="true">&times;</span>
			</button>
		  </div>');
    redirect('admin/prodi');
  }

  public function delete_data($id)
  {
    $where = array('id_prodi' => $id);
    $this->M_prodi->delete_data($where, 'tb_prodi');
    $this->session->set_flashdata('pesan', '<div class="alert alert-danger alert-dismissible fade show" role="alert">
			<strong>Data berhasil dihapus !</strong>
			<button type="button" class="close" data-dismiss="alert" aria-label="Close">
			  <span aria-hidden="true">&times;</span>
			</button>
		  </div>');
    redirect('admin/prodi');
  }
}
