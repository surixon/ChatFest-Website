<?php include('config.php');?>
<?php include('validation.php');?>
<?php
if(isset($_POST['signup']) && !empty($_POST['signup']))
{ 
	       
        $sql = "INSERT into register(username,email,password)
		        VALUES 
		        ('".$_POST["username"]."','".$_POST["email"]."','".$_POST["password"]."')";
		mysqli_query($conn,$sql);
		?>
	
		 <script type="text/javascript">
	            alert('Registration successful');
				window.location.href="mainScreen.php";
		 </script>
<?php
}
?>



