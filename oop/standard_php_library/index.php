<?php

$array = ['html', 'css', 'java', 'php'];

$object = new ArrayObject($array);

// echo '<pre>';
// var_dump($object);
$iterator = $object->getIterator();
// echo '<pre>';
// var_dump($iterator);
// echo $iterator->current();
// echo $iterator->next();

// foreach($object as $item) {
//     echo $item . '<br>';
// }

// $limit_iterator = new LimitIterator($iterator, 0, 2);

// foreach ($limit_iterator as $item) {
//     echo $item . '<br>';
// }

$ci = new CachingIterator($iterator);
foreach ($ci as $item) {
    echo $item;
    if($ci->hasNext()) {
        echo ", ";
    }
}

$obj = new stdClass();
$obj->Mon = "Monday";
$obj->Tue = "Tuesday";
$obj->Wed = "Wednesday";
$obj->Thu = "Thursday";
$obj->Fri = "Friday";
$obj->Sat = "Saturday";
$obj->Sun = "Sunday";

// echo "<pre>";
// var_dump($obj);

$infinate = new InfiniteIterator(new ArrayIterator($obj));

foreach ( new LimitIterator($infinate, 0, 100) as $value ) {
    print($value . PHP_EOL);
}
