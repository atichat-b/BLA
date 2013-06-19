<?php

class Register_Model extends CI_Model {

	function __construct() {
		parent::__construct();
	}

	public function insert_db($params = array()) {
		$this -> db -> insert('bla_customer', $params);
	}
 
}
?>