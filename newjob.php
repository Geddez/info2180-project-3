<!DOCTYPE html>
<html lang="en">
<html>
	
	<head>
		<title>New Job</title>
		<link rel="stylesheet" type="text/css" href="newjob.css">	
		<script src="newjob.js" type="text/javascript"></script>
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
				<div class="job">
        			<form>
        				<h1> New Job</h1>
		                <legend><strong>Job Title</strong></legend>
		                <input id="jobtitle" class = "detail" type="text" placeholder="e.g. Senior Designer or Product Manager" required>
		                <legend><strong>Job Description</strong></legend>
		                <input id="jobdescription" class = "detail1" type="text"  required>			                 
		                <legend><strong>Category</strong></legend>
		                <select id="dropdown" class = "detail" required>
		                	<option value="" disabled selected>Select a category</option>
		                	<option value = "optionA">OptionA</option>
		                	<option value = "optionB">OptionB</option>
		                	<option value = "optionC">OptionC</option>
		                </select>
		                <legend><strong>Company</strong></legend>
		                <input id="company" class = "detail" type="text" required>
		                <legend><strong>Job Location</strong></legend>
		                <input id="joblocation" class = "detail" type="text" placeholder="e.g Kingston, Jamaica"  required>
		                <br><br>
		                <input id="submit" class = "submit" type="submit" value="Submit" class="button">
			        </form>
			    </div>
			</section>

	</body>
</html>
