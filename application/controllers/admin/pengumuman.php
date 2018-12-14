<?php 
/**
 * 
 */
class pengumuman extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('pengumuman_model');//kenalan
	}
	
	 public function index()
	{
		$data['judul'] ='Pengumuman';
		$data['sub_judul'] =' Halaman Pengumuman';
		$data['halaman'] ='admin/v_pengumuman';//content

		$data['isi_tabel'] = $this->pengumuman_model->all();

		$this->load->view('admin/v_template',$data);
		// $isi_tabel = $this->pengumuman_model->all();
	}
	public function tambah()
	{
		$data['judul'] ='Tambah Pengumuman';
		$data['sub_judul'] =' Tambah Pengumuman';
		$data['halaman'] ='admin/v_tambah_pengumuman';//content

		$this->load->view('admin/v_template',$data);//kenalan
	}
	public function proses_tambah()
	{
		$judul = $this->input->post('judul');
		$isi = $this->input->post('isi');
		$penulis = $this->input->post('penulis');

		$objek = array(
			'judul' => $judul,
			'isi' => $isi,
			'penulis' => $penulis
		);
		if ($this->pengumuman_model->create($objek)) {
			// echo "Berhasil";
			$this->session->set_flashdata('info','Data Berhasil Disimpan !');
			redirect('admin/pengumuman');
		}else{
			// echo "Gagal";
			$this->session->set_flashdata('info','Data Gagal Disimpan !');
			redirect('admin/pengumuman');
		}
		// var_dump($objek);
	}
	public function hapus($kode) 
	{
		if ($this->pengumuman_model->remove($kode)) {
			
			$this->session->set_flashdata('info','Data Berhasil Dihapus !');
			redirect('admin/pengumuman');
		}else{
			// echo "Gagal";
			$this->session->set_flashdata('info','Data Gagal Dihapus !');
			redirect('admin/pengumuman');
		}
	}
	public function edit($id) 
	{
		// echo "Halaman Edit ";
		$data['judul'] ='Edit Pengumuman';
		$data['sub_judul'] =' Edit Pengumuman';
		$data['halaman'] ='admin/v_edit_pengumuman';//content

		$data['isi_data'] = $this->pengumuman_model->get_id($id);

		// var_dump($data);//untuk mencoba apakh datanya berhasil apa nggknya..

		$this->load->view('admin/v_template',$data);//kenalan	
	}
	public function proses_edit()
	{

		$judul = $this->input->post('judul');
		$isi = $this->input->post('isi');
		$penulis = $this->input->post('penulis');

		$id = $this->input->post('id_pengumuman');

		$objek = array(
			'judul' => $judul,
			'isi' => $isi,
			'penulis' => $penulis
		);
		if ($this->pengumuman_model->update($id, $objek)) {
			// echo "Berhasil";
			$this->session->set_flashdata('info','Data Berhasil di Update !');
			redirect('admin/pengumuman');
		}else{
			// echo "Gagal";
			$this->session->set_flashdata('info','Data Gagal di Update !');
			redirect('admin/pengumuman');
		}
	}
	
}
 ?>