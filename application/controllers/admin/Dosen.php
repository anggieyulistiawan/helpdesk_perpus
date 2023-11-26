<?php

class Dosen extends CI_Controller
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
    $data['dosen'] = $this->M_dosen->get_data('tb_dosen')->result();
    $data['dosen'] = $this->M_dosen->show_data()->result();
    $data['prodi'] = $this->M_dosen->tampil_prodi()->result();
    $this->load->view('admin/template/header');
    $this->load->view('admin/template/sidebar');
    $this->load->view('admin/menu_master/v_dosen', $data);
    $this->load->view('admin/template/footer');
  }

  public function tambah_data_aksi()
  {
    $id_prodi              = $this->input->post('id_prodi');
    $nip                   = $this->input->post('nip');
    $nama_dosen            = $this->input->post('nama_dosen');

    $data = array(
      'id_prodi'     => $id_prodi,
      'nip'          => $nip,
      'nama_dosen'   => $nama_dosen,
    );

    $this->M_dosen->insert_data($data, 'tb_dosen');
    $this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible fade show" role="alert">
			<strong>Data berhasil ditambahkan !</strong>
			<button type="button" class="close" data-dismiss="alert" aria-label="Close">
			  <span aria-hidden="true">&times;</span>
			</button>
		  </div>');
    redirect('admin/dosen');
  }

  public function update_data_aksi()
  {
    $id                    = $this->input->post('id_dosen');
    $id_prodi              = $this->input->post('id_prodi');
    $nip                   = $this->input->post('nip');
    $nama_dosen            = $this->input->post('nama_dosen');

    $data = array(
      'id_prodi'     => $id_prodi,
      'nip'          => $nip,
      'nama_dosen'   => $nama_dosen,
    );

    $where = array(
      'id_dosen' => $id
    );

    $this->M_dosen->update_data('tb_dosen', $data, $where);
    $this->session->set_flashdata('pesan', '<div class="alert alert-warning alert-dismissible fade show" role="alert">
			<strong>Data berhasil diupdate !</strong>
			<button type="button" class="close" data-dismiss="alert" aria-label="Close">
			  <span aria-hidden="true">&times;</span>
			</button>
		  </div>');
    redirect('admin/dosen');
  }

  public function delete_data($id)
  {
    $where = array('id_dosen' => $id);
    $this->M_dosen->delete_data($where, 'tb_dosen');
    $this->session->set_flashdata('pesan', '<div class="alert alert-danger alert-dismissible fade show" role="alert">
			<strong>Data berhasil dihapus !</strong>
			<button type="button" class="close" data-dismiss="alert" aria-label="Close">
			  <span aria-hidden="true">&times;</span>
			</button>
		  </div>');
    redirect('admin/dosen');
  }
}
