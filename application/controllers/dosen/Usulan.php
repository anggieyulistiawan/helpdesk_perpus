<?php

class Usulan extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();

        if ($this->session->userdata('id_level') != '3') {
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
        $data['usulan'] = $this->M_usulan->get_data_usulanuser('tb_usulan')->result();
        $this->load->view('dosen/template/header');
        $this->load->view('dosen/template/sidebar');
        $this->load->view('dosen/v_usulan', $data);
        $this->load->view('dosen/template/footer');
    }

    public function tambah_data()
    {

        $data['usulan'] = $this->M_usulan->get_data_usulanuser('tb_usulan')->result();
        $data['penerbit'] = $this->M_usulan->tampil_penerbit()->result();
        $this->load->view('dosen/template/header');
        $this->load->view('dosen/template/sidebar');
        $this->load->view('dosen/v_usulan_tambah', $data);
        $this->load->view('dosen/template/footer');
    }

    public function tambah_data_aksi()
    {
        $id_akun               = $this->session->userdata('id_akun');
        $id_penerbit              = $this->input->post('id_penerbit');
        $tanggal_usulan        = $this->input->post('tanggal_usulan');
        $judul_buku            = $this->input->post('judul_buku');
        $pengarang             = $this->input->post('pengarang');
        $tahun_terbit          = $this->input->post('tahun_terbit');
        $edisi                 = $this->input->post('edisi');
        $isbn                  = $this->input->post('isbn');

        $data = array(
            'id_akun'          => $id_akun,
            'id_penerbit'         => $id_penerbit,
            'tanggal_usulan'   => $tanggal_usulan,
            'judul_buku'       => $judul_buku,
            'pengarang'        => $pengarang,
            'tahun_terbit'     => $tahun_terbit,
            'edisi'            => $edisi,
            'isbn'             => $isbn,
            'status_usulan'    => 'Menunggu Konfirmasi',
        );

        $this->M_usulan->insert_data($data, 'tb_usulan');
        $this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible fade show" role="alert">
			<strong>Data berhasil ditambahkan !</strong>
			<button type="button" class="close" data-dismiss="alert" aria-label="Close">
			  <span aria-hidden="true">&times;</span>
			</button>
		  </div>');
        redirect('dosen/usulan');
    }

    public function update_data($id)
    {
        $where = array('id_usulan' => $id);
        // $data['usulan'] = $this->M_usulan->detail_data_update($id);
        $data['usulan'] = $this->db->query("SELECT * FROM tb_usulan WHERE id_usulan = '$id'")->result();
        $data['penerbit'] = $this->M_usulan->tampil_penerbit()->result();
        $this->load->view('dosen/template/header');
        $this->load->view('dosen/template/sidebar');
        $this->load->view('dosen/v_usulan_edit', $data);
        $this->load->view('dosen/template/footer');
    }

    public function update_data_aksi()
    {
        $id                    = $this->input->post('id_usulan');
        $id_akun               = $this->session->userdata('id_akun');
        $id_penerbit              = $this->input->post('id_penerbit');
        $tanggal_usulan        = $this->input->post('tanggal_usulan');
        $judul_buku            = $this->input->post('judul_buku');
        $pengarang             = $this->input->post('pengarang');
        $tahun_terbit          = $this->input->post('tahun_terbit');
        $edisi                 = $this->input->post('edisi');
        $isbn                  = $this->input->post('isbn');

        $data = array(
            'id_akun'          => $id_akun,
            'id_penerbit'         => $id_penerbit,
            'tanggal_usulan'   => $tanggal_usulan,
            'judul_buku'       => $judul_buku,
            'pengarang'        => $pengarang,
            'tahun_terbit'     => $tahun_terbit,
            'edisi'            => $edisi,
            'isbn'             => $isbn,
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
        redirect('dosen/usulan');
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
        redirect('dosen/usulan');
    }
}
