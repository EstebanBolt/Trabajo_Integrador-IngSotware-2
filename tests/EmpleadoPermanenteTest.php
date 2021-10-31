<?php

class Empleado_permanente_test extends \PHPUnit\Framework\TestCase
{
	public function test_Obtencion_fecha_de_Ingreso()
	{

	$Emp = new \App\EmpleadoPermanente($nombre="Esteban",$apellido="Valladar",$dni=30484549,$salario=58000,$fechaIngreso=new \DateTime("01-06-2006"));

	$this->assertEquals($fechaIngreso,$Emp->getFechaIngreso());


	}

	
}
?>