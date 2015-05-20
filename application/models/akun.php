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
	
}

/* End of file akun.php */