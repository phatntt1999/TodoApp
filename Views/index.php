<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" type="text/css" href="../Resources/css/app.css">

    <title>Todo List App - Pure Coding</title>
</head>

<body>
    <div class="wrapper">
        <h2 class="title">Todo List App</h2>
        <div class="inputFields">
            <input type="text" id="taskValue" placeholder="Enter a task.">
            <button type="submit" id="addBtn" class="btn"><i class="fa fa-plus"></i></button>
        </div>
        <div class="content">
            <ul id="tasks">
                <li>
                    <span class="text">This is the task one</span>
                    <i id="removeBtn" class="icon fa fa-trash" data-id=""></i>
                </li>
                <li>
                    <span class="text">This is the task two</span>
                    <i id="removeBtn" class="icon fa fa-trash" data-id=""></i>
                </li>
                <li>
                    <span class="text">This is the task three</span>
                    <i id="removeBtn" class="icon fa fa-trash" data-id=""></i>
                </li>
            </ul>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
</body>

</html>
