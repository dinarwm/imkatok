<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class News extends CI_Controller
{	
	function __construct() {
		parent::__construct();
		$this->load->helper("url");
		$this->load->library("pagination");
		$this->load->model('berita');
	}

	public function index()
	{
		$data['judul'] = "Berita";
		$config = array();
        $config["base_url"] = base_url() . "news/listNews";
        $config["total_rows"] = $this->berita->record_count();
        $config["per_page"] = 1;
        $config["uri_segment"] = 3;
 
        $this->pagination->initialize($config);
        $page = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
        $data["results"] = $this->berita->getBerita($config["per_page"], $page);
        $data["links"] = $this->pagination->create_links();
 
        if($this->session->userdata('login') == TRUE)
		{
			$this->load->view('headerUser',$data);
		}
		else
		{
			$this->load->view('headerHome',$data);	
		}
		$this->load->view('berita',$data);
		$this->load->view('footer');		
	}

	public function listNews()
	{
		$data['judul'] = "Berita";
		$config = array();
        $config["base_url"] = base_url() . "news/listNews";
        $config["total_rows"] = $this->berita->record_count();
        $config["per_page"] = 1;
        $config["uri_segment"] = 3;
 
        $this->pagination->initialize($config);
        $page = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
        $data["results"] = $this->berita->getBerita($config["per_page"], $page);
        $data["links"] = $this->pagination->create_links();
 
        if($this->session->userdata('login') == TRUE)
		{
			$this->load->view('headerUser',$data);
		}
		else
		{
			$this->load->view('headerHome',$data);	
		}
		$this->load->view('berita',$data);
		$this->load->view('footer');
	}

	public function listBerita()
	{
		
	}

}
?>