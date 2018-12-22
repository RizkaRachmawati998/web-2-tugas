<?php 
defined('BASEPATH') OR exit('No direct script accesss allowed');

class dosen_model extends CI_Model
{
	
	public function all()
	{
		//select * from mahasiswa
		return $this->db->get('dosen')->result();
	
	}
	public function create($tam)
	{
		return $this->db->insert('dosen',$tam);
	}
	public function remove($id)
	{
		$this->db->where('nik',$id);
		return $this->db->delete('dosen');
	}

	public function get_id($id)
	{
		$this->db->where('nik',$id);
		return $this->db->get('dosen')->row();
	}

	public function update($id,$tambah)
	{
		$this->db->where('nik',$id);
		return $this->db->update('dosen', $tambah);
	}



}
 ?>