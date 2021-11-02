<?php



 class EmpleadoTest extends\PHPUnit\Framework\TestCase

{

    //PHPUNIT pasa por alto los metodos sin palabra Test
    //Con el siguiente metodo SeCreaElEmpleado, cargo los datos para el metodo constructor de clase Empleado, y tambien agrego las asserciones afirmativas
    
    public function SeCreaElEmpleado()
    {
       $Emp=new\App\Empleado($nombre = "Esteban", $apellido = "Valladar", $dni = 30484549, $salario = 58000,$sector="Electronica");
        
       $this->assertequals($dni,$Emp->getDni());  

       $this->assertequals($salario,$Emp->getSalario());

       $this->assertequals($nombre."".$apellido,$Emp->getNombreApellido());

       $this->assertequals($nombre."".$apellido."".$dni."".$salario,$Emp->__tostring());  

        $Emp->setSector($sector);

       $this->assertequals($sector,$Emp->getSector());    

    }

    //Comienzo con los tests para Empleado
     
    public function test_Prueba_Si_Se_Envia_Un_Dni_Vacio()
    {
    $this->expectException(\Exception::class);
    //Primero envio la carga completa y falla
    $Emp=new\App\Empleado($nombre = "Esteban", $apellido = "Valladar", $dni = 30484549, $salario = 58000,$sector="No especificado"); 
    //Si envio alguno de los datos vacios, en este caso dni vacio, el test saldra correcto, ya que produce la exepcion dada en la clase Empleado
    $Emp=new\App\Empleado($nombre = "Esteban", $apellido = "Valladar", $dni = NULL, $salario = 58000,$sector="No especificado"); 
    }

     public function test_Prueba_Si_Se_Envia_String_o_Caracteres_Dni()
    {
    $this->expectException(\Exception::class);

    $Emp=new\App\Empleado($nombre="Esteban",$apellido="Valladar",$dni="hjk",$salario=45000,$sector="No especificado"); 
    }

    public function test_Prueba_Si_Se_Crea_Nombre_Vacio()
    {
    $this->expectException(\Exception::class);

    $Emp=new\App\Empleado($nombre="",$apellido="Valladar",$dni=30484549,$salario=45000,$sector="No especificado"); 
    }

    public function test_To__string()
    {

    $this->expectException(\Exception::class);

    $Emp=new\App\Empleado($nombre="Esteban",$apellido="Valladar",$dni=30484549,$salario=45000); 

    }
    

        public function test_Prueba_Si_Se_Crea_Apellido_Vacio()
    {
    $this->expectException(\Exception::class);

    $Emp=new\App\Empleado($nombre="Esteban",$apellido="",$dni=30484549,$salario="45000",$sector="No especificado"); 
    }

    

    
}

?>