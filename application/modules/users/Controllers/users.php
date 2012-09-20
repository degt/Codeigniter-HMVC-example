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
		$this->load->view('users', $data);
	}
	
	function user($nicename){
		$data["user"] = $this->user_model->user_by_nicename($nicename);
		
		if($data["user"]){
			$this->load->view('user', $data);	
		}else{
			show_404();
		}
		
	}
	
	function signin(){
		//Redirect
		if($this->_is_logged_in()){
			redirect('');
		}
		
		if($_POST){
			//Data
			$user_email = $this->input->post('user_email', true);
			$password 	= $this->input->post('password', true);
			$userdata 	= $this->user_model->validate($user_email, md5($password));	
			
			//Validation
			if($userdata){
				$data['userid'] = $userdata->id;
				$data['logged_in'] = true;
				$this->session->set_userdata($data);
				redirect('');
			}else{
				$data['error'] = "You should not pass!";
				$this->load->view('signin', $data);
			}

			return;
		}
		$this->load->view('signin');
	}
	
	function signup(){
		if($_POST){
			return;
		}
		$this->load->view('signup');
	}
	
	function logout(){
		$this->session->sess_destroy();
		redirect('');
	}
	
	function account(){
		//Redirect
		$this->_member_area();
		
		if($_POST){
			$userdata = new stdClass();
			$userdata->user_nicename 	= $this->input->post('nickname');
			$userdata->user_email 		= $this->input->post('email');
			$userdata->user_pass		= md5($this->input->post('password'));
			
			$insert = $this->user_model->update($this->session->userdata('userid'), $userdata);
			
			if($insert){
				$data['message'] = "Updated succesfully";
				$data['user'] = $this->user_model->user_by_id($this->session->userdata('userid'));
				$this->load->view('account', $data);
			}
			return;
		}
		
		$data['user'] = $this->user_model->user_by_id($this->session->userdata('userid'));
		$this->load->view('account', $data);
		
	}
	
//Hidden Methods not allowed by url request

	function _member_area(){
		if(!$this->_is_logged_in()){
			redirect('signin');
		}
	}
	
	function _is_logged_in(){
		if($this->session->userdata('logged_in')){
			return true;
		}else{
			return false;
		}
	}
	
	function userdata(){
		return $this->user_model->user_by_id($this->session->userdata('userid'));
	}
		
}

?>