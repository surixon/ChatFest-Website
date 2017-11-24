<?php
include('config.php');
include('session.php');
$username_add= $session['username'];
if(isset($_POST['submit']) && !empty($_POST['submit']))
{
	//~ echo "hi";
	//~ die; 
         //IMAGE UPLOAD
         $file=$_FILES['image']['tmp_name'];
		 $filename=$_FILES['image']['name'];
		 move_uploaded_file($file,'images/'.$filename);	
		 
		 $event_name = $_REQUEST['event_name'];
	     $event_location = $_REQUEST['event_location'];
	     $event_datetime = $_REQUEST['event_datetime'];
	 
	
	     $sql = "INSERT into events(image,event_name,event_location,event_datetime,username)
		        VALUES 
		        ('".$filename."','".$event_name."','".$event_location."','".$event_datetime."','".$username_add."')";
		        mysqli_query($conn,$sql);
		?>
		<script type="text/javascript">
	            alert('Event Added successfully');
				window.location.href="timeTable.php";
		</script>
       
<?php
}
?>
