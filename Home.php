<!DOCTYPE html>
<?php
  if (array_key_exists('register', $_POST)) {
    register();
  }
?>
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
      <form action="Home.php" method="POST">
  
        <h3>Register</h3>
        First Name: <input type="text" name = "first_name" /></br>
        Last Name: <input type="text" name = "last_name" /></br>
        E-mail*: <input type="text" name = "email"/> </br>
        Password: <input type="password" name = "password" value=""></br>
        Confirm Password:  <input type="password" name="confirm_password" value=""><p id="error_confirm_password"></p></br>
        image: <input type="file" name="image" value="Browse"></br>
        <h5>* required fields</h5></br>
        <input type="submit" value="register" name ="register"/>
      </form>
    </div>
    <?php
      function register() {
        if($_POST['password'] != $_POST['confirm_password']) {
          echo "done";
          echo "
                <script  type=\'text/javascript'>
                  document.getElementById('error_confirm_password').innerHTML='Confirmed password does not match the password';
                </script>
                ";
          return;
        }
        mysql_connect('localhost', "root");
        mysql_select_db('Diagon Alley');
       $query = 'insert into person (first_name, last_name, email, password) 
                 values ("'.$_POST['first_name'].'","'.$_POST['last_name'].'","'.$_POST['email'].'","'.$_POST['password'].'");';
        $result = mysql_query($query) or die(mysql_error());
        
        if ($result) {
          header("Location:Login.php");die;
        }
      }
    ?>
	</body>
</html>