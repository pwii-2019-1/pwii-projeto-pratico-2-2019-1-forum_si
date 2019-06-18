<?php


class Connection
{
    private static $connection = null;
    public static function getConnection()
    {
        if(Connection::$connection == null) {

            try {
                Connection::$connection = new PDO('mysql:host=' . HOSTNAME . ';dbname=' . DBNAME, DBUSER, DBPASSWORD);

            } catch (PDOException $e) {
                var_dump($e);
                die();
            }
        }
        return Connection::$connection;
    }

    public static function close()
    {
        Connection::$connection = null;
    }

}