<?php

class Insurance_Model extends CI_Model {

	function __construct() {
		parent::__construct();
	}

	public function get_user($CusID) {
		$this -> db -> where('Customer_ID', $CusID);
		return $this -> db -> get('bla_customer');
	}

	public function get_plan($sex, $old, $Plan) {
		$this -> db -> where('Sex', $sex);
		$this -> db -> where('Age', $old);
		$this -> db -> where('CatagoryInsurance', "$Plan");
		return $this -> db -> get('bla_rate');
	}

}
?>