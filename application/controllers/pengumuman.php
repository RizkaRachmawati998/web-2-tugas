<?php 

defined('BASEPATH') OR exit('No direct script access allowed');

class pengumuman extends CI_Controller {

	public function wisuda($param ='')
	{
		$data['tanggal'] = '17 OKtober 2018';
		$data['ketua'] = 'Yoga Sumadewa, M.Sn';
		$data['tambahan'] = $param;

	$this->load->view('v_pengumuman',$data); 
	}

	public function detail()
	{
		$data['judul'] = 'Detail Pengumuman';

		$this->load->view('v_detail',$data);
	}
	

}