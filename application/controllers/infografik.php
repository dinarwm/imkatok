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
		$this->load->view('infografik');
		$this->load->view('footer');
	}
}
?>