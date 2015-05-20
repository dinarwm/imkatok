<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Berita extends CI_Controller
{	
	function __construct() {
		parent::__construct();
	}

	public function index()
	{
		$data['judul'] = "Berita";
		$this->load->view('headerHome',$data);
		$this->load->view('berita');
		$this->load->view('footer');
	}
}
?>