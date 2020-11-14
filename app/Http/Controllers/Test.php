<?php
namespace App\Http\Controllers;

trait TestTrait {
    public function sayHello() {
        echo "Hello";
    }
}

class Test 
{
    use TestTrait;

    public $y = 3;
    protected $prop = 3;
    

    public function testUser() 
    {
        return "Hello world";
    }
    
}


?>