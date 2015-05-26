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
		$this->load->model('trisemester');
		

		$data['trisemester'] = $this->trisemester->getTrisemester();
		$data['judul'] = "Forum";
		$this->load->view('headerUser',$data);
		$this->load->view('forum');
		$this->load->view('isitrisemester',$data);
		$this->load->view('footer');
	}
	public function dua()
	{
		
		$this->load->view('headerUser');
		$this->load->view('forum');
		$this->load->view('main_forum');
//		$this->load->view('isitrisemester');
		$this->load->view('footer');
	}

	public function ts1()
	{

		$this->load->model('trisemester');
		

		$data['trisemester'] = $this->trisemester->getTrisemester2(1);
		$data['judul'] = "Forum";
		$this->load->view('headerUser',$data);
		$this->load->view('forum');
		$this->load->view('isitrisemester',$data);
		$this->load->view('footer');
	}


	public function ts2()
	{

		$this->load->model('trisemester');
		

		$data['trisemester'] = $this->trisemester->getTrisemester2(2);
		$data['judul'] = "Forum";
		$this->load->view('headerUser',$data);
		$this->load->view('forum');
		$this->load->view('isitrisemester',$data);
		$this->load->view('footer');
	}

	public function ts3()
	{

		$this->load->model('trisemester');
		

		$data['trisemester'] = $this->trisemester->getTrisemester2(3);
		$data['judul'] = "Forum";
		$this->load->view('headerUser',$data);
		$this->load->view('forum');
		$this->load->view('isitrisemester',$data);
		$this->load->view('footer');
	}



	public function komentar()
	{
		$data['judul'] = "Forum";
		$this->load->view('headerUser',$data);
		$this->load->view('forum2');
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