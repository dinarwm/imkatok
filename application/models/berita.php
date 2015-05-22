<?php

class Berita extends CI_Model
{
	//admin

	public function getBerita()
	{ 
		return $this->db->get('berita'); 
	}

	public function getInfo($umur)
	{
		return $this->db->get_where('infografik', array('umur' => $umur));
	}

}

/* End of file akun.php */