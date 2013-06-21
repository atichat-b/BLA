<?php
if (!defined('BASEPATH'))
	exit('No direct script access allowed');

class plan extends CI_Controller {

	public function index() {
		$session_logged = $this -> session -> userdata('logged');
		if ($session_logged == TRUE) {
			$this -> load -> view('plan');
		} else {
			$this -> load -> view('login');
		}
		//session_start();
		//$userdata=array('name'=>'names');
		//$this->session->set_userdata($userdata);
		//$_SESSION['name'] = "Atichat Saetae";
	}

	public function test() {
		//session_start();
		echo $_SESSION['name'];
	}

}
