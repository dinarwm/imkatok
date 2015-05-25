<?php

class Admin extends CI_Controller
{
	function __construct()
	{
		parent::__construct();

	}

	public function index()
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
	public function lihatberita($id)
	{
		
		$this->load->model('berita');
		$data['berita'] = $this->berita->getBeritaID($id)->row();
		
		$data['admin'] = 'Admin';
		$data['judul'] = 'Admin';
		$this->load->view('headerAdmin', $data);
		$this->load->view('beritaPenuhAdmin', $data);
		$this->load->view('footerAdmin');

	}
	public function tambahforum()
	{
		$data['admin'] = 'Admin';
		$data['judul'] = 'Admin';
		$data['hasil'] = 2;
		$this->load->view('headerAdmin', $data);
		$this->load->view('tambahForum', $data);
		$this->load->view('footerAdmin');
	}
	public function tamfor()
	{
		$this->load->model('forum');
		$judul = $this->input->post('judul');
		$content =$this->input->post('content');
		$tri = $this->input->post('tri');
		$this->forum->insert($judul,$content,$tri);
		$this->forum();

	}
	public function lihatforum($id)
	{
		
		$this->load->model('forum');
		$data['forum'] = $this->forum->getForumID($id)->row();
		
		$data['admin'] = 'Admin';
		$data['judul'] = 'Admin';
		$this->load->view('headerAdmin', $data);
		$this->load->view('forumPenuhAdmin', $data);
		$this->load->view('footerAdmin');

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
	public function deleteBerita($id)
	{
		$this->load->model('berita');
		$this->berita->hapus($id);
		$this->berita();
	}
	public function deleteForum($id)
	{
		$this->load->model('forum');
		$this->forum->hapus($id);
		$this->forum();
	}
	public function tambahgaleri()
	{
		$data['admin'] = 'Admin';
		$data['judul'] = 'Admin';
		$data['hasil'] = 2;
		$this->load->view('headerAdmin', $data);
		$this->load->view('tambahgaleri', $data);
		$this->load->view('footerAdmin');
	}
	public function tamgal()
	{
		$this->load->model('galeri');
		$judul = $this->input->post('judul');
		$content =$this->input->post('content');
		$tri = $this->input->post('tri');
		$this->galeri->insert($judul,$content,$tri);
		$this->galeri();

	}
	public function lihatgaleri($id)
	{
		
		$this->load->model('galeri');
		$data['galeri'] = $this->galeri->getGaleriID($id)->row();
		
		$data['admin'] = 'Admin';
		$data['judul'] = 'Admin';
		$this->load->view('headerAdmin', $data);
		$this->load->view('galeriPenuhAdmin', $data);
		$this->load->view('footerAdmin');

	}
}

/* End of file admin.php */