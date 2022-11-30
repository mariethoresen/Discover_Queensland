<?php
header("access-control-allow-origin: *");
error_reporting(E_ERROR); //turn off warnings

$db = new MySQLi("localhost", "root", "root", "roadrager");
$db->set_charset('utf8');

if($db->connect_error) {
    echo $db->connect_error;
}
else {
	
	$newUser = $_GET['user'];
    $newPassword = $_GET['password'];
	$newLicence = $_GET['licence'];

	//secure against sql-injection
	$newUser = $db->real_escape_string($newUser);
	$newPassword = $db->real_escape_string($newPassword);        
        
	
	$sql = "INSERT INTO users (user, password, licence) VALUES ('{$newUser}', '{$newPassword}', '{$newLicence}')";
    $result = $db->query($sql);

    
	if ($result) {
		echo "ok";
	}
	else {
		echo "Someting went wrong!";
	}

}