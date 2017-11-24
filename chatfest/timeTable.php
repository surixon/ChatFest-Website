<?php
include('session.php');
$user_type = $session['user_type'];
$username_login = $session['username'];
error_reporting(0);
include ('config.php');

                               date_default_timezone_set('Asia/Kolkata');
                               $date = date("g:i:sa ,Y-m-d");
                               $current_date = date("Y-m-d");
                               $tomorrow = date("Y-m-d",strtotime("tomorrow"));

?>
<html>
<head>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Chat | Time Table</title> 
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="../../public/css/font-awesome-4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script type="text/javascript" src="js/jquery-1.9.1.min.js"></script>
<script type="text/javascript" src="js/jquery.autocomplete.min.js"></script>
<script type="text/javascript" src="js/currency-autocomplete.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/timepicker/1.3.5/jquery.timepicker.min.js"></script>
<script language="javascript" type="text/javascript" src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.10.0/jquery.validate.min.js"></script>
<link rel="stylesheet" type="text/css" href="../../public/css/timetable.css">


<script>
	$(document).ready(function(){
	$("#tomorrow_data").hide();
	$("#tomorrow").click(function(){
		$(".tab").addClass("active");
		$(".active-tab").removeClass("active");
		$("#today_data").hide();
		$("#tomorrow_data").show();
	});
	
	$("#today").click(function(){
		$("#tomorrow_data").hide();
		$(".active-tab").addClass("active");
		$(".tab").removeClass("active");
		$("#today_data").show();
		$("#tomorrow_data").hide();
	});
	
});

</script>




<script>

    $($("input[name=event_select]:checked").each(function(){    
		if($(this).is(':checked'))
		  alert($(this).val());
    });

</script>
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
						<h1>What's on</h1>
						<div id="logout"><a href="logout.php">Log Out</a></div></br>
						<?php if ($user_type == '1') : ?>
					       <input type="submit" name="submit" value="Add Time Table" data-toggle="modal" data-target="#addModal">
				        <?php endif; ?>
                    
						<div class="puseudo" style="z-index:0; visibility: hidden;" >
							<a onclick="ex_screen('chat_tab');"><i class="fa fa-long-arrow-left fa-2x" aria-hidden="true"></i></a>	  						
						</div>
					</div>					
				</div>
			</div>
			<div class="row">
				<div class="col-xs-12 col-sm-12 col-md-12">
					<div class="daySel">
						<div class="tab active_tab" id="today">
							<?php
							  
                              
                               //echo $current_date;
							?>
							<h3>Today</h3>
						</div>
						<div class="tab" id ="tomorrow">
							<?php 
							//echo $tomorrow; 
							?>
							<h3>Tomorrow</h3>						
						</div>
					</div>
				</div>
			</div>
			
			<div class="row tableTitle">
				<?php if ($user_type == '1') : ?>
				<div class="col-xs-6 col-sm-6 col-md-6 when">
						<h3>When</h3>
				<?php endif; ?>
				
				<?php if ($user_type == '2') : ?>
				<div class="col-xs-4 col-sm-4 col-md-4 when">
						<h3>When</h3>
				<?php endif; ?>
				
				
				</div>
				<div class="col-xs-6 col-sm-6 col-md-6 name">
						<h3>Name</h3>						
				</div>

				
				<?php if ($user_type == '2') : ?>
				<div class="col-xs-4 col-sm-4 col-md-4 name">
					
						<h3>Going</h3>
						
				<?php endif; ?>
									
				</div>

			</div>
		</div>
	</nav>
	<!-- table -->
	<div class="container tableContents" id="today_data">
		<table class="table">
			
	    <tbody>
          	<?php
				$qry = "select * from timetable";
				$stmt = mysqli_query($conn,$qry);
				//~ echo"<pre>";print_r($stmt);"</pre>";
				//~ die;
				while($rows = mysqli_fetch_array($stmt,MYSQLI_ASSOC))
				{
					//~ echo"<pre>";print_r($rows);"</pre>";
					if($rows['start_date']==$current_date)
					{
				
					?>
					<tr>
						
							<td><p><?php echo $rows['time_from'].'-'.$rows['time_to']; ?></p></td>
							<td><p><?php echo $rows['name']; ?></p></td>
							<?php if ($user_type == '2') : ?>
                            <td><input type="checkbox" name="event_select" class="form-check-input" id="event_select" value="1"></td>
			                <?php endif; ?>
							</tr>
							<?php
				}
				
			}
			?>	
	    </tbody>
	  </table>
  </div>
  
  <div class="container tableContents" id="tomorrow_data">
		<table class="table">
			
	    <tbody>
          	<?php
				$qry = "select * from timetable";
				$stmt = mysqli_query($conn,$qry);
				//~ echo"<pre>";print_r($stmt);"</pre>";
				//~ die;
				while($rows = mysqli_fetch_array($stmt,MYSQLI_ASSOC))
				{
					//~ echo"<pre>";print_r($rows);"</pre>";
					if($rows['start_date']==$tomorrow)
					{
				
					?>
					<tr>
						
							<td><p><?php echo $rows['time_from'].'-'.$rows['time_to']; ?></p></td>
							<td><p><?php echo $rows['name']; ?></p></td>
							<?php if ($user_type == '2') : ?>
							<form action="event_select.php" method="post">
                            <td><input type="checkbox" name="event_select" class="form-check-input" id="event_select" value="1"></td>
                            </form>
			                <?php endif; ?>
							</tr>
							<?php
				}
				
			}
			?>	
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
		  <form action="add_timetable_action.php" method="post">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Please fill below input boxes properly.</h4>
          <h5 class="modal-title">Please Add Timetable For Events</h5>
        </div>
        
       
        <div class="modal-body">
        	<div class="addModalInputBoxes">
				<label>Name:</label>
        		<input type="text" name="name" id="name" class="addInput form-control" placeholder="Arijit Singh"></br>
        		<label>Start Date:</label>
        		<input type="text" name="start_date" id="start_date" class="addInput form-control" placeholder="2017-11-24"></br>
				<label>Time From:</label>
        		<input type="text" name="time_from" id="time_from" class="addInput form-control" placeholder="10:00AM"></br>
        		<label>Time To:</label>
        		<input type="text" name="time_to" id="time_to" class="addInput form-control" placeholder="11:00AM">
        	</div>          
        </div>
        <div class="modal-footer">
          <input type="submit" name="submit" value="Add" class="btn btn-success"/>
        </div>
      </form>
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
        		<input type="text" name="When" class="addInput form-control" placeholder="When">
        		<input type="text" name="Name" class="addInput form-control" placeholder="Name">
        	</div>          
        </div>
        <div class="modal-footer">
          <button type="button" id="editModalBt" class="btn ok_button" data-dismiss="modal">OK</button>
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
          <button type="button" id="delModalBt" class="btn btn-danger" data-dismiss="modal">Delete</button>
          <button type="button" id="cancelModalBt" class="btn btn-success" data-dismiss="modal">Cancel</button>
        </div>
      </div>
      
    </div>
  </div>
	 
</body>

</html>
