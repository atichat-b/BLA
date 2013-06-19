<?php
if (!defined('BASEPATH'))
	exit('No direct script access allowed');

class register extends CI_Controller {
	
	public function __construct() {
		parent::__construct();
		$this -> load -> model('Register_Model', 'register');
	}

	public function index() {
		$this -> load -> view('enquiry');
	}

	public function insert() {
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
		$param = array('F_Name' => $F_Name, 'L_Name' => $S_Name, 'N_Name' => $N_Name, 'BirthDay' => $birthday,'Old' => $old, 'Sex' => $sex, 'Status' => $status,
		 'Address' => $address, 'Country' => $country, 'Postcode' => $postcode, 'Email' => $email, 'Tel' => $telephone, 'Mobile' => $mobile);
		//echo "<pre>" . json_encode($param);
		$this -> register -> insert_db($param);
		$alert = html_entity_decode("บันทึกข้อมูลเรียบร้อย");
		echo "<script language='javascript'> alert('" . $alert . "');window.location='" . site_url('') . "';</script>";
	}

}