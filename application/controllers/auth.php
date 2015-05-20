<?php
	
class Auth extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
	}

	function index()
	{
		if($this->session->userdata('login') == TRUE)
		{
			if ($this->session->userdata('jabatan') == "administrator")
			{
				redirect('admin');	
			}
			else
			{
				redirect('user');
			}
		}
		else
		{
			$this->load->view('user/login');
		}
	}
	
	function doLogin()
	{
		$username = $this->input->post('email');
		$password = $this->input->post('password');
			
		$this->load->model('akun');
			
		$auth = $this->akun->login($username, $password);
			
		if($auth)
		{
			$data = array('username' => $username, 'login' => TRUE);
			$this->session->set_userdata($data);
		}
		else
		{
			$this->session->set_flashdata('pesan', 'Username atau password salah!');
		}
		redirect('admin');
	}
	
	function doLogout()
	{
		$this->session->sess_destroy();
		redirect('auth');
	}
}

/* End of file auth.php */