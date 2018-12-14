<?php 
defined('BASEPATH') OR exit('No direct script accesss allowed');

class perwalian_model extends CI_Model
{
	
	public function all()
	{
		//select * from mahasiswa
		return $this->db->get('perwalian')->result();
	

	}
	// public function create($objek)
	// {
	// 	return $this->db->insert('perwalian',$objek);
	// }

}
 ?>