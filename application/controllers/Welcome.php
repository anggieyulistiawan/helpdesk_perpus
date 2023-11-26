<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Welcome extends CI_Controller
{

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/userguide3/general/urls.html
	 */
	// public function index()
	// {
	// 	$this->load->view('welcome');
	// }

	public function index()
	{
		$this->load->model('M_views');

		// Mengecek apakah data kunjungan sudah ada dalam database
		$count = $this->M_views->get_views_count();

		if (!$count) {
			// Jika belum ada, tambahkan data kunjungan pertama
			$this->db->insert('views', ['count' => 1]);
			$count = 1;
		} else {
			// Jika sudah ada, tambahkan jumlah views
			$this->M_views->increment_views_count();
			$count++;
		}

		// Tampilkan jumlah views ke view
		$data['views_count'] = $count;
		$this->load->view('welcome', $data);
		$this->load->view('template_landing/footer', $data);
	}
}
