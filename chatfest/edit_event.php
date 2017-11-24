<?php
include('config.php');
 $ids = $_GET['id'];
 echo $ids;
 
	 $event_datetime = $_REQUEST['event_datetime'];
	 $event_name = $_REQUEST['event_name'];
	 
	 $sql = "UPDATE events set event_datetime='$event_datetime', event_name='$event_name' WHERE id='$ids'";
		    $result   = mysqli_query($conn,$sql);
		?>
		<script type="text/javascript">
	            alert('Event Updated successfully');
				window.location.href="event.php";
		</script>
       
<?php
?>
