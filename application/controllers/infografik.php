<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Infografik extends CI_Controller
{	
	function __construct() {
		parent::__construct();
	}

	public function index()
	{
		$data['judul'] = "Infografik";
		$this->load->view('headerHome',$data);
		$this->load->view('info_grafik');
		$this->load->view('footer');
	}

	public function info()
	{
		$this->load->model('akun');
		$this->load->model('berita');
		$bulan = $this->akun->getBulan();

		$data['infografik'] = $this->berita->getInfo('2');
		$this->load->view('headerHome');
		$this->load->view('info_grafik', $data);
		$this->load->view('footer');
	}
}
?>