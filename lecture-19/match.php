<?php

$paymentStatus = 5;
$paymentStatus = '1';

//match perform strict comparison ===
// switch perform strict comparison ==
$result = match($paymentStatus) {
    1 => 'paid',
    2 => 'unpaid',
    3,5 => 'pending',
    default => 'unknown_status'
};

var_dump($result);