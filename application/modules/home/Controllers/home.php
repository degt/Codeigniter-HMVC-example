<?php
/*
Author: Daniel Gutierrez
Date: 9/18/12
Version: 1.0
*/

class Home extends MY_Controller{

	function index(){
		$data['main_content'] = 'index';
		//$data['menu'] = 'menu';
		//$this->load->module('menu/menu');
		//$this->menu->index();
		$this->load->view('page', $data);
	}
		
}

?>