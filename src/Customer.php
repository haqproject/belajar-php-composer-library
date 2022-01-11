<?php

namespace HaqProject\Belajar;

class Customer {
    public function __construct(private string $name)
    {
        
    }

    public function sayHello(string $name = "Anonim"): string{
        return "Hello $name, my name is $this->name";
    }
}
