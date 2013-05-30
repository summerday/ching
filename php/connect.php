<?php
	
	// starting the session
	session_start();
	
	$db_host = 'localhost';
	$db_user = 'root';
	$db_pass = '';
	$db_name = 'XKCdb';
	

	$mysqldb = new mysqli($db_host, $db_user, $db_pass, $db_name); 

	if ($mysqldb->connect_errno) { 
		printf('Connect failed: %s\n', $mysqldb->connect_error); 
		exit();
	}
	else {
		echo "Connection established.<br>";
	}

	
?>
