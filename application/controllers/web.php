<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Web extends CI_Controller {
	function __construct(){
		parent::__construct();		
		$this->load->model('m_web');
	}


	public function index()
	{
		$data2['judul'] ="DASHBOARD";
		$this->load->view('adm-edit/_partials/header.php',$data2);
		$this->load->view('adm-edit/_partials/menu-samping.php',$data2);
		$this->load->view('adm-edit/pages/dashboard.php',$data2);
		$this->load->view('adm-edit/_partials/footer.php',$data2);
	}



	public function prestasi()
	{
		// load library
		$this->load->library('pagination');

		// fungsi seacrh pada tabel prestasi
		if ($this->input->post('submit')){
			echo $this->input->post('keyword');
		}

		// config
		$config['base_url'] = 'http://localhost/smkpelnusserang/index.php/web/prestasi';
		$config['total_rows'] = $this->m_web->countPrestasi();
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
		$data['prestasi'] = $this->m_web->getPrestasi($config['per_page'],$data['start']); 
		$this->load->view('adm-edit/_partials/header.php',$data);
		$this->load->view('adm-edit/_partials/menu-samping.php',$data);
		$this->load->view('adm-edit/pages/prestasi.php',$data);
		$this->load->view('adm-edit/_partials/footer.php',$data);
	}

	public function tambah_prestasi(){
		date_default_timezone_set('Asia/Jakarta');
		$tanggal = date('Y-m-d H:i:s');
		$nama_prestasi = $this->input->post('nama_prestasi');
		$desk_prestasi = $this->input->post('desk_prestasi');
		$gbr_prestasi = $this->input->post('gbr_prestasi');
		$gbr_prestasi = $_FILES['gbr_prestasi'];
		if ($gbr_prestasi=''){}else{
			$config['upload_path'] = './assets/img/prestasi';
			$config['allowed_types'] = 'jpg|png|gif';

			$this->load->library('upload',$config);
			if(!$this->upload->do_upload('gbr_prestasi')){
				echo "Upload Gagal"; die();
			}else{
				$gbr_prestasi = $this->upload->data('file_name');
			}
		}

		$simpan = array(
			'id_prestasi' => '',
			'nama_prestasi' => $nama_prestasi,
			'desk_prestasi' => $desk_prestasi,
			'gbr_prestasi' => $gbr_prestasi,
			'tgl' => $tanggal
		);
		$this->m_web->input_prestasi($simpan, 'prestasi');
		$this->session->set_flashdata('message','Data Berhasil di tambahkan');
		redirect('web/prestasi');

	}

	public function prestasi_info()
	{
		$data1['prestasi'] = $this->m_web->readPrestasi()->result();
		$data1['prestasi'] = $this->m_web->tampil_prestasi()->result();
		$this->load->view('page-info/header_info.php',$data1);
		$this->load->view('page-info/content_prestasi.php',$data1);
		$this->load->view('page-info/menu_kanan_info.php',$data1);
		$this->load->view('page-info/footer_info.php',$data1);
	}

	function edit_prestasi($id_prestasi){
		$where = array('id_prestasi' => $id_prestasi);
		$data['prestasi'] = $this->m_web->edit_dataprestasi($where,'prestasi')->result();
		$this->load->view('adm-edit/pages/prestasi',$data);
	}

	public function edit_prestasiweb(){
		date_default_timezone_set('Asia/Jakarta');
		$tanggal = date('Y-m-d H:i:s');
		$id_prestasi = $this->input->post('id_prestasi');
		$nama_prestasi = $this->input->post('nama_prestasi');
		$desk_prestasi = $this->input->post('desk_prestasi');
		$gbr_prestasi = $this->input->post('gbr_prestasi');
		$gbr_prestasi = $_FILES['gbr_prestasi'];
		if ($gbr_prestasi=''){}else{
			$config['upload_path'] = './assets/img/prestasi';
			$config['allowed_types'] = 'jpg|png|gif';

			$this->load->library('upload',$config);
			if(!$this->upload->do_upload('gbr_prestasi'))
			{
				$tanggal = date('Y-m-d H:i:s');
				$id_prestasi = $this->input->post('id_prestasi');
				$nama_prestasi = $this->input->post('nama_prestasi');
				$desk_prestasi = $this->input->post('desk_prestasi');
				$gbr_prestasi = $this->input->post('gbr_prestasi');

				$simpan = array(
					'id_prestasi' => $id_prestasi,
					'nama_prestasi' => $nama_prestasi,
					'desk_prestasi' => $desk_prestasi,
					'tgl_update' => $tanggal
				);
		
				$where = array(
					'id_prestasi' => $id_prestasi
				);
			}else{
				$gbr_prestasi = $this->upload->data('file_name');
			}
		}


		$simpan = array(
			'id_prestasi' => $id_prestasi,
			'nama_prestasi' => $nama_prestasi,
			'desk_prestasi' => $desk_prestasi,
			'gbr_prestasi' => $gbr_prestasi,
			'tgl_update' => $tanggal
		);

		$where = array(
			'id_prestasi' => $id_prestasi
		);

		$this->m_web->update_prestasi($where,$simpan, 'prestasi');
		$this->session->set_flashdata('message','Data Berhasil di Rubah');
		redirect('web/prestasi');

	}

	function hapus_prestasi($id_prestasi){
		$where = array('id_prestasi' => $id_prestasi);
		$this->m_web->hapus_prestasi($where,'prestasi');
		$this->session->set_flashdata('message','Data Berhasil di Hapus');
		redirect('web/prestasi');
	}

	


}
