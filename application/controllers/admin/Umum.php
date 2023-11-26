<?php

class Umum extends CI_Controller
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
    $tahun_sekarang = date('Y');

    $cek_no_surat = $this->db->query("SELECT * FROM tb_surat WHERE YEAR(tanggal_surat) = '$tahun_sekarang' ORDER BY nomor_surat DESC")->row_array();
    $no_surat_sementara = $cek_no_surat['nomor_surat'] + 1;
    $no_surat = str_pad($no_surat_sementara, 3, '0', STR_PAD_LEFT);


    $data['nomor_surat'] = $no_surat;
    $data['umum'] = $this->M_umum->show_data()->result();
    $this->load->view('admin/template/header');
    $this->load->view('admin/template/sidebar');
    $this->load->view('admin/v_umum', $data);
    $this->load->view('admin/template/footer');
  }

  public function tambah_data_aksi()
  {
    $tanggal_surat              = $this->input->post('tanggal_surat');
    $nomor_surat                   = $this->input->post('nomor_surat');
    $keterangan_surat            = $this->input->post('keterangan_surat');

    $data = array(
      'tanggal_surat'     => $tanggal_surat,
      'nomor_surat'          => $nomor_surat,
      'keterangan_surat'   => $keterangan_surat,
      'kategori_surat'    => 'umum',
    );

    $this->M_umum->insert_data($data, 'tb_surat');
    $this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible fade show" role="alert">
			<strong>Data berhasil ditambahkan !</strong>
			<button type="button" class="close" data-dismiss="alert" aria-label="Close">
			  <span aria-hidden="true">&times;</span>
			</button>
		  </div>');
    redirect('admin/umum');
  }

  public function update_data_aksi()
  {
    $id                    = $this->input->post('id_surat');
    $tanggal_surat              = $this->input->post('tanggal_surat');
    $nomor_surat                   = $this->input->post('nomor_surat');
    $keterangan_surat            = $this->input->post('keterangan_surat');

    $data = array(
      'tanggal_surat'     => $tanggal_surat,
      'nomor_surat'          => $nomor_surat,
      'keterangan_surat'   => $keterangan_surat,
    );

    $where = array(
      'id_surat' => $id
    );

    $this->M_umum->update_data('tb_surat', $data, $where);
    $this->session->set_flashdata('pesan', '<div class="alert alert-warning alert-dismissible fade show" role="alert">
			<strong>Data berhasil diupdate !</strong>
			<button type="button" class="close" data-dismiss="alert" aria-label="Close">
			  <span aria-hidden="true">&times;</span>
			</button>
		  </div>');
    redirect('admin/umum');
  }

  public function delete_data($id)
  {
    $where = array('id_surat' => $id);
    $this->M_umum->delete_data($where, 'tb_surat');
    $this->session->set_flashdata('pesan', '<div class="alert alert-danger alert-dismissible fade show" role="alert">
			<strong>Data berhasil dihapus !</strong>
			<button type="button" class="close" data-dismiss="alert" aria-label="Close">
			  <span aria-hidden="true">&times;</span>
			</button>
		  </div>');
    redirect('admin/umum');
  }
}
