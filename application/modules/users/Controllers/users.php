<?php
/*
Author: Daniel Gutierrez
Date: 9/18/12
Version: 1.0
*/

class Users extends MY_Controller{
	
	function __construct(){
		parent::__construct();
		$this->load->model('user_model');	
	}
	
	function index(){
		$data["users"] = $this->user_model->read();
		$this->load->view('index', $data);
	}
		
}

?>