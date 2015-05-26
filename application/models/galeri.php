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
	public function max()
	{
		
		$this->db->select_max('id_foto');
		$query = $this->db->get('galeri');
		$max = $query->row_array();

		$max = $max['id_foto']+1;
		return $max;
	}
	public function getGaleriID($id)
	{ 
		return  $this->db->get_where('galeri', array('id_foto' => $id));
	}
	public function insert($data)
	{

		return $this->db->insert('galeri', $data);
	}
	public function hapus($id)
	{
		$this->db->query("delete from galeri where id_foto='$id'");
	}

}

/* End of file akun.php */