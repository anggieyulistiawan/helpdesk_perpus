<?php

class Pkl extends CI_Controller
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
        $data['pkl'] = $this->M_pkl->get_data('tb_pkl')->result();
        $data['pkl'] = $this->M_pkl->show_data()->result();
        $this->load->view('admin/template/header');
        $this->load->view('admin/template/sidebar');
        $this->load->view('admin/v_pkl', $data);
        $this->load->view('admin/template/footer');
    }

    public function tambah_data()
    {
        $data['dosen'] = $this->M_pkl->tampil_dosen()->result();
        $this->load->view('admin/template/header');
        $this->load->view('admin/template/sidebar');
        $this->load->view('admin/v_pkl_tambah', $data);
        $this->load->view('admin/template/footer');
    }

    // public function tambah_data_aksi()
    // {
    //     $id_akun               = $this->session->userdata('id_akun');
    //     $tanggal_pkl        = $this->input->post('tanggal_pkl');
    //     $judul_pkl            = $this->input->post('judul_pkl');
    //     $tempat_pkl             = $this->input->post('tempat_pkl');
    //     $dosen_pembimbing1              = $this->input->post('dosen_pembimbing1');
    //     $dosen_penguji1                 = $this->input->post('dosen_penguji1');
    //     $laporan_pkl                  = $_FILES['laporan_pkl']['name']; {
    //         $config['upload_path']        = './assets/pkl';
    //         $config['allowed_types']        = 'pdf';
    //         $this->load->library('upload', $config);
    //         if (!$this->upload->do_upload('laporan_pkl')) {
    //             echo "Laporan PKL Gagal diupload !!!";
    //         } else {
    //             $laporan_pkl = $this->upload->data('file_name');
    //         }
    //     }

    //     $aplikasi_pkl                  = $_FILES['aplikasi_pkl']['name']; {
    //         $config['upload_path']        = './assets/pkl/';
    //         $config['allowed_types']        = 'rar';
    //         $this->load->library('upload', $config);
    //         if (!$this->upload->do_upload('aplikasi_pkl')) {
    //             echo "Aplikasi PKL Gagal diupload !!!";
    //         } else {
    //             $aplikasi_pkl = $this->upload->data('file_name');
    //         }
    //     }

    //     $data = array
    //         'tanggal_pkl'   => $tanggal_pkl,
    //         'judul_pkl'       => $judul_pkl,
    //         'tempat_pkl'        => $tempat_pkl,
    //         'dosen_pembimbing1'         => $dosen_pembimbing1,
    //         'dosen_penguji1'            => $dosen_penguji1,
    //         'laporan_pkl'             => $laporan_pkl,
    //         'aplikasi_pkl'             => $aplikasi_pkl,
    //     );

    //     $this->M_pkl->insert_data($data, 'tb_pkl');
    //     $this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible fade show" role="alert">
    // 		<strong>Data berhasil ditambahkan !</strong>
    // 		<button type="button" class="close" data-dismiss="alert" aria-label="Close">
    // 		  <span aria-hidden="true">&times;</span>
    // 		</button>
    // 	  </div>');
    //     redirect('admin/pkl');
    // }

    public function update_data($id)
    {
        $where = array('id_pkl' => $id);
        // $data['pkl'] = $this->db->query("SELECT * FROM tb_pkl WHERE id_pkl = '$id'")->result();
        $data['pkl'] = $this->M_pkl->detail_data_update($id);
        $data['dosen'] = $this->M_pkl->tampil_dosen()->result();
        $this->load->view('admin/template/header');
        $this->load->view('admin/template/sidebar');
        $this->load->view('admin/v_pkl_edit', $data);
        $this->load->view('admin/template/footer');
    }

    public function update_data_aksi()
    {
        $id                    = $this->input->post('id_pkl');
        $tanggal_pkl        = $this->input->post('tanggal_pkl');
        $judul_pkl            = $this->input->post('judul_pkl');
        $tempat_pkl             = $this->input->post('tempat_pkl');
        $dosen_pembimbing1              = $this->input->post('dosen_pembimbing1');
        $dosen_penguji1                 = $this->input->post('dosen_penguji1');
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

        if ($laporan_pkl == "") {
            $data = array(
                'tanggal_pkl'   => $tanggal_pkl,
                'judul_pkl'       => $judul_pkl,
                'tempat_pkl'        => $tempat_pkl,
                'dosen_pembimbing1'         => $dosen_pembimbing1,
                'dosen_penguji1'            => $dosen_penguji1,
            );
        } else {
            $data = array(
                'tanggal_pkl'   => $tanggal_pkl,
                'judul_pkl'       => $judul_pkl,
                'tempat_pkl'        => $tempat_pkl,
                'dosen_pembimbing1'         => $dosen_pembimbing1,
                'dosen_penguji1'            => $dosen_penguji1,
                'laporan_pkl'             => $laporan_pkl,
            );
        }

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
        redirect('admin/pkl');
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
        redirect('admin/pkl');
    }

    public function detail_views($id)
    {
        $data['pkl'] = $this->M_pkl->detail_data_update($id);
        $this->load->view('admin/v_pkl_views', $data);
    }

    public function detail_download($aplikasi_pkl)
    {
        // lokasi file yang ingin didownload
        $filepath = 'assets/pkl/' . $aplikasi_pkl;

        // memastikan file benar-benar ada
        if (file_exists($filepath)) {

            // menghitung ukuran file
            $filesize = filesize($filepath);

            // membuka file
            $handle = fopen($filepath, 'r');

            // menambahkan header untuk mengirimkan file ke browser
            header("Content-Type: application/x-rar-compressed");
            header("Content-Length: " . $filesize);
            header("Content-Disposition: attachment; aplikasi_pkl=" . $aplikasi_pkl);

            // membaca file dan mengirimkannya ke browser
            fpassthru($handle);
        } else {
            // jika file tidak ditemukan
            echo "File tidak ditemukan.";
        }
    }
}
