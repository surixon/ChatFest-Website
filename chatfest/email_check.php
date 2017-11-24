<?php
	include('config.php');
	if($_POST['email'])
	{
		
		 $sql = "select email from register where email = '".$_POST['email']."'";
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
