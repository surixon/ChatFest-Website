<?php
include ('config.php');
$search = $_POST['search'];
$locations = $_POST['location'];
$date = $_POST['date'];
date_default_timezone_set('Africa/Lagos');
	if(empty($search) && empty($locations))
	{
		$location = 'event_datetime';
		$location_value = $date;
	}else if(empty($search) && empty($date))
	{
		$location = 'event_location';
		$location_value = $locations;
	}else if(empty($locations) && empty($date))
	{
		$location = 'event_name';
		$location_value = $search;
	}
	
	
		 $qry = "select * from events where $location like '%".$location_value."%'";
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
