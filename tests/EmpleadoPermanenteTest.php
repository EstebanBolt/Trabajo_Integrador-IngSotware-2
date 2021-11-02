<?php

class Empleado_permanente_test extends \PHPUnit\Framework\TestCase
{
	public function test_Obtencion_fecha_de_Ingreso()
	{

	$Emp = new \App\EmpleadoPermanente($nombre="Esteban",$apellido="Valladar",$dni=30484549,$salario=58000,$fechaIngreso=new \DateTime("01-06-2006"));

	$this->assertEquals($fechaIngreso,$Emp->getFechaIngreso());
	}

	public function test_Calculo_De_Comision()
	{

	$Emp=new \App\EmpleadoPermanente($nombre="Esteban",$apellido="Valladar",$dni=30484549,$salario=58000,$fechaIngreso=new \DateTime("01-06-2006"));

	$this->assertEquals($Emp->calcularAntiguedad()."%",$Emp->calcularComision());
	}

	public function test_Calculo_sobre_ingreso_Total()
    {
	$Emp=new \App\EmpleadoPermanente($nombre="Esteban",$apellido="Valladar",$dni=30484549,$salario=58000,$fechaIngreso=new \DateTime("01-06-2006"));

	$this->assertEquals(($salario+$salario * $Emp->calcularAntiguedad()/100),$Emp->calcularIngresoTotal());
	}

	
	public function Test_Puedo_Calcular_La_Antiguedad()

	{
	$Emp=new \App\EmpleadoPermanente($nombre="Esteban",$apellido="Valladar",$dni=30484549,$salario=58000,$fechaIngreso=new \DateTime("01-06-2006"));

	$fechaActual=new \DateTime();

    $difer=$fechaIngreso->diff($fechaActual);

    $dias=$difer->format("%y");

	$this->assertEquals($dias,$Emp->calcularAntiguedad());
	}

	public function test_Devuelve_Cero()
    {
	$Emp=new \App\EmpleadoPermanente($nombre="Esteban",$apellido="Valladar",$dni=30484549,$salario=58000,$fechaIngreso=new \DateTime());

	$this->assertEquals($fechaIngreso,$Emp->getFechaIngreso());

    $this->assertEquals(0,$Emp->calcularAntiguedad());
	}

	public function Test_Creacion_De_fechas_futuras()
	{

	$this->expectException(\Exception::class);

	$Emp=new \App\EmpleadoPermanente($nombre="Esteban",$apellido="Valladar",$dni=30484549,$salario=58000,$fechaIngreso=(new \DateTime())->date_modify("01-06-2006",'+4 day'));

	}
	
}
?>