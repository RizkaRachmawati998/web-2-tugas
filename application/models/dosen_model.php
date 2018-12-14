<?php 
defined('BASEPATH') OR exit('No direct script accesss allowed');

class dosen_model extends CI_Model
{
	
	public function all()
	{
		//select * from mahasiswa
		return $this->db->get('dosen')->result();
	

}

}
 ?>