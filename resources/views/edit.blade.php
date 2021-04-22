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
                <form action="../edit_submit/{{ $TodoArr_task->id }}">
                    <h3>Edit task</h3>
                    <input type="text" name="task" value="{{ $TodoArr_task->task }}">
                    <button type="submit">Confirm</button>
                </form>
            </div>
        </div>
    </body>
</html>
