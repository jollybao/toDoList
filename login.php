
<?php
    $dbhost = '127.0.0.1';
	$dbuser = 'root';
	$dbpass = '86561911';
	$conn = mysqli_connect($dbhost, $dbuser, $dbpass);
    if(! $conn ) { 
	    ie('Could not connect: ' . mysqli_error());
	}
   
	echo 'Connected successfully';
    
    session_name('Login');
    session_set_cookie_params(7*24*60*60);
    // expire after one week
    session_start();

    if($_SESSION['id'] && !isset($_COOKIE['remember']) && !$_SESSION['rememberMe']){
	    $_SESSION = array();
	    session_destroy();
    }
    /*
    if(isset($_GET['logoff'])){
        echo 'logoff'
	    $_SESSION = array();
	    session_destroy();
	    header("Location: index.html");
	    exit;
    }
    */
    if($_POST['Submit']=='Login'){
	    $err = array();  
	 
		$name = htmlspecialchars($_POST['user_name']);
		$psw = htmlspecialchars($_POST['psw']);
		$rem = $_POST['rememberMe'];
        $sql = "SELECT id,name FROM mydb.member WHERE name='$name' AND password='$psw'";
		$result = $conn->query($sql);
        $row = $result->fetch_assoc();
             
        mysql_close($conn);

		if($row['name']){
		// If everything is OK login
		    $_SESSION['usr']=$row['name'];
		    $_SESSION['id'] = $row['id'];
		    $_SESSION['rememberMe'] = $rem;

			// Store some data in the session

			setcookie('remember',$rem);
			// We create the Remember cookie
            echo aaaaaaaa;
            header("Location: toDoList.php");
	        exit;      
		}
		else $err[]='Wrong username and/or password!';
	}
 
	if($err){
	    $_SESSION['msg']['login-err'] = implode('<br />',$err);
	    // Save the error messages in the session
        for($x = 0; $x < count($err); $x++) {
        echo $err[$x];
    
        }
	    header("Location: index.php");
	    exit;
    }
  	 
?>
