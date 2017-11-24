<?php 
include('config.php');
    if(isset($_POST['search_submit') && !empty($_POST['search_submit']))
	{
		$event_name = $_REQUEST['event_name'];
	    $event_location = $_REQUEST['event_location'];
	    $event_datetime = $_REQUEST['event_datetime'];
	    $where='1!=1 ';
	    if(!empty($event_name)){
			$where.= " OR event_name LIKE '$event_name%'";
		}
	    if(!empty($event_location)){
			$where.= " OR event_location LIKE '%$event_location%'";
		}
	    if(!empty($event_datetime)){
			$where.= " OR event_datetime LIKE '%$event_datetime%'";
		}
		if(empty($event_name) && empty($event_location) && empty($event_datetime)){
			$result_search=array();
		}
		else
		{
			echo $qry="select * from events WHERE $where";
			//~ die;
			$sth = $conn->prepare($qry);
			$sth->execute();
			$result_search = $sth->fetchAll(PDO::FETCH_ASSOC);
		}
	}
	$conn = null; 
	  
?>
