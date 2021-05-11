<?php
namespace App;
use  App\FizzBuzz;
use  PHPUnit\Framework\TestCase;
class FizzBuzzTest extends TestCase 
{
    public function testReturnEqualNumber()
    {
        $fizzbuzz = new FizzBuzz();
        $result = $fizzbuzz->execute(7);
        $this->assertEquals(7, $result);
    }

public function testReturnFizzWhenNumberIsMultipleOf3() 
    {
    $fizzbuzz = new FizzBuzz();
    $result = $fizzbuzz->execute(3);
    $this->assertEquals('Fizz', $result);
    }
    
public function testReturnFizzBuzzWhenNumberIsMultipleOf3And5() {
    $fizzbuzz = new FizzBuzz();
    $result = $fizzbuzz -> execute(30);
    $this->assertEquals('FizzBuzz', $result);
    }
};


