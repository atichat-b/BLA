<?php

class User_Model extends CI_Model {

	function __construct() {
		parent::__construct();
	}

	public function get_user($session_id) {
		$this -> db -> where('user_id', "$session_id");
		return $this -> db -> get('bla_customer');
	}

	public function edit($id) {
		return $this -> db -> get_where('bla_customer', array('Customer_ID' => $id));
	}

	public function edit_save($params = array(), $id = "") {
		$this -> db -> where('Customer_ID', $id);
		$this -> db -> update('bla_customer', $params);
	}

	public function delete($id) {
		$this -> db -> where('Customer_ID', $id);
		$this -> db -> delete('bla_customer');
	}

	public function search($name,$session_id) {
		$this -> db -> where('user_id', "$session_id");
		$this -> db -> like('F_Name', "$name");
		return $this -> db -> get('bla_customer');
	}

}
?>