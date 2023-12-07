<?php

$arr = [1];
// echo $arr[2]; //Warning: Undefined array key 2 in C:\xampp\htdocs\php_with_gio\lecture-28\error_reporting.php on line 4
ini_set('error_reporting', E_ALL & ~E_WARNING); //IF I USE THESE ABOVE ERROR WILL NOT SHOW
echo $arr[2];