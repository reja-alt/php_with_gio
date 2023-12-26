<?php

class Programming {
    public $html;
    public $css;
    private $php;
    protected $java;

    public function __construct() {
        $this->html = "I know Html";
        $this->css = "I know Css";
        $this->php = "I know Php";
        $this->java = "I know Java";
    }
}

$object = new Programming();

$ser = serialize($object);
echo $ser;
file_put_contents("demo.txt", $ser);
// print_r($object);
?>