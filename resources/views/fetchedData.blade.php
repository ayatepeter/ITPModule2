<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" contents="width=device-width, initial-scale=1">
        <title>To-Do-List</title>
	    <link href="/css/main.css" rel="stylesheet">
    </head>
    <body>
        <div class="main">
            <div class="add">
                <center><h1>CRUD TO-DO-LIST</h1></center>
                <form action="todo_submit">
                    <input type="text" name="task" placeholder="Enter task here">
                    <button type="submit">Add Task</button>
                </form>
            </div>
            <div class = "show">
                <h3>List</h3>
                @foreach ($TodoArr as $todo)
                    <div class="item">
                        <a href="edit/{{ $todo->id }}">Edit</a> | <a href="delete/{{ $todo->id }}">Delete</a>
                        <h3>{{ $todo->task }}</h3> 
                    </div>
                @endforeach
            </div>
        </div>
    </body>
</html>
