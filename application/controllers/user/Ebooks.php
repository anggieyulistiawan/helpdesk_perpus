<?php

class Ebooks extends CI_Controller
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
        $data['ebooks'] = $this->M_ebooks->show_data()->result();
        $this->load->view('user/template/header');
        $this->load->view('user/template/sidebar');
        $this->load->view('user/v_ebooks', $data);
        $this->load->view('user/template/footer');
    }

    public function tambah_data()
    {
        $data['penerbit'] = $this->M_ebooks->tampil_penerbit()->result();
        $this->load->view('admin/template/header');
        $this->load->view('admin/template/sidebar');
        $this->load->view('admin/v_ebooks_tambah', $data);
        $this->load->view('admin/template/footer');
    }

    public function tambah_data_aksi()
    {
        $tanggal_luncur        = $this->input->post('tanggal_luncur');
        $judul_buku            = $this->input->post('judul_buku');
        $pengarang             = $this->input->post('pengarang');
        $id_penerbit              = $this->input->post('id_penerbit');
        $tahun_terbit          = $this->input->post('tahun_terbit');
        $edisi                 = $this->input->post('edisi');
        $isbn                  = $this->input->post('isbn');
        $status_buku                  = $this->input->post('status_buku');

        $foto                  = $_FILES['foto']['name']; {
            $config['upload_path']        = './assets/ebooks';
            $config['allowed_types']        = 'pdf|jpg|jpeg|png|tiff';
            $this->load->library('upload', $config);
            if (!$this->upload->do_upload('foto')) {
                echo "Laporan PKL Gagal diupload !!!";
            } else {
                $foto = $this->upload->data('file_name');
            }
        }

        $buku                  = $_FILES['buku']['name']; {
            $this->load->library('upload', $config);
            if (!$this->upload->do_upload('buku')) {
                echo "Aplikasi PKL Gagal diupload !!!";
            } else {
                $buku = $this->upload->data('file_name');
            }
        }

        $data = array(
            'tanggal_luncur'   => $tanggal_luncur,
            'judul_buku'       => $judul_buku,
            'pengarang'        => $pengarang,
            'id_penerbit'      => $id_penerbit,
            'tahun_terbit'     => $tahun_terbit,
            'edisi'            => $edisi,
            'isbn'             => $isbn,
            'status_buku'      => $status_buku,
            'foto'             => $foto,
            'buku'             => $buku,
        );

        $this->M_ebooks->insert_data($data, 'tb_ebooks');
        $this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible fade show" role="alert">
			<strong>Data berhasil ditambahkan !</strong>
			<button type="button" class="close" data-dismiss="alert" aria-label="Close">
			  <span aria-hidden="true">&times;</span>
			</button>
		  </div>');
        redirect('admin/ebooks');
    }

    public function update_data($id)
    {
        $where = array('id_ebooks' => $id);
        $data['ebooks'] = $this->db->query("SELECT * FROM tb_ebooks WHERE id_ebooks = '$id'")->result();
        $data['penerbit'] = $this->M_ebooks->tampil_penerbit()->result();
        $this->load->view('admin/template/header');
        $this->load->view('admin/template/sidebar');
        $this->load->view('admin/v_ebooks_edit', $data);
        $this->load->view('admin/template/footer');
    }

    public function update_data_aksi()
    {
        $id                    = $this->input->post('id_ebooks');
        $tanggal_luncur        = $this->input->post('tanggal_luncur');
        $judul_buku            = $this->input->post('judul_buku');
        $pengarang             = $this->input->post('pengarang');
        $id_penerbit              = $this->input->post('id_penerbit');
        $tahun_terbit          = $this->input->post('tahun_terbit');
        $edisi                 = $this->input->post('edisi');
        $isbn                  = $this->input->post('isbn');
        $status_buku                  = $this->input->post('status_buku');
        $foto                  = $_FILES['foto']['name'];
        $buku                  = $_FILES['buku']['name'];
        if ($foto = '') {
        } else {
            $config['upload_path']        = './assets/ebooks';
            $config['allowed_types']        = 'pdf|jpg|jpeg|png|tiff';
            $this->load->library('upload', $config);

            if (!$this->upload->do_upload('foto')) {
                $data = array(
                    'tanggal_luncur'   => $tanggal_luncur,
                    'judul_buku'       => $judul_buku,
                    'pengarang'        => $pengarang,
                    'id_penerbit'         => $id_penerbit,
                    'tahun_terbit'     => $tahun_terbit,
                    'edisi'            => $edisi,
                    'isbn'             => $isbn,
                    'status_buku'             => $status_buku,
                    'buku'             => $buku,
                );

                $where = array(
                    'id_ebooks' => $id
                );

                $this->M_ebooks->update_data('tb_ebooks', $data, $where);
                $this->session->set_flashdata('pesan', '<div class="alert alert-warning alert-dismissible fade show" role="alert">
						<strong>Data berhasil diupdate !</strong>
						<button type="button" class="close" data-dismiss="alert" aria-label="Close">
						<span aria-hidden="true">&times;</span>
						</button>
					</div>');
                redirect('admin/ebooks');
            } else {
                $foto = $this->upload->data('file_name');
                $data = array(
                    'tanggal_luncur'   => $tanggal_luncur,
                    'judul_buku'       => $judul_buku,
                    'pengarang'        => $pengarang,
                    'id_penerbit'         => $id_penerbit,
                    'tahun_terbit'     => $tahun_terbit,
                    'edisi'            => $edisi,
                    'isbn'             => $isbn,
                    'status_buku'             => $status_buku,
                    'foto'             => $foto,
                    'buku'             => $buku,
                );

                $where = array(
                    'id_ebooks' => $id
                );

                $this->M_ebooks->update_data('tb_ebooks', $data, $where);
                $this->session->set_flashdata('pesan', '<div class="alert alert-warning alert-dismissible fade show" role="alert">
                    <strong>Data berhasil diupdate !</strong>
			        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
			        <span aria-hidden="true">&times;</span>
			        </button>
		            </div>');
                redirect('admin/ebooks');
            }
        }


        if ($buku = '') {
        } else {
            $config['upload_path']        = './assets/ebooks';
            $config['allowed_types']        = 'pdf|jpg|jpeg|png|tiff';
            $this->load->library('upload', $config);

            if (!$this->upload->do_upload('buku')) {
                $data = array(
                    'tanggal_luncur'   => $tanggal_luncur,
                    'judul_buku'       => $judul_buku,
                    'pengarang'        => $pengarang,
                    'id_penerbit'         => $id_penerbit,
                    'tahun_terbit'     => $tahun_terbit,
                    'edisi'            => $edisi,
                    'isbn'             => $isbn,
                    'status_buku'             => $status_buku,
                    'foto'             => $foto,
                );

                $where = array(
                    'id_ebooks' => $id
                );

                $this->M_ebooks->update_data('tb_ebooks', $data, $where);
                $this->session->set_flashdata('pesan', '<div class="alert alert-warning alert-dismissible fade show" role="alert">
						<strong>Data berhasil diupdate !</strong>
						<button type="button" class="close" data-dismiss="alert" aria-label="Close">
						<span aria-hidden="true">&times;</span>
						</button>
					</div>');
                redirect('admin/ebooks');
            } else {
                $buku = $this->upload->data('file_name');
                $data = array(
                    'tanggal_luncur'   => $tanggal_luncur,
                    'judul_buku'       => $judul_buku,
                    'pengarang'        => $pengarang,
                    'id_penerbit'         => $id_penerbit,
                    'tahun_terbit'     => $tahun_terbit,
                    'edisi'            => $edisi,
                    'isbn'             => $isbn,
                    'status_buku'             => $status_buku,
                    'foto'             => $foto,
                    'buku'             => $buku,
                );

                $where = array(
                    'id_ebooks' => $id
                );

                $this->M_ebooks->update_data('tb_ebooks', $data, $where);
                $this->session->set_flashdata('pesan', '<div class="alert alert-warning alert-dismissible fade show" role="alert">
                    <strong>Data berhasil diupdate !</strong>
			        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
			        <span aria-hidden="true">&times;</span>
			        </button>
		            </div>');
                redirect('admin/ebooks');
            }
        }
    }

    public function delete_data($id)
    {
        $where = array('id_ebooks' => $id);
        $this->M_ebooks->delete_data($where, 'tb_ebooks');
        $this->session->set_flashdata('pesan', '<div class="alert alert-danger alert-dismissible fade show" role="alert">
			<strong>Data berhasil dihapus !</strong>
			<button type="button" class="close" data-dismiss="alert" aria-label="Close">
			  <span aria-hidden="true">&times;</span>
			</button>
		  </div>');
        redirect('admin/ebooks');
    }

    public function detail_views($id)
    {
        $this->load->model('M_ebooks');

        $data['ebooks'] = $this->M_ebooks->detail_data_update($id);
        // Meningkatkan jumlah views buku
        $this->M_ebooks->increment_views($id);
        $this->load->view('user/v_ebooks_views', $data);
    }
}
