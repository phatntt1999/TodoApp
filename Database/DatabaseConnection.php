<?php

namespace Database;

use mysqli;

class DatabaseConnection
{
    protected $connect;

    public function connectMySql()
    {
        echo "preparing...\n";
        require_once("../config.php");
        if (!isset($this->connect)) {
            echo "Prepare SQL \n";
            $this->connect = new mysqli(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);

            if (mysqli_connect_errno()) {
                die('Error when connect DB: ' . $this->connect->connect_error);
                return false;
            } else {
                echo "Connected!\n";
            }
        }
        return $this->connect;
    }
}
