<?php 



class Empleado_eventual_test extends\PHPUnit\Framework\TestCase
{
    public function test_Calculo_de_comision()
    {
	$Emp=new \App\EmpleadoEventual($nombre="Esteban",$apellido="Valladar",$dni=30484549,$salario=58000,$montosDeVentas=[8500, 13000]);

	$this->assertEquals((8500+13000)/2 *0.05,$Emp->calcularComision());
	}
	
	
}
?>