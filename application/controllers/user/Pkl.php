<?php

class Pkl extends CI_Controller
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
        $data['pkl'] = $this->M_pkl->get_data_pkluser('tb_pkl')->result();
        $data['upload'] = $this->M_pkl->upload_satu();
        $this->load->view('user/template/header');
        $this->load->view('user/template/sidebar');
        $this->load->view('user/v_pkl', $data);
        $this->load->view('user/template/footer');
    }

    public function tambah_data()
    {
        $id_prodi = $this->session->userdata('id_prodi');
        // var_dump($id_prodi);
        // die;
        $data['dosen'] = $this->M_ta->tampil_dosen($id_prodi)->result();
        $this->load->view('user/template/header');
        $this->load->view('user/template/sidebar');
        $this->load->view('user/v_pkl_tambah', $data);
        $this->load->view('user/template/footer');
    }

    public function tambah_data_aksi()
    {
        $id_akun               = $this->session->userdata('id_akun');
        $tanggal_pkl        = $this->input->post('tanggal_pkl');
        $judul_pkl            = $this->input->post('judul_pkl');
        $tempat_pkl             = $this->input->post('tempat_pkl');
        $dosen_pembimbing1              = $this->input->post('dosen_pembimbing1');
        $dosen_penguji1                 = $this->input->post('dosen_penguji1');
        $pembimbing_lapangan                 = $this->input->post('pembimbing_lapangan');

        $laporan_pkl                  = $_FILES['laporan_pkl']['name']; {
            $config['upload_path']        = './assets/pkl';
            $config['allowed_types']        = 'pdf|docx';
            $this->load->library('upload', $config);
            if (!$this->upload->do_upload('laporan_pkl')) {
                echo "Laporan PKL Gagal diupload !!!";
            } else {
                $laporan_pkl = $this->upload->data('file_name');
            }
        }

        // $aplikasi_pkl                  = $_FILES['aplikasi_pkl']['name']; {
        //     $this->load->library('upload', $config);
        //     if (!$this->upload->do_upload('aplikasi_pkl')) {
        //         echo "Aplikasi PKL Gagal diupload !!!";
        //     } else {
        //         $aplikasi_pkl = $this->upload->data('file_name');
        //     }
        // }

        $data = array(
            'id_akun'   => $id_akun,
            'tanggal_pkl'   => $tanggal_pkl,
            'judul_pkl'       => $judul_pkl,
            'tempat_pkl'        => $tempat_pkl,
            'dosen_pembimbing1'         => $dosen_pembimbing1,
            'dosen_penguji1'            => $dosen_penguji1,
            'pembimbing_lapangan'            => $pembimbing_lapangan,
            'laporan_pkl'             => $laporan_pkl,
            // 'aplikasi_pkl'             => $aplikasi_pkl,
        );

        $this->M_pkl->insert_data($data, 'tb_pkl');
        $this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible fade show" role="alert">
			<strong>Data berhasil ditambahkan !</strong>
			<button type="button" class="close" data-dismiss="alert" aria-label="Close">
			  <span aria-hidden="true">&times;</span>
			</button>
		  </div>');
        redirect('user/pkl');
    }

    public function update_data($id)
    {
        $id_prodi = $this->session->userdata('id_prodi');
        $where = array('id_pkl' => $id);
        $data['pkl'] = $this->db->query("SELECT * FROM tb_pkl WHERE id_pkl = '$id'")->result();
        // var_dump($id_prodi);
        // die;
        $data['dosen'] = $this->M_ta->tampil_dosen($id_prodi)->result();
        $this->load->view('user/template/header');
        $this->load->view('user/template/sidebar');
        $this->load->view('user/v_pkl_edit', $data);
        $this->load->view('user/template/footer');
    }

    public function update_data_aksi()
    {
        $id                    = $this->input->post('id_pkl');
        $id_akun               = $this->session->userdata('id_akun');
        $tanggal_pkl        = $this->input->post('tanggal_pkl');
        $judul_pkl            = $this->input->post('judul_pkl');
        $tempat_pkl             = $this->input->post('tempat_pkl');
        $dosen_pembimbing1              = $this->input->post('dosen_pembimbing1');
        $dosen_penguji1                 = $this->input->post('dosen_penguji1');
        $pembimbing_lapangan                 = $this->input->post('pembimbing_lapangan');
        $laporan_pkl                  = $_FILES['laporan_pkl']['name']; {
            $config['upload_path']        = './assets/pkl';
            $config['allowed_types']        = 'pdf|docx';
            $this->load->library('upload', $config);
            if (!$this->upload->do_upload('laporan_pkl')) {
                echo "Laporan PKL Gagal diupload !!!";
            } else {
                $laporan_pkl = $this->upload->data('file_name');
            }
        }

        // $aplikasi_pkl                  = $_FILES['aplikasi_pkl']['name']; {
        //     $this->load->library('upload', $config);
        //     if (!$this->upload->do_upload('aplikasi_pkl')) {
        //         echo "Aplikasi PKL Gagal diupload !!!";
        //     } else {
        //         $aplikasi_pkl = $this->upload->data('file_name');
        //     }
        // }

        if ($laporan_pkl == "") {
            $data = array(
                'id_akun'   => $id_akun,
                'tanggal_pkl'   => $tanggal_pkl,
                'judul_pkl'       => $judul_pkl,
                'tempat_pkl'        => $tempat_pkl,
                'dosen_pembimbing1'         => $dosen_pembimbing1,
                'dosen_penguji1'            => $dosen_penguji1,
                'pembimbing_lapangan'            => $pembimbing_lapangan,
            );
        } else {
            $data = array(
                'id_akun'   => $id_akun,
                'tanggal_pkl'   => $tanggal_pkl,
                'judul_pkl'       => $judul_pkl,
                'tempat_pkl'        => $tempat_pkl,
                'dosen_pembimbing1'         => $dosen_pembimbing1,
                'dosen_penguji1'            => $dosen_penguji1,
                'pembimbing_lapangan'            => $pembimbing_lapangan,
                'laporan_pkl'             => $laporan_pkl,
            );
        }

        // $aplikasi_pkl                  = $_FILES['aplikasi_pkl']['name']; {
        //     $this->load->library('upload', $config);
        //     if (!$this->upload->do_upload('aplikasi_pkl')) {
        //         echo "Aplikasi PKL Gagal diupload !!!";
        //     } else {
        //         $aplikasi_pkl = $this->upload->data('file_name');
        //     }
        // }
        // if ($aplikasi_pkl == "" && $laporan_pkl == "") {
        //     $data = array(
        //         'id_akun'   => $id_akun,
        //         'tanggal_pkl'   => $tanggal_pkl,
        //         'judul_pkl'       => $judul_pkl,
        //         'tempat_pkl'        => $tempat_pkl,
        //         'dosen_pembimbing1'         => $dosen_pembimbing1,
        //         'dosen_penguji1'            => $dosen_penguji1,
        //     );
        // } elseif ($aplikasi_pkl == "") {
        //     $data = array(
        //         'id_akun'   => $id_akun,
        //         'tanggal_pkl'   => $tanggal_pkl,
        //         'judul_pkl'       => $judul_pkl,
        //         'tempat_pkl'        => $tempat_pkl,
        //         'dosen_pembimbing1'         => $dosen_pembimbing1,
        //         'dosen_penguji1'            => $dosen_penguji1,
        //         'laporan_pkl'             => $laporan_pkl,
        //     );
        // } elseif ($laporan_pkl == "") {
        //     $data = array(
        //         'id_akun'   => $id_akun,
        //         'tanggal_pkl'   => $tanggal_pkl,
        //         'judul_pkl'       => $judul_pkl,
        //         'tempat_pkl'        => $tempat_pkl,
        //         'dosen_pembimbing1'         => $dosen_pembimbing1,
        //         'dosen_penguji1'            => $dosen_penguji1,
        //         'aplikasi_pkl'             => $aplikasi_pkl,
        //     );
        // } else {
        //     $data = array(
        //         'id_akun'   => $id_akun,
        //         'tanggal_pkl'   => $tanggal_pkl,
        //         'judul_pkl'       => $judul_pkl,
        //         'tempat_pkl'        => $tempat_pkl,
        //         'dosen_pembimbing1'         => $dosen_pembimbing1,
        //         'dosen_penguji1'            => $dosen_penguji1,
        //         'laporan_pkl'             => $laporan_pkl,
        //         'aplikasi_pkl'             => $aplikasi_pkl,
        //     );
        // }
        $where = array(
            'id_pkl' => $id
        );

        $this->M_pkl->update_data('tb_pkl', $data, $where);
        $this->session->set_flashdata('pesan', '<div class="alert alert-warning alert-dismissible fade show" role="alert">
    					<strong>Data berhasil diupdate !</strong>
    					<button type="button" class="close" data-dismiss="alert" aria-label="Close">
    					<span aria-hidden="true">&times;</span>
    					</button>
    				</div>');
        redirect('user/pkl');
    }

    public function delete_data($id)
    {
        $where = array('id_pkl' => $id);
        $this->M_pkl->delete_data($where, 'tb_pkl');
        $this->session->set_flashdata('pesan', '<div class="alert alert-danger alert-dismissible fade show" role="alert">
			<strong>Data berhasil dihapus !</strong>
			<button type="button" class="close" data-dismiss="alert" aria-label="Close">
			  <span aria-hidden="true">&times;</span>
			</button>
		  </div>');
        redirect('user/pkl');
    }
}
