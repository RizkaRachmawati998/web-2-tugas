<?php 
defined('BASEPATH') OR exit('No direct script accesss allowed');

class mahasiswa extends CI_Controller
{
	public function __construct()
	{
		parent ::__construct();
		$this->load->model('mahasiswa_model');
	}
	
	public function index()
	{
		// echo "Admin/home";
		$data['judul'] = 'mahasiswa';
		$data['sub_judul'] = ' Halaman mahasiswa';
		$data['halaman'] = 'admin/v_mahasiswa';
		$data['isi_tabel'] = $this->mahasiswa_model->all();

		$this->load->view('admin/v_template', $data);
	}

	public function tambah()
	{
		$data['judul'] = ' Data mahasiswa';
		$data['sub_judul'] = ' Halaman Tambah Data mahasiswa';
		$data['halaman'] = 'admin/v_mahasiswa_tambah';
		$data['isi_tabel'] = $this->mahasiswa_model->all();

		$this->load->view('admin/v_template', $data);
	}
	public function proses_tambah()
	{
		$obj = array(
			'nim' => $this->input->post('nim'),
			'nama_mahasiswa' => $this->input->post('nama_mahasiswa'),
			'program_studi' =>$this->input->post('program_studi')
			);
		$this->mahasiswa_model->create($obj);
		// if ($this->mahasiswa_model->create($obj)) {
		// 	// echo "Berhasil";
		// 	$this->session->set_flashdata('info','Data Berhasil Disimpan !');
		// 	redirect('admin/mahasiswa');
		// }else{
		// 	// echo "Gagal";
		// 	$this->session->set_flashdata('info','Data Gagal Disimpan !');
			redirect('admin/mahasiswa');
		// }
		// var_dump($objek);
	}
	public function hapus($nim)
	{
		$this->mahasiswa_model->remove($nim);
		redirect('admin/mahasiswa','refresh');

	}
	public function edit($nim)
	{
		$data['judul'] = ' mahasiswa';
		$data['sub_judul'] = 'Edit tambah mahasiswa';
		$data['halaman'] = 'admin/v_mahasiswa_edit';

		$data['isi_data'] =$this->mahasiswa_model-> get_id($nim);
		$this->load->view('admin/v_template', $data);
		
	}
	public function proses_edit()
	{
		$id = $this->input->post('nim');
		$obj = array(
			'nama_mahasiswa' => $this->input->post('nama_mahasiswa'),
			'program_studi' =>$this->input->post('program_studi')
			);
		$this->mahasiswa_model->update($id,$obj);

		redirect('admin/mahasiswa','refresh');

	}

}


 ?>