<?php
/*
Author: Daniel Gutierrez
Date: 9/18/12
Version: 1.0
*/

class User_model extends CI_Model{
	
	var $table = "users";
	
	function __construct(){
		parent::__construct();
	}
	
	function create(){
		
	}
	
	function read(){
		$query = $this->db->query("SELECT * FROM $this->table");
		return $query->result();
	}
	
	function user_by_id($id){
		$query = $this->db->query("SELECT * FROM $this->table WHERE id = $id");
		if($query->num_rows > 0){
			return $query->row();
		}else{
			return false;
		}
	}
	
	function user_by_nicename($user_nicename){
		$query = $this->db->query("SELECT * FROM $this->table WHERE user_nicename = ?", $user_nicename);
		
		if($query->num_rows > 0){
			return $query->row();
		}else{
			return false;
		}
	}
	
	function update($userid, $userdata){
		$data = (array)$userdata;
		$where = "id = $userid"; 
		$str = $this->db->update_string($this->table, $data, $where);
		$query = $this->db->query($str);
		return $query;
	}
	
	function delete(){
		
	}
	
	function validate($user_email, $password){
		$query = $this->db->query("SELECT * FROM $this->table WHERE user_email = '$user_email' AND user_pass = '$password'");
		if($query->num_rows === 1){
			return $query->row();
		}else{
			return false;
		}
	}
	
		
}

?>