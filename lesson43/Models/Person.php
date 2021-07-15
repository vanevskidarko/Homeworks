<?php
class Person 
{
    public $id;
    public $name;
    public $age;
    
    public function __construct($id, $name, $age)
    {
        $this->id = $id;
        $this->name = $name;
        $this->age = $age;
    }

    public function getDescription() 
    {
        return "Name: ". $this->name.", age: ".$this->age;
    }

    public function getId()
    {
        return $this->id;
    }

}