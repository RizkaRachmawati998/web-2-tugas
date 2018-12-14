<?php 
defined('BASEPATH') OR exit('No direct script accesss allowed');

class perwalian extends CI_Controller
{
	public function __construct()
	{
		parent ::__construct();
		$this->load->model('perwalian_model');
	}
	
	public function index()
	{
		// echo "Admin/home";
		$data['judul'] = 'perwalian';
		$data['sub_judul'] = ' Halaman perwalian';
		$data['halaman'] = 'admin/v_perwalian';
		$data['isi_tabel'] = $this->perwalian_model->all();

		$this->load->view('admin/v_template', $data);
	}

	public function tambah()
	{
		$data['judul'] = ' Data perwalian';
		$data['sub_judul'] = ' Halaman Tambah Data perwalian';
		$data['halaman'] = 'admin/v_perwalian_tambah';
		$data['isi_tabel'] = $this->perwalian_model->all();

		$this->load->view('admin/v_template', $data);
	}
	/*public function proses_tambah()
	{
		$nim = $this->input->post('nim');
		$nama_mahasiswa= $this->input->post('nama_mahasiswa');
		$program_studi = $this->input->post('program_studi');

		$objek = array(
			'nim' => $nim,
			'nama_mahasiswa' => $nama_mahasiswa,
			'program_studi' => $program_studi
		);
		if ($this->mahasiswa_model->create($objek)) {
			// echo "Berhasil";
			$this->session->set_flashdata('info','Data Berhasil Disimpan !');
			redirect('admin/mahasiswa');
		}else{
			// echo "Gagal";
			$this->session->set_flashdata('info','Data Gagal Disimpan !');
			redirect('admin/mahasiswa');
		}
		// var_dump($objek);
	}
	
*/
}


 ?>