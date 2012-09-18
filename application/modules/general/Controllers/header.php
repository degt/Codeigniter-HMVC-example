<?php
/*
Author: Daniel Gutierrez
Date: 9/18/12
Version: 1.0
*/

class Header extends CI_Controller{

	function index(){
		$this->load->view("header/main");
	}
		
}

?>