<?php
	
class Home extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		if($this->session->userdata('login') == TRUE)
		{
			redirect('auth');
		}
	}

	function index()
	{
		$data['judul'] = "Home";
		$data['forum'] = "hide";
		$this->load->view('headerHome', $data);
		$this->load->view('home', $data);
		$this->load->view('footer');
	}

	function error()
	{
		$data['judul'] = "Error!";
		$this->load->view('admin/adminHeader', $data);
		$this->load->view('admin/adminHome');
		$this->load->view('admin/adminFooter');
	}

	function user()
	{
		$data['judul'] = "Home";
		$data['forum'] = "show";
		$this->load->view('headerUser', $data);
		$this->load->view('home', $data);
		$this->load->view('footer');
	}
}

/* End of file admin.php */