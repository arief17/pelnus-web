<?php 

class M_galery extends CI_Model
{
	function tampil_galery(){
		return $this->db->get('galery');
	}

	function countgalery()
	{
		return $this->db->get('galery')->num_rows();
	}

	function getgalery($limit, $start)
	{
		return $this->db->get('galery', $limit, $start)->result();
	}



}
