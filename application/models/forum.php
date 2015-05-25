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

	public function insert($judul,$content,$tri)
	{
		$this->db->select_max('id_forum');
		$query = $this->db->get('forum');
		$max = $query->row_array();

		$max = $max['id_forum']+1;
		$data = array(
			'id_forum' => $max,
		   'judul_forum' => $judul ,
		   'isi_forum' => $content,
		   'trisemester' => $tri
		);

		$this->db->insert('forum', $data);
	}
	public function hapus($id)
	{
		$this->db->query("delete from forum where id_forum='$id'");
	}
}

/* End of file akun.php */