<?php include ('session.php'); ?>
<html>
<head>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Chat</title> 
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="../../public/css/font-awesome-4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script type="text/javascript" src="js/jquery-1.9.1.min.js"></script>
<script type="text/javascript" src="js/jquery.autocomplete.min.js"></script>
<script type="text/javascript" src="js/currency-autocomplete.js"></script>
<script language="javascript" type="text/javascript" src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.10.0/jquery.validate.min.js"></script>
<link rel="stylesheet" type="text/css" href="../../public/css/chat.css">
</head>
<body onresize="resizeResponsive()">
<!-- <body> --> 
<!-- start -->
<div class="background" style="margin: auto !important; max-width: 1280px !important; height:100% !important;"> </div>
<nav class="navbar navbar-fixed-top" style="margin: auto !important; max-width: 1280px !important;">
  <div class="container-fluid">
    <div class="row">
      <div class="col-xs-6 col-sm-6 col-md-6 event_tab">
        <div class="row">
          <div class="eventTitle">
            <div class="prevBt"> <a onclick="ex_screen('chat_tab');"><i class="fa fa-long-arrow-left fa-2x" aria-hidden="true"></i></a> </div>
            <div class="evTitle">
              <h1>Events</h1>
            </div>
            <div class="puseudo" style="z-index:0; visibility: hidden;" > <a onclick="ex_screen('chat_tab');"><i class="fa fa-long-arrow-left fa-2x" aria-hidden="true"></i></a> </div>
          </div>
        </div>
      </div>
      <div class="col-xs-6 col-sm-6 col-md-6 chat_tab">
        <div class="row">
          <div class="chatTitle">
            <div class="prevBt"> <a onclick="ex_screen('event_tab');"><i class="fa fa-long-arrow-left fa-2x" aria-hidden="true"></i></a> </div>
            <div class="chTitle">
              <h1>Chat</h1>
              <b id="logout"><a href="logout.php">Log Out</a></b>
            </div>
            <div class="puseudo" style="z-index:0; visibility: hidden;" > <a onclick="ex_screen('chat_tab');"><i class="fa fa-long-arrow-left fa-2x" aria-hidden="true"></i></a> </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</nav>
<div class="contents">
  <div class="container-fluid">
    <div class="row">
      <div class="col-xs-6 col-sm-6 col-md-6 event_tab">
      <!--Listing Start -->
        <div class="evContents">
      		  
          
          	<!-- Search Bar-->
            <div class="col-xs-6 col-sm-6 col-md-12">
            	<div class="panel panel-default">
                	<div class="panel-body">
                    	<div class="search_box">
  							<div class="container-1">
      							<span class="search-icon"><i class="fa fa-search"></i></span>
      								<input type="search" id="search" placeholder="Search..." />
  								</div>
						</div>
                        
                        <div class="location_box">
  							<div class="container-1">
      							<span class="location-icon"><i class="fa fa-map-marker" aria-hidden="true"></i></span>
      								<input type="location" id="location" placeholder="Location..." />
  								</div>
						</div>
                        
                        <div class="date_box">
  							<div class="container-1">
      							<span class="date-icon"><i class="fa fa-calendar" aria-hidden="true"></i></span>
      								<input type="date" id="date" placeholder="All Date" />
  								</div>
						</div>
                        
                        <div class="search_button">
  							<div class="container-1">
      							 <input type="button" value="Submit" class="submit_button">
  							</div>
						</div>
                        
                    </div>
                
                </div>
            </div>	
            <div class="col-xs-12 col-md-12"> 
              
              <!-- First product box start here-->
              <div class="prod-info-main prod-wrap clearfix">
                <div class="row">
                  <div class="col-md-5 col-sm-12 col-xs-12">
                    <div class="product-image"> <img src="../../public/img/1.jpg" class="img-responsive"> </div>
                  </div>
                  <div class="col-md-7 col-sm-12 col-xs-12">
                    <div class="product-deatil">
                      <h3 class="name"> <a href="#"> When in the park</a></h3>
                    </div>
                    <div class="description">
                      <p>123 6th St.</br>
                        Melbourne, FL 32904</p>
                      <p>Sat, Aug 26 7:00PM</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
           
          
          <!-- end product --> 
          
        </div> 	
        </div>
      <!--Listing end -->  
       
      <div class="col-xs-6 col-sm-6 col-md-6 chat_tab">
        <div class="chContents"> </div>
      </div>
    </div>
  </div>
</div>
<div class="foot" style="max-width: 640px !important;">
  <div class="chFooter">
    <button class="smile"><i class="fa fa-smile-o  fa-2x" aria-hidden="true"></i></button>
    <textarea id="chat-textarea" class="chat-textarea" placeholder="Type a message here" ></textarea>
    <button class="send" id="send_button"><i class="fa fa-location-arrow  fa-2x" aria-hidden="true"></i></button>
  </div>
</div>
<div class="seperate_line" style="width: 10px !important;"> </div>
<div class="sendMessageIcon"> <img src="../../public/img/red.png"> </div>
<form action="/timeTable" method="post" id="hiddenForm">
  <input type="hidden" name="masterName" 	id="masterName">
  <input type="hidden" name="masterPass"  id="masterPass">
  <input type="hidden" name="masterPhoto" id="masterPhoto">
  <input type="hidden" name="eTitle" 		  id="eTitle">
</form>
</div>
 
<!-- end -->
</body>
</html>
