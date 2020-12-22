<?php 

class M_berita extends CI_Model
{
	function tampil_berita(){
		return $this->db->get('berita');
	}

	function countberita()
	{
		return $this->db->get('berita')->num_rows();
	}

	function getberita($limit, $start)
	{
		return $this->db->get('berita', $limit, $start)->result();
	}



}
