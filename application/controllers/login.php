<?php
if (!defined('BASEPATH'))
	exit('No direct script access allowed');

class login extends CI_Controller {

	public function index() {
		//$this -> load -> view('plan');
		//session_start();
		$username = $this -> input -> post('username');
		$password = $this -> input -> post('password');
		/*$userdata = array('name' => 'names');
		 $this -> session -> set_userdata($userdata);
		 echo $this -> session -> userdata('name');
		 */
		echo $username . " " . $password;
	}

}
