<?php

if(! file_exists('foo.txt')) {
    echo 'File Not Found';
}

$file = fopen('foo.txt', 'r');
var_dump($file); //resource(3) of type (stream)

while(($line = fgets($file)) !== false) {
    echo $line . '</br>';
}

//output second add
// test
// demo

$file1 = fopen('foo1.txt', 'r');
var_dump($file1); //resource(3) of type (stream)

while(($line1 = fgetcsv($file1)) !== false) {
    var_dump($line1);
    echo '<br>';
}

//output  array(3) { [0]=> string(3) "fsd" [1]=> string(3) "fsd" [2]=> string(3) "gfd" }
// array(2) { [0]=> string(3) "gfd" [1]=> string(3) "gfd" }
// array(1) { [0]=> string(2) "yt" }

$contents = file_get_contents('foo.txt');
echo $contents . '<br>'; // second add test demo

$contents1 = file_get_contents('foo.txt', offset: 2, length: 3);
echo $contents1; // con

$contents2 = file_get_contents('foo.txt', offset: 6, length: 5);
echo $contents2; // add

file_put_contents('bar.txt', 'bar check'); //will create bar.txt file and write bar check on it
file_put_contents('bar.txt', 'simple array'); //will overwrite bar check to simple array
file_put_contents('bar.txt', 'welcome', FILE_APPEND); //will APPEND welcome after simple array

unlink('bar.txt'); //will remove file bar.txt

copy('foo.txt', 'bar.txt'); //will create bar.txt file with foo.txt file content