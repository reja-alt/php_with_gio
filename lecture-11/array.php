<?php

$programming_language = ['php', 'java', 'c'];
$name = 'reja';

echo $name[0]; // r
echo $name[-2]; //j negative index can assign for string data type

$programming_language[1]; //java
$programming_language[-1]; // don't support negative index Warning: Undefined array key -1

$programming_language[5]; // Warning: Undefined array key 5

//to avoid above error first isset array index like

var_dump(isset($programming_language[1])); //bool(true)
var_dump(isset($programming_language[3])); // bool(false)

// update array element 
$programming_language[1] = 'C++';
echo $programming_language[1]; // C++

echo '<pre>';
var_dump($programming_language); // array list show
echo '<pre>';


//get array length

echo count($programming_language); // 3

//add new element to array 
$programming_language['.net'];

//array_push()

array_push($programming_language, 'nodejs', 'mongodb');

echo '<pre>';
var_dump($programming_language); // array list show
echo '<pre>';

//associative array
$pl_version = [
    'php' => '8.0.1',
    'go' => '3.5',
    'python' => '5.7',
];

echo $pl_version['php']; //8.0.1
echo '<pre>';
var_dump($pl_version); // array list show
echo '<pre>';

//update associative array
$pl_version['php'] = '9.0.1';
echo $pl_version['php']; // 19.0.1


//overrite value in array

$array = [true => 34, 1 => 56, '1' => 90, 1.7 => 45];
print_r($array); //[1] => 45 will overright the previous value

$array_key_null = [true => 34, 1 => 56, '1' => 90, 1.7 => 45, null => 'reja'];
print_r($array_key_null);

//to access this null value use
echo $array_key_null['']; //or
echo $array_key_null[null]; //will echo same

$number = [2,3, 56 => 6,5,6]; //index will first start from 0 by default but if assign any key with integer next index will be the previous max integer
print_r($number);

//Removes element from array

//array_Pop removes the laast element from array
echo array_pop($number); // 6
print_r($number);

//array_shift removes first element from array
$number2 = [0 => 27, 1 => 37, 5 => 60,59,63];
echo array_shift($number2); //27  and array will be reindex but not numeric will remain same
print_r($number2); //also index 5 will remove and start from 0 to 1,2....

unset($number2[5], $number2[1]); //array will not reindex
print_r($number2);

$unset = [23,43,4];
unset($unset[0], $unset[1], $unset[2]);

$unset[] = 90; //now after unset if i push then index will be the next of the unsetted max index ,here index will be 3

$task = ['a' => 45, 'b' => null];

var_dump(array_key_exists('a', $task)); //bool(true)
var_dump(isset($task['a'])); // bool(true)

//but for null value isset will be false
var_dump(array_key_exists('b', $task)); //bool(true)
var_dump(isset($task['b']));  //bool(false)


