<?php

class Info extends CI_Model
{

	public function getInfo($umur)
	{
		return $this->db->get_where('infografik', array('umur' => $umur));
	}

	public function getAll()
	{
		$query = $this->db->get('infografik');
 
        if ($query->num_rows() > 0) {
            foreach ($query->result() as $row) {
                $data[] = $row;
            }
            return $data;
        }
        return false;
	}

}

/* End of file akun.php */