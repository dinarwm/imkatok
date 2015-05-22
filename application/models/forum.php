<?php

class Forum extends CI_Model
{
	//admin

	public function getForum()
	{ 
		return $this->db->get('forum'); 
	}

	public function getInfo($umur)
	{
		return $this->db->get_where('infografik', array('umur' => $umur));
	}

}

/* End of file akun.php */