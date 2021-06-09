<?php

class Person {
    public $name;
    public $login;
    public $password;

    function __construct($name,$login,$password)
    {
        $this->name = $name;
        $this->login = $login;
        $this->password = $password;
    }
    function showInfo(){
        echo "User: ".$this->name." has login: ".$this->login." and password " .$this->password;
    }
}

class SuperUser extends Person{
    public $role;
    public function __construct($name, $login, $password, $role)
    {
        $this->role = $role;
        parent::__construct($name, $login, $password);
    }
    function showInfo(){
        echo "User: ".$this->name." has login: ".$this->login." and password " .$this->password. "and a role: ".$this->role;
    }
}
$person = new Person('Name', "user",'password');
$person->showInfo();
$super = new SuperUser('dare','loginuser','dare3','admin');
echo '<br>';
$super->showInfo();