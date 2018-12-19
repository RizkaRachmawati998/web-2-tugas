<?php 
defined('BASEPATH') OR exit('No direct script accesss allowed');

class mahasiswa_model extends CI_Model
{
	
	public function all()
	{
		//select * from mahasiswa
		return $this->db->get('mahasiswa')->result();
	

	}
	public function create($objek)
	{
		return $this->db->insert('mahasiswa',$objek);
	}

	public function remove($id)
	{
		$this->db->where('nim',$id);
		return $this->db->delete('mahasiswa');
	}

	public function get_id($id)
	{
		$this->db->where('nim',$id);
		return $this->db->get('mahasiswa')->row();
	}

	public function update($id,$objek)
	{
		$this->db->where('nim',$id);
		return $this->db->update('mahasiswa', $objek);
	}


}
 ?>