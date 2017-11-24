
<html>
<head>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Chat | Login</title> 
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="../../public/css/font-awesome-4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script type="text/javascript" src="js/jquery-1.9.1.min.js"></script>
<script type="text/javascript" src="js/jquery.autocomplete.min.js"></script>
<script type="text/javascript" src="js/currency-autocomplete.js"></script>
<script language="javascript" type="text/javascript" src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.10.0/jquery.validate.min.js"></script>
<link rel="stylesheet" type="text/css" href="../../public/css/login.css">
</head>
<body onresize="resizeResponsive()">
<!-- <body> -->
<form action="login_action.php" method="post">
	<div class="main">
		
		<div class="container-fluid">
			<div class="titleBar">
				<h1>CHAT FEST</h1>				
			</div>
			<div class="loginDescription">
				<p>Login to access your account</p>
			</div>
            
			<div class="form-group ">
       			<input type="text" class="form-control" placeholder="Username " id="UserName" name="username">
       			<i class="fa fa-user"></i>
     		</div>
			<div class="form-group">
                <input type="password" class="form-control" placeholder="Password" id="Passwod" name="password">
                <i class="fa fa-lock"></i>
     		</div>
                
				 
			<div id="login_err" class="error">
			</div>
			<div class="loginButton">
				
				<input name="submit" type="submit" value=" Login " class="loginButton">
							
			</div>
			<span><?php echo $error; ?></span>
            
			<div class="Without_Reg">
				<a href="chat_room.php">Enter without</a>
	 			<a href="register.php">Register now</a>
			</div>
		</div>
		
	</div>
	  </form>
</body>
</html>


