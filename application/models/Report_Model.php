<?php

class Report_Model extends CI_Model {

	function __construct() {
		parent::__construct();
	}

	public function get_user($session_id) {
		$this -> db -> where('user_id', "$session_id");
		return $this -> db -> get('bla_customer');
	}

	public function get_user_date($date, $session_id) {
		$this -> db -> like('Date_Add', $date);
		$this -> db -> where('user_id', "$session_id");
		return $this -> db -> get('bla_customer');
	}

	public function get_user_all() {
		$this -> db -> where('role', "2");
		return $this -> db -> get('bla_users');
	}

	public function get_user_mount() {
		$sql = "select * from bla_users,bla_customer where bla_users.user_id = bla_customer.user_id and bla_users.role=2";
		$query = $this -> db -> query($sql);
		return $query;
	}

}
?>