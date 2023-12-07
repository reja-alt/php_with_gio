<?php

//variables, anonymous, arrow function
function sum(...$numbers): int|float {
    return array_sum($numbers);
}

$x = 'sum';
if(is_callable($x)) {
    echo $x(43,43,45,54); // 185
} else {
    echo 'Not callable';
}

//anonymous function has no name
$x = 78;
$annonymous = function (...$numbers) use($x): int|float { //when variable can be used from local scope inside function then it is called closure
    echo $x;
    return array_sum($numbers);
};

echo $annonymous(3,4,5,6);

$annonymous2 = function (...$numbers) use(&$x): int|float { //if I use & then $x value would change outside of function
    $x = 15;
    echo $x;
    return array_sum($numbers);
};

echo $annonymous2(3,4,5,6);
echo $x;

//Callback function
$array = [4,5,12];
$anon = function($element){
    return $element   * 2;
};

$array_map = array_map($anon, $array);

print_r($array);
print_r($array_map);

//arrow function 
$y = 5;
$array2 = array_map(fn($number) => $number * $number * $y, $array); //variable can be accesed directly
print_r($array2);