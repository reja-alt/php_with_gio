<?php

//Working with filesystem
$dir = scandir(__DIR__);
var_dump($dir);
var_dump(is_file($dir[2]));

// rmdir('foo');

// mkdir('foo/bar', recursive: true); //create directory foo/bar 
// rmdir('foo/bar'); //remove directory bar 
// rmdir('foo'); //remove directory foo 

echo '<br>';
if(file_exists('foo.txt')) {
    echo filesize('foo.txt'); //7
    file_put_contents('foo.txt', 'new line added here'); //it cached the revious data to remove the cache use clearstatcache
    echo filesize('foo.txt'); //7
    clearstatcache();
    echo filesize('foo.txt'); //19
    file_put_contents('foo.txt', 'second add');
    echo filesize('foo.txt'); //19
    clearstatcache();
    echo filesize('foo.txt'); //10
} else {
    echo 'File Not Found';
}