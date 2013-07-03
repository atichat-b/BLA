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
		$Plan = "คุ้มครอง";
		$query_user = $this -> insurance -> get_user($CusID);
		$result_user = $query_user -> result();
		if ($query_user -> num_rows() > 0) {
			$sex = $result_user[0] -> Sex;
			$old = $result_user[0] -> Old;

			$query_rates = $this -> insurance -> get_rates($sex, $old, $Plan);
			$rates_result = $query_rates -> result();

			$Plan_ID = $rates_result[0] -> InsuranceID;
			$Plan2_ID = $rates_result[1] -> InsuranceID;

			/*------Plan A------*/
			$query_plan1 = $this -> insurance -> get_plan($Plan_ID);
			$plan1_result = $query_plan1 -> result();
			$Rate = $rates_result[0] -> Rate;
			$Contract = $plan1_result[0] -> YearForContract;
			$Paid = $plan1_result[0] -> YearPaid;
			$Insurance = $rates_result[0] -> Type;
			$total = $Budget / 100000 * $Rate;
			$PayYear = $Paid + $old;
			$ProtectYear = $Contract;
			$ProtectEnd = date("Y") + $Contract;

			/*------Plan B------*/
			$query_plan2 = $this -> insurance -> get_plan_b($Plan2_ID);
			$plan2_result = $query_plan2 -> result();

			$Plan2_Name = $plan2_result[0] -> NameInsurance;
			$Plan2_Contract = $plan2_result[0] -> YearForContract;
			$Plan2_Paid = $plan2_result[0] -> YearPaid;
			$Plan2_Rate = $rates_result[1] -> Rate;
			$Plan2_Total = $Budget / 100000 * $Plan2_Rate;
			$Plan2_PayYear = $Plan2_Paid + $old;
			$Plan2_Protect_Year = $Plan2_Contract;
			$Plan2_Protect_End = date("Y") + $Plan2_Contract;

			$data['plan_a'] = array('Plan' => $Insurance, 'Budget' => $Budget, 'Total' => $total, 'Contract' => $Paid, 'PayYear' => $PayYear, 'ProtectYear' => $ProtectYear, 'ProtectEnd' => $ProtectEnd);
			$data['plan_b'] = array('Plan' => $Plan2_Name, 'Budget' => $Budget, 'Total' => $Plan2_Total, 'Contract' => $Plan2_Paid, 'PayYear' => $Plan2_PayYear, 'ProtectYear' => $Plan2_Protect_Year, 'ProtectEnd' => $Plan2_Protect_End);
			//$data['brief'] = $this -> brief_model -> edit($id) -> row();
			$this -> load -> view('compare', $data);

		}

		//var_dump($plan_result);

	}

	public function plan2($CusID = '', $sex = '', $old = '') {
		$CusID = $this -> input -> post('cusid');
		$Budget = $this -> input -> post('budget');
		$Plan = "ออมทรัพย์";
		$query_user = $this -> insurance -> get_user($CusID);
		$result_user = $query_user -> result();
		if ($query_user -> num_rows() > 0) {
			$sex = $result_user[0] -> Sex;
			$old = $result_user[0] -> Old;

			$query_rates = $this -> insurance -> get_rates($sex, $old, $Plan);
			$rates_result = $query_rates -> result();

			$Plan_ID = $rates_result[0] -> InsuranceID;
			$Plan2_ID = $rates_result[1] -> InsuranceID;

			/*------Plan A------*/
			$query_plan1 = $this -> insurance -> get_plan($Plan_ID);
			$plan1_result = $query_plan1 -> result();
			$Rate = $rates_result[0] -> Rate;
			$Contract = $plan1_result[0] -> YearForContract;
			$Paid = $plan1_result[0] -> YearPaid;
			$Insurance = $rates_result[0] -> Type;
			$total = $Budget / 5000 * $Rate;
			$PayYear = $Paid + $old;
			$ProtectYear = $Contract;
			$ProtectEnd = date("Y") + $Contract;

			/*------Plan B------*/
			$query_plan2 = $this -> insurance -> get_plan_b($Plan2_ID);
			$plan2_result = $query_plan2 -> result();

			$Plan2_Name = $plan2_result[0] -> NameInsurance;
			$Plan2_Contract = $plan2_result[0] -> YearForContract;
			$Plan2_Paid = $plan2_result[0] -> YearPaid;
			$Plan2_Rate = $rates_result[1] -> Rate;
			$Plan2_Total = $Budget / 5000 * $Plan2_Rate;
			$Plan2_PayYear = $Plan2_Paid + $old;
			$Plan2_Protect_Year = $Plan2_Contract;
			$Plan2_Protect_End = date("Y") + $Plan2_Contract;

			$data['plan_a'] = array('Plan' => $Insurance, 'Budget' => $Budget, 'Total' => $total, 'Contract' => $Paid, 'PayYear' => $PayYear, 'ProtectYear' => $ProtectYear, 'ProtectEnd' => $ProtectEnd);
			$data['plan_b'] = array('Plan' => $Plan2_Name, 'Budget' => $Budget, 'Total' => $Plan2_Total, 'Contract' => $Plan2_Paid, 'PayYear' => $Plan2_PayYear, 'ProtectYear' => $Plan2_Protect_Year, 'ProtectEnd' => $Plan2_Protect_End);
			//$data['brief'] = $this -> brief_model -> edit($id) -> row();
			$this -> load -> view('compare', $data);

		}
	}

	public function test() {
		//session_start();
		echo $_SESSION['name'];
	}

}
