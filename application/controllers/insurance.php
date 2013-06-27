<?php
header('Content-type: text/html; charset=utf-8');
if (!defined('BASEPATH'))
	exit('No direct script access allowed');

class insurance extends CI_Controller {

	public function __construct() {
		parent::__construct();
		$this -> load -> model('Insurance_Model', 'insurance');
	}

	public function index() {
		$session_logged = $this -> session -> userdata('logged');
		if ($session_logged == TRUE) {
			$this -> load -> view('plan');
		} else {
			$this -> load -> view('login');
		}
		//session_start();
		//$userdata=array('name'=>'names');
		//$this->session->set_userdata($userdata);
		//$_SESSION['name'] = "Atichat Saetae";
	}

	public function plan($id = '') {
		$id = ($id == '') ? $this -> uri -> segment(2) : $id;
		$data['cusid'] = $id;
		$this -> load -> view('plan', $data);
	}

	public function plan1($CusID = '', $sex = '', $old = '') {
		$CusID = $this -> input -> post('cusid');
		$Budget = $this -> input -> post('budget');
		$Plan = "ออมทรัพย์";
		$query_user = $this -> insurance -> get_user($CusID);
		$result_user = $query_user -> result();
		if ($query_user -> num_rows() > 0) {
			$sex = $result_user[0] -> Sex;
			$old = $result_user[0] -> Old;

			$query_plan = $this -> insurance -> get_plan($sex, $old, $Plan);
			$plan_result = $query_plan -> result();

			$Rate = $plan_result[0] -> Rate;
			$total = $Budget / 100000 * $Rate;
			$data['plan'] = array('Plan' => $plan_result[0] -> Type, 'Budget' => $Budget, 'Total' => $total);
			//$data['brief'] = $this -> brief_model -> edit($id) -> row();
			$this -> load -> view('compare', $data);
		}

		//var_dump($plan_result);

	}

	public function plan2() {
		$CusID = $this -> input -> post('cusid');
		$Budget = $this -> input -> post('budget');

		//echo $Budget . $CusID;
		$this -> load -> view('compare');
	}

	public function test() {
		//session_start();
		echo $_SESSION['name'];
	}

}
