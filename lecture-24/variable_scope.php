<?php

$x = 45;

function foo() {
    global $x;  //it is also reference of x that means if i change the value of x it will be all over the script
    $x = 60;
    echo $x;
}

foo();  // Warning: Undefined variable $x without defining global inside scope function
echo $x; //here $x will be 60 not 45 cause we declare $x as global and assign the value to 60

// $y = 34;
function foo2() {
    $GLOBALS['x'] = 90;
    echo $GLOBALS['x'];
}

foo2(); //90
echo $x; //90
