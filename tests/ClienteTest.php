<?php
namespace App;
use  App\Cliente;
use  PHPUnit\Framework\TestCase;

class ClienteTest extends TestCase 
{
    public function testClienteTieneIDCuandoSeCrea(){
        $clienteUno = new Cliente();
        $result = $clienteUno->identificacion;
        $this->assertEquals(1, $result);
    }
}
