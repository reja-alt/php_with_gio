<?php

class Database {
    public $driver;
    public $link;

    public function setDriver($driver) {
        $this->driver = $driver;
    }

    public function connect($host, $db, $user, $pass) {
        if($this->driver == 'Mysql') {
            $mysql = new ManageMySql();
            $mysql->setHost($host);
            $mysql->setDb($db);
            $mysql->setUser($user);
            $mysql->setPass($pass);
            $this->link = $mysql->connect();
        } elseif($this->driver == 'sqlLite') {
            $mysql = new ManageSqlLite();
            $mysql->setHost($host);
            $mysql->setDb($db);
            $mysql->setUser($user);
            $mysql->setPass($pass);
            $this->link = $mysql->connect();
        }
    }
}