<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Testcon extends CI_Controller {

	
	public function index()
	{
		$this->load->model('mo');
		$data['da']=$this->mo->funmod();
		$this->load->view('zxy', $data);
	}
}

