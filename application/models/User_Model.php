<?php

class User_Model extends CI_Model {

	function __construct() {
		parent::__construct();
	}

	public function get_user($start = '0', $limit = '20') {
		$query = $this -> db -> get('bla_customer');
		return $query;
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

}
?>