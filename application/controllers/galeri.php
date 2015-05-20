<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Galeri extends CI_Controller
{	
	function __construct() {
		parent::__construct();
	}

	public function index()
	{
		$data['judul'] = "Galeri";
		$this->load->view('headerHome',$data);
		$this->load->view('galeri');
		$this->load->view('footer');
	}
}
?>