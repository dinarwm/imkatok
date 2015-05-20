<?php

class Akun extends CI_Model
{
	//admin
	public function login($email, $password)
	{
		//select * from akun where username = $username and password = $password
		$result = $this->db->get_where('akun',
			array
			(
				'email' => $email,
				'password' => $password
			)
		);
		
		if ($result->num_rows() > 0)
		{
			return TRUE;
		}
		else
		{
			return FALSE;
		}
	}

	public function register($nama, $email, $password, $alamat, $umur_kehamilan)
	{
		$data = array(
		   'nama' => $nama,
		   'email' => $email,
		   'password' => $password,
		   'alamat' => $alamat,
		   'umur_kehamilan' => $umur_kehamilan,
		   'jabatan' => 'user'
		);

		$this->db->insert('akun', $data); 
	}
	
}

/* End of file akun.php */