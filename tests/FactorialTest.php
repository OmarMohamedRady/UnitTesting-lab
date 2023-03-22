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

    public function testNumber(){

        $factnum =new Factorial();
        $result = $factnum->fact(5);
        $this->assertEquals(120,$result);
    }

    public function testRandom(){

        $factnum =new Factorial();
        $result = $factnum->fact(8);
        $this->assertEquals(40320,$result);
    }

    public function testNegative(){

        $factnum =new Factorial();
        $result = $factnum->fact(-3);
        $this->assertEquals(null,$result);
    }


    public function testDecimal(){

        $factnum =new Factorial();
        $result = $factnum->fact(1.5);
        $this->assertEquals(null,$result);
    }

    public function testBoolean(){

        $factnum =new Factorial();
        $result = $factnum->fact(false);
        $this->assertEquals(null,$result);
    }
  
    public function testString(){

        $factnum =new Factorial();
        $result = $factnum->fact('abc');
        $this->assertEquals(null,$result);
    }
   


}