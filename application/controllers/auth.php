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
				redirect('home/user');
			}
		}
		else
		{
			$data['email'] = NULL;
			$data['password'] = NULL;
			$data['judul'] = "Login";
			$this->load->view('headerHome', $data);
			$this->load->view('login', $data);
			$this->load->view('footer');
		}
	}
	
	function doLogin()
	{
		$email = $this->input->post('email');
		$password = $this->input->post('password');
			
		$this->load->model('akun');
		
		if($email == NULL)
		{
			
		}

		$auth = $this->akun->login($email, $password);
			
		if($auth)
		{
			$data = array('email' => $email, 'login' => TRUE);
			$this->session->set_userdata($data);
		}
		else
		{
			$this->session->set_flashdata('pesan', 'Email atau password salah!');
		}
		redirect('auth');
	}
	
	function doLogout()
	{
		$this->session->sess_destroy();
		redirect('auth');
	}

	function registrasi()
	{
		$this->load->model('akun');
		$nama = $this->input->post('nama');
		$email = $this->input->post('email');
		$password = $this->input->post('password');
		$password2 = $this->input->post('password2');
		$alamat = $this->input->post('alamat');
		$umur_kehamilan = $this->input->post('umur');

		$error['notmatch'] = 'Password tidak sama';
		if ($password!= $password2)
		 {
		     redirect('auth/registrasi',$error);
		 }
			else {
				$this->session->set_userdata($data);
				$this->akun->register($nama, $email, $password, $alamat, $umur_kehamilan);

				$data = array('email' => $email, 'login' => TRUE);
				
				$this->load->library('../controllers/home');
				$this->home->user();
			}
	}
}

/* End of file auth.php */