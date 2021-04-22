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
                <form method="POST" action="index.php">
                    <input type="text" name="task">
                    <button type="submit" name="submit">Add Task</button>
                </form>
            </div>
            <div class = "show">
                <h3>List</h3>
                <span>x</span>
                <h3>Task</h3>
            </div>
        </div>
    </body>
</html>
