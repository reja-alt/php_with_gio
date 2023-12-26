<?php

spl_autoload_register(function($className) {
    include 'design_pattern/' . $className . '.php';
});

$user = new User();
$user->getMsg();

$db = new Database();
$db->setDriver('Mysql');
$db->connect('local', 'test', 'root', 'pass');
$db->link;
echo '<pre>';
var_dump($db);

$single_ton = new SingleTon();
var_dump($single_ton);