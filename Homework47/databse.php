<?php

class Database
{
    private $connection;
    //connection
    public function __construct($db)
    {
        try {
            $this->connection = new PDO('sqlite:' . __DIR__ . $db);
            $this->connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (Exception $e) {
            echo 'Cant connect to database!' . $e->getMessage();
        }
    }
}
