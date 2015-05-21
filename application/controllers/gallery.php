<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Gallery extends CI_Controller
{	
	function __construct() {
		parent::__construct();
	}

	public function index()
	{
		$data['judul'] = "Gallery";
		if($this->session->userdata('login') != TRUE)
		{
			$this->load->view('headerHome', $data);
		}
		else
		{
			$this->load->view('headerUser', $data);
		}
		$this->load->view('gallery');
		$this->load->view('footer');		
	}
}
?>