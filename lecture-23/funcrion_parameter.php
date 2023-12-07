<?php
declare(strict_types=1);
function sum1(int|float $x, int|float $y) {  //here x and y are parameter when they are declared
    return $x + $y; 
}

echo sum1(12,43); //12 and 43 are arguments cause they are assigned as value

function mul(int|float $x, int|float $y = 20) {  //optional parameter should always declared at last, can not define any parameter after optional parameter
    return $x * $y; 
}

echo mul(12,43);

//argument pass by references

function foo(int|float &$x, int|float $y) {  
    if($x % 2 == 0) {
        $x /= 2;                 
    }

    return $x * $y;
}

$a = 16;
$b = 4;
echo foo($a, $b);
var_dump($a, $b); //without & value of $a = 16 and value of $b =4,but when use & value of $x will be the updated $a =8 and $b = 4

//spread operator

function sum(...$numbers) {  //here number contains all argument value as array array(5) { [0]=> int(34) [1]=> int(45) [2]=> int(54) [3]=> int(65) [4]=> int(69) }
    return $numbers;
}

// echo '<pre>';
var_dump(sum(34,45,54,65,69));

function sum2(int|float...$numbers) {  //here number contains all argument value as array array(5) { [0]=> int(34) [1]=> int(45) [2]=> int(54) [3]=> int(65) [4]=> int(69) }
    $sum = 0;
    foreach($numbers as $item) {
        $sum += $item;
    }
    return $sum;
}

// echo '<pre>';
var_dump(sum2(34,45,54,65,69));

function sum3(int|float...$numbers) {  //here number contains all argument value as array array(5) { [0]=> int(34) [1]=> int(45) [2]=> int(54) [3]=> int(65) [4]=> int(69) }
    $sum = 0;
    foreach($numbers as $item) {
        $sum += $item;
    }
    return $sum;
}

// echo '<pre>';
$numbers = [34,45,54,65,69]; //unpack array
// var_dump(sum3($numbers)); //without unpack array error show Argument #1 must be of type int|float, without spread operator
var_dump(sum3(...$numbers)); //If I use spread operator everything will be ok output int(267)

//named argument

function foo1(int|float $num1, int|float $num2) {  
    if($num1 % 2 == 0) {
        $num1 /= 2;                 
    }

    return $num1 * $num2;
}

echo foo1(num2: 5, num1: 40); 
// echo foo1(num2: 5, num2: 40); // if pass parameter name multiple will get error Uncaught Error: Named parameter $num2 overwrites previous argument

setcookie(name: 'reja', value: '34', httponly: true);

function foo3(int|float $num1, int|float $num2) {  
    var_dump($num1, $num2);
    if($num1 % 2 == 0) {
        $num1 /= 2;                 
    }

    return $num1 * $num2;
}

$arr = ['num2' => 5, 'num1' => 50]; //here array key work as named parameter
// $arr = [ 5, 'num1' => 50]; //here array default work as regular Named parameter $num1 overwrites previous argument
echo foo3(...$arr);

