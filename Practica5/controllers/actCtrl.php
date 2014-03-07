<?php

class actCtrl{
	function __construct() {

	}

	function validate_data($studentdata) {
		if ($this -> validate_email($studentdata))
			if ($this -> validate_name($studentdata))
				if ($this -> validate_phonenumber($studentdata)) {
					return true;
				}
		unset($studentdata);
		return false;
	}

	function validate_phonenumber($studentdata) {
		if (isset($_GET['phonenumber'])) {
			$string_match = '/^33(-[0-9]{2}){4}$/';
			if (preg_match($string_match,$_GET['phonenumber']) == 1) {
				$student_data['phonenumber'] = $_GET['phonenumber'];
				return true;
			}
			echo 'Phone number format is incorrect, correct format is : xx-xx-xx-xx-xx </br>';
			return false;
		}
		echo 'Phone Number was not found</br>';
		return false;
	}

	function validate_name($studentdata) {
		if(isset($_GET['name']) && isset($_GET['firstlastname']) && isset($_GET['secondlastname'])) {
			$full_name = $_GET['firstlastname'].' '.$_GET['secondlastname'].' '.$_GET['name'];
			$string_match = '/^[a-z ]{1,}$/i';
			if (preg_match($string_match,$full_name) == 1) {
				$student_data['name'] = $_GET['name'];
				$student_data['firstlastname'] = $_GET['firstlastname'];
				$student_data['secondlastname'] = $_GET['secondlastname'];
				return true;
			}
			echo 'Name format is incorrect</br>';
			return false;
		}
		echo 'Name was not found</br>';
		return false;
	}

	function validate_email($studentdata) {
		if (isset($_GET['email'])) {
			$string_match = '/^([a-z0-9_-]{1,}([.][a-z0-9_-]{1,}){0,}[a-z0-9_-]{0,}){1,}[@][a-z0-9]{1,}([.]([a-z0-9]){1,}){1,}$/i';
			if (preg_match($string_match,$_GET['email']) == 1) {
				$student_data['email'] = $_GET['email'];
				return true;
			}
			echo 'Email format is incorrect</br>';
			return false;
		}
		echo 'Email was not found</br>';
		return false;
	}

	function add_student() {
		$studentdata = array();
		if ($this -> validate_data($studentdata))
			return $studentdata;
		else
			return false;
	}
}

?>