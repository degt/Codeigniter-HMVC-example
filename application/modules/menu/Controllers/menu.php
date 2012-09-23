<?php
/*
Author: Daniel Gutierrez
Date: 9/18/12
Version: 1.0
*/

if (!defined('BASEPATH')) exit('No direct script access allowed');

class Menu extends MY_Controller{
	
	function __construct(){
		parent::__construct();
		$this->load->model("menu_model");
		$this->load->module("users");
	}
	
	function index(){
		$data['current'] = $this->uri->segment(1);
		$data['items'] = $this->menu_model->read();
		$data['user_nicename'] = @$this->users->userdata()->user_nicename;
		$this->load->view("menu", $data);
	}
	
	//Limit access
	function _remap(){
		show_404();
	}
		
}

?>