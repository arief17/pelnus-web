<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Admin extends CI_Controller {

	public function index()
	{
		$data2['judul'] ="DASHBOARD";
		$this->load->view('adm-edit/_partials/header.php',$data2);
		$this->load->view('adm-edit/_partials/menu-samping.php',$data2);
		$this->load->view('adm-edit/pages/dashboard.php',$data2);
		$this->load->view('adm-edit/_partials/footer.php',$data2);
	}

	
	public function profile()
	{
		$data['judul'] ="PROFILE";
		$this->load->view('adm-edit/_partials/header.php',$data);
		$this->load->view('adm-edit/_partials/menu-samping.php',$data);
		$this->load->view('adm-edit/pages/profile.php',$data);
		$this->load->view('adm-edit/_partials/footer.php',$data);
	}

	public function slider()
	{
		$judul['judul1'] = "SLIDER";
		$data1['slider'] = $this->m_prestasi->tampil_dataslider()->result();
		$this->load->view('adm-edit/_partials/header.php',$data1,$judul);
		$this->load->view('adm-edit/_partials/menu-samping.php',$data1,$judul);
		$this->load->view('adm-edit/pages/slider.php',$data1,$judul);
		$this->load->view('adm-edit/_partials/footer.php',$data1,$judul);
	}

	public function guru()
	{
		$data1['slider'] = $this->m_prestasi->tampil_dataslider()->result();
		$this->load->view('adm-edit/_partials/header.php',$data1);
		$this->load->view('adm-edit/_partials/menu-samping.php',$data1);
		$this->load->view('adm-edit/pages/guru.php',$data1);
		$this->load->view('adm-edit/_partials/footer.php',$data1);
	}

	public function berita()
	{
		$data1['slider'] = $this->m_prestasi->tampil_dataslider()->result();
		$this->load->view('adm-edit/_partials/header.php',$data1);
		$this->load->view('adm-edit/_partials/menu-samping.php',$data1);
		$this->load->view('adm-edit/pages/berita.php',$data1);
		$this->load->view('adm-edit/_partials/footer.php',$data1);
	}
	public function alumni()
	{
		$data1['slider'] = $this->m_prestasi->tampil_dataslider()->result();
		$this->load->view('adm-edit/_partials/header.php',$data1);
		$this->load->view('adm-edit/_partials/menu-samping.php',$data1);
		$this->load->view('adm-edit/pages/alumni.php',$data1);
		$this->load->view('adm-edit/_partials/footer.php',$data1);
	}

	public function galery()
	{
		$data1['slider'] = $this->m_prestasi->tampil_dataslider()->result();
		$this->load->view('adm-edit/_partials/header.php',$data1);
		$this->load->view('adm-edit/_partials/menu-samping.php',$data1);
		$this->load->view('adm-edit/pages/galery.php',$data1);
		$this->load->view('adm-edit/_partials/footer.php',$data1);
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
		$config['total_rows'] = $this->m_prestasi->countPrestasi();
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
		$data['prestasi'] = $this->m_prestasi->getPrestasi($config['per_page'],$data['start']); 
		$this->load->view('adm-edit/_partials/header.php',$data);
		$this->load->view('adm-edit/_partials/menu-samping.php',$data);
		$this->load->view('adm-edit/pages/prestasi.php',$data);
		$this->load->view('adm-edit/_partials/footer.php',$data);
	}
}
