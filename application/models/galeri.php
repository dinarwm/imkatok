<?php

class Galeri extends CI_Model
{
	//admin

	public function getGaleri()
	{ 
		return $this->db->get('galeri'); 
	}

	public function getInfo($umur)
	{
		return $this->db->get_where('infografik', array('umur' => $umur));
	}

}

/* End of file akun.php */