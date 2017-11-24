<?php
	include('config.php');
	if($_POST['username'])
	{
		
		 $sql = "select username from register where username = '".$_POST['username']."'";
		 $res = mysqli_query($conn,$sql);
		 $cnt = mysqli_num_rows($res);
 		
		if($cnt==1)
		{
			echo '1';			
			
		}
		else
		{
			echo '0';
		}
	}
?>
