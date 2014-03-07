<?php

class groupCtrl {

	function __construct() {
		require('models/groupMdl.php');
		$this -> model = new groupMdl();
	}
	function validate_group($group) {
		$pattern = '/^[a-z]{1}[a-z0-9][0-9]{3}-d[0-9]{2}/i';
		if (preg_match($pattern, $group) == 1) {
			return true;
		}
		else {
			return false;
		}
	}
	
	function run() {
		if (isset($_GET['act'])) {
			$group = null;
			switch($_GET['act']) {
				case 'list':
					//Validate the group
					if(isset($_GET['group'])) {
						$group = $_GET['group'];
						if ($this -> validate_group($group)) {
							$result = $this -> model -> getStudentsList($group);
							if ($result['status']) {
								//load list view
								unset($result['status']);
								require('views/groupStudentsList.php');
							}
							else {
								//load errors view
								require('views/error.php');	
							}
						}
						else
							echo 'Group "', $_GET['group'],'" is not valid';
					}
					else {
						echo 'Group action not found';
					}
					break;
				case 'add' :
					if (isset($_GET['group'])) {
						$group = $_GET['group'];
						if ($this -> validate_group($group)) {
							//insert data
							require('controllers/actCtrl.php');
							$activity = new actCtrl();
						}
						else
							echo 'Group "', $_GET['group'],'" is not valid';
					}
					else {
						echo 'Group action not found';
					}
					break;
			default :
				echo 'Activity "', $_GET['act'],'" is not valid';
				break;
			}
		}
		else
			echo 'Activy action not found';
	}
}
?>