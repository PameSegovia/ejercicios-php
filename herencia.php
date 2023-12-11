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
	public function mostrarEdad(){
		$this->edad=20;
		return $this->edad;
	}

}

class trabajador extends persona{
	public $puesto;

	public function presentarseComoTrabajador(){
		echo "Hola Soy ".$this->nombre." y soy un ".$this->puesto;
	}

}


$objTrabajador=new trabajador(); //Creación de un Objeto
$objTrabajador->asignarNombre("Pamela ");
$objTrabajador->puesto="Programador";

$objTrabajador->presentarseComoTrabajador();

?>