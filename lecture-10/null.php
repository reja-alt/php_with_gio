<?php

$x = null;
echo $x;
$y = 344;
var_dump($x); // NULL

var_dump(is_null($x)); //bool(true)
var_dump($y === null); //bool(false)

var_dump($name); //show Warning: Undefined variable $name in C:\xampp\htdocs\php_with_gio\lecture-10\null.php on line 11
                    //buy value show NULL 
$age = 29;
var_dump($age);

unset($age);
var_dump($age);  //Warning: Undefined variable $age in C:\xampp\htdocs\php_with_gio\lecture-10\null.php on line 17
                    //NULL
$m = null;

var_dump((string) $m); //show empty string string(0) ""
var_dump((int) $m); //show int(0)
var_dump((bool) $m); //show bool(false)
var_dump((array) $m); //show array(0) { }