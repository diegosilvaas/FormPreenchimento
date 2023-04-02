<?php

class Conection {

    protected static $db;
    private $host = 'localhost';
    private $password = '';
    private $user = 'root';
    private $dbName = 'formpreenchimento';

    public function __construct()
    {
     $this->connect();
    }

    public function connect()
    {
        try {
            self::$db = new PDO("mysql:dbname=$this->dbName;host=$this->host", $this->user, 
            $this->password);

        } catch (PDOException $erro){
            echo $erro->getMessage();
        }
    }

    public static function getDb ()
    {
        return self::$db;

    }


}