<?php
include('config.php');
include('session.php');
$username_add= $session['username'];
if(isset($_POST['submit']) && !empty($_POST['submit']))
{
		
		 
		 $name = $_REQUEST['name'];
		 $start_date = $_REQUEST['start_date'];
	     $time_from = $_REQUEST['time_from'];
	     $time_to = $_REQUEST['time_to'];
	 
	
	     $sql = "INSERT into timetable(name,time_from,time_to,admin_name)
		        VALUES 
		        ('".$start_date."','".$name."','".$time_from."','".$time_to."','".$username_add."')";
		        mysqli_query($conn,$sql);
		?>
		<script type="text/javascript">
	            alert('Event Added successfully');
				window.location.href="timeTable.php";
		</script>
       
<?php
}
?>
