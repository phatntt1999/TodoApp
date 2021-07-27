<?php
require_once('./Database/DatabaseConnection.php');

class Task
{
    public $id;
    public $task;
    public $startDate;
    public $endDate;

    public function __construct($id, $task, $startDate, $endDate)
    {
        $this->id = $id;
        $this->task = $task;
        $this->startDate = $startDate;
        $this->endDate = $endDate;
    }

    public static function all()
    {
        $list = [];
        $conn = DatabaseConnection::connectMySql();
        $sql = "SELECT * FROM Task";
        $result = mysqli_query($conn, $sql);

        if (mysqli_num_rows($result) > 0) {
            while ($row = mysqli_fetch_assoc($result)) {
                $list[] = new Task(
                    $row['id'],
                    $row['task'],
                    $row['start_task_date'],
                    $row['end_task_date']
                );
            }
            return $list;
        }
    }
}
