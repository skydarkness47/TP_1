<?php


abstract  class Persona 
{

private $apellido;
private $dni;
private $nombre;
private $sexo;

	
	function __construct($ap,$dni,$nombre,$sexo)
	{

		$this->apellido=$ap;
		$this->dni=$dni;
		$this->nombre=$nombre;
		$this->sexo = $sexo;
	}

	public function getAPellido()
	{
		return $this->apellido;

	}
	public function getDNI()
	{
			return $this->dni;
	}
	Public function getNombre()
	{

		return $this->nombre;
	}
	public function getSexo()
	{
		return $this->sexo;

	}

	   protected function Hablar($idioma)
	{

		return $idioma;
	}

	public static function ToString($empleado)
	{

		$datos = $empleado->getAPellido()."-".$empleado->getDNI()."-".$empleado->getNombre()."-".$empleado->getSexo();
		return $datos;

	}

}




?>