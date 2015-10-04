<html>
	<head>
		<title>Advanced Lab Project</title>
	</head>
	<body>
		<h1>
			<?php
  				 echo "Diagon Alley </br>";
  				 mysql_connect('localhost', 'root');
  				 mysql_select_db('Diagon Alley');
  				 $query = "SELECT * FROM `person`;";
  				 $result = mysql_query($query) or die(mysql_error());
  				 $numRows = mysql_num_rows($result);
  				 if($numRow>0) {
  				 	while($person = mysql_fetch_assoc($result)) {
  				 		echo "<h2>$person['first_name']</h2>";
  				 	}
  				 }

  				// echo($numRows);
			?>
		</h1>
		<form action="LogIn.php" method="POST">

 			Name: <input type="text" name="name" />
			E-mail: <input type="text" name="email">
 			<input type="submit" value="Log In"/>
 		</form>

	</body>
</html>