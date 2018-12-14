<?php 
defined('BASEPATH') OR exit('No direct script accesss allowed');

class dosen extends CI_Controller
{
	public function __construct()
	{
		parent ::__construct();
		$this->load->model('dosen_model');
	}
	
	public function index()
	{
		// echo "Admin/home";
		$data['judul'] = 'dosen';
		$data['sub_judul'] = ' Halaman dosen';
		$data['halaman'] = 'admin/v_dosen';
		$data['isi_tabel'] = $this->dosen_model->all();

		$this->load->view('admin/v_template', $data);
	}

	public function tambah()
	{
		$data['judul'] = ' Data dosen';
		$data['sub_judul'] = ' Halaman Tambah Data Dosen';
		$data['halaman'] = 'admin/v_tambah_dosen';
		$data['isi_tabel'] = $this->dosen_model->all();

		$this->load->view('admin/v_template', $data);
	}

}


 ?>