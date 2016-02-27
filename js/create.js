function verify(obj) {
        var str = obj.value;
        if (obj.name == "username") {
            if (str.length == 0) {
                document.getElementById("name").innerHTML = "";
                //console.log(1);
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
                //console.log(2);
            }
        }
        else {
            if (str.length == 0) {
                document.getElementById("email").innerHTML = "";
                //console.log(3);
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
                //console.log(4);
            }
        }
    }

    function checkField() {
        var name = document.forms['register']['username'].value;
        var email = document.forms['register']['eml'].value;
        var psw = document.forms['register']['psw'].value;
        var repsw = document.forms['register']['repsw'].value;
        var re = /\S+@\S+\.\S+/;
        if (name != "" && email != "" && re.test(email)){
            if(repsw == pws){
                return true;
            }
        }       
        else
            return false;
    }