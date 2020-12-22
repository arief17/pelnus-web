<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Guru extends CI_Controller {
	function __construct(){
		parent::__construct();		
		$this->load->model('m_guru');
	}

	

	public function index()
	{

		

		// load library
		$this->load->library('pagination');

		// fungsi seacrh pada tabel prestasi
		if ($this->input->post('submit')){
			echo $this->input->post('keyword');
		}

		// config
		$config['base_url'] = 'http://localhost/smkpelnusserang/guru/index';
		$config['total_rows'] = $this->m_guru->countGuru();
		$config['per_page'] = 4;
		
		// styling
		$config['full_tag_open'] = '<nav><ul class="pagination justify-content-center">';
		$config['full_tag_close'] = '</ul></nav>';

		$config['first_link'] = 'First';
		$config['first_tag_open'] = '<li class="page-item">';
		$config['first_tag_close'] = '</li>';

		$config['last_link'] = 'Last';
		$config['last_tag_open'] = '<li class="page-item">';
		$config['last_tag_close'] = '</li>';
		
		$config['next_link'] = 'Next';
		$config['next_tag_open'] = '<li class="page-item">';
		$config['next_tag_close'] = '</li>';
		
		$config['prev_link'] = 'Previous';
		$config['prev_tag_open'] = '<li class="page-item">';
		$config['prev_tag_close'] = '</li>';
		
		$config['cur_tag_open'] = '<li class="page-item active"><a class="page-link" href="#">';
		$config['cur_tag_close'] = '</a></li>';
		
		$config['num_tag_open'] = '<li class="page-item">';
		$config['num_tag_close'] = '</li>';

		$config['attributes'] = array('class' => 'page-link');



		// inisialize
		$this->pagination->initialize($config);

		$data['start'] = $this->uri->segment(3);
		$data['guru'] = $this->m_guru->getGuru($config['per_page'],$data['start']); 
		$this->load->view('adm-edit/_partials/header.php',$data);
		$this->load->view('adm-edit/_partials/menu-samping.php',$data);
		$this->load->view('adm-edit/pages/guru.php',$data);
		$this->load->view('adm-edit/_partials/footer.php',$data);
	}

	public function tambah_guru(){
		date_default_timezone_set('Asia/Jakarta');
		$tanggal = date('Y-m-d H:i:s');
		$nama_guru = $this->input->post('nama_guru');
		$mapel = $this->input->post('mapel');
		$foto = $this->input->post('foto');
		$foto = $_FILES['foto'];
		if ($foto=''){}else{
			$config['upload_path'] = './assets/img/guru';
			$config['allowed_types'] = 'jpg|png|gif';

			$this->load->library('upload',$config);
			if(!$this->upload->do_upload('foto')){
				echo "Upload Gagal"; die();
			}else{
				$foto = $this->upload->data('file_name');
			}
		}

		$simpan = array(
			'id_guru' => '',
			'nama_guru' => $nama_guru,
			'mapel' => $mapel,
			'foto' => $foto,
			'tgl_update' => $tanggal
		);
		$this->m_guru->input_guru($simpan, 'guru');
		$this->session->set_flashdata('message','Data Berhasil di tambahkan');
		redirect('/guru');

	}

	// method hapus
	function hapus_guru($id_guru){
		$where = array('id_guru' => $id_guru);
		$this->m_guru->hapus_guru($where,'guru');
		$this->session->set_flashdata('message','Data Berhasil di Hapus');
		redirect('guru');
	}
	// End Method Hapus

	function edit_guru($id_guru){
		$where = array('id_guru' => $id_guru);
		$data['guru'] = $this->m_guru->edit_dataprestasi($where,'guru')->result();
		$this->load->view('adm-edit/pages/guru',$data);
	}

	public function edit_guruweb(){
		date_default_timezone_set('Asia/Jakarta');
		$tanggal = date('Y-m-d H:i:s');
		$id_guru = $this->input->post('id_guru');
		$nama_guru = $this->input->post('nama_guru');
		$mapel = $this->input->post('mapel');
		$foto = $this->input->post('foto');
		$foto = $_FILES['foto'];
		if ($foto=''){}else{
			$config['upload_path'] = './assets/img/guru';
			$config['allowed_types'] = 'jpg|png|gif';

			$this->load->library('upload',$config);
			if(!$this->upload->do_upload('guru'))
			{
				$tanggal = date('Y-m-d H:i:s');
				$id_guru = $this->input->post('id_guru');
				$nama_guru = $this->input->post('nama_guru');
				$alamat = $this->input->post('alamat');
				$foto = $this->input->post('foto');

				$simpan = array(
					'id_guru' => $id_guru,
					'nama_guru' => $nama_guru,
					'mapel' => $mapel,
					'foto' => $foto,
					'tgl_update' => $tanggal,
				);
		
				$where = array(
					'id_guru' => $id_guru
				);
			}else{
				$foto = $this->upload->data('file_name');
			}
		}


		$simpan = array(
			'id_guru' => $id_guru,
			'nama_guru' => $nama_guru,
			'mapel' => $mapel,
			'foto' => $foto,
			'tgl_update' => $tanggal,
		);

		$where = array(
			'id_guru' => $id_guru
		);

		$this->m_guru->update_guru($where,$simpan, 'guru');
		$this->session->set_flashdata('message','Data Berhasil di Rubah');
		redirect('guru');

	}



}
