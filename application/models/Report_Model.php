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
		$this -> db -> where('Date_Add', $date);
		$this -> db -> where('user_id', "$session_id");
		return $this -> db -> get('bla_customer');
	}

}
?>