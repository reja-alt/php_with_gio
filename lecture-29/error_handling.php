<?php

// trigger_error('Example', E_USER_ERROR);  //will stop execution echo will not print
// echo 'test';

// trigger_error('Example', E_USER_WARNING);  //will not stop execution echo will be print
// echo 'warning';

function errorHandler(int $type, string $msg, ?string $file = null, ?int $line = null) {
    echo $type . $msg . ' on ' . $file . ' in line ' . $line;
    exit; 
}

error_reporting(E_ALL & ~E_WARNING);

set_error_handler('errorHandler', E_ALL);  //OVERWRITES PREVIOUS ERROR_REPORTING
echo $x;  //PARSE ERROR CAN NOT HANDLE BY SET_ERR0R_HANDLER