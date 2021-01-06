<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller { //NAMA CLASS SESUAIKAN DENGAN NAMA FILE PHP

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
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$data['tbl_datadiri'] = $this->db->get('riwayat_hidup');
		$this->load->view('welcome_message', $data);
		// $this->load->view('welcome_message');
	}

	public function halamanprofil()
	{
		echo "Muhammad Andika Usrahmawan Terlahir Beruntung";
	}

	public function nama($value1='', $value2='')
	{
		echo "Nama Saya ".$value1." Terlahir ".$value2;
		// echo "Awan Tampan";
	}

	public function page_a(){
		$this->load->view('a');
	}

	public function page_b(){
		$this->load->view('b');
	}
}
