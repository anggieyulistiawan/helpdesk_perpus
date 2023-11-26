<?php

class Stop_kuliah extends CI_Controller
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
    $data['stop_kuliah'] = $this->M_stop_kuliah->show_data()->result();
    // var_dump($data['nomor_surat']);
    // die;
    // $data['stop_kuliah'] = $this->M_stop_kuliah->detail_data_update();

    $this->load->view('admin/template/header');
    $this->load->view('admin/template/sidebar');
    $this->load->view('admin/v_stop_kuliah', $data);
    $this->load->view('admin/template/footer');
  }

  public function update_data_aksi()
  {
    $id                    = $this->input->post('id_surat');
    $nomor_surat        = $this->input->post('nomor_surat');

    $data = array(
      'nomor_surat'   => $nomor_surat,
      'status_surat'    => 'Dikonfirmasi',
    );

    $where = array(
      'id_surat' => $id
    );

    $this->M_stop_kuliah->update_data('tb_surat', $data, $where);
    $this->session->set_flashdata('pesan', '<div class="alert alert-warning alert-dismissible fade show" role="alert">
			<strong>Data berhasil diupdate !</strong>
			<button type="button" class="close" data-dismiss="alert" aria-label="Close">
			  <span aria-hidden="true">&times;</span>
			</button>
		  </div>');
    redirect('admin/stop_kuliah');
  }

  public function delete_data($id)
  {
    $where = array('id_surat' => $id);
    $this->M_stop_kuliah->delete_data($where, 'tb_surat');
    $this->session->set_flashdata('pesan', '<div class="alert alert-danger alert-dismissible fade show" role="alert">
			<strong>Data berhasil dihapus !</strong>
			<button type="button" class="close" data-dismiss="alert" aria-label="Close">
			  <span aria-hidden="true">&times;</span>
			</button>
		  </div>');
    redirect('admin/stop_kuliah');
  }

  public function detail_views($id)
  {
    $data['stop_kuliah'] = $this->M_stop_kuliah->detail_data_update($id);
    $this->load->view('admin/v_stop_kuliah_views', $data);
  }
}
