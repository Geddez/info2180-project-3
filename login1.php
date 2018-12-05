<!DOCTYPE>
<html>
	<head>
		<title> HireMe </title>
		<link rel="stylesheet" href="login.css">
	</head>
	<body class="body">
		<div class="bdy">
			<form method="post" name="form" id="form" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" >
				<div class="container">
					<label><b>EMAIL</b></label>
					<input type="text" placeholder="Email" name="email" required>

					<label><b>PASSWORD</b></label>
					<input type="password" placeholder="Password" name="password" required>

					<button type="submit" name="submit_form" id="submit_form">Login</button>
					<input type="checkbox" checked="checked"> Remember Me
				</div>
			</form>
		</div>
	</body>
</html>
