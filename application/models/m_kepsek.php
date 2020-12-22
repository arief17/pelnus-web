<?php 

class M_kepsek extends CI_Model
{

	function countKepsek()
	{
		return $this->db->get('kepsek')->num_rows();
	}

	function getKepsek($limit, $start)
	{
		return $this->db->get('kepsek', $limit, $start)->result();
	}

	function edit_datakepsek($where,$table){		
		return $this->db->get_where($table,$where);
	}

	function update_kepsek($where,$data,$table){
		$this->db->where($where);
		$this->db->update($table,$data);
	}	
}
