<!DOCTYPE html>
<html>
<head>
    <script src="js/create.js"></script>
    <link rel="stylesheet" href='css/create.css'/>
</head>

<body>
<div id="register">
    <h1>Welcome to toDoList</h1>
    <form name="register" action="saveInfo.php" method="POST" onsubmit="checkField()"> 
        <label for="username">UserName:</label><br>
        <input type="text" name="username" onchange="verify(this)" required="required" placeholder="jolly">
        <p id="name"></p>     
        <label for="eml">Email:</label><br>
        <input type="email" name="eml" onchange="verify(this)" required="required" placeholder="example@gmail.com">
        <p id="email"></p>
        <label for="psw">Password:</label><br>
        <input type="password" name="psw"  maxlength="12" required="required" placeholder="dsa@!dsa" ><br><br>
        <label for="repsw">Confirm:</label><br>
        <input type="password" name="repsw" maxlength="12" required="required" placeholder="dsa@!dsa" ><br><br>
        <input type="submit" name="signup" id="su" value="Sign Up">
    </form>
</div>

</body>
</html>