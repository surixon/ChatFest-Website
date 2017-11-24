<?php
include('session.php');
$user_type = $session['user_type'];
$username_login = $session['username'];
error_reporting(0);
include ('config.php');

?>


<!doctype html>
<html>
<head>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Chat | Event</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="../../public/css/font-awesome-4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script type="text/javascript" src="js/jquery-1.9.1.min.js"></script>
<script type="text/javascript" src="js/jquery.autocomplete.min.js"></script>
<script type="text/javascript" src="js/currency-autocomplete.js"></script>
<script language="javascript" type="text/javascript" src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.10.0/jquery.validate.min.js"></script>
<link rel="stylesheet" type="text/css" href="../../public/css/event.css">

<script type="text/javascript">
	
	
		  $(function(){
		  $('input[type="radio"]').click(function(){
		  if ($(this).is(':checked'))
		  {
			   var val = $(this).val();
			   var obj = JSON.parse(val);
			    
			    document.getElementById("id").value=(obj.id);
			    document.getElementById("event_datetime").value=(obj.event_datetime);
			    document.getElementById("event_name").value=(obj.event_name);
		        document.getElementById("delete_id").value=(obj.id);
		  }   
	   });
     });

</script>
<!--
<script>

	 $(function(){
		  $('input[type="radio"]').click(function(){
		  if ($(this).is(':checked'))
		  {
			  var idVal = $(this).val();
			 // $('#event_date').val="123";
			  $('#event_date').val(idVal);
		  }
	   });
     });

</script>
-->

</head>
<body onresize="resizeResponsive()">
<!-- <body> --> 
<!-- start -->
<div class="background" style="margin: auto !important; max-width: 1280px !important; height:100% !important;"> </div>
<nav class="navbar navbar-fixed-top" style="margin: auto !important; max-width: 1280px !important;">
  <div class="container-fluid">
    <div class="row">
      <div class="col-xs-12 col-sm-12 col-md-12 chat_tab">
        <div class="row">
          <div class="chatTitle">
            <div class="prevBt"> <a onclick="ex_screen('event_tab');"><i class="fa fa-long-arrow-left fa-2x" aria-hidden="true"></i></a> </div>
            <div class="chTitle">
              <h1>Event</h1>
              <div id="logout"><a href="logout.php">Log Out</a></div>
              <div id="username"><h4><?php echo 'Hi'.' '.$username_login;?></h4></div>
            </div>
          </div>
          
        </div>
      </div>
    </div>
  </div>
  </div>
</nav>
<div class="contents">
  <div class="container-fluid">
    <div class="row">
      <div class="col-xs-12 col-sm-12 col-md-12 event_tab">
        <div class="evContents">
          <div class="container">
          	<!-- Search Bar-->
          	
            
              <!-- First product box start here-->
             <?php
            
                
					$qry = "select * from events";
				
			        $stmt = mysqli_query($conn,$qry);
					while($rows = mysqli_fetch_array($stmt,MYSQLI_ASSOC))
					{
						if($rows)
						{
							$day = date('l', strtotime($rows['event_datetime']));
							?>
							<div class="col-xs-12 col-md-6">
							  <div class="prod-info-main prod-wrap clearfix">
								  
								<div class="row">
								  <div class="col-md-5 col-sm-12 col-xs-12">
									<div class="product-image"> <img src="images/<?php echo $rows['image'];?>" class="img-responsive"> </div>
								  </div>
								  <div class="col-md-7 col-sm-12 col-xs-12">
									<div class="product-deatil">
									  <h3 class="name"> <a href="#"><?php echo $rows['event_name'];?> </a></h3>
									 <?php if ($user_type == '1') : ?>
									  <input type="radio" id="radio" class="radio" name="radio" value='<?php echo json_encode($rows);?>'/>
									  
									  <?php endif; ?>
									</div>
									<div class="description">
									  <i class="fa fa-map-marker"></i><p><?php echo $rows['event_location'];?></p><br>
									  <i class="fa fa-clock-o"></i><p><?php echo $day.','.$rows['event_datetime'];?></p>
									</div>
								  </div>
								</div>
							  </div>
							</div>
							 
							<?php
						}
					}
				?>		
      
       
          <!-- end product --> 
          
        </div>
      </div>
    </div>
  </div>
</div>
</div>
</div>

 <!-- edit buttons -->
  <div class="editBar" style="margin: auto !important;  max-width: 1280px;">
	  <?php if ($user_type == '1') : ?>
  	<div class="addButton" data-toggle="modal" data-target="#addModal">
  		<h3>Add</h3>
  		<?php endif; ?>
  	</div>
  	 <?php if ($user_type == '1') : ?>
  	<div class="editButton" data-toggle="modal" data-target="#editModal">
  		<h3>Edit</h3>
  		<?php endif; ?>
  	</div>
  	 <?php if ($user_type == '1') : ?>
  	<div class="deleteButton" data-toggle="modal" data-target="#deleteModal">
  		<h3>Delete</h3>
  		<?php endif; ?>
  	</div>
  	 <?php if ($user_type == '1') : ?>
  	<div class="timeTableButton">
  		<h3><a href = "timeTable.php">Timetable</a></h3>
  		<?php endif; ?>
  	</div>
  	
  </div>
  
  <!-- red circle with a triangle  -->
<div class="sendMessageIcon"> <img src="../../public/img/red.png"> </div>
<form action="/timeTable" method="post" id="hiddenForm">
  <input type="hidden" name="masterName" 	id="masterName">
  <input type="hidden" name="masterPass"  id="masterPass">
  <input type="hidden" name="masterPhoto" id="masterPhoto">
  <input type="hidden" name="eTitle" 		  id="eTitle">
</form>
</div>

<!-- addModal -->
  <div class="modal fade" id="addModal" role="dialog">
	  <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
		  <form action="add_event.php" method="post" enctype="multipart/form-data">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Please fill below input boxes properly.</h4>
        </div>
        
        <div class="add_photo">
        	<img id="blah" src="../../public/img/user.jpg" alt="Add image" />
        	<input type="file" name="image" id="image"/>
			
        </div>
        <div class="modal-body">
        	<div class="addModalInputBoxes">
        		<input type="text" name="event_datetime" class="addInput form-control" placeholder="2017-11-17 03:09:11">
        		<input type="text" name="event_name" class="addInput form-control" placeholder="Name Of Event">
                <input type="text" name="event_location" class="address form-control" placeholder="Phase-7,Sector-61,mohali.">
        	</div>          
        </div>
        <div class="modal-footer">
          <input type="submit" name="submit" value="submit" class="ok_button" />
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
		  <form action="edit_event.php" method="get">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Please edit below input boxes properly.</h4>
        </div>
        <div class="modal-body">
        	<div class="editModalInputBoxes">
				<input type="hidden" name="id" id="id" value="">
        		<input type="text" name="event_datetime" id="event_datetime"  class="addInput form-control">
        		<input type="text" name="event_name"     id="event_name"      class="addInput form-control">
        	</div>          
        </div>
        <div class="modal-footer">
         <input type="submit" name="submit" value="update" class="ok_button"/>
        </div>
        </form>
      </div>
      
    </div>
  </div>
  

  <div class="modal fade" id="deleteModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
		  <form action="delete_event.php" method="get">
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
			<input type="hidden" name="delete_id" id ="delete_id"/>
          <input type="submit" name="submit" value="Delete" class="btn btn-danger"/>
           <input type="submit" name="submit1" value="Cancel" class="btn btn-success" a href="event.php"/>
        </div>
        </form>
      </div>
      
    </div>
  </div>
	
<!-- end -->
</body>
</html>
