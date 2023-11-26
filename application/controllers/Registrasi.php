<?php
defined('BASEPATH') or exit('No direct script access allowed');


class Registrasi extends CI_Controller
{

	public function index()
	{
		$data['prodi'] = $this->M_daftar->tampil_prodi()->result();
		$this->load->view('registrasi', $data);
	}

	public function tambah_data_aksi()
	{
		$id_prodi              = $this->input->post('id_prodi');
		$tanggal_registrasi            = date('Y-m-d-H-i-s');
		$nim            = $this->input->post('nim');
		$nama            = $this->input->post('nama');

		$data = array(
			'id_prodi'     => $id_prodi,
			'tanggal_registrasi'   => $tanggal_registrasi,
			'nim'   => $nim,
			'nama'   => $nama,
		);

		$this->M_daftar->insert_data($data, 'tb_registrasi');
		$this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible fade show" role="alert">
			<strong>Data berhasil ditambahkan !</strong>
			<button type="button" class="close" data-dismiss="alert" aria-label="Close">
			  <span aria-hidden="true">&times;</span>
			</button>
		  </div>');
		redirect('registrasi');
	}
}
