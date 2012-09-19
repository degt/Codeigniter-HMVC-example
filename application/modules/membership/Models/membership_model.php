<?php
/*
Author: Daniel Gutierrez
Date: 9/19/12
Version: 1.0
*/

class Membership_model extends CI_Model{
	var $table = "users";
	
	function create(){
		
	}
	
	function read(){
		
	}
	
	function update(){
		
	}
	
	function delete(){
		
	}
	
	function validate($username, $password){
		$query = $this->db->query("SELECT * FROM $this->table WHERE user_login = '$username' AND user_pass = '$password'");
		if($query->num_rows === 1){
			return $query->row();
		}else{
			return false;
		}
	}
	
		
}

?>