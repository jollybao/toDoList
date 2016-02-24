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
            <a href="index.php"><h1>Logout</h1></a>  
        </div>
    </div>
    <div id="todoapp" style="margin-top:10px;">
        <header>
            <h1 id="app_name">jQuery Todo Plugin Demo</h1>
            <input id="new-todo" type="text" placeholder="What needs to be done?">
            <span>
                <select id="dueday">
                    <option value="-1"></option>
                    <option value="0">Due Today</option>
                    <option value="1">Due in 1 day</option>
                    <option value="2">Due in 2 days</option>
                    <option value="3">Due in 3 days</option>
                    <option value="4">Due in 4 days</option>
                    <option value="5">Due in 5 days</option>
                    <option value="6">Due in 6 days</option>
                    <option value="7">Due in 7 days</option>
                    <option value="8">Due in 8 days</option>
                    <option value="9">Due in 9 days</option>   
                </select>
            </span>
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
        var _gaq = _gaq || [];
        _gaq.push(['_setAccount', 'UA-36251023-1']);
        _gaq.push(['_setDomainName', 'jqueryscript.net']);
        _gaq.push(['_trackPageview']);
        (function () {
            var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
            ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
            var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
        })();

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
