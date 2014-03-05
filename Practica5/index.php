<?php
	if (isset($_GET['ctrl'])) {
		require('controllers/ctrlCtrl.php');
		$ctrlctrl = new ctrlCtrl();
		$groupctrl = null;
		$ctrl = $ctrlctrl -> validate_ctrl($_GET['ctrl']);
		if ($ctrl) {
			switch ($ctrl) {
				case 1:
					require('controllers/groupCtrl.php');
					$groupctrl = new groupCtrl();
					break;
			}
		$groupctrl -> run();
		}
		else 
			echo 'Controller "', $_GET['ctrl'], '" is not valid';
	}
	else
		echo 'Controller command not found';
?>