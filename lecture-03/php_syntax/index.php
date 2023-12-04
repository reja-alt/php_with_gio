<?php
    //if 100% php code then should not use close tag
    //don't need semicolon for last statement if it is in close tag either show syntax error without close tage
    //echo can be used multiple but print once
    //print returns value 1 
    //can not use number at starting variable
    
    // $2reja = 'value'; //error can not start with number
    $_2reja = 'value';
    // $%age = 34;  //error can not start any special character
    // $_%age = 34;   //error
    // $my%age = 34;   //error
    // $this = 'khan';   //error can not use reserve keywords

    echo 'welcome', 'check';
    // print 'print', 'twice', 'error';   //will generate error
    echo print 'something';
    echo 'here';


    //variables are assigned by value
    $x = 7;
    $y = &$x; //without & will be 7, if we use & before $x then whenever $x change $y will be change then $y will be 3 as example

    $x = 3;
    echo $y;

    $firstname = 'reja';

    echo 'welcome $firstname'; //variable wouldn't  work inside single quote but works in double quote
    echo "welcome $firstname"; //variable wouldn't  work inside single quote but works in double quote
    echo "welcome {$firstname}"; //variable wouldn't  work inside single quote but works in double quote

    echo 'welcome' . $firstname; //can also concate with .operator
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>
        <?php echo 'This is done'?>
    </h2>
    <?php
        $x = 10;
        echo "<h2> $x</h2>";
    ?>
</body>
</html>