<?php include ('session.php'); ?>
<html>
<head>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Chat | Main Screen</title> 
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="../../public/css/font-awesome-4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script type="text/javascript" src="js/jquery-1.9.1.min.js"></script>
<script type="text/javascript" src="js/jquery.autocomplete.min.js"></script>
<script type="text/javascript" src="js/currency-autocomplete.js"></script>
<script language="javascript" type="text/javascript" src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.10.0/jquery.validate.min.js"></script>
<link rel="stylesheet" type="text/css" href="../../public/css/mainscreen.css">
</head>
<body onresize="resizeResponsive()">
<!-- <body> -->
	<div class="main">
		<div class="container-fluid">
        	<div class="row">
			<div class="col-xs-12 col-sm-12 col-md-12">
					<div class="titleBar">
						<h1>What' on</h1>
						<div class="puseudo" style="z-index:0; visibility: hidden;" >
							<a onclick="ex_screen('chat_tab');"><i class="fa fa-long-arrow-left fa-2x" aria-hidden="true"></i></a>	  						
						</div>
					</div>					
				</div>
              </div>  
                
                
            <div class="col-xs-12 col-sm-12 col-md-12 button_section" >
                <div class="chat_btn"><a href="chat_room.php">Chat</a></div>
        	</div>
            
            <div class="col-xs-12 col-sm-12 col-md-12 event_button" >
                <div class="event_btn"><a href="event.php">Events</a></div>
        	</div>
            
		</div>
	  </div>
      <div class="sendMessageIcon">
		<img src="../../public/img/red.png">
	</div>
</body>
</html>


