
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
    print_r($_SESSION); 
    //echo $_SESSION['rememberMe'];   
   // echo $_SESSION['psw'];
   //session_destroy();
    echo $_COOKIE["remember"];
 
    if($_SESSION['id'] && !isset($_COOKIE['remember']) && !$_SESSION['rememberMe']){
	    $_SESSION = array();
	    session_destroy();
    }
   /* 
    if(isset($_GET['logoff'])){
	    $_SESSION = array();
	    session_destroy();
	   // header("Location: index.html");
	  //  exit;
    }
    */
    if($_POST['Submit']=='Login'){
	    $err = array();  
	 
		$name = htmlspecialchars($_POST['user_name']);
		$psw = htmlspecialchars($_POST['psw']);
		$rem = $_POST['rememberMe'];
        $sql = "SELECT * FROM mydb.member WHERE name='$name' AND password='$psw'";
		$result = $conn->query($sql);
        $row = $result->fetch_assoc();


		if($row['name']){
		// If everything is OK login
		    $_SESSION['usr'] = $row['name'];
		    $_SESSION['id'] = $row['id'];
            $_SESSION['psw'] = $row['password'];
		    $_SESSION['rememberMe'] = $rem;
			// Store some data in the session

			setcookie('remember',$rem);
			// We create the Remember cookie
            header("Location: ToDoList.php");
	        exit;      
		}
		//else $err[]='Wrong username and/or password!';
	}
 
	if($err){ 
	    header("Location: index.php");
	    exit;
    }
mysqli_close($conn);  	 
?>
