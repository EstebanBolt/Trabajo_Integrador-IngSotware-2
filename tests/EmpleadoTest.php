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

    

    
}

?>