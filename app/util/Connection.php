<?php


class Connection
{
    private static $connection;
    public function __construct()
    {
        if($this->connection()){

        }
        try {
            $this->connection = new PDO('mysql:host=' . HOSTNAME . ';dbname=' . DBNAME, DBUSER, DBPASSWORD);

        } catch (PDOException $e) {
            var_dump($e);
            die();
        }
    }

    public function close()
    {
        $this->connection = null;
    }

}