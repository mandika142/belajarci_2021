<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Crud extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		//Load Dependencies

	}

	// List all your items
	public function index()
	{
		$data['tbl_datadiri'] = $this->db->get('riwayat_hidup');
		$this->load->view('crud/index', $data);
	}

	// Add a new item
	public function add()
	{
		$this->load->view('crud/tambah_data');
	}

	public function action_tambah_data(){
		$data = array(
			'nim' =>$this->input->post('nim'),
			'nama' =>$this->input->post('nama'),
			'jk' =>$this->input->post('jk'),
			'umur' =>$this->input->post('umur')
			 );
		$this->db->insert('riwayat_hidup', $data);

		redirect('crud','refresh');
	}

	//Update one item
	public function update( $nim = NULL )
	{
		$this->db->where('nim', $nim);
		$data['tbl_datadiri'] = $this->db->get('riwayat_hidup');
		$this->load->view('crud/update', $data);
	}

	public function action_update($nim = ''){
		$data = array(
			// 'nim' =>$this->input->post('nim'),
			'nama' =>$this->input->post('nama'),
			'jk' =>$this->input->post('jk'),
			'umur' =>$this->input->post('umur')
			 );
		$this->db->where('nim', $nim);
		$this->db->update('riwayat_hidup', $data);
		redirect('crud','refresh');
	}

	//Delete one item
	public function delete( $nim = NULL )
	{
		$this->db->where('nim', $nim);
		$this->db->delete('riwayat_hidup');

		redirect('crud','refresh');
	}
}

/* End of file Crud.php */
/* Location: ./application/controllers/Crud.php */
