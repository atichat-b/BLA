<?php
header('Content-type: text/html; charset=utf-8');
if (!defined('BASEPATH'))
	exit('No direct script access allowed');

class report extends CI_Controller {

	public function __construct() {
		parent::__construct();
		$this -> load -> model('Report_Model', 'report');
	}

	public function index() {
		$session_logged = $this -> session -> userdata('logged');
		$session_id = $this -> session -> userdata('id');
		if ($session_logged == TRUE) {
			$this -> data['query'] = $this -> report -> get_user($session_id);
			$this -> load -> view('report_user', $this -> data);
		} else {
			$this -> load -> view('login');
		}
	}

	public function get_date() {
		$session_id = $this -> session -> userdata('id');
		$date = $this -> input -> post('datepicker');
		$this -> data['query'] = $this -> report -> get_user_date($date, $session_id);

		$this -> load -> view('report_user', $this -> data);
	}
	
	public function test() {
		$this -> data['query'] = $this -> report -> get_user_mount();

		$this -> load -> view('report_admin', $this -> data);
	}

	public function get_all() {
		$this -> data['query'] = $this -> report -> get_user_mount();
		$this -> load -> view('report_admin', $this -> data);
	}

}
