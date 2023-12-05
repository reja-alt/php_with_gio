<?php

//Arithmatic operator

$x = '23';
$y = '90';

var_dump(+$x); //int(23);
var_dump(-$y); //int(-90);

$num1 = 56;
$num2 = -5;

$num3 = -56;
$num4 = 5;

var_dump($num1 % $num2); //int(1) here sign depends upon which value to devide, here $Num1 positive so result is positive
var_dump($num3 % $num4); //int(-1) here sign depends upon which value to devide, here $Num3 NEGATIVE so result is NEGATIVE


$m = 90;
$n = 5.0;

var_dump($m / $n); // float(18) if one is float then result will be float
// var_dump($m / 0); //error  Uncaught DivisionByZeroError:

$p = 80;
$q = 0;

var_dump(fdiv($p , $q)); //float(INF)

//mod

$r = 90.90;
$t = 7.87;

var_dump($r % $t); // int(6) both float cast as integer, to get proper result use fmod() like below

var_dump(fmod($r, $t)); //float(4.3300000000000045)

//Assignment Operator
$x1 = ($y1 = 50) + 90;
var_dump($x1, $y1); //int(140) int(50)

//spaceship operator <=>

$x3 = 56;
$x4 = 6;

$x5 = 6;
$x6 = 86;

$x7 = 56;
$x8 = 56;

var_dump($x3 <=> $x4); // int(1)  if x3 greater than $x4
var_dump($x5 <=> $x6); // int(-1)  if x3 smaller than $x4
var_dump($x7 <=> $x8); // int(0)  if x3 equal to $x4