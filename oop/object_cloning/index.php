<?php

class Language {
    public $category;
    public $framework;

    public function setCat($cat) {
        $this->category = $cat;
    }

    public function getCat() {
        return $this->category;
    }

    public function setFramework($framework) {
        $this->framework = $framework;
    }

    public function getFramework() {
        return $this->framework;
    }
}

$php = new Language();
$php->setCat("OOP");
$php->setFramework("Laravel");

// echo $php->getCat() . '<br>';
// echo $php->getFramework() . '<br>';

$java = $php;   //copy the reference of $php object

$php->setCat("C++");

// echo $php->getCat() . '<br>';
// echo $php->getFramework() . '<br>';

// echo $java->getCat() . '<br>';
// echo $java->getFramework();

$python = clone $php;

$php->setCat("Ruby");

echo $php->getCat() . '<br>';
echo $php->getFramework() . '<br>';

echo $python->getCat() . '<br>';
echo $python->getFramework();