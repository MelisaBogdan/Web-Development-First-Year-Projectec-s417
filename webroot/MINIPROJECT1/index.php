<?php
	$dbhost = getenv("MYSQL_SERVICE_HOST"); 
	$dbport = getenv("MYSQL_SERVICE_PORT"); 
	$dbuser = getenv("DATABASE_USER"); 
	$dbpwd = getenv("DATABASE_PASSWORD"); 
	$dbname = getenv("DATABASE_NAME"); 
	// Create connection 
	$conn = new mysqli($dbhost, $dbuser, $dbpwd, $dbname); 
	
	$userr = "melisa@gmail.com";
	$passs = "pass";
	#if ($_SERVER['REQUEST_METHOD'] == 'POST')
	#{ 
		#This is to ensure that the INSERT query does not run EVERY TIME the page is loaded, even if no form was submitted.     
		$sql = "INSERT INTO test3(ID,keyUser,keyPass)  #create the row
		VALUES('1',' ',' ')"; 
		$sql = "UPDATE test3 SET keyUser='$userr', keyPass='$passs'  # add to the row where ID=1
			WHERE ID=1";    
	#}
	if ($conn->query($sql) === TRUE) 
	{               
		
	} else {             
		echo "Error: " . $sql . "<br>" . $conn->error;          
	}           

	header("Location: myWebsite.html");
?> 