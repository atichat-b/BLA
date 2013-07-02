<?php
header('Content-type: text/html; charset=utf-8');
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
		$session_id = $this -> session -> userdata('id');
		if ($session_logged == TRUE) {
			$this -> data['query'] = $this -> user -> get_user($session_id);
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

	function edit_save() {
		$id = $this -> input -> post('ID');
		$F_Name = $this -> input -> post('f_name');
		$S_Name = $this -> input -> post('s_name');
		$N_Name = $this -> input -> post('n_name');
		$birthday = $this -> input -> post('birthday');
		$old = $this -> input -> post('old');
		$sex = $this -> input -> post('sex');
		$status = $this -> input -> post('status');
		$address = $this -> input -> post('address');
		$country = $this -> input -> post('country');
		$postcode = $this -> input -> post('postcode');
		$email = $this -> input -> post('email');
		$telephone = $this -> input -> post('telephone');
		$mobile = $this -> input -> post('mobile');
		$income_salary = $this -> input -> post('income_salary');
		$income_other = $this -> input -> post('income_other');
		$income_total = $this -> input -> post('income_total');
		$params = array('F_Name' => $F_Name, 'L_Name' => $S_Name, 'N_Name' => $N_Name, 'BirthDay' => $birthday, 'Old' => $old, 'Sex' => $sex, 'Status' => $status, 'Address' => $address, 'Province' => $country, 'Postcode' => $postcode, 'Email' => $email, 'Tel' => $telephone, 'Mobile' => $mobile, 'Income_money' => $income_salary, 'Income_other' => $income_other, 'Income_total' => $income_total);
		$this -> user -> edit_save($params, $id);
		$alert = html_entity_decode("บันทึกข้อมูลเรียบร้อย");
		echo "<script language='javascript'> alert('" . $alert . "');window.location='" . site_url('user') . "';</script>";
	}

	public function delete($id = '') {
		$id = $this -> uri -> segment(3);
		$this -> user -> delete($id);
		redirect('user');
	}

	public function search() {
		$session_id = $this -> session -> userdata('id');
		$name = $this -> input -> post('search');
		$this -> data['query'] = $this -> user -> search($name,$session_id);
		$this -> load -> view('user', $this -> data);
	}

}
