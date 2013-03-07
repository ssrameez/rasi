<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd"> 
<html>
<head>
	<title>Registeration for user</title> 
	<script src="http://code.jquery.com/jquery-1.9.1.min.js"></script>
<script src="http://code.jquery.com/jquery-migrate-1.1.1.min.js"></script>
<script src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.9/jquery.validate.js"></script> <!-- http://bassistance.de/jquery-plugins/jquery-plugin-validation/ -->
    <script type="text/javascript">
	$(document).ready(function(){
		$("#myform").validate({
			debug: false,
			rules: {
				username: "required",
                                password: "required",
				email: {
					required: true,
					email: true
				}
			},
			messages: {
				username: "Please let us know who you are.",
                                password: "Password must be provided",
				email: "A valid email is required",
			},
			submitHandler: function(form) {
				// do other stuff for a valid form
				$.post('register.php', $("#myform").serialize(), function(data) {
					$('#results').html(data);
					//alert("Form submitted successfully!!!");
				});
			}
		});
	});
	</script>
	<style>
	label.error { width: 250px; display: inline; color: red;}
	</style>
</head>
<body>
<form name="myform" id="myform" action="" method="POST">  
<!-- The Name and password form fields -->
    <label for="username" id="username_label">Username</label>  
    <input type="text" name="username" id="username" size="30" value=""/>  
	<br>
    <label for="password" id="password_label">Password</label>  
    <input type="password" name="password" id="password" size="30" value=""/>  
	<br>
<!-- The Email form field -->
    <label for="email" id="email_label">Email</label>  
    <input type="text" name="email" id="email" size="30" value=""/> 
	<br>
<!-- The Submit button -->
	<input type="submit" name="submit" value="Submit"> 
</form>
<!-- We will output the results from process.php here -->
<div id="results"><div>
</body>
</html>
