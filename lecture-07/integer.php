<?php

echo PHP_INT_MAX + 1; //ANYTHING EXCED INTEGER BECOME FLOAT

$x = (int) PHP_INT_MAX + 1;
echo $x . '<br>';

$y = (int)'54trehdf'; 
echo $y . '<br>'; // 54

$z = (int)'54.99';
echo $z . '<br>'; // 54

$m = (int) null;
echo $m . '<br>'; //0

$n = (int) 'test';
echo $n . '<br>'; //0

$l = (int) true;
echo $l . '<br>'; //1

$p = (int) false;
echo $p . '<br>'; //0

$i = 20_000_000; // 20000000
echo $i;

$q = (int) '20_000_000'; //
echo $i;