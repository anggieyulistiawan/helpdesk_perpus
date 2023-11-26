<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Tugas_akhir extends CI_Controller
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
	public function index()
	{
		$data['ta'] = $this->M_ta->show_data()->result();
		$this->load->view('admin/template/header');
		$this->load->view('admin/template/footer');
		$this->load->view('tugas_akhir', $data);
	}

	public function detail_views($id)
	{
		$data['ta'] = $this->M_ta->detail_data_update($id);
		// var_dump($data['ta']);
		// die;
		$this->load->view('v_ta_views', $data);
	}
}
