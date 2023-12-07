<?php
declare(strict_types=1);
var_dump(foo()); //function can be called from anywhere
function foo() {
    return 'Welcome';
}

//but if function inside condition, the condition might run first, there can not call the function from anywhere
// var_dump(test());  // Uncaught Error: Call to undefined function test() and executin will stop If I put it down then will work

if(true) {
    function test() {
        return 'Test';
    } 
}

var_dump(test());//here will work

//function inside function

function demo() {
    function inner() {
        return 'inner';
    }
    return 'demo';
}

var_dump(demo()); //  string(4) "demo"
var_dump(inner()); //  string(5) "inner"

//but if we call inner() first it will not work cause demo() function have to call first

//lets try another function

function Name() {
    function Age() {
        echo 'Age';
        function Name() {
            echo 'Other';
        }
    }
    echo 'Name';
}

var_dump(Name()); //string(4) "Name"
// var_dump(Age());  //Cannot redeclare Name() (previously declared

//Type Hint
function TypeString(): string {
    return '1';
}

function TypeInt(): int {
    return '1';
}

var_dump(TypeString()); // string(1) "1"
// var_dump(TypeInt()); // Return value must be of type int

function TypeVoid(): void {
    // return null;
}

// var_dump(TypeVoid()); //A void function must not return a value, here null passes as value

//if i define type hint int and return null with ? it will work, otherwise null won't work

function NullAllow(): ?int {
    return null;
}

var_dump(NullAllow());

//Multiple Type Hint

function MultiTypeHinit1(): int|float|array|string {
    return 4.5;
}

function MultiTypeHinit2(): int|float|array|string {
    return [4.5];
}

function MultiTypeHinit3(): mixed {
    return [90.5];
}

var_dump(MultiTypeHinit1()); //int(45)
var_dump(MultiTypeHinit1()); //int(4.5)
var_dump(MultiTypeHinit2()); //array(1) { [0]=> float(4.5) }
var_dump(MultiTypeHinit3()); //array(1) { [0]=> float(90.5) }
