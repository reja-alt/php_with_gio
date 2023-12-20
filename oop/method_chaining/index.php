<?php

class Php {
    public function framework() {
        echo "Cake php is a framework" . "<br>";
        return $this;
    }
    public function cms() {
        echo "Wordpress is a cms";
        return $this;
    }
}

$php = new Php();
$php->framework()->cms(); // Uncaught Error: Call to a member function cms() on null have to return object [return $this] to solve