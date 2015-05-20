<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Kalender_kehamilan extends CI_Controller
{	
	function __construct() {
		parent::__construct();
	}

	public function index()
	{
		$data['judul'] = "Kalender Kehamilan";
		$this->load->view('headerUser',$data);
		$this->load->view('kalender_kehamilan');
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