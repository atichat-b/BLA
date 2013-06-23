<?php
if (!defined('BASEPATH'))
	exit('No direct script access allowed');

class user extends CI_Controller {

	var $data = array('page_title' => 'Brief List', 'group' => '');

	public function __construct() {
		parent::__construct();
		$this -> load -> model('User_Model', 'user');
	}

	public function index() {
		$session_logged = $this -> session -> userdata('logged');
		if ($session_logged == TRUE) {
			$this -> data['query'] = $this -> user -> get_user();
			$this -> load -> view('user', $this -> data);
		} else {
			$this -> load -> view('login');
		}
		//session_start();
		//$userdata=array('name'=>'names');
		//$this->session->set_userdata($userdata);
		//$_SESSION['name'] = "Atichat Saetae";
	}

	public function test() {
		//session_start();
		echo $_SESSION['name'];
	}

	function edit($id = '') {
		$id = ($id == '') ? $this -> uri -> segment(3) : $id;
		$data['query'] = $this -> user -> edit($id) -> row();
		$this -> load -> view('enquiry_edit', $data);
	}

	public function delete($id = '') {
		$id = $this -> uri -> segment(3);
		$this -> user -> delete($id);
		redirect('user');
	}

}
