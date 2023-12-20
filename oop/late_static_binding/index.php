<?php

class Php {
    public static function framework() {
        echo static::getClass() . '<br>';
    }

    public static function getClass() {
       return 'val';
    }
}


class PhpChild extends Php {
    public static function getClass() {
        return 'chaild_val';
     }
}

$php = new Php();
$php->framework();

$phpChild = new  PhpChild();
$phpChild->framework();