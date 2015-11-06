<?php 

class Mo_insert extends CI_Model {

	
	public function funmodin($name=null,$email=null)
	{
		$sql="INSERT INTO users (name, email) VALUES (?,?)";
		$query=$this->db->query($sql,array($name,$email));
		if($this->db->insert_id())
		{
			return "Success";
		}
		return "Failed";
		//redirect('con_insert/view');   //no effect
		//return $result;
		
	}
	public function funmodup($id,$name,$email)
	{
		$sql="UPDATE users SET name=?,email=? where id=?";
		$query=$this->db->query($sql,array($name,$email,$id));
		if(	$query	)
		{
			return "Record updated successfully";
		}
		return "Not updated";
	}
	public function get_all_data()
	{
		$sql="SELECT * FROM users";
		$result=$this->db->query($sql);
		$result=$result->result();
		return $result;
	}
	public function get_data_by_id($id)
	{
		$result=$this->db->query("SELECT * FROM users WHERE id=$id");
		$result=$result->row();
		return $result;
	}
}

