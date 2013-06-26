<?php
if (!defined('BASEPATH'))
	exit('No direct script access allowed');

class insurance extends CI_Controller {

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

	public function plan1() {
		$CusID = $this -> input -> post('cusid');
		$Budget = $this -> input -> post('budget');

		$Capital = $Budget / 100000;
		//echo $Capital;

		$this -> load -> view('compare');
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
