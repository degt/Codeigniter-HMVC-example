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
	}
	
	function index(){
		//var_dump($this->load->module('users/users')->_userdata());
		$data['current'] = $this->uri->segment(1);
		$data['items'] = $this->menu_model->read();
		$this->load->view("menu", $data);
	}
	
	//Limit access
	function _remap(){
		show_404();
	}
		
}

?>