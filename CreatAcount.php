<!DOCTYPE html>
<html>
<head>
<script>
    function verify(obj) {
        str = obj.value;
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

</script>
    <style>
        #register{
	        position: absolute;
	        top: 0px;
	        width: 50%;
            left: 20%;	
	        padding: 18px 6% 60px 6%;
	        margin: 0 0 35px 0;
	        background: rgb(247, 247, 247);
	        border: 1px solid rgba(147, 184, 189,0.8);
	        -webkit-box-shadow: 0pt 2px 5px rgba(105, 108, 109,  0.7),	0px 0px 8px 5px rgba(208, 223, 226, 0.4) inset;
	        -moz-box-shadow: 0pt 2px 5px rgba(105, 108, 109,  0.7),	0px 0px 8px 5px rgba(208, 223, 226, 0.4) inset;
	        box-shadow: 0pt 2px 5px rgba(105, 108, 109,  0.7),	0px 0px 8px 5px rgba(208, 223, 226, 0.4) inset;
	        -webkit-box-shadow: 5px;
	        -moz-border-radius: 5px;
		    border-radius: 5px;
            }
        
        h1::after{
	        content: ' ';
	        display: block;
	        width: 100%;
	        height: 2px;
	        margin-top: 10px;
	        background: -moz-linear-gradient(left, rgba(147,184,189,0) 0%, rgba(147,184,189,0.8) 20%, rgba(147,184,189,1) 53%, rgba(147,184,189,0.8) 79%, rgba(147,184,189,0) 100%); 
	        background: -webkit-gradient(linear, left top, right top, color-stop(0%,rgba(147,184,189,0)), color-stop(20%,rgba(147,184,189,0.8)), color-stop(53%,rgba(147,184,189,1)), color-stop(79%,rgba(147,184,189,0.8)), color-stop(100%,rgba(147,184,189,0))); 
	        background: -webkit-linear-gradient(left, rgba(147,184,189,0) 0%,rgba(147,184,189,0.8) 20%,rgba(147,184,189,1) 53%,rgba(147,184,189,0.8) 79%,rgba(147,184,189,0) 100%); 
	        background: -o-linear-gradient(left, rgba(147,184,189,0) 0%,rgba(147,184,189,0.8) 20%,rgba(147,184,189,1) 53%,rgba(147,184,189,0.8) 79%,rgba(147,184,189,0) 100%); 
	        background: -ms-linear-gradient(left, rgba(147,184,189,0) 0%,rgba(147,184,189,0.8) 20%,rgba(147,184,189,1) 53%,rgba(147,184,189,0.8) 79%,rgba(147,184,189,0) 100%); 
	        background: linear-gradient(left, rgba(147,184,189,0) 0%,rgba(147,184,189,0.8) 20%,rgba(147,184,189,1) 53%,rgba(147,184,189,0.8) 79%,rgba(147,184,189,0) 100%); 
         }
        
        h1{
            font-size: 48px;
	        color: rgb(6, 106, 117);
	        padding: 2px 0 10px 0;
	        font-family: 'FranchiseRegular','Arial Narrow',Arial,sans-serif;
	        font-weight: bold;
	        text-align: center;
	        padding-bottom: 30px;
            background: -webkit-repeating-linear-gradient(-45deg, 
	        rgb(18, 83, 93) , 
	        rgb(18, 83, 93) 20px, 
	        rgb(64, 111, 118) 20px, 
	        rgb(64, 111, 118) 40px, 
	        rgb(18, 83, 93) 40px);
	        -webkit-text-fill-color: transparent;
	        -webkit-background-clip: text;
        }

       
        p {
            position: relative;
            left: 10%;
            color: red;
        }
        label{
	        color: rgb(64, 92, 96);
	        position: relative;
            left: 15%;
        }

        input{
            position:relative;
	        width: 70%;
            left: 15%;
	        margin-top: 4px;
	        padding: 10px;	
	        border: 1px solid rgb(178, 178, 178);
	        -webkit-appearance: textfield;
	        -webkit-box-sizing: content-box;
	        -moz-box-sizing : content-box;
	        box-sizing : content-box;
	        -webkit-border-radius: 3px;
	        -moz-border-radius: 3px;
	        border-radius: 3px;
	        -webkit-box-shadow: 0px 1px 4px 0px rgba(168, 168, 168, 0.6) inset;
	        -moz-box-shadow: 0px 1px 4px 0px rgba(168, 168, 168, 0.6) inset;
	        box-shadow: 0px 1px 4px 0px rgba(168, 168, 168, 0.6) inset;
	        -webkit-transition: all 0.2s linear;
	        -moz-transition: all 0.2s linear;
	        -o-transition: all 0.2s linear;
	        transition: all 0.2s linear;            
        }
        
        #su {
            position: relative;
            top: 1px;
	        border: 1px solid rgb(12, 76, 87);
            border-radius: 10px;	
            color: red;
            width: 20%;
            left: 40%;
            text-align: center;
        }
        #su:active, #su:hover {
            color: green;
        }
        input:active,
        input:focus{
	        border: 1px solid rgba(91, 90, 90, 0.7);
	        background: rgba(238, 236, 240, 0.2);	
	        -webkit-box-shadow: 0px 1px 4px 0px rgba(168, 168, 168, 0.9) inset;
	        -moz-box-shadow: 0px 1px 4px 0px rgba(168, 168, 168, 0.9) inset;
	        box-shadow: 0px 1px 4px 0px rgba(168, 168, 168, 0.9) inset;
        }
        div {
            display: inline;
        }

    </style>
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