<!DOCTYPE html>
<html lang="en">
<html>
	
	<head>
		<title>New User</title>
		<link rel="stylesheet" type="text/css" href="newuser.css">	
		<script src="newuser.js" type="text/javascript"></script>
		<script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
	</head>

	<body>
		<div class="web">HireMe</div>
		<div class = "grid">
			<section class="left">
				<img  id="home" class="logo" src="home.jpg" <p id = "homebut" class = "info">Home</p>
				<a  href="newuser.html" ><img  id="adduser" class="logo" src="adduser.jpg"> Add User</a>	<br><br>
				<a  href="newjob.html" ><img  id="newjob" class="logo" src="newjob.jpg"> New Job</a>	<br><br>
				<img  id="logout" class="logo" src="logout.jpg" <p id = "outbut"class = "info">Log Out</p>
			</section>
			<section class="right">
				<div class="signup">
        			<form action="register.php">
        				<h1> New User</h1>
		                <legend><strong>Firstname</strong></legend>
		                <input id="firstName" class = "detail" type="text" required>
		                <legend><strong>Lastname</strong></legend>
		                <input id="lastName" class = "detail" type="text"  required>			                 
		                <legend><strong>Password</strong></legend>
		                <input id="password" class = "detail" type="password" class="textfield" required>
		                <legend><strong>Email</strong></legend>
		                <input id="passwordCon" class = "detail" type="email" placeholder="e.g mary.jane@example.com" required>
		                <legend><strong>Telephone</strong></legend>
		                <input id="telephone" class = "detail" type="number" placeholder="e.g 876-999-8989"  required>
		                <br><br>
		                <input id="submit" class = "submit" type="submit" value="Submit" class="button">
			        </form>
			    </div>
			</section>

	</body>
</html>
