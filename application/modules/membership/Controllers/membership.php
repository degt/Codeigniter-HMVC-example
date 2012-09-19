<?php
/*
Author: Daniel Gutierrez
Date: 9/19/12
Version: 1.0
*/

class Membership extends MY_Controller{
	
	function __construct(){
		parent::__construct();
		$this->load->model('membership_model');
	}
	
	function signin(){
		//Redirect
		if($this->_is_logged_in()){
			redirect('');
		}
		
		if($_POST){
			//Data
			$username = $this->input->post('username', true);
			$password = $this->input->post('password', true);
			$userdata = $this->membership_model->validate($username, md5($password));	
			
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
		$this->load->view('signup');
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
		
}

?>