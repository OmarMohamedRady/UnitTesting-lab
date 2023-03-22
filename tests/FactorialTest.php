<?php
use PHPUnit\Framework\TestCase;
require "./src/Factorial.php";

class FactorialTest extends TestCase{

    public function testZero(){

        $factnum =new Factorial();
        $result = $factnum->fact(0);
        $this->assertEquals(1,$result);
    }

    public function testOne(){

        $factnum =new Factorial();
        $result = $factnum->fact(1);
        $this->assertEquals(1,$result);
    }

  

   


}