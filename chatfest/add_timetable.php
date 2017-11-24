
<html>
<head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script type="text/javascript" src="js/jquery-1.9.1.min.js"></script>
<script type="text/javascript" src="js/jquery.autocomplete.min.js"></script>
<script type="text/javascript" src="js/currency-autocomplete.js"></script>
<script language="javascript" type="text/javascript" src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.10.0/jquery.validate.min.js"></script>

<script type="text/javascript">
	
	function add_timetable()
	{
		var event_id=document.getElementById("event_id").value;
		if(event_id=="")
		{
			document.getElementById("event_id").focus();
			alert("Please enter event_id");
			return;
		}
		
		var time_from=document.getElementById("time_from").value;
		if(time_from=="")
		{
			document.getElementById("time_from").focus();
			alert("Please enter time_from");
			return;
		}
		
		var time_to=document.getElementById("time_to").value;
		if(time_to=="")
		{
			document.getElementById("time_to").focus();
			alert("Please enter time_to");
			return;
		}
		
		
	    var dataString = 'event_id='+event_id+'&time_from='+time_from+'&time_to='+time_to;
		$.ajax({
			type: "POST",
			url: "add_timetable_action.php",
			data: dataString,
			cache: false,
			success: function(response)
			{
				    alert(response);
					window.location.href = "timeTable.php";
				 
			}
		});
	}

</script>
</head>
</body>
</html>
