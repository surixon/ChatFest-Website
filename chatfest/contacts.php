<!DOCTYPE html>
<html>
<head>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Chat | Contacts</title> 
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="../../public/css/font-awesome-4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script type="text/javascript" src="js/jquery-1.9.1.min.js"></script>
<script type="text/javascript" src="js/jquery.autocomplete.min.js"></script>
<script type="text/javascript" src="js/currency-autocomplete.js"></script>
<script language="javascript" type="text/javascript" src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.10.0/jquery.validate.min.js"></script>
<link rel="stylesheet" type="text/css" href="../../public/css/timetable.css">
</head>
<body onresize="resizeResponsive()">
	<!-- backgground -->
	<div class="background" style="margin: auto !important; max-width: 640px !important; height:100% !important;">		
	</div>
	<!-- title bar -->
	<nav class="navbar navbar-fixed-top" style="margin: auto !important; max-width: 640px !important;">
		<div class="container-fluid">
			<div class="row">
				<div class="col-xs-12 col-sm-12 col-md-12">
					<div class="titleBar">
						 
						<h1>Contacts</h1>
						<div class="puseudo" style="z-index:0; visibility: hidden;" >
							<a onclick="ex_screen('chat_tab');"><i class="fa fa-long-arrow-left fa-2x" aria-hidden="true"></i></a>	  						
						</div>
					</div>					
				</div>
			</div>
			<div class="row">
				<div class="col-xs-12 col-sm-12 col-md-12">
					<div class="daySel">
						<div class="tab active_tab" onclick="selectTime(event, 'today')">
							<h3>User Name</h3>
						</div>
						<div class="tab" onclick="selectTime(event, 'today')">
							<h3>Find</h3>						
						</div>
					</div>
				</div>
			</div>
			<div class="row tableTitle">
				<div class="col-xs-4 col-sm-4 col-md-4 when">
						<h3>User Name</h3>
				</div>
				<div class="col-xs-6 col-sm-6 col-md-6 name">
						<h3>Chat</h3>						
				</div>
				<div class="col-xs-2 col-sm-2 col-md-2 going">
						<h3>Admin</h3>						
				</div>		
			</div>
		</div>
	</nav>
	<!-- table -->
	<div class="container tableContents">
		<table class="table">
	    <tbody>

	    </tbody>
	  </table>
  </div>
  
  <!-- red circle with a triangle  -->
	<div class="sendMessageIcon">
		<img src="../../public/img/red.png">
	</div>
	<!-- hidden form -->
	<form action="/chat" method="post" id="back_chat">
		<input type="hidden" name="userName" 		id="userName">
		<input type="hidden" name="password"  	id="password">
		<input type="hidden" name="eventTitle" 	id="eventTitle">
		<input type="hidden" name="chatDate" 		id="chatDate">
		<input type="hidden" name="chatTime" 		id="chatTime">
		<input type="hidden" name="chatFlag" 		id="chatFlag">
	</form>	
	<!-- addModal -->
  <div class="modal fade" id="addModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Please fill below input boxes properly.</h4>
        </div>
        <div class="modal-body">
        	<div class="addModalInputBoxes">
        		<input type="text" name="When" class="addInput" placeholder="When">
        		<input type="text" name="Name" class="addInput" placeholder="Name">
        	</div>          
        </div>
        <div class="modal-footer">
          <button type="button" id="addModalBt" class="btn btn-default" data-dismiss="modal">OK</button>
        </div>
      </div>      
    </div>
  </div>
	<!-- editModal -->
  <div class="modal fade" id="editModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Please edit below input boxes properly.</h4>
        </div>
        <div class="modal-body">
        	<div class="editModalInputBoxes">
        		<input type="text" name="When" class="addInput" placeholder="When">
        		<input type="text" name="Name" class="addInput" placeholder="Name">
        	</div>          
        </div>
        <div class="modal-footer">
          <button type="button" id="editModalBt" class="btn btn-default" data-dismiss="modal">OK</button>
        </div>
      </div>
      
    </div>
  </div>
  <div class="modal fade" id="deleteModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title"></h4>
        </div>
        <div class="modal-body">
        	<div class="deleteModaldescription">
	          <h5 class="modal-title">Do you want to delete a selected row from the time table?</h5>
	          <br>
	          <h5 class="modal-title">Please select the Delete button to delete a selected row or select the Cancel button to cancel.</h5>          
        	</div>          
        </div>
        <div class="modal-footer">
          <button type="button" id="delModalBt" class="btn btn-default" data-dismiss="modal">Delete</button>
          <button type="button" id="cancelModalBt" class="btn btn-default" data-dismiss="modal">Cancel</button>
        </div>
      </div>
      
    </div>
  </div>
	 
</body>

</html>