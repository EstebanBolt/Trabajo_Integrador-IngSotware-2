<?php 



class Empleado_eventual_test extends\PHPUnit\Framework\TestCase
{
    public function test_Calculo_de_comision()
    {
	$Emp=new \App\EmpleadoEventual($nombre="Esteban",$apellido="Valladar",$dni=30484549,$salario=58000,$montosDeVentas=[8500, 13000]);

	$this->assertEquals((8500+13000)/2 *0.05,$Emp->calcularComision());
	}

	public function test_Calculo_el_Ingreso_total()
    {
	$Emp=new \App\EmpleadoEventual($nombre="Esteban",$apellido="Valladar",$dni=30484549,$salario=58000,$montosDeVentas=[8500, 13000]);

	$this->assertEquals(($Emp->calcularComision()+$salario),$Emp->calcularIngresoTotal());

	}
	
	public function test_Prueba_el_monto_negativo_o_cero()
    {
    $this->expectException(\Exception::class);

    $Emp=new \App\EmpleadoEventual($nombre="Esteban",$apellido="Valladar",$dni=30484549,$salario=58000,$montosDeVentas=[8500,-200]);
		
    }
	
	
}
?>