<?php

class Pegawai extends CI_Controller
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
    $data['pegawai'] = $this->M_pegawai->show_data()->result();
    $data['jabatan'] = $this->M_pegawai->tampil_jabatan()->result();
    $this->load->view('admin/template/header');
    $this->load->view('admin/template/sidebar');
    $this->load->view('admin/menu_master/v_pegawai', $data);
    $this->load->view('admin/template/footer');
  }

  public function tambah_data_aksi()
  {
    $nip                       = $this->input->post('nip');
    $nama_pegawai              = $this->input->post('nama_pegawai');
    $id_jabatan                = $this->input->post('id_jabatan');

    $data = array(
      'nip'                 => $nip,
      'nama_pegawai'        => $nama_pegawai,
      'id_jabatan'          => $id_jabatan,
    );

    $this->M_pegawai->insert_data($data, 'tb_pegawai');
    $this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible fade show" role="alert">
			<strong>Data berhasil ditambahkan !</strong>
			<button type="button" class="close" data-dismiss="alert" aria-label="Close">
			  <span aria-hidden="true">&times;</span>
			</button>
		  </div>');
    redirect('admin/pegawai');
  }

  public function update_data_aksi()
  {
    $id                        = $this->input->post('id_pegawai');
    $nip                       = $this->input->post('nip');
    $nama_pegawai              = $this->input->post('nama_pegawai');
    $id_jabatan                = $this->input->post('id_jabatan');

    $data = array(
      'nip'              => $nip,
      'nama_pegawai'     => $nama_pegawai,
      'id_jabatan'          => $id_jabatan,
    );

    $where = array(
      'id_pegawai' => $id
    );

    $this->M_pegawai->update_data('tb_pegawai', $data, $where);
    $this->session->set_flashdata('pesan', '<div class="alert alert-warning alert-dismissible fade show" role="alert">
			<strong>Data berhasil diupdate !</strong>
			<button type="button" class="close" data-dismiss="alert" aria-label="Close">
			  <span aria-hidden="true">&times;</span>
			</button>
		  </div>');
    redirect('admin/pegawai');
  }

  public function delete_data($id)
  {
    $where = array('id_pegawai' => $id);
    $this->M_pegawai->delete_data($where, 'tb_pegawai');
    $this->session->set_flashdata('pesan', '<div class="alert alert-danger alert-dismissible fade show" role="alert">
			<strong>Data berhasil dihapus !</strong>
			<button type="button" class="close" data-dismiss="alert" aria-label="Close">
			  <span aria-hidden="true">&times;</span>
			</button>
		  </div>');
    redirect('admin/pegawai');
  }
}
