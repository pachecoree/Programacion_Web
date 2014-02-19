<?
class Multiplicacion {
	public $numero;
	public $multiplicador;
	function __construct() {
		if (isset($_GET['numero']))
			$this -> numero = $_GET['numero'];	
		else
			$this -> numero = 12;
		if (isset($_GET['multiplicador']))
			$this -> multiplicador = $_GET['multiplicador'];
		else
			$this -> multiplicador = 10;
	}
	function Mostrar() {
		$contador=1;
		$mult;
		for ( ; $contador <= $this -> numero ; $contador++) {
			echo '<br/>Tabla del ' . $contador . '<br/><br/>';
			for ( $mult =1; $mult <= $this -> multiplicador; $mult++) {
				echo $contador . '*' . $mult . '=' . ($contador*$mult) . '<br/>' ;
			}
		}
	}
	function Texto() {
		echo 'Gracias maestra por contarme la practica, aunque la haya terminado un poco tarde :D','<br/><br/>';
	}
}
$objeto = new Multiplicacion($_GET);
$objeto->Texto();
$objeto->Mostrar();
?>
