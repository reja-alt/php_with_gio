<?php

define('PAYMENT_STATUS', 'PAID');  //Work at runtime
echo PAYMENT_STATUS;

echo defined('PAYMENT_STATUS');

const NAME = 'Reja';  //work at compile time
echo NAME;

//const will not work inside control structure but define will work inside control structure
if(true) {
    define('FRUITS', 'Mango');  //WILL WORK
    echo FRUITS;

    // const AGE =23; //WILL NOT WORK
}

echo PHP_VERSION;


echo __LINE__;
echo __FILE__;

// variable variables 

$foo = 'text';

$$foo = 'baz';

echo $text;

echo "$foo, {$$foo}"; //inside double quote use {} to show data or
echo "$foo, ${$foo}"; //inside double quote use {} to show data