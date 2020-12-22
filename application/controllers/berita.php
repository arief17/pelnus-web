<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class berita extends CI_Controller {
	function __construct(){
		parent::__construct();		
		$this->load->model('m_berita');
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
		$config['base_url'] = 'http://localhost/smkpelnusserang/berita/index';
		$config['total_rows'] = $this->m_berita->countberita();
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
		$data['berita'] = $this->m_berita->getberita($config['per_page'],$data['start']); 
		$this->load->view('adm-edit/_partials/header.php',$data);
		$this->load->view('adm-edit/_partials/menu-samping.php',$data);
		$this->load->view('adm-edit/pages/berita.php',$data);
		$this->load->view('adm-edit/_partials/footer.php',$data);
	}


}
