<?php
require_once('BaseController.php');
require_once('./src/Models/Task.php');

class TaskController extends BaseController
{
    public function Test()
    {
        echo "<h1>This is test!!!</h1>";
    }

    public function index()
    {
        $tasks = Task::all();
        $data = ['tasks' => $tasks];
        $this->render('index', $data);
        //require_once "Views/index.php";
    }
}
