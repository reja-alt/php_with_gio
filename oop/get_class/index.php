<?php
abstract class Php {
    public function getClass() {
        echo "Get Class =>" . __CLASS__ . '<br>';  //return class name from which it is
        echo "Get Class object =>" . get_class($this); //return the class name from which the object is created
    }
}

class PhpChild extends Php {
    public function getChildClass() {
        echo "Get Child Class => " . __CLASS__ . '<br>';
        echo "Get Child Class object => " . get_class($this);
    }

    public function newClass() {
        parent::getClass();  //return same from where it is called
    }
}

$php = new PhpChild();
$php->getClass();
echo "<hr>";
$php->getChildClass();
echo "<hr>";
$php->newClass();