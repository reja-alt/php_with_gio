<?php

class Person {
    public $name;
    public $age;

    public function getName() {
        return $this->name;
    }
}

$person1 = new Person(); 
$person1->name = "reja";
echo $person1->getName();