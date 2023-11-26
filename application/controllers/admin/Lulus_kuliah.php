<?php

class Lulus_kuliah extends CI_Controller
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
    // $data['usulan'] = $this->M_usulan->get_data('tb_usulan')->result();
    $data['lulus_kuliah'] = $this->M_lulus_kuliah->show_data();
    // var_dump($data['lulus_kuliah']);
    // die;
    $data['pegawai'] = $this->M_lulus_kuliah->tampil_pegawai()->result();
    $this->load->view('admin/template/header');
    $this->load->view('admin/template/sidebar');
    $this->load->view('admin/v_lulus_kuliah', $data);
    $this->load->view('admin/template/footer');
  }

  public function update_data_aksi()
  {
    $id                    = $this->input->post('id_surat');
    $id_pegawai        = $this->input->post('id_pegawai');
    $nomor_surat        = $this->input->post('nomor_surat');

    $data = array(
      'id_pegawai'   => $id_pegawai,
      'nomor_surat'   => $nomor_surat,
      'status_surat'    => 'Dikonfirmasi',
    );

    $where = array(
      'id_surat' => $id
    );

    $this->M_lulus_kuliah->update_data('tb_surat', $data, $where);
    $this->session->set_flashdata('pesan', '<div class="alert alert-warning alert-dismissible fade show" role="alert">
			<strong>Data berhasil diupdate !</strong>
			<button type="button" class="close" data-dismiss="alert" aria-label="Close">
			  <span aria-hidden="true">&times;</span>
			</button>
		  </div>');
    redirect('admin/lulus_kuliah');
  }


  public function delete_data($id)
  {
    $where = array('id_surat' => $id);
    $this->M_lulus_kuliah->delete_data($where, 'tb_surat');
    $this->session->set_flashdata('pesan', '<div class="alert alert-danger alert-dismissible fade show" role="alert">
			<strong>Data berhasil dihapus !</strong>
			<button type="button" class="close" data-dismiss="alert" aria-label="Close">
			  <span aria-hidden="true">&times;</span>
			</button>
		  </div>');
    redirect('admin/lulus_kuliah');
  }

  public function detail_views($id)
  {
    $data['lulus_kuliah'] = $this->M_lulus_kuliah->detail_data_update($id);
    // var_dump($data['lulus_kuliah']);
    // die;
    // $data['pkl'] = $this->M_pkl->upload_satu();
    // $data['ta'] = $this->M_ta->upload_satu();
    $this->load->view('admin/v_lulus_kuliah_views', $data);
  }
}
