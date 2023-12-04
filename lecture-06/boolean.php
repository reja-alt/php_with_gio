<?php

# integers 0, -0 --> false
# floats 0.0, -0.0 --> false
# string '' --> false
# array [] --> false
# null --> false
# '0'  --> false

$isComplete = null;

if($isComplete) {
    echo 'success';
} else {
    echo 'fail';
}