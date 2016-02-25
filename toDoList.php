<!DOCTYPE html>
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
            <a href="index.php?logoff"><h1>Logout</h1></a>  
        </div>
    </div>
    <div id="todoapp" style="margin-top:10px;">
        <header>
            <h1 id="app_name">jQuery Todo Plugin Demo</h1>
            <input id="new-todo" type="text" placeholder="What needs to be done?">   
        </header>
        <section id='main'>
            <ul id='todo-list'>
            </ul>
        </section>
        <footer> <a id="clear-completed">Clear completed</a>
            <div id='todo-count'></div>
        </footer>
    </div>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
    <script src="js/todos.js"></script>
    <script type="text/javascript">
        

        function date_time() {
            var x = new Date();
            var M = x.getMonth() + 1,
                d = x.getDate(),
                y = x.getFullYear();
                h = x.getHours(),
                m = x.getMinutes();

            var time = h + ":" + m;
            var date =  M + "/" + d + "/" + y;
            document.getElementById('time').innerHTML = time;
            document.getElementById('date').innerHTML = date;
            setTimeout(function () { date_time(); }, 60000);
        }
        date_time(); 
    </script>
</body>
</html>
