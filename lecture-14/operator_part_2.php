<?php
//error control operators
$x = file('foo.txt');
var_dump($x); // file(foo.txt): Failed to open stream if i use @ these error would gone like below

$y = @file('foo.txt');
var_dump($x);

//increment and decrement operator

$m = 56;

echo $m++; //56
echo $m; //57

$n = 90;

echo ++$n; //91
echo $n; //91

echo --$n; //90
echo $n; //90

echo $n--; //90
echo $n; //89

$value = null;

echo $value++; //null
echo $value; //1

$character = 'fgh';
echo ++$character; //fgi

//array operators

$a = ['f','g', 'l'];
$b = ['o','g', 'p', 'q','d'];

print_r($a + $b); //Array ( [0] => f [1] => g [2] => l [3] => p [4] => d )

$key = ['index1' => 45, 'index2' => 19];
$key1 = ['index1' => 40, 'index3' => 79];

var_dump($key + $key1); // array(3) { ["index1"]=> int(45) ["index2"]=> int(19) ["index3"]=> int(79) }