<?php

class Berita extends CI_Model
{
	public function record_count() {
        return $this->db->count_all('berita');
    }

	public function getBerita($limit, $start)
	{ 
		$this->db->limit($limit, $start);
		$this->db->order_by('id_berita', 'DESC');
        $query = $this->db->get('berita');
 
        if ($query->num_rows() > 0) {
            foreach ($query->result() as $row) {
                $data[] = $row;
            }
            return $data;
        }
        return false;
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
	public function hapus($id)
	{
		$this->db->query("delete from berita where id_berita='$id'");
	}
}

/* End of file akun.php */