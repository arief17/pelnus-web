<?php 

class M_web extends CI_Model
{

	function tampil_dataslider(){
		return $this->db->get('slider');
	}

	function readPrestasi(){
		$this->db->select('*');
		$this->db->from('prestasi');
		$this->db->limit(3, 'asc');
		$query = $this->db->get();
		return $query;
	}


	function tampil_guru(){
		return $this->db->get('guru');
	}
	
	function tampil_prestasi(){
		return $this->db->get('prestasi');
	}

	function input_prestasi($simpan){
		return $this->db->insert('prestasi',$simpan);
	}


	function countPrestasi(){
		return $this->db->get('prestasi')->num_rows();
	}

	function getPrestasi($limit, $start)
	{
		return $this->db->get('prestasi', $limit, $start)->result();
	}

	
	function edit_dataprestasi($where,$table){		
		return $this->db->get_where($table,$where);
	}

	function update_prestasi($where,$data,$table){
		$this->db->where($where);
		$this->db->update($table,$data);
	}	

	function hapus_prestasi($where,$table){
		$this->db->where($where);
		$this->db->delete($table);
	}
	

}
