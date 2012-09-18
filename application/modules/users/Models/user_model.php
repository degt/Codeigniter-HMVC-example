<?php
/*
Author: Daniel Gutierrez
Date: 9/18/12
Version: 1.0
*/

class User_model extends CI_Model{
	
	var $table = "users";
	
	function create(){
		
	}
	
	function read(){
		$query = $this->db->query("SELECT * FROM $this->table");
		return $query->result();
	}
	
	function update(){
		
	}
	
	function delete(){
		
	}
	
		
}

?>