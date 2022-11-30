<?php
	
	error_reporting(E_ERROR); //turn off warnings
	
	//connecting to database
	$db = new MySQLi("localhost", "root", "root", "roadrager");
	$db->set_charset('utf8');
	
	if($db->connect_error) {
		echo $db->connect_error;
	}
	
	else {
		
		//retrieve username and passw from POST
		$Ouser = $_GET['user'];
		$Opassword = $_GET['password'];

		echo $Ouser;
		echo $Opassword;
		
		//secure against sql-injection
		$Ouser = $db->real_escape_string($Ouser);
		$Opassword = $db->real_escape_string($Opassword);		
		
        $validuser = false;
        
        $sql="SELECT * FROM users WHERE user='$Ouser' AND password='$Opassword'";
		$result = $db->query($sql);	
        
        if ($result->num_rows > 0) { 
			$validuser = true;	
        }        
        
        if ($validuser) {            
            session_start();
			$_SESSION['user'] = $Ouser;	
			
			//redirect to welcome
			header("Location:../pages/SessMemberContent.php");
		}
		else {
			//redirect to not-welcome	
			header("Location:../pages/SessNotWelcome.html");
        }
					
		
	}

?>