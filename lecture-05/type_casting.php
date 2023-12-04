<?php

// Data Types & Type Casting 

#Scalar types
    # int 
    # bool 
    # float 
    # string
#Compound Types 
    #array
    #object
    #callable
    #iterable

#Special Types
    #resource
    #null
declare(strict_types=1); //Fatal error: Uncaught TypeError: sum(): Argument #2 ($y) must be of type int, string given,
$amount = 3.56;
$status = 'paid';

echo gettype($amount);
echo gettype($status);

var_dump($amount);
var_dump($status);

//Type juggling

function sum(int $x, int $y) {
    var_dump($x, $y); //it will show  int(34) string(2) "45" before put int before paramenter but if i put int before parameter above it will show  int(34) int(45) that means which type hint i put will show that, that is called type juggling
    return $x + $y;
}

echo sum(34,'45');
echo sum(54.78,'10');