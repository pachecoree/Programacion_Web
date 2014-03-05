<?php
class groupMdl {
	
	function getStudentsList($group = null) {
		$result = array();
		switch($group) {
			case "CC419-D04":
						  $result= array ("paterno" =>'Perez',
										  "materno" => 'Franco',
										  "nombre" =>'Juan Oswaldo',
										  "semestre" =>'6',
										  "carrera" => 'Computacion');
				break;
			case "I5882-D27":
				$result=  array ("paterno" => 'Ruiz', 
									       "materno" => 'Martinez',
									       "nombre" => 'pedro Federico',
									       "semestre" => '7',
									       "carrera" => 'Informatica');
				break;
			default:
				$result = array ("paterno" => 'Romero',
										  "materno" => 'Pacheco',
										  "nombre" => 'Carlos Mauricio',
										  "semestre" => '7',
										  "carrera" => 'Computacion');
		}
		$result['status'] = true;
		return $result;
	}
}

?>