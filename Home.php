<!DOCTYPE html>
<?php
  if (array_key_exists('register', $_POST)) {
    register();
  }
?>
<html>
  <script type="text/javascript">
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
  
  </script>
	<head>
		<title>Advanced Lab Project</title>
    
	</head>
	<body>
    <div style="height: 200px; overflow:hidden; background: url(img/1.jpg);"></div>
    <div>
  		<form action="LogIn.php" method="POST">
        <h3>Log In</h3>
   			E-mail: <input type="text" name="name" />
  			Password: <input type="text" name="email">
   			<input type="submit" value="Log In"/>
   		</form>
    </div>
    <div>
      <form onsubmit="return checkInput(this);" action = "Home.php" method="POST" enctype="multipart/form-data">
  
        <h3>Register</h3>
        First Name: <input type="text" name = "first_name" /></br>
        Last Name: <input type="text" name = "last_name" /></br>
        E-mail*: <input type="text" name = "email"/> </br>
        <p id="error_email"> </p>
        Password*: <input type="password" name = "password" value=""></br>
        <p id="error_password"></p>
        Confirm Password*:  <input type="password" name="confirm_password" value="">
        <p id="error_confirm_password"></p></br>
        image: <input type="file" name="image" value="Browse" id="image"></br>
        <h5>* required fields</h5></br>
        <input type="submit" value="register" name ="register"/>
      </form>
    </div>
    <?php
      function register() {
        //echo implode(", ", $_FILES);
        //echo phpinfo();
        mysql_connect('localhost', "root");
        mysql_select_db('Diagon Alley');
        $query = 'insert into person (first_name, last_name, email, password) 
                 values ("'.$_POST['first_name'].'","'.$_POST['last_name'].'","'.$_POST['email'].'","'.$_POST['password'].'");';
        $result = mysql_query($query) or die(mysql_error());
        
        if ($result) {
          if(array_key_exists('image', $_FILES)) {
            $target_dir = "Public/ProfilePictures/";
            $target_file = $target_dir . basename($_FILES["image"]["name"]);
            $imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
            //echo implode("hhh ",$_FILES);
            if (move_uploaded_file($_FILES["image"]["tmp_name"], $target_file)) {
              $upload_query = 'update person SET image = "'.$target_file.'" where email= "'.$_POST["email"].'";';
              $result = mysql_query($upload_query) or die(mysql_error());
              if($result) {
                header("Location:Login.php");die;
              }
              //echo "The file ". basename( $_POST["image"]). " has been uploaded.";
            } else {
              echo "Sorry, there was an error uploading your file.";
            }
          }
          
        }
      }
    ?>
	</body>
</html>