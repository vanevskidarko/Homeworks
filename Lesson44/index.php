<?php
interface ICar{
public function brake();
public function gas();
}

class Ferrari implements ICar{
    public $driver;
    public $model;


    public function getDriver()
    {
        return $this->driver;
    }

    public function getModel()
    {
        return $this->model;
    }



    public function __construct($driver, $model)
    {
        $this->driver = $driver;
        $this->model = $model;
    }

    public function brake()
    {
        return "Brakes!!";
    }

    public function gas()
    {
        return "Zadu6avam sA!";
    }
}