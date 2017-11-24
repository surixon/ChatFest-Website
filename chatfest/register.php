<!--
<?php include('session.php');?>
-->
<html>
<head>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Chat | Register</title> 

<?php include('validation.php'); ?>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="../../public/css/font-awesome-4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script type="text/javascript" src="js/jquery-1.9.1.min.js"></script>
<script type="text/javascript" src="js/jquery.autocomplete.min.js"></script>
<script type="text/javascript" src="js/currency-autocomplete.js"></script>
<script language="javascript" type="text/javascript" src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.10.0/jquery.validate.min.js"></script>
<link rel="stylesheet" type="text/css" href="../../public/css/register.css">
</head>
<body onresize="resizeResponsive()">
<form action="signup.php" method="post" onSubmit="return form_validation();">
	<div class="main">
		
		<div class="container-fluid">
			
			<div class="titleBar"><h1>CHAT FEST</h1></div>				
			<div class="form-group ">
				 <i class="fa fa-user"></i>
       			<input type="text" class="form-control" placeholder="UserName " id="username" name="username" onBlur="usernameCheck(this.value)">
       			<input type="hidden" name="username_err" id="username_err" value="">
                <div style="color:RED;" id="username_error" class="error"></div>
     		</div>
     		
            <div class="form-group">
                <input type="text" class="form-control" placeholder="Email Address" id="email" name="email" onBlur="emailCheck(this.value)">
                <span class="small_size"><i class="fa fa-envelope"></i></span>
                <div style="color:RED;" id="email_error" class="error"></div>
                <input type="hidden" name="email_err" id="email_err" value=""> 
     		</div>
            
            <div class="form-group">
                <input type="password" class="form-control" placeholder="Password" id="password" name="password" onBlur="passwordCheck(this.value)">
                <span class="big_size">
					<i class="fa fa-lock" aria-hidden="true"></i></span>
					<div style="color:RED;" id="password_error" class="error"></div></div>
             
			<div class="form-group">
                <input type="password" class="form-control" id="confirmpass"  name="confirmpass" onBlur="confirmpassCheck(this.value)" placeholder="Confirm Password">
                 <span class="big_size"><i class="fa fa-lock" aria-hidden="true"></i></span>
                 <div style="color:RED;" id="confirmpass_error" class="error"></div></div>
     		</div>
            
			<div id="login_err" class="error">
			</div>
			<div class="registerButton">
				
				<input class="registerButton" id="btn_register" type="submit" onClick="validation();" value="Register" name="signup">
					<div id="msg" class="message"></div>			
			</div>
			<div class="cancel">
				<a href="login.php">Cancel</a>
			
			</div>
		</div>	
		</div>
	</div>	
	</div>
   </form>
</body>
</html>
