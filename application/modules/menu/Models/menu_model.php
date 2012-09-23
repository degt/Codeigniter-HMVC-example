<?php
/*
Author: Daniel Gutierrez
Date: 9/18/12
Version: 1.0
*/

class Menu_model extends CI_Model{
	
	function create(){
		
	}
	
	function read(){
		//Just a prototype
		$menu = array();
		
		$menu[0] = new stdClass();
		$menu[0]->url = "";
		$menu[0]->name = "Home";
		
		$menu[1] = new stdClass();
		$menu[1]->url = "users";
		$menu[1]->name = "Users";
		
		return $menu;
	}
	
	function menu_admin(){
		//Just a prototype

		$menu = new stdClass();
		$menu->url = "admin";
		$menu->name = "Admin";

		return $menu;
	}
	
	function update(){
		
	}
	
	function delete(){
		
	}
	
	
		
}

?>