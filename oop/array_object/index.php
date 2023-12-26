<?php

$array = ['html', 'css', 'java', 'php'];
$object = new ArrayObject($array);

$iterator = $object->getIterator();


while($iterator->valid()) {
    echo $iterator->current() . '<br>';
    $iterator->next();
}