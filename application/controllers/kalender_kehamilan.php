<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Kalender_kehamilan extends CI_Controller
{	
	function __construct() {
		parent::__construct();
	}

	public function index()
	{
		$this->load->model("info");
		$data['bulan'] = $this->info->getAll();
		$data['judul'] = "Kalender Kehamilan";
		if($this->session->userdata('login') == TRUE)
		{
			$this->load->view('headerUser',$data);
		}
		else
		{
			$this->load->view('headerHome',$data);	
		}
		$this->load->view('Kalender_kehamilan',$data);
		$this->load->view('footer');
	}

	public function info_grafik()
	{
		if($this->session->userdata('login') == TRUE)
		{
			$data['judul'] = "Info Grafik";
			$this->load->view('headerUser',$data);
			$this->load->view('info_grafik');
			$this->load->view('footer');
		}
	}

	public function info($id)
	{
		$this->load->model('info');
		$data['infografik'] = $this->info->getInfo($id);
		$this->load->view('deskripsi', $data);
	}
}
?>