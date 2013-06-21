<?php

class Login_Model extends CI_Model {

	function __construct() {
		parent::__construct();
	}

	public function check_user($username, $password) {
		$this -> db -> where('username', $username);
		$this -> db -> where('password', $password);
		return $this -> db -> get('bla_users');
	}

}
?>