<?php
class groupMdl {
	
	function getStudentsList($group = null) {
		$result = array();
		switch($group) {
			case "CC419-D04":
						  $result[]= array ("paterno" =>'Perez',
										  "materno" => 'Franco',
										  "nombre" =>'Juan Oswaldo',
										  "semestre" =>'6',
										  "carrera" => 'Computacion');

						  $result[] = array ("paterno" =>'Gutierrez',
										  "materno" => 'Romero',
										  "nombre" =>'Jose Pablo',
										  "semestre" =>'7',
										  "carrera" => 'Informatica');

						  $result[] = array ("paterno" =>'Corbala',
										  "materno" => 'Gutierrez',
										  "nombre" =>'Sara Aidee',
										  "semestre" =>'5',
										  "carrera" => 'Computacion');
				break;
			case "I5882-D27":
				$result[]=  array ("paterno" => 'Ruiz', 
									       "materno" => 'Martinez',
									       "nombre" => 'pedro Federico',
									       "semestre" => '7',
									       "carrera" => 'Informatica');
				break;
			default:
				$result[] = array ("paterno" => 'Romero',
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