<?php

class Human {
    private $firstname;
    private $lastname;

    public function __construct($firstname , $lastname)
    {
        $this->firstname = $firstname;
        $this->lastname = $lastname;
    }

    public function setFirstname($firstname)
    {
        $firstLetter = substr($firstname, 0);
        if(!ctype_upper($firstLetter)){
            throw new Exception('Expected upper case letter. Argument firstname');
        }
        if(strlen($firstname) < 3){
            throw new Exception('First name must not be less than 3. Argument firstname' );
        }
        $this->firstname = $firstname;
    }


    public function setLastname($lastname)
    {

        $this->lastname = $lastname;
    }

}
