<!DOCTYPE html>
<html>
	<head>
		<title>Advanced Lab Project</title>
    
	</head>
	<body>
  <div style="height: 200px; overflow:hidden; background: url(1.jpg);">
  <h1 style="color:#fff">Hi</h1>
		</div>
    <h1>
			<?php
  				 echo "Diagon Alley </br>";
  				 mysql_connect('localhost', 'root');
  				 mysql_select_db('Diagon Alley');
  				 $query = "SELECT * FROM `person`;";
  				 $result = mysql_query($query) or die(mysql_error());
  				 $numRows = mysql_num_rows($result);
  				 if($numRows>0) {
  				  while($person = mysql_fetch_assoc($result)) {
  				    echo "<h2>${person['last_name']}</h2>";
  				  }
  				 }

  				// echo($numRows);
			?>
		</h1>
    <h1>My First JavaScript</h1>

<button type="button"
onclick="document.getElementById('demo').innerHTML = Date()">
Click me to display Date and Time.</button>

<p id="demo"></p>
		<form action="LogIn.php" method="POST">

 			Name: <input type="text" name="name" />
			E-mail: <input type="text" name="email">
 			<input type="submit" value="Log In"/>
 		</form>

	</body>
</html>