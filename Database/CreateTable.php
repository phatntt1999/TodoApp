<?php
require __DIR__ . '/../vendor/autoload.php';

use Database\DatabaseConnection;

$connection = new DatabaseConnection;
$db = $connection->connectMySql();

$sql = "CREATE TABLE Task (
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    task VARCHAR(255) NOT NULL,
    start_task_date DATE,
    end_task_date DATE,
    reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
    )";

if ($db->query($sql) === TRUE) {
    echo "Table todo_app created successfully.\n";
} else {
    echo "Error when creating table: " . $db->error;
}

if ($db) {
    $db->close();
    echo "Closed connection!";
} else {
    echo "Connection not exist or maybe null!";
}
