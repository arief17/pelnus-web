<?php 

class M_dashboard extends CI_Model
{
	
	
	function tampil_prestasi(){
		return $this->db->get('prestasi');
	}

	function readPrestasi(){
		$this->db->select('*');
		$this->db->from('prestasi');
		$this->db->limit(3, 'asc');
		$query = $this->db->get();
		return $query;
	}
}
