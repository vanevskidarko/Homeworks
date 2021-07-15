<?php

echo "New index <br>  ";

class Person {
    public $name;
    public $age;

    public function __construct($name, $age)
    {
        $this->name = $name;
        $this->age = $age;
    }
    public function getDescription(){
        return "Name : $this->name";
    }
}
$man1 = new Person('John Doe',25);
$man2 = new Person('Mark Cu' ,33);

$people = [
    $man1,
    $man2
];

echo "Person 1: ".$people[0]->getDescription()."<br>";
echo "Person 2: ".$people[1]->getDescription()."<br>";

