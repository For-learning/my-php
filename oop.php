<?php

class Person
{
    public $age;
    public function say($word) {
        echo "She say {$word}";
    }
    public function info() {
        $this -> say("Hi");
        return $this -> age;
    }
}

$xiaoma = new Person();
$xiaoma -> age = 23;
$age = $xiaoma -> info();
echo $age

?>