<?php
include('config.php');
 $ids = $_GET['delete_id'];
 
 $sql = "Delete  from events where id='$ids'";
 $result   = mysqli_query($conn,$sql);
?>
		<script type="text/javascript">
	            alert('Event Deleted Successfully');
				window.location.href="event.php";
		</script>
       
<?php
?>

