<?php
	
class Home extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
	}

	function index()
	{
		if($this->session->userdata('login') != TRUE)
		{
			$data['judul'] = "Home";
			$data['forum'] = "hide";
			$this->load->view('headerHome', $data);
			$this->load->view('home', $data);
			$this->load->view('footer');
		}
		else
		{
			redirect('home/user');
		}
	}

	function error()
	{
		$data['judul'] = "Error!";
		if($this->session->userdata('login') != TRUE)
		{
			$this->load->view('headerHome', $data);
		}
		else
		{
			$this->load->view('headerUser', $data);
		}
		$this->load->view('not-found');
		$this->load->view('footer');
	}

	function user()
	{
		if($this->session->userdata('login') == TRUE)
		{
			$data['judul'] = "Home";
			$data['forum'] = "show";
			$this->load->view('headerUser', $data);
			$this->load->view('home', $data);
			$this->load->view('footer');
		}
		else
		{
			redirect("home");
		}
	}
}

/* End of file admin.php */