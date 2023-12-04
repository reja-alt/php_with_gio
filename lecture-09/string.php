<?php

//Heredoc support variable
$x = 34;
$text = <<<TEXT
Line 1
        Line 2 <h1>Demo</h2>
Line 3 ${x}
Line 4
TEXT;

//nowdoc don't support variable
$text2 = <<<'TEXT'
    Line 1
Line 2
        Line 3 $x
Line 4
TEXT;

echo nl2br($text);
echo nl2br($text2);

var_dump($text);   //both count space as length
var_dump($text2); 