<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Mo extends CI_Model {

	
	public function funmod()
	{
		$query=$this->db->query("select * from users");
		$result=$query->result();
		return $result;
		
	}
}

