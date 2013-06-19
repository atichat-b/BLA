<?php
if (!defined('BASEPATH'))
	exit('No direct script access allowed');

class plan extends CI_Controller {

	public function index() {
		$this -> load -> view('plan');
		session_start();
		$_SESSION['name'] = "Atichat Saetae";
	}
	
	public function test(){
		session_start();
		echo $_SESSION['name'];
	}

}
