<?php

include 'helpers.php';
$fruits = ['a' => 'mango', 'b' => 'apple', 'c' => 'pine-apple'];
prettyPrintArray(array_chunk($fruits, 2, true)); //devide array into two

$array_one = ['a', 'b', 'c'];
$array_two = ['name', 'age', 'phone'];
prettyPrintArray(array_combine($array_one, $array_two)); //it takes array one as key and array two as value

// $array_three = ['a', 'b', 'c', 'd'];
// $array_four = ['name', 'age', 'phone'];
// prettyPrintArray(array_combine($array_three, $array_four)); //if key not match it generate error Uncaught ValueError: array_combine(): Argument #1 ($keys) and argument #2 ($values) must have the same number of elements

$array_filter = [43,54,565,87,90,45];
$odd = array_filter($array_filter, fn($number, $key) => $number % 2 != 0, ARRAY_FILTER_USE_BOTH);
prettyPrintArray($odd);
$odd = array_values($odd);
prettyPrintArray($odd); //will reindex array start from 0

//array_keys
prettyPrintArray(array_keys($fruits)); // give array keys as array 
prettyPrintArray(array_keys($fruits, 'mango')); // give array key which value is mango like Array([0] => a)

//array_merge

$array_three = [3,4,5];
$array_four = [56,12,6];
$array_five = [83,44,52];

prettyPrintArray(array_merge($array_three,$array_four, $array_five));  //array merge will always reindex array key


$array_six = [3,4,5];
$array_seven = [56,9 => 12, 2=> 6];
$array_eight = [83,44,52];

prettyPrintArray(array_merge($array_six,$array_seven, $array_eight)); //array merge will always reindex array key

$array_nine = [3,4,5];
$array_ten = [56,'a' => 12, 'b'=> 6];
$array_elevan = [83, 'c' => 44, 'b' => 52];

prettyPrintArray(array_merge($array_nine,$array_ten, $array_elevan)); // but if string then string will be appear on array key and also overright value

//Array Reduce

$invoiceItems = [
    ['qty' => 4, 'price' => 490, 'desc' => 'Item 1'],
    ['qty' => 3, 'price' => 900, 'desc' => 'Item 2'],
    ['qty' => 5, 'price' => 700, 'desc' => 'Item 3'],
    ['qty' => 9, 'price' => 789, 'desc' => 'Item 4'],
];

$total = array_reduce($invoiceItems, fn($sum, $item) => $sum + $item['price'] * $item['qty'], 1000);
echo $total . '<br>';

//array search

$array_search = ['a', 'b', 'c', 'B', 'D', 'E', 'e', 'a', 'b'];
echo array_search('b', $array_search); //1 search appear always the first occurance
echo array_search('E', $array_search); //5 search appear always the first occurance, also case sansetive

//asort

$asort = ['d' => 340, 'c' => 564, 'a' => 87, 'e' => 90];
prettyPrintArray($asort);
asort($asort);   //these always return boolean if var_dump it
prettyPrintArray($asort);  //sort value acending order
ksort($asort);   //these always return boolean if var_dump it
prettyPrintArray($asort);  //sort key acending order


//destructure array
$items = [34, 65, 89, 23];
[$a, $b, $c, $d] = $items;

echo $a . '<br>' . $b . '<br>' . $c . '<br>' . $d . '<br>' ;

$items1 = [34, 65, 89, 23];
list($e, , $g, $h) = $items;

echo $e  . '<br>' . $g . '<br>' . $h . '<br>' ;