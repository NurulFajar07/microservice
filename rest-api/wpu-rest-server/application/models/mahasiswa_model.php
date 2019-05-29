<?php 

class Mahasiswa_model extends CI_Model
{
	public function getMahasiswa($id = null)
	{
		if ($id === null) {
			return $this->db->get('info')->result_array();
		}else{
			return $this->db->get_where('info',['id' => $id])->result_array();
		}
	}

	public function deleteMahasiswa($id)
	{
		$this->db->delete('info',['id' => $id]);
		return $this->db->affected_rows();
	}

	public function createMahasiswa($data)
	{
		$this->db->insert('info',$data);
		return $this->db->affected_rows();
	}

	public function updateMahasiswa($data, $id)
	{
		$this->db->update('info',$data,['id' => $id]);
		return $this->db->affected_rows();
	}
}