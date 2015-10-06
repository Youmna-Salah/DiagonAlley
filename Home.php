<!DOCTYPE html>
<?php session_start();
  if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) {
    header("Location:Login.php");die;
  }
  if (array_key_exists('register', $_POST)) {
    register();
  }
  if(array_key_exists('LogIn', $_POST)) {
    logIn();
  }
?>
<html>

	<head>
   <script src="http://code.jquery.com/jquery-1.11.0.min.js"></script>
    <link rel="shortcut icon" href="img/favicon.png">
    <link rel="stylesheet" type="text/css" href="css/normalize.css">
    <link rel="stylesheet" type="text/css" href="css/Shop.css">
    <link rel="stylesheet" type="text/css" href="Welcome.css">
  	<title>Diagon Alley</title>
    <script type="text/javascript">
      $(document).ready(function(){
        var backgrounds = new Array(
            'url(./img/1.jpg)',
            'url(./img/2.jpg)');
          var current = 0;
          function nextBackground() {
            current++;
            current = current % backgrounds.length;
            document.body.style.transitionDuration = "1s";
            document.body.style.backgroundImage = backgrounds[current];

          }

          setInterval(nextBackground, 5000);

          document.body.style.backgroundImage = backgrounds[0];
      });

      
      function checkInput(form) {
        if(form.email.value == "") {
          document.getElementById('error_email').innerHTML='Please insert your email';
          form.email.focus();
          return false;
        }
        if(form.password.value == "" || form.password.value.length < 6) {
          document.getElementById('error_password').innerHTML='Password must be at least 6 characters!';
          form.password.focus();
          return false;
        }
        if(form.password.value != form.confirm_password.value) {
          document.getElementById('error_confirm_password').innerHTML='Confirmed password did not match password';
          form.confirm_password.focus();
          return false
        }
        return true;
      }
      function checkLoginInput(form) {
          if(form.email.value == "") {
            document.getElementById('login_email').innerHTML='Please insert your email';
            form.email.focus();
            return false;
          }
          if(form.password.value == "") {
            document.getElementById('login_password').innerHTML='Please insert your password';
            form.password.focus();
            return false;
          }
          return true;
      }
      
  </script>
	</head>
	<body>
    <header>
      <p class="logo">Diagon Alley</p>
      <ul>
        <li><a href="shop.php">Shop Home</a></li>
        <li><a href="#history">History</a></li>
      </ul>
  </header>
    <div id= "welcome">
      <h1 id = "welcome_text">
        Welcome to Diagon Alley Online!
      </h1>
      <p id = "add">
        Do you need a new wand? Are you school robes short and you need new ones? You do not have time to go to London before the 1st of September? 
        Now you can get all what you need from home. In here you can find all the authentic products of Diagon Alley, all what you need is a flick from your wand. 
      </p>
    </div>
    <div id="login">
  		<form onsubmit = "return checkLoginInput(this);" action = "Home.php" method="POST">
        <h3>Log In</h3>
   			E-mail: <input type="text" name="email" class="defaultTextBox"  />
        <p id="login_email"></p>
  			Password: <input type="password" name="password" class="defaultTextBox"/>
        <p id = "login_password"></p>
   			<input type="submit" value="LogIn" name = "LogIn" />
   		</form>
    </div>
    <div id="register">
      <form onsubmit="return checkInput(this);" action = "Home.php" method="POST" enctype="multipart/form-data">
  
        <h3>Register</h3>
        First Name: <input type="text" name = "first_name" class="defaultTextBox"/></br>
        Last Name: <input type="text" name = "last_name" class="defaultTextBox"/></br>
        E-mail*: <input type="text" name = "email" class="defaultTextBox"/> </br>
        <p id="error_email"> </p>
        Password*: <input type="password" name = "password" value="" class="defaultTextBox"/></br>
        <p id="error_password"></p>
        Confirm Password*:  <input type="password" name="confirm_password" value="" class="defaultTextBox"/>
        <p id="error_confirm_password"></p></br>
        image: <input type="file" name="image" value="Browse" id="image"></br>
        <h5>* required fields</h5></br>
        <input type="submit" value="register" name ="register"/>

      </form>
    </div>
    <?php
      function register() {
        mysql_connect('localhost', "root");
        mysql_select_db('Diagon Alley');
        $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
        $query = 'insert into person (first_name, last_name, email, password) 
                 values ("'.$_POST['first_name'].'","'.$_POST['last_name'].'","'.$_POST['email'].'","'.$password.'");';
        $result = mysql_query($query) or die(mysql_error());
        
        if ($result) {
          if(array_key_exists('image', $_FILES)) {
            $target_dir = "Public/ProfilePictures/";
            $target_file = $target_dir . basename($_FILES["image"]["name"]);
            $imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
            if (move_uploaded_file($_FILES["image"]["tmp_name"], $target_file)) {
              $upload_query = 'update person SET image = "'.$target_file.'" where email= "'.$_POST["email"].'";';
              $result = mysql_query($upload_query) or die(mysql_error());
              if($result) {
                 session_start();
                header("Location:Login.php");die;
              }
            } else {
              echo "Sorry, there was an error uploading your file.";
            }
          }
          
        }
      }
      function logIn() {
        mysql_connect('localhost', "root");
        mysql_select_db('Diagon Alley');
        $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
        
        $query = 'select  password from person where email = "'.$_POST["email"].'" limit 1;';
        $result = mysql_query($query) or die(mysql_error());
        $numRows = mysql_num_rows($result);
        
        $realRes = implode("",mysql_fetch_assoc($result));
      
        if($numRows>0) {

          if(password_verify($_POST['password'], $realRes)) {
            $query = 'select id from person where email ="'.$_POST["email"].'" limit 1;';
            $result = mysql_query($query) or die(mysql_error());
            $realRes = implode("",mysql_fetch_assoc($result));
            $_SESSION['id'] = $realRes;
            $_SESSION['email'] = $_POST['email'];
            
            header("Location:Login.php");die;
          }
          else {
            echo "nope";
          }
        }
       
      }
    ?>
	</body>
</html>