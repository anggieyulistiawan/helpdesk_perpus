<?php

class Profile extends CI_Controller
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
        $id = $this->session->userdata('id_akun');
        $data['prodi'] = $this->M_akun->tampil_prodi()->result();
        $data['akun'] = $this->db->query("SELECT * FROM tb_akun WHERE id_akun = '$id'")->row();
        $this->load->view('dosen/template/header');
        $this->load->view('dosen/template/sidebar');
        $this->load->view('dosen/template/v_profile', $data);
        $this->load->view('dosen/template/footer');
    }

    public function update_data_aksi()
    {
        $id               = $this->input->post('id_akun');
        $idp               = $this->input->post('idp');
        $nama_akun             = $this->input->post('nama_akun');
        $username             = $this->input->post('username');
        $id_prodi           = $this->input->post('id_prodi');
        $no_telp           = $this->input->post('no_telp');
        $email           = $this->input->post('email');
        $alamat           = $this->input->post('alamat');
        $foto                  = $_FILES['foto']['name'];
        if ($foto = '') {
        } else {
            $config['upload_path']        = './assets/foto';
            $config['allowed_types']        = 'jpg|jpeg|png|tiff';
            $this->load->library('upload', $config);

            if (!$this->upload->do_upload('foto')) {
                $data = array(
                    'idp'       => $idp,
                    'nama_akun'       => $nama_akun,
                    'username'        => $username,
                    'id_prodi'        => $id_prodi,
                    'no_telp'         => $no_telp,
                    'email'           => $email,
                    'alamat'        => $alamat,
                );

                $where = array(
                    'id_akun' => $id
                );

                $this->M_akun->update_data('tb_akun', $data, $where);
                $this->session->set_flashdata('pesan', '<div class="alert alert-warning alert-dismissible fade show" role="alert">
						<strong>Data berhasil diupdate !</strong>
						<button type="button" class="close" data-dismiss="alert" aria-label="Close">
						<span aria-hidden="true">&times;</span>
						</button>
					</div>');
                redirect('dosen/profile');
            } else {
                $foto = $this->upload->data('file_name');
                $data = array(
                    'idp'       => $idp,
                    'nama_akun'       => $nama_akun,
                    'username'        => $username,
                    'id_prodi'        => $id_prodi,
                    'no_telp'         => $no_telp,
                    'email'           => $email,
                    'alamat'        => $alamat,
                    'foto'            => $foto,
                );

                $where = array(
                    'id_akun' => $id
                );

                $this->session->set_userdata($data);

                $this->M_akun->update_data('tb_akun', $data, $where);
                $this->session->set_flashdata('pesan', '<div class="alert alert-warning alert-dismissible fade show" role="alert">
							<strong>Data berhasil diupdate !</strong>
							<button type="button" class="close" data-dismiss="alert" aria-label="Close">
							<span aria-hidden="true">&times;</span>
							</button>
						</div>');
                redirect('dosen/profile');
            }
        }
    }
}
