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
	public function proses_tambah()
	{
		$tam = array(
			'nik' => $this->input->post('nik'),
			'nama_dosen' => $this->input->post('nama_dosen'),
			'matakuliah_yg_diampu' =>$this->input->post('matakuliah_yg_diampu')
			);
		$this->dosen_model->create($tam);
		// if ($this->mahasiswa_model->create($obj)) {
		// 	// echo "Berhasil";
		// 	$this->session->set_flashdata('info','Data Berhasil Disimpan !');
		// 	redirect('admin/mahasiswa');
		// }else{
		// 	// echo "Gagal";
		// 	$this->session->set_flashdata('info','Data Gagal Disimpan !');
			redirect('admin/dosen');
		// }
		// var_dump($objek);
	}
	public function hapus($nik)
	{
		$this->dosen_model->remove($nik);
		redirect('admin/dosen','refresh');

	}
	public function edit($nik)
	{
		$data['judul'] = ' Data dosen';
		$data['sub_judul'] = ' Halaman Tambah Data Dosen';
		$data['halaman'] = 'admin/v_dosen_edit';
		$data['isi_tabel'] = $this->dosen_model->all();

		$data['isi_data'] =$this->dosen_model-> get_id($nik);
		$this->load->view('admin/v_template', $data);
		
	}
	public function proses_edit()
	{
		$id = $this->input->post('nik');
		$tam = array(
			'nama_dosen' => $this->input->post('nama_dosen'),
			'matakuliah_yg_diampu' =>$this->input->post('matakuliah_yg_diampu')
			);
		$this->dosen_model->update($id,$tam);

		redirect('admin/dosen','refresh');

	}


}


 ?>