<?php
        $servername = "localhost";
		$username = "traalero_trainee";
		$password = "trainee";
		$dbname = "traalero_chatfest";

		// Create connection
		$conn = mysqli_connect($servername, $username, $password, $dbname);
		// Check connection
		if (!$conn) 
		{
			die("Connection failed: " . mysqli_connect_error());
		}	
?>		
