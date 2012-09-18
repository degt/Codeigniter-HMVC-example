<?php
/*
Author: Daniel Gutierrez
Date: 9/18/12
Version: 1.0
*/

class Menu extends CI_Controller{
	
	function index(){
		$data['current'] = $this->uri->segment(1);
		$this->load->view("menu/main");
	}
		
}

?>