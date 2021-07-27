<?php
require __DIR__ . '/../vendor/autoload.php';

$connection = new Database\DatabaseConnection;
$db = $connection->connectMySql();

$sql = "CREATE DATABASE IF NOT EXISTS `todo_app`";

if ($db->query($sql) === TRUE) {
    echo "Table todo_app created successfully.\n";
} else {
    echo "Error when creating table: " . $db->error;
}

if ($db) {
    $db->close();
    echo "\nClosed connection! \n";
} else {
    echo "Connection not exist or maybe null! \n";
}
