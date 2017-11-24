<?php
include('config.php');
include('session.php');
$username_add= $session['username'];
if(isset($_POST['event_select'])
{
	
	
	
	 $sql = "UPDATE timetable set status='1 WHERE id='$ids'";
		    $result   = mysqli_query($conn,$sql);
		?>
		<script type="text/javascript">
	            alert('Event Updated successfully');
				window.location.href="event.php";
		</script>
		<?php
		
}
		?>

