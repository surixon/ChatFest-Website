<script type="text/javascript">
function usernameCheck(username)
{
	if (username == '')
	{
			
			document.getElementById("username_error").className = "error";
			document.getElementById("username_error").innerHTML = ' This field is required.';
			return false;
	}
	
	if(username.length<5 || username.length>30 )
	{
			document.getElementById("username_error").className = "error";
			document.getElementById("username_error").innerHTML = 'Username between 5 to 30 characters long.';
			return false;
	}
	else if(username!="")
	{
		$.ajax
		({
			type: "POST",
			url: "username_check.php",
			data:"username="+username,
    		cache: false,
			success: function(msg)
   			{
				if(msg==1)
				{
					document.getElementById("username_error").className = "error";
					document.getElementById("username_error").innerHTML = ' Username already in use.';
					document.getElementById("username_err").value=1;
					return false;
				}
				else
				{
					document.getElementById("username_error").innerHTML = '';
					document.getElementById("username_err").value=0;
					return true;
				}	
			} 
		});
  		if(document.getElementById("username_err").value==0)
  		{
			return true;
  		}
  		else
  		{
  			return false;
		}
	}
	else
	{
		document.getElementById("username_error").innerHTML = '';
		return true;		
		
	}
}
function passwordCheck(password){
	
	if (password == ''){
			
			document.getElementById("password_error").className = "error";
			document.getElementById("password_error").innerHTML = ' This field is required.';
			return false;
	}
	else if(password.length<8 || password.length>30)
	{
			document.getElementById("password_error").className = "error";
			document.getElementById("password_error").innerHTML = 'Password between 8 to 30 characters Long.';
			return false;
	}
	else if(password.search(/[a-zA-Z]/) == -1)
	{
			document.getElementById("password_error").className = "error";
			document.getElementById("password_error").innerHTML = 'Password must contain letters.';
			return false;
	}
	else if(password.search(/\d/) == -1)
	{
			document.getElementById("password_error").className = "error";
			document.getElementById("password_error").innerHTML = 'Password must contain numbers.';
			return false;
	}
	else
	{
		document.getElementById("password_error").innerHTML = '';
		return true;		
		
	}
}
function confirmpassCheck(confirmpass){
	
	var password = document.getElementById("password").value;
	if (confirmpass == ''){
			
			document.getElementById("confirmpass_error").className = "error";
			document.getElementById("confirmpass_error").innerHTML = ' This field is required.';
			return false;
	}
	if(password!=confirmpass)
	{

			document.getElementById("confirmpass_error").className = "error";
			document.getElementById("confirmpass_error").innerHTML = 'Confirm password not match with password.';
			return false;
	}
	else
	{
		document.getElementById("confirmpass_error").innerHTML = '';
		return true;		
		
	}
}
function emailCheck(email){
	
	if (email == '')
	{
			
			document.getElementById("email_error").className = "error";
			document.getElementById("email_error").innerHTML = ' This field is required.';
			return false;
	}
	
	var regex = /^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})+$/;
	if(!regex.test(email)){

		document.getElementById("email_error").innerHTML = 'Please Enter Valid Email id.';
		return false;		
	}
	
	else if(email!="")
	{
		$.ajax({
			type: "POST",
			url: "email_check.php",
			data:"email="+email,
			//cache: false,
			success: function(msg)
			{
				if(msg==1)
				{
					document.getElementById("email_error").className = "error";
					document.getElementById("email_error").innerHTML = ' Email-Id Already Exist.';
					document.getElementById("email_err").value=1;
					return false;
				}
				else
				{
					document.getElementById("email_error").innerHTML = '';
					document.getElementById("email_err").value=0;
					return true;
				}	
			} 
   		});
  		
		if(document.getElementById("email_err").value==0)
  		{
  			return true;
  		}
  		else
  		{
  			return false;
  		}
	}
	else
	{
		document.getElementById("email_error").innerHTML = '';
		return false;		
	}
}


function form_validation()
{
				
	var a = usernameCheck(document.getElementById("username").value);
	var b = passwordCheck(document.getElementById("password").value);
	var c = confirmpassCheck(document.getElementById("confirmpass").value);
	var d = emailCheck(document.getElementById("email").value);

	if(a && b && c && d)
	{
		return true;
			
	}
	else
	{
		return false;	
	}
	
}
</script>
