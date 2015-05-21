<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Berita extends CI_Controller
{	
	function __construct() {
		parent::__construct();
		$this->load->model('berita');
	}

	public function index()
	{
		$data['judul'] = 'Berita';
		$data['berita'] = $this->berita->getBerita();

		if($this->session->userdata('login') == TRUE)
		{
		$this->load->view('headerUser', $data);
		$this->load->view('berita',$data);
		$this->load->view('footer');
		}
		else
		{
		$this->load->view('headerHome', $data);
		$this->load->view('berita',$data);
		$this->load->view('footer');
		}
	}


}
?>