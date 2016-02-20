<!DOCTYPE html>
<html>
<head>
<script>
    function verify(obj) {
        str = obj.value;
        if (obj.name == "username") {
            if (str.length == 0) {
                document.getElementById("name").innerHTML = "";
                console.log(1);
                return;
            } else {
                var xmlhttp = new XMLHttpRequest();
                xmlhttp.onreadystatechange = function () {
                    if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                        document.getElementById("name").innerHTML = xmlhttp.responseText;
                    }
                }
                xmlhttp.open("GET", "verify.php?q=" + str + "&p=" + obj.name, true);
                xmlhttp.send();
                console.log(2);
            }
        }
        else {
            if (str.length == 0) {
                document.getElementById("email").innerHTML = "";
                console.log(3);
                return;
            } else {
                var xmlhttp = new XMLHttpRequest();
                xmlhttp.onreadystatechange = function () {
                    if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                        document.getElementById("email").innerHTML = xmlhttp.responseText;
                    }
                }
                xmlhttp.open("GET", "verify.php?q=" + str + "&p=" + obj.name, true);
                xmlhttp.send();
                console.log(4);
            }
        }
    }


</script>
</head>

<body>

<p>Welcome to <b>toDoList</b></p>
<form action="saveInfo.php" method="POST"> 
    <label for="username">UserName:</label>
    <input type="text" name="username" onchange="verify(this)">
    <p id="name"></p>
    <label for="eml">Email:</label>
    <input type="email" name="eml" onchange="verify(this)">
    <p id="email"></p>
    <label for="psw">Password:</label>
    <input type="password" name="psw" maxlength="12" >
    <input type="submit">
</form>

</body>
</html>