<?php

class Person {
    public $name = "reja";
    public $age = "29";
    public $gender = "male";

    private $email = "reja@gmail.com";
    protected $password = "123243";

    public function iteration() {
        foreach($this as $key => $item) {
            echo "$key => $item" . '<br>';
        }
    }
}

$person = new Person();
echo "<pre>";
var_dump($person);
foreach($person as $key => $item) {
    echo "$key => $item" . '<br>';
}

$person->iteration();