<?php

class Ta extends CI_Controller
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
        $data['ta'] = $this->M_ta->get_data('tb_ta')->result();
        $data['ta'] = $this->M_ta->show_data()->result();
        $this->load->view('admin/template/header');
        $this->load->view('admin/template/sidebar');
        $this->load->view('admin/v_ta', $data);
        $this->load->view('admin/template/footer');
    }

    public function tambah_data()
    {
        $id_prodi = $this->session->userdata('id_prodi');
        // var_dump($id_prodi);
        // die;
        $data['dosen'] = $this->M_ta->tampil_dosen($id_prodi)->result();
        $this->load->view('admin/template/header');
        $this->load->view('admin/template/sidebar');
        $this->load->view('admin/v_ta_tambah', $data);
        $this->load->view('admin/template/footer');
    }

    // public function tambah_data_aksi()
    // {
    //     $id_akun               = $this->session->admindata('id_akun');
    //     $tanggal_ta        = $this->input->post('tanggal_ta');
    //     $judul_ta            = $this->input->post('judul_ta');
    //     $objek_ta             = $this->input->post('objek_ta');
    //     $dosen_pembimbing1              = $this->input->post('dosen_pembimbing1');
    //     $dosen_pembimbing2          = $this->input->post('dosen_pembimbing2');
    //     $dosen_penguji1                 = $this->input->post('dosen_penguji1');
    //     $dosen_penguji2                  = $this->input->post('dosen_penguji2');
    //     $laporan_ta                  = $_FILES['laporan_ta']['name']; {
    //         $config['upload_path']        = './assets/ta';
    //         $config['allowed_types']        = 'pdf';
    //         $this->load->library('upload', $config);
    //         if (!$this->upload->do_upload('laporan_ta')) {
    //             echo "Laporan TA Gagal diupload !!!";
    //         } else {
    //             $laporan_ta = $this->upload->data('file_name');
    //         }
    //     }

    //     $aplikasi_ta                  = $_FILES['aplikasi_ta']['name']; {
    //         $config['upload_path']        = './assets/ta';
    //         $config['allowed_types']        = 'rar';
    //         $this->load->library('upload', $config);
    //         if (!$this->upload->do_upload('aplikasi_ta')) {
    //             echo "Aplikasi TA Gagal diupload !!!";
    //         } else {
    //             $aplikasi_ta = $this->upload->data('file_name');
    //         }
    //     }

    //     $data = array(
    //         'tanggal_ta'   => $tanggal_ta,
    //         'judul_ta'       => $judul_ta,
    //         'objek_ta'        => $objek_ta,
    //         'dosen_pembimbing1'         => $dosen_pembimbing1,
    //         'dosen_pembimbing2'     => $dosen_pembimbing2,
    //         'dosen_penguji1'            => $dosen_penguji1,
    //         'dosen_penguji2'             => $dosen_penguji2,
    //         'laporan_ta'             => $laporan_ta,
    //         'aplikasi_ta'             => $aplikasi_ta,
    //     );

    //     $this->M_ta->insert_data($data, 'tb_ta');
    //     $this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible fade show" role="alert">
    // 		<strong>Data berhasil ditambahkan !</strong>
    // 		<button type="button" class="close" data-dismiss="alert" aria-label="Close">
    // 		  <span aria-hidden="true">&times;</span>
    // 		</button>
    // 	  </div>');
    //     redirect('admin/ta');
    // }

    public function update_data($id)
    {
        $where = array('id_ta' => $id);
        $id_prodi = $this->session->userdata('id_prodi');
        // $data['ta'] = $this->db->query("SELECT * FROM tb_ta WHERE id_ta = '$id'")->result();
        $data['ta'] = $this->M_ta->detail_data_update($id);
        // var_dump($id_prodi);
        // die;
        $data['dosen'] = $this->M_ta->tampil_dosen($id_prodi)->result();
        $this->load->view('admin/template/header');
        $this->load->view('admin/template/sidebar');
        $this->load->view('admin/v_ta_edit', $data);
        $this->load->view('admin/template/footer');
    }

    public function update_data_aksi()
    {
        $id                    = $this->input->post('id_ta');
        $id_akun               = $this->session->userdata('id_akun');
        $tanggal_ta        = $this->input->post('tanggal_ta');
        $judul_ta            = $this->input->post('judul_ta');
        $objek_ta             = $this->input->post('objek_ta');
        $dosen_pembimbing1              = $this->input->post('dosen_pembimbing1');
        $dosen_pembimbing2          = $this->input->post('dosen_pembimbing2');
        $dosen_penguji1                 = $this->input->post('dosen_penguji1');
        $dosen_penguji2                  = $this->input->post('dosen_penguji2');
        $laporan_ta                  = $_FILES['laporan_ta']['name']; {
            $config['upload_path']        = './assets/ta';
            $config['allowed_types']        = 'pdf|docx';
            $this->load->library('upload', $config);
            if (!$this->upload->do_upload('laporan_ta')) {
                echo "Laporan TA Gagal diupload !!!";
            } else {
                $laporan_ta = $this->upload->data('file_name');
            }
        }

        $abstrak_ta                  = $_FILES['abstrak_ta']['name']; {
            $this->load->library('upload', $config);
            if (!$this->upload->do_upload('abstrak_ta')) {
                echo "abstrak TA Gagal diupload !!!";
            } else {
                $abstrak_ta = $this->upload->data('file_name');
            }
        }
        if ($abstrak_ta == "" && $laporan_ta == "") {
            $data = array(
                'id_akun'   => $id_akun,
                'tanggal_ta'   => $tanggal_ta,
                'judul_ta'       => $judul_ta,
                'objek_ta'        => $objek_ta,
                'dosen_pembimbing1'         => $dosen_pembimbing1,
                'dosen_pembimbing2'     => $dosen_pembimbing2,
                'dosen_penguji1'            => $dosen_penguji1,
                'dosen_penguji2'             => $dosen_penguji2,
            );
        } elseif ($abstrak_ta == "") {
            $data = array(
                'id_akun'   => $id_akun,
                'tanggal_ta'   => $tanggal_ta,
                'judul_ta'       => $judul_ta,
                'objek_ta'        => $objek_ta,
                'dosen_pembimbing1'         => $dosen_pembimbing1,
                'dosen_pembimbing2'     => $dosen_pembimbing2,
                'dosen_penguji1'            => $dosen_penguji1,
                'dosen_penguji2'             => $dosen_penguji2,
                'laporan_ta'             => $laporan_ta,
            );
        } elseif ($laporan_ta == "") {
            $data = array(
                'id_akun'   => $id_akun,
                'tanggal_ta'   => $tanggal_ta,
                'judul_ta'       => $judul_ta,
                'objek_ta'        => $objek_ta,
                'dosen_pembimbing1'         => $dosen_pembimbing1,
                'dosen_pembimbing2'     => $dosen_pembimbing2,
                'dosen_penguji1'            => $dosen_penguji1,
                'dosen_penguji2'             => $dosen_penguji2,
                'abstrak_ta'             => $abstrak_ta,
            );
        } else {
            $data = array(
                'id_akun'   => $id_akun,
                'tanggal_ta'   => $tanggal_ta,
                'judul_ta'       => $judul_ta,
                'objek_ta'        => $objek_ta,
                'dosen_pembimbing1'         => $dosen_pembimbing1,
                'dosen_pembimbing2'     => $dosen_pembimbing2,
                'dosen_penguji1'            => $dosen_penguji1,
                'dosen_penguji2'             => $dosen_penguji2,
                'laporan_ta'             => $laporan_ta,
                'abstrak_ta'             => $abstrak_ta,
            );
        }
        $where = array(
            'id_ta' => $id
        );

        $this->M_ta->update_data('tb_ta', $data, $where);
        $this->session->set_flashdata('pesan', '<div class="alert alert-warning alert-dismissible fade show" role="alert">
    					<strong>Data berhasil diupdate !</strong>
    					<button type="button" class="close" data-dismiss="alert" aria-label="Close">
    					<span aria-hidden="true">&times;</span>
    					</button>
    				</div>');
        redirect('admin/ta');
    }

    public function delete_data($id)
    {
        $where = array('id_ta' => $id);
        $this->M_ta->delete_data($where, 'tb_ta');
        $this->session->set_flashdata('pesan', '<div class="alert alert-danger alert-dismissible fade show" role="alert">
			<strong>Data berhasil dihapus !</strong>
			<button type="button" class="close" data-dismiss="alert" aria-label="Close">
			  <span aria-hidden="true">&times;</span>
			</button>
		  </div>');
        redirect('admin/ta');
    }

    public function detail_views_laporan($id)
    {
        $data['ta'] = $this->M_ta->detail_data_update($id);
        $this->load->view('admin/v_ta_views_laporan', $data);
    }

    public function detail_views_abstrak($id)
    {
        $data['ta'] = $this->M_ta->detail_data_update($id);
        $this->load->view('admin/v_ta_views_abstrak', $data);
    }


    // public function detail_download($aplikasi_ta)
    // {
    //     // lokasi file yang ingin didownload
    //     $filepath = 'assets/ta/' . $aplikasi_ta;

    //     // memastikan file benar-benar ada
    //     if (file_exists($filepath)) {

    //         // menghitung ukuran file
    //         $filesize = filesize($filepath);

    //         // membuka file
    //         $handle = fopen($filepath, 'r');

    //         // menambahkan header untuk mengirimkan file ke browser
    //         header("Content-Type: application/x-rar-compressed");
    //         header("Content-Length: " . $filesize);
    //         header("Content-Disposition: attachment; aplikasi_ta=" . $aplikasi_ta);

    //         // membaca file dan mengirimkannya ke browser
    //         fpassthru($handle);
    //     } else {
    //         // jika file tidak ditemukan
    //         echo "File tidak ditemukan.";
    //     }
    // }
}
