<?php 

defined('BASEPATH') OR exit('No direct script access allowed');

class Mahasiswa extends CI_Controller {

	public function index(){
		echo "ini controler Mahasiswa";
	}

	public function profil()
	{
		echo "Nama : Rizka Rachmawati <br>";
		echo "Nim : 1700320012<br>";
		echo "Email : rizkaarachmawati998@gmail.com <br>";
	}

	public function dosen($param1=''){
		echo "Nama Dosenku ".$param1;
	}

	public function krs($semester='', $matkul=''){
		
		echo "semester ke :".$semester."<br>"." saya mengambil :".$matkul;
		
	}
	
	public function get_semester()
 	{
	 	echo "Semester : 3 <br>";
	}

	public function tes(){
		// $this->load->view('templates/header', $data);
		// return view('v_detil');
	}

}