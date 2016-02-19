<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title></title>
    </head>
    <body>
        <?php
			$dbhost = '127.0.0.1';
			$dbuser = 'root';
			$dbpass = '86561911';
			$conn = mysqli_connect($dbhost, $dbuser, $dbpass);
   
			if(! $conn ) { 
				die('Could not connect: ' . mysqli_error());
						}
   
			echo 'Connected successfully'.'<br>';
            
            $sql = "SELECT name FROM mydb.member";
            $result = $conn->query($sql);
            if($result->num_rows>0){
                while($row = $result->fetch_assoc()) {
                    echo "name: ". $row["name"]."<br>";
                }
            }
            else{
                echo "0 result";
            }
            
			
			mysql_close($conn);
   
		?>
    </body>
</html>