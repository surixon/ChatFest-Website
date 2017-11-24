<?php session_start();
if (isset($_POST['submit'])) 
{
	if(empty($_POST['username']) || empty($_POST['password'])) 
	{
		?>
		<script>
		 alert ('please enter usename or password');
		 window.location.href="login.php";
		</script>
		<?php
	}
	else
	{
		// Define $username and $password
		$username=$_POST['username'];
		$password=$_POST['password'];
		// Establishing Connection with Server by passing server_name, user_id and password as a parameter
		$conn = mysql_connect("localhost", "traalero_trainee", "trainee");
		// To protect MySQL injection for Security purpose
		$username = stripslashes($username);
		$password = stripslashes($password);
		$username = mysql_real_escape_string($username);
		$password = mysql_real_escape_string($password);
		// Selecting Database
		$db = mysql_select_db("traalero_chatfest", $conn);
		// SQL query to fetch information of registerd users and finds user match.
		$query = mysql_query("select * from register where password='$password' AND username='$username'", $conn);
		$rows = mysql_fetch_array($query);
		//~ echo"<pre>";print_r($rows['username']);"</pre>";
		//~ die;
		if ($rows) 
		{
			$qry_update="update register set status=1 where username  = '".$rows['username']."'";
            mysql_query($qry_update);
            
			$_SESSION['login_user']=$username; // Initializing Session
			?>
			<script>
			   alert ('Login Successfully');
			   window.location.href="mainScreen.php";
		   </script>
		   
		   <?php
                    
		} 
		else 
		{
			?>
			<script>
			   alert ('Invalid username or password');
			   window.location.href="login.php";
		   </script>
		   <?php
			
	    }
	    mysql_close($conn); // Closing Connection
	   
    }
}	
?>
