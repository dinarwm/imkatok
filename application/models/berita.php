<?php

class Berita extends CI_Model
{
	//admin

	public function getBerita()
	{ 
		return $this->db->get('berita'); 
	}

	public function getBeritaID($id)
	{ 
		return  $this->db->get_where('berita', array('id_berita' => $id));
	}
	public function getInfo($umur)
	{
		return $this->db->get_where('infografik', array('umur' => $umur));
	}
	public function insert($judul,$content)
	{
		$this->db->select_max('id_berita');
		$query = $this->db->get('berita');
		$max = $query->row_array();

		$max = $max['id_berita']+1;
		$data = array(
			'id_berita' => $max,
		   'judul_berita' => $judul ,
		   'isi_berita' => $content
		);

		$this->db->insert('berita', $data);
	}
}

/* End of file akun.php */