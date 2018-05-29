<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_login extends CI_Model {
	
	public function login($table, $user, $pass){
		$chek = $this->db->get_where($table, array('username' => $user , 'password' => $pass));
		if ($chek->num_rows() > 0 ) {
			return 1;
		}
		else{
			return 0;
		}
	}

	public function get_data_user($table, $user, $pass){
		$array = array('username' => $user, 'password' => $pass);
		$this->db->where($array);
	
		return $query = $this->db->get($table)->row();
	}

}
?>