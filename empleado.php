<?php
include "persona.php";


class empleado extends Persona
{

private $legajo;
private $sueldo;
	
	function __construct($apellido,$dni,$nombre,$sexo,$legajo,$sueldo)
	{
		parent::__construct($apellido,$dni,$nombre,$sexo);
		$this->legajo = $legajo;
		$this->sueldo = $sueldo;
	}

	public function getLegajo()
	{
		return $this->legajo;

	}
	public function getSueldo()
	{
		return $this->sueldo;
	}


	public function Hablar($hablar)
	{

		return "el empleado habla: ". parent::Hablar();
	}

	public static function  ToString($empleado)
	{

		
		return $empleado->getLegajo()."-".$empleado->getSueldo()."-".parent::ToString($empleado);

	}
}
?>