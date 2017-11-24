<?php

	$connection = mysql_connect("localhost", "traalero_trainee", "trainee");

	$db = mysql_select_db("traalero_chatfest", $connection);
	session_start();

	$user_check=$_SESSION['login_user'];

	$ses_sql=mysql_query("select * from register where username='$user_check'", $connection);
	
	$row = mysql_fetch_assoc($ses_sql);
	
	$login_session = $row;
	
	$session = $login_session;
	
	if(!isset($login_session))
	{
		mysql_close($connection); 
		header('Location: login.php'); 
	}
?>
