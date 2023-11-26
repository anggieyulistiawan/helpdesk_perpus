<?php

class Stop_kuliah extends CI_Controller
{
  public function __construct()
  {
    parent::__construct();

    if ($this->session->userdata('id_level') != '2') {
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
    $data['stop_kuliah'] = $this->M_stop_kuliah->get_data_stopuser('tb_surat')->result();
    $this->load->view('user/template/header');
    $this->load->view('user/template/sidebar');
    $this->load->view('user/v_stop_kuliah', $data);
    $this->load->view('user/template/footer');
  }

  public function tambah_data_aksi()
  {
    $id_akun               = $this->session->userdata('id_akun');
    $tanggal_surat        = $this->input->post('tanggal_surat');

    $data = array(
      'id_akun'          => $id_akun,
      'tanggal_surat'   => $tanggal_surat,
      'status_surat'    => 'Menunggu Konfirmasi',
      'kategori_surat'    => 'stop',
    );

    $this->M_stop_kuliah->insert_data($data, 'tb_surat');
    $this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible fade show" role="alert">
			<strong>Data berhasil ditambahkan !</strong>
			<button type="button" class="close" data-dismiss="alert" aria-label="Close">
			  <span aria-hidden="true">&times;</span>
			</button>
		  </div>');
    redirect('user/stop_kuliah');
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
    redirect('user/stop_kuliah');
  }

  public function detail_views($id)
  {
    $data['stop_kuliah'] = $this->M_stop_kuliah->detail_data_update($id);
    $this->load->view('user/v_stop_kuliah_views', $data);
  }
}
