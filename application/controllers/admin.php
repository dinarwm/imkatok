<?php
	
class Admin extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
	}

	function index()
	{
		$data['admin'] = 'Admin';

		$this->load->view('headerAdmin', $data);
		$this->load->view('dashboard', $data);
		$this->load->view('footerAdmin');
	}
	public function berita()
	{
		$this->load->model('berita');
		$data['berita'] = $this->berita->getBerita();
		$data['admin'] = 'Admin';

		$this->load->view('headerAdmin', $data);
		$this->load->view('beritaAdmin', $data);
		$this->load->view('footerAdmin');
	}
	public function tambahberita()
	{
		$data['admin'] = 'Admin';
		$data['judul'] = 'Admin';
		$data['hasil'] = 2;
		$this->load->view('headerAdmin', $data);
		$this->load->view('tambahBerita', $data);
		$this->load->view('footerAdmin');
	}
	public function tamber()
	{
		$this->load->model('berita');
		$judul = $this->input->post('judul');
		$content =$this->input->post('content');
		$this->berita->insert($judul,$content);
		$this->berita();

	}
	public function forum()
	{	
		$this->load->model('forum');
		$data['forum'] = $this->forum->getForum();
		$data['admin'] = 'Admin';

		$this->load->view('headerAdmin', $data);
		$this->load->view('forumAdmin', $data);
		$this->load->view('footerAdmin');
	}
	public function galeri()
	{
		$this->load->model('galeri');
		$data['galeri'] = $this->galeri->getGaleri();
		$data['admin'] = 'Admin';

		$this->load->view('headerAdmin', $data);
		$this->load->view('galeriAdmin', $data);
		$this->load->view('footerAdmin');
	}
}

/* End of file admin.php */