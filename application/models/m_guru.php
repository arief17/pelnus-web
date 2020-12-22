<?php 

class M_guru extends CI_Model
{
	

	function countGuru()
	{
		return $this->db->get('guru')->num_rows();
	}

	function getGuru($limit, $start)
	{
		return $this->db->get('guru', $limit, $start)->result();
	}

	function input_guru($simpan){
		return $this->db->insert('guru',$simpan);
	}
	
	function edit_dataguru($where,$table){		
		return $this->db->get_where($table,$where);
	}

	function update_guru($where,$data,$table){
		$this->db->where($where);
		$this->db->update($table,$data);
	}	

	function hapus_guru($where,$table){
		$this->db->where($where);
		$this->db->delete($table);
	}


}
