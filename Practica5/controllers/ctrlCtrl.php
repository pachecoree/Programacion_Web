<?php

class ctrlCtrl {

	function validate_ctrl($ctrl) {
		if (strcmp($ctrl,'group') == 0)
			return 1;
		else
			false;
	}
}

?>
