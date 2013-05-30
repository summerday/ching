<?php  include 'connect.php';

	// Get the login credentials from user
	$login=trim($_POST["user"]);
	$password=trim($_POST["password"]);
	
//echo " Input username is ".$login."<br>";
//echo " Input password is ".$password."<br>";

	
	$tblname = 'Person';
	  
	// check the user credentials against the DB
	$sql = "SELECT * FROM $tblname WHERE ";
	$sql .= "loginName='$login' AND loginPassword='$password'";

echo $sql . "<br>";


	$result= $mysqli->query($sql);
	$rowCount = $result->num_rows;

echo "rowcount = " . $rowCount;

    /* free result set */
    $result->close();
	
	if ($rowCount == 1)
	{
	  $_SESSION['loginUser']=$login;
	  $_SESSION['loggedIn'] = true;
	  
	  header("Location: home.php");
	  exit;
	}
	else {
	   $_SESSION['loggedIn'] = false;
	   echo "<p>Login failed, user email or password incorrect.</p>";
	   
	   // close the connection
	   $mysqli->close(); 
	}
	
?>
