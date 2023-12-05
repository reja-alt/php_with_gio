<?php

function sum($x, $y) {
    return $x + $y; //stop execution of the function note the script and return value
}

$x = sum(23,45);
echo $x;
echo 'welcome';  //doesn't stop execution
return;          //now it will stop execution

echo 'stop execution';

//declare ticks
//declare encoding
//declare strict_types

//strict_types not work in another file if include these file to another file called foo.index and call function from that file 