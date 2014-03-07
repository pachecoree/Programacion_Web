<?php
	while (list($key,$student) = each($result)) {
		echo 'Nombre del Alumno: ', $student['paterno'],' ',$student['materno'],' ' ,$student['nombre'],'</br>';
		echo 'Semestre: #',$student['semestre'],'</br>Carrera: ',$student['carrera'],'</br></br>';
	}
?>