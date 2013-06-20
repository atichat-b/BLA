<?php
if (!defined('BASEPATH'))
	exit('No direct script access allowed');

class plan extends CI_Controller {

	public function index() {
		$this -> load -> view('plan');
		//session_start();
		$userdata=array('name'=>'names');
		$this->session->set_userdata($userdata);
		echo $this->session->userdata('name');
		//$_SESSION['name'] = "Atichat Saetae";
	}
	
	public function test(){
		//session_start();
		echo $_SESSION['name'];
	}

}
