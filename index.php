<!DOCTYPE html>
<?php
session_name('Login');
session_start();
if(isset($_SESSION['rememberMe']) && isset($_SESSION['id']) && isset($_COOKIE['remember'])){
    $name = $_SESSION['usr'];
    $psw = $_SESSION['psw']; 
}
else{
    $name = $psw = "''";
}
?>
<html>
<head>
    <meta charset="UTF-8">
    <title>Login Page</title>
    <link rel="stylesheet" href="css/style.css">
</head>

<body>

    <div class="vid-container">
		<video id="Video1" class="bgvid back" autoplay="autoplay" muted="muted" preload="auto" loop>
			<source src="http://shortcodelic1.manuelmasiacsasi.netdna-cdn.com/themes/geode/wp-content/uploads/2014/04/milky-way-river-1280hd.mp4.mp4" type="video/mp4">
		</video>
		<div class="inner-container">
			<video id="Video2" class="bgvid inner" autoplay="autoplay" muted="muted" preload="auto" loop>
				<source src="http://shortcodelic1.manuelmasiacsasi.netdna-cdn.com/themes/geode/wp-content/uploads/2014/04/milky-way-river-1280hd.mp4.mp4" type="video/mp4">
			</video>
			<form name="login" method="POST" action="login.php">
				<h1>Login</h1>
				<input type="text" name="user_name" value= <?php echo $name;?> required="required" placeholder="Username"/>
				<input type="password" name="psw" value= <?php echo $psw;  ?> required="required" placeholder="Password"/>
				<input type='submit' name="Submit" value="Login"> 
                <p style="height:20px; margin-top: 0px;margin-bottom:0px;padding-bottom: 0px ;font-size: 20px">Remember me
                <input type="checkbox" name="rememberMe" checked="checked" value="1" style="display: inline;width: 15px;padding-top: 0px;margin-top: 0px"></p>
				<p>Not a member?<a href="CreatAcount.php"><span>Sign Up</span></a></p>
		    </form>
        </div>
    </div>
          
</body>
</html>
