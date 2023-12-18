<?php

class Student {
    public function asset() {
        echo 'Student Class Exists';
    }
}

if(class_exists("Student")) {
    $student = new Student();
    if(method_exists($student , "assets")) {
        $student->asset();
    } else {
        echo "Method Not Exists";
    }
    
} else {
    echo "Class Not Found";
}