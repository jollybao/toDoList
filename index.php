<!DOCTYPE html>
<?php
    if(!$_SESSION['id'])
        //header("Location: toDoList.php");
	    //exit;
?>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>toDoList</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script></script>
	<style>
     body {
        background-image: url('img/background.jpg');
        background-attachment: fixed;
        background-repeat: no-repeat;
        -webkit-background-size: inherit;
        -moz-background-size: cover;
        -o-background-size: cover;
        background-size: cover;
     }
     h1 {
         text-align: center;
         color: #9e3ea9;
         font-size: 64px;
         font-family: "Comic Sans MS", cursive, sans-serif;
         text-shadow: 6px 6px #00b36b;
     }
     div {
        position: relative;   
        padding: 10px;
        border: none;
        margin: 0;
     }
   
     div.right {
        position: absolute;
        z-index: -1;
        float: right;
     }
     
     
     #login {
        top: 10%;
        width: 20%; 
        left: 40%;
        background-color: #6dd6a8;
        opacity: 0.6;
     }
     input {
        position: relative;
        padding: 2px;
        margin: 0px; 
     }
     input:focus {
        border: 3px solid #555;
     }
     input[type=text],[type=password] {
        width: 95%;
     }
     
     input[type=submit] {
        width: 20%;
        left: 40%;
        margin-top: 10px;     
     }
     #greeting {
        position: relative; 
        float: right;
        font-size: 30px;
        margin: 0px;
        padding: 0px;  
        left: 80px; 
        color: #cdd912;
        font-family: "Comic Sans MS", cursive, sans-serif;
        text-shadow: 2px 2px #00b36b;
        visibility: hidden;
     }
     a {
        text-decoration: none;
     }
     label {
        color: #230e69;
     }
     
	</style>

    <script>
        $(document).ready(function () {
            $("#title").mouseover(function () {
                $("#title").css("color", "red");
            });
            $("#title").mouseout(function () {
                $("#title").css("color", "#9e3ea9");
            });
            $('#login').animate({ top: '100px' }, 1500).animate({
                top: '30px'
            }, 2000);
            $('#duck').mouseover(function () {
                $("#greeting").css("visibility","visible");
            });
            $('#duck').mouseout(function () {
                $("#greeting").css("visibility","hidden");
            });
        });
    </script>
</head>

<body>
    <h1 id="title">To Do List</h1>
    <div id="login">
	    <form name="login" method="POST" action="login.php">
		    <label for="nm">UserName:</label><br>
		    <input type="text" name="user_name" id="nm"><br>
		    <label for="pd">Password:</label><br>
		    <input type="password" name="psw" id="pd"><br>
            <span>
		        <input type="checkbox" name="rememberMe" id="rm" checked="checked" value="1">
                <label for="rm">Remember me</label><br>
            </span>
            <input type='submit' name="Submit" value="Login">   
            <a href="CreatAcount.php"><p style="text-align: center;padding: 0px;margin: 2px">CreatAcount</p></a>
	    </form>
    </div>

    
        <div class="right">
            <img id="duck" src="img/donald_duck.jpg"  alt="Missing picture" width="200">
            <img id="mickey" src="img/mickey-mouse.jpg"  alt="Missing picture" width="200">
        </div>
    
    <p id="greeting">ARE YOU READY?</p>
    

</body>   
</html>
