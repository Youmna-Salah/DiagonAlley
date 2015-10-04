<!DOCTYPE html>
<html>
	<head>
		<title>Advanced Lab Project</title>
    
	</head>
	<body>
    <div style="height: 200px; overflow:hidden; background: url(1.jpg);"></div>
    <div>
  		<form action="LogIn.php" method="POST">
        <h3>Log In</h3>
   			E-mail: <input type="text" name="name" />
  			Password: <input type="text" name="email">
   			<input type="submit" value="Log In"/>
   		</form>
    </div>
    <div>
      <form action="Register.php" method="POST">
        <h3>Register</h3>
        First Name: <input type="text" name = "first_name" /></br>
        E-mail*: <input type="text" name = "email"/> </br>
        
        <h5>* required fields</h5>
        <input type="submit" value="Register"/>
      </form>
    </div>
	</body>
</html>