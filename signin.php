<html>
<head>
	<title>online exam</title>
</head>
	<link type="text/css" rel="stylesheet" href="css/bootstrap.css">
<body>
		<center>
		<h3> Registration Form</h3>
		<form class = "well container" action = 'signinAuthen.php' method = "POST">
			
				
				First Name:&nbsp; <input class = "span3" placeholder = "type Firs Name here"id = 'fname' type = 'text' name = 'fname'><span id  = "mayor1"></span><br>
				Last Name:&nbsp; <input class = "span3" placeholder = "type Last Name here" id = 'lname' type = 'text' name = 'lname'><span id  = "mayor2"></span><br>
				Email:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <input class = "span3" placeholder = "type email here..." id = 'email' type = 'email' name = 'email'><span id  = "mayor3"></span><br>
				Password: &nbsp;&nbsp;&nbsp;<input class = "span3" placeholder = "type Password here..." id = 'password' type = 'password' name = 'password'><span id = 'mayor4'></span><br>
				Confirm Password: <input "span3" placeholder = "Confirm Password here..." id = 'confirmpassword' type = 'password'><span id = 'mayor5'></span><br>
				<input class = "btn btn-primary"id = "input" type = "submit" value = "submit">
				<input type = "reset" value = "Clear">
				
		</form>
		<button><a href="login.php">Log in</a></button>
			</center>

</body>
<script src="js/bootstrap.css"></script>
<script type="text/javascript" src = "jquery.1.10.2.js"></script>
<script type="text/javascript" src = validation.js></script>
</html>
