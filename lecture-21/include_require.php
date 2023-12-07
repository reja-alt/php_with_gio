<?php

// require, require_once, include, include_once

include('file.php'); //does not stop script execution

echo 'welcome';

require('file.php'); //but require stop script execution
 echo 'exists execution';

//require_once and include_once add files only one time