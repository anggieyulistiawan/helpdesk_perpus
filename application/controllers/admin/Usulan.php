<?php

class Usulan extends CI_Controller
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
        // $data['usulan'] = $this->M_usulan->get_data('tb_usulan')->result();
        $data['usulan'] = $this->M_usulan->show_data()->result();
        // var_dump($data['usulan']);
        // die;
        $this->load->view('admin/template/header');
        $this->load->view('admin/template/sidebar');
        $this->load->view('admin/v_usulan', $data);
        $this->load->view('admin/template/footer');
    }

    public function tambah_data()
    {
        $this->load->view('admin/template/header');
        $this->load->view('admin/template/sidebar');
        $this->load->view('admin/v_usulan_tambah');
        $this->load->view('admin/template/footer');
    }

    // public function tambah_data_aksi()
    // {
    //     $this->_rules();
    //     if ($this->form_validation->run() == FALSE) {
    //         $this->tambah_data();
    //     } else {
    //         $tanggal_usulan        = $this->input->post('tanggal_usulan');
    //         $judul_buku            = $this->input->post('judul_buku');
    //         $pengarang             = $this->input->post('pengarang');
    //         $id_penerbit              = $this->input->post('id_penerbit');
    //         $tahun_terbit          = $this->input->post('tahun_terbit');
    //         $edisi                 = $this->input->post('edisi');
    //         $isbn                  = $this->input->post('isbn');

    //         $data = array(
    //             'tanggal_usulan'   => $tanggal_usulan,
    //             'judul_buku'       => $judul_buku,
    //             'pengarang'        => $pengarang,
    //             'id_penerbit'         => $id_penerbit,
    //             'tahun_terbit'     => $tahun_terbit,
    //             'edisi'            => $edisi,
    //             'isbn'             => $isbn,
    //             'status_usulan'    => 'Menunggu Konfirmasi',
    //         );

    //         $this->M_usulan->insert_data($data, 'tb_usulan');
    //         $this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible fade show" role="alert">
    // 		<strong>Data berhasil ditambahkan !</strong>
    // 		<button type="button" class="close" data-dismiss="alert" aria-label="Close">
    // 		  <span aria-hidden="true">&times;</span>
    // 		</button>
    // 	  </div>');
    //         redirect('admin/usulan');
    //     }
    // }

    public function update_data($id)
    {
        $where = array('id_usulan' => $id);
        $data['usulan'] = $this->M_usulan->detail_data_update($id);
        $data['penerbit'] = $this->M_usulan->tampil_penerbit()->result();
        // var_dump($data['usulan']);
        // die;
        // $data['usulan'] = $this->db->query("SELECT * FROM tb_usulan WHERE id_usulan = '$id'")->result();
        $this->load->view('admin/template/header');
        $this->load->view('admin/template/sidebar');
        $this->load->view('admin/v_usulan_edit', $data);
        $this->load->view('admin/template/footer');
    }

    public function update_data_aksi()
    {
        $id                    = $this->input->post('id_usulan');
        $tanggal_usulan        = $this->input->post('tanggal_usulan');
        $judul_buku            = $this->input->post('judul_buku');
        $pengarang             = $this->input->post('pengarang');
        $id_penerbit              = $this->input->post('id_penerbit');
        $tahun_terbit          = $this->input->post('tahun_terbit');
        $edisi                 = $this->input->post('edisi');
        $isbn                  = $this->input->post('isbn');
        $alasan                  = $this->input->post('alasan');
        $status_usulan         = $this->input->post('status_usulan');

        $data = array(
            'tanggal_usulan'   => $tanggal_usulan,
            'judul_buku'       => $judul_buku,
            'pengarang'        => $pengarang,
            'id_penerbit'         => $id_penerbit,
            'tahun_terbit'     => $tahun_terbit,
            'edisi'            => $edisi,
            'isbn'             => $isbn,
            'alasan'             => $alasan,
            'status_usulan'    => $status_usulan,
        );

        $where = array(
            'id_usulan' => $id
        );

        $this->M_usulan->update_data('tb_usulan', $data, $where);
        $this->session->set_flashdata('pesan', '<div class="alert alert-warning alert-dismissible fade show" role="alert">
			<strong>Data berhasil diupdate !</strong>
			<button type="button" class="close" data-dismiss="alert" aria-label="Close">
			  <span aria-hidden="true">&times;</span>
			</button>
		  </div>');
        redirect('admin/usulan');
    }

    public function delete_data($id)
    {
        $where = array('id_usulan' => $id);
        $this->M_usulan->delete_data($where, 'tb_usulan');
        $this->session->set_flashdata('pesan', '<div class="alert alert-danger alert-dismissible fade show" role="alert">
			<strong>Data berhasil dihapus !</strong>
			<button type="button" class="close" data-dismiss="alert" aria-label="Close">
			  <span aria-hidden="true">&times;</span>
			</button>
		  </div>');
        redirect('admin/usulan');
    }
}
