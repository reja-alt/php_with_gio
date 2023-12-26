<?php

class SingleTon {
    public static $instance;

    public function __construct() {
        if(!self::$instance) {
            self::$instance = $this;
            return self::$Instance;
        } else {
            return self::$Instance;
        }
    }
}