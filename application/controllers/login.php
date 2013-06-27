<?php
header('Content-type: text/html; charset=utf-8');
if (!defined('BASEPATH'))
	exit('No direct script access allowed');

class login extends CI_Controller {

	public function __construct() {
		parent::__construct();
		$this -> load -> model('Login_Model', 'Login');
	}

	public function index() {
		$username = $this -> input -> post('username');
		$password = $this -> input -> post('password');
		/*$userdata = array('name' => 'names');
		 $this -> session -> set_userdata($userdata);
		 echo $this -> session -> userdata('name');
		 */
		if ($username != "" | $password != "") {
			$query = $this -> Login -> check_user($username, $password);
			if ($query -> num_rows() > 0) {
				$result = $query -> result();
				$user_data = array('Fname' => $result[0] -> f_name, 'Lname' => $result[0] -> l_name, 'logged' => TRUE);
				$this -> session -> set_userdata($user_data);
				//$this -> load -> view('user');
				redirect('/user', 'refresh');

			} else {
				$alert = html_entity_decode("กรุณารหัสตัวแทนเหรือพสาเวิร์ต");
				echo "<script language='javascript'> alert('" . $alert . "');window.location='" . site_url('/login') . "';</script>";
			}
		} else {
			$this -> load -> view('/login');
		}
	}

	public function logout() {
		$this -> session -> unset_userdata('logged');
		redirect('/welcome', 'refresh');
	}

}
