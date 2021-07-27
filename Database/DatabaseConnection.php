<?php

class DatabaseConnection
{
    protected $connect;

    public function hello()
    {
        echo "Hello world";
    }
    public static function connectMySql()
    {
        // echo "preparing...\n";
        require_once("./config.php");
        if (!isset($connect)) {
            // echo "Prepare SQL \n";
            $connect = new mysqli(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);

            if (mysqli_connect_errno()) {
                die('Error when connect DB: ' . $connect->connect_error);
                return false;
            } else {
                // echo "Connected!\n";
            }
        }
        return $connect;
    }
}
