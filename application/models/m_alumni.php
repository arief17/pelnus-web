<?php 

class M_alumni extends CI_Model
{
	function tampil_alumni(){
		return $this->db->get('alumni');
	}

	function countalumni()
	{
		return $this->db->get('alumni')->num_rows();
	}

	function getalumni($limit, $start)
	{
		return $this->db->get('alumni', $limit, $start)->result();
	}



}
