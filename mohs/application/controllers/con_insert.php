<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Con_insert extends CI_Controller {

	
	public function insert()
	{
		//exit("Hello");
		//$this->load->model('mo_insert');
		//echo $this->mo_insert->funmodin();
		//exit();
		$name=$this->input->post('name');
		$email=$this->input->post('email');
		$this->load->model('mo_insert');
		echo $this->mo_insert->funmodin($name,$email);
		
		
		
	}
	public function update()
	{
		if($_POST)
		{
			$this->load->model('mo_insert');
			$id=$this->input->post('id');
			$name=$this->input->post('name');
			$email=$this->input->post('email');
			echo $this->mo_insert->funmodup($id,$name,$email);
			return;
		}
		$id=$this->uri->segment(2);
		
      	$this->load->model('mo_insert');
		$result =$this->mo_insert->get_data_by_id($id);
		$data['id']=$id;
		$data['name']=$result->name;
		$data['email']=$result->email;
		$this->load->view('update_info',$data);
	}
	public function index($data=null)
	{
		
		$this->load->view('input_form',$data);
	}
	public function view()
	{
		$this->load->model('mo_insert');
		$data['result'] =$this->mo_insert->get_all_data();
		$this->load->view('view_info',$data);
	}
	public function do_update()
	{
		exit("Hello");
	}
}

