<!DOCTYPE html>
<html>
	<head></head>
	<body>
		<form action="LogIn.php" method="POST">
			<h1>Welcome <?php echo $_POST['first_name']?>!</br></h1>
			Email: <?php echo $_POST['email'] ?></br>
			Password: <input type="password" value=""></br>
			Confirm Password:  <input type="password" value=""></br>
			image: <input type="file" value="Browse"></br>
			<h5>* required fields</h5></br>
			<input type="submit" value="Register"/>
		</form>
		
	</body>
</html>