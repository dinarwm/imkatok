<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Forums extends CI_Controller
{	
	function __construct() {
		parent::__construct();
		if($this->session->userdata('login') != TRUE)
		{
			redirect('home');
		}
	}

	public function index()
	{
		$data['judul'] = "Forum";
		$this->load->view('headerUser',$data);
		$this->load->view('forum');
		$this->load->view('footer');
	}

	public function berita()
	{
		$data['judul'] = "Forum";
		$this->load->view('headerUser',$data);
		$this->load->view('berita');
		$this->load->view('footer');
	}

	public function error()
	{
		$data['judul'] = "404 Not Found";
		$this->load->view('header',$data);
		$this->load->view('not-found-404');
		$this->load->view('footer');
	}
}
?>