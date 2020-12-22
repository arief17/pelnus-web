<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {
	function __construct(){
		parent::__construct();		
		$this->load->model('m_dashboard');
	}

	public function index()
	{
		
		$data['prestasi'] = $this->m_dashboard->readPrestasi()->result();
		$this->load->view('content_utama.php');

	}

	public function admin_login()
	{
		$this->load->view('adm-edit/login.php');
	}

	public function prestasi_info()
	{
		$data1['prestasi'] = $this->m_dashboard->readPrestasi()->result();
		$data1['prestasi'] = $this->m_dashboard->tampil_prestasi()->result();
		$this->load->view('page-info/header_info.php',$data1);
		$this->load->view('page-info/content_prestasi.php',$data1);
		$this->load->view('page-info/menu_kanan_info.php',$data1);
		$this->load->view('page-info/footer_info.php',$data1);
	}

	public function sambutan_kepsek(){
		$data1['prestasi'] = $this->m_dashboard->readPrestasi()->result();
		$data1['prestasi'] = $this->m_dashboard->tampil_prestasi()->result();
		$this->load->view('page-info/header_info.php',$data1);
		$this->load->view('page-info/sambutan_kepsek.php',$data1);
		$this->load->view('page-info/menu_kanan_info.php',$data1);
		$this->load->view('page-info/footer_info.php',$data1);
	}

	public function contact(){
		$data1['prestasi'] = $this->m_dashboard->readPrestasi()->result();
		$data1['prestasi'] = $this->m_dashboard->tampil_prestasi()->result();
		$this->load->view('page-info/header_info.php',$data1);
		$this->load->view('page-info/contact_info.php',$data1);
		$this->load->view('page-info/menu_kanan_info.php',$data1);
		$this->load->view('page-info/footer_info.php',$data1);
	}

}
