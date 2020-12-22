<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kepsek extends CI_Controller {
	function __construct(){
		parent::__construct();		
		$this->load->model('m_kepsek');
	}

	public function index()
	{

		// load library
		$this->load->library('pagination');

		// fungsi seacrh pada tabel kepsek
		if ($this->input->post('submit')){
			echo $this->input->post('keyword');
		}

		// config
		$config['base_url'] = 'http://localhost/smkpelnusserang/kepsek/index';
		$config['total_rows'] = $this->m_kepsek->countKepsek();
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
		$data['kepsek'] = $this->m_kepsek->getKepsek($config['per_page'],$data['start']); 
		$this->load->view('adm-edit/_partials/header.php',$data);
		$this->load->view('adm-edit/_partials/menu-samping.php',$data);
		$this->load->view('adm-edit/pages/kepsek.php',$data);
		$this->load->view('adm-edit/_partials/footer.php',$data);
	}

	function edit_kepsek($id_sambutan){
		$where = array('id_sambutan' => $id_sambutan);
		$data['kepsek'] = $this->m_kepsek->edit_datakepsek($where,'kepsek')->result();
		$this->load->view('adm-edit/pages/kepsek',$data);
	}

	public function edit_kepsekweb(){
		date_default_timezone_set('Asia/Jakarta');
		$tanggal = date('Y-m-d H:i:s');
		$id_sambutan = $this->input->post('id_sambutan');
		$nama_sambutan = $this->input->post('nama_sambutan');
		$jabatan = $this->input->post('jabatan');
		$isi_sambutan = $this->input->post('isi_sambutan');
		$foto = $this->input->post('foto');
		$foto = $_FILES['foto'];
		if ($foto=''){}else{
			$config['upload_path'] = './assets/img/kepsek';
			$config['allowed_types'] = 'jpg|png|gif';

			$this->load->library('upload',$config);
			if(!$this->upload->do_upload('kepsek'))
			{
				$id_sambutan = $this->input->post('id_sambutan');
				$nama_sambutan = $this->input->post('nama_sambutan');
				$jabatan = $this->input->post('jabatan');
				$isi_sambutan = $this->input->post('isi_sambutan');
				$tanggal = date('Y-m-d H:i:s');

				$simpan = array(
					'id_sambutan' => $id_sambutan,
					'nama_sambutan' => $nama_sambutan,
					'jabatan' => $jabatan,
					'isi_sambutan' => $isi_sambutan,
					'tgl_update' => $tanggal,
						);
		
						$where = array(
							'id_sambutan' => $id_sambutan
						);
			}else{
				$foto = $this->upload->data('file_name');
			}
		}


		$simpan = array(
			'id_sambutan' => $id_sambutan,
			'nama_sambutan' => $nama_sambutan,
			'jabatan' => $jabatan,
			'isi_sambutan' => $isi_sambutan,
			'foto' => $foto,
			'tgl_update' => $tanggal,
		);

		$where = array(
			'id_sambutan' => $id_sambutan
		);

		$this->m_kepsek->update_kepsek($where,$simpan, 'kepsek');
		$this->session->set_flashdata('message','Data Berhasil di Rubah');
		redirect('kepsek');

	}



}
