<!DOCTYPE html>
<?php 
session_name("Login");
session_start(); 
?>
<html lang="en">
<head>
    <meta charset="utf8">
    <title>ToDoList</title>
    <link rel="stylesheet" href='css/todos.css'/>
</head>

<body>
    <div style="width: 100%;height: 100px">
        <div class="date">
            <h1 id="time"></h1>
            <h1 id="date"></h1>
        </div>    
        <div class="logout">
            <a href="index.php?logoff" style="text-decoration: none;"><h1>Logout</h1></a>  
        </div>
    </div>
    <div id="todoapp" style="margin-top:10px;">
        <header>
            <h1 id="app_name">Welcome <span><?php echo $_SESSION['usr'];?></span></h1>
            <input id="new-todo" type="text" placeholder="What needs to be done?">   
        </header>
        <section id='main'>
            <ul id='todo-list'>  
            </ul>
        </section>  
    </div>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
    <script src="js/todos.js"></script>
</body>
</html>
