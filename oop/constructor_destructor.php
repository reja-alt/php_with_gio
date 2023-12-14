<?php

class PersonDetails {
    public $userName;
    public $userId;
    const NAME = 'Zillur Rahman';

    public function __construct($user_name, $user_id) {
        $this->userName = $user_name;
        $this->userId = $user_id;

        echo "Username is {$this->userName} " . " User Id is {$this->userId}";
    }

    public function display() {
        echo PersonDetails::NAME;
    }

    public function __destruct() {
       unset($this->userName);
       unset($this->userId);
    }
}

$person = new PersonDetails('reja', 29);
echo $person->userName;
$person->display();