<?php
use PHPUnit\Framework\TestCase;
require "./src/User.php";

class UserTest extends TestCase{

    public function testEmptyName(){

        $user =new User('Muhammed','Muhammed@gmail.com');
        $result = $user->name();
        $this->assertEquals('Muhammed',$result);
    }

    public function testParameterizedName(){

        $user =new User('Muhammed','Muhammed@gmail.com');
        $result = $user->name("Fahmi");
        $this->assertEquals('Fahmi',$result);
    }

    public function testEmptyEmail(){

        $user =new User('Muhammed','Muhammed@gmail.com');
        $result = $user->email();
        $this->assertEquals('Muhammed@gmail.com',$result);
    }

    public function testParameterizedEmail(){

        $user =new User('Muhammed','Muhammed@gmail.com');
        $result = $user->email("Fahmi@gmail.com");
        $this->assertEquals('Fahmi@gmail.com',$result);
    }



}