<?php
use PHPUnit\Framework\TestCase;
require "./src/User.php";

class UserTest extends TestCase{

    public function testZero(){

        $user =new User('Muhammed','Muhammed@gmail.com');
        $result = $user->name();
        $this->assertEquals('Muhammed',$result);
    }



}