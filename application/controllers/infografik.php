<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Infografik extends CI_Controller
{	
	function __construct() {
		parent::__construct();
	}

	public function index()
	{
		if($this->session->userdata('login') == TRUE)
		{
			$data['judul'] = "Infografik";
			$this->load->view('headerHome',$data);
			$this->load->view('info_grafik');
			$this->load->view('footer');
		}
	}

	public function info()
	{
		$data['judul'] = "Infografik";
		$this->load->model('akun');
		$this->load->model('berita');

		$data['infografik'] = $this->berita->getInfo('2');
		$this->load->view('headerUser', $data);
		$this->load->view('info_grafik', $data);
		$this->load->view('footer');

		if($this->session->userdata('login') == TRUE)
		{
			$data['judul'] = "Infografik";
			$this->load->model('akun');
			$this->load->model('berita');

			$data['infografik'] = $this->berita->getInfo('2');
			$this->load->view('headerUser', $data);
			$this->load->view('info_grafik', $data);
			$this->load->view('footer');
		}
		else
		{
			redirect('home');
		}

	}
}
?>