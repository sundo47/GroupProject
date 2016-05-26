
<!DOCTYPE html>
<html>
<head>
	<title>Login and Registration</title>
		<!-- Latest compiled and minified CSS -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

		<!-- Optional theme -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">

		<!-- Latest compiled and minified JavaScript -->
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous">
		</script>

	<style type="text/css">

		#box1, #box2{
			height: 200px;
			width: 300px;
			position: relative;
			display: inline-block;
			vertical-align: top;
			top: 120px;
			left: 35%;
		}

	</style>
</head>
<body>
	<div id="container">
		<div id="box1">
			<form action="process.php" method="post">

				<h2>Register</h2>
				<input type="text" name="firstName" placeholder="First Name"><br>
				<input type="text" name="lastName" placeholder="Last Name"><br>
				<input type="text" name="email" placeholder="E-mail"><br>
				<input type="text" name="ScreenName" placeholder="Screen Name"><br>
				<input type="text" name="City" placeholder="City"><br>
				<input type="text" name="State" placeholder="State"><br>
				<input type="text" name="Country" placeholder="Country"><br>
				<input type="password" name="password" placeholder="password"><br>
				<input type="password" name="confirmPassword" placeholder="confirm password"><br>
				<input type="submit" value="Register"><br>
			</form>
		</div>

		<div id="box2">
			<form>
				<h2>Login</h2>
				<input type="text" name="email" placeholder="E-mail"><br>
				<input type="password" name="password" placeholder="Password"><br>
				<input type="submit" value="Login"><br>
			</form>
		</div>
	</div>
</body>
</html>

