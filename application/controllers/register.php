<?php
header('Content-type: text/html; charset=utf-8');
if (!defined('BASEPATH'))
	exit('No direct script access allowed');

class register extends CI_Controller {

	public function __construct() {
		parent::__construct();
		$this -> load -> library('form_validation');
		$this -> load -> model('Register_Model', 'register');
	}

	public function index() {
		$session_logged = $this -> session -> userdata('logged');
		if ($session_logged == TRUE) {
			$this -> load -> view('enquiry');
		} else {
			$this -> load -> view('login');
		}
	}

	public function insert() {
		$this->form_validation->set_rules('s_name', 'lang:ss', 'required');
		$config = array(
               array(
                     'field'   => 'f_name', 
                     'label'   => 'Name', 
                     'rules'   => 'required'
                  ),
                 array(
                     'field'   => 'income_salary', 
                     'label'   => 'Salary', 
                     'rules'   => 'required'
                  ),
                 array(
                     'field'   => 'mobile', 
                     'label'   => 'Mobile', 
                     'rules'   => 'required'
                  ),
                  array(
                     'field'   => 'birthday[]', 
                     'label'   => 'Birthday', 
                     'rules'   => 'required'
                  ),
            );
		$this->form_validation->set_rules($config);
		if ($this -> form_validation -> run() == FALSE) {
			$this -> load -> view('enquiry');
		} else {
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
			$invite = $this -> session -> userdata('id');
			$data_add = date('Y-m-d');
			$param = array('F_Name' => $F_Name, 'L_Name' => $S_Name, 'N_Name' => $N_Name, 'BirthDay' => $birthday, 'Old' => $old, 'Sex' => $sex, 'Status' => $status, 'Address' => $address, 'Province' => $country, 'Postcode' => $postcode, 'Email' => $email, 'Tel' => $telephone, 'Mobile' => $mobile, 'Income_money' => $income_salary, 'Income_other' => $income_other, 'Income_total' => $income_total, 'Date_Add' => $data_add, 'user_id' => $invite);
			//echo "<pre>" . json_encode($param);
			$this -> register -> insert_db($param);
			$alert = html_entity_decode("บันทึกข้อมูลเรียบร้อย");
			echo "<script language='javascript'> alert('" . $alert . "');window.location='" . site_url('user') . "';</script>";
		}
	}

}
