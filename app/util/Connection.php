<?php


class Connection
{

    public function __construct()
    {
        $connection = null;
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