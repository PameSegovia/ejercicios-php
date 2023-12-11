<?php

class persona{

	public $nombre; //propiedades
	private $edad;
	protected $altura;

	public function asignarNombre($nuevoNombre){ //acciones o métodos

		$this->nombre=$nuevoNombre;
	}
	public function imprimirNombre(){
		
		echo "Hola soy ".$this->nombre;
	}
	public function mostrarNombre(){
		$this->edad=20;
		return $this->edad;
	}

}

$objAlumno=new persona(); //Creación de un Objeto
$objAlumno->asignarNombre("Oscar");

$objAlumno2=new persona(); //Creación de un Objeto
$objAlumno2->asignarNombre("Pame");
$objAlumno2->imprimirNombre();

echo $objAlumno2->nombre;
echo $objAlumno2->mostrarEdad();


?>