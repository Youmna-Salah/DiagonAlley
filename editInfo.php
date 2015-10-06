<html>
	<head>
<link rel="stylesheet" type="text/css" href="css/edit.css">

	</head>
	<body>
    <div id = "div1">
      <a href="#home">
        <img src="http://fontmeme.com/embed.php?text=Diagon%20Alley&name=Lumos.ttf&size=50&style_color=D4AF37" alt="Harry Potter Font">
      </a>
    </div>
    <div id = "div2">
		<h1>
      <a href="http://fontmeme.com/harry-potter-font/"><img src="http://fontmeme.com/embed.php?text=Change%20Your%20secret%20spells....&name=HogwartsWizard.ttf&size=40&style_color=0C0C66" alt="Harry Potter Font"></a>
      <?php
          $connection = mysql_connect('localhost', 'root');
          mysql_select_db('DigonAlley');
      ?>
      <form method="post" action="edit.php" enctype="multipart/form-data">
<a><img align = "middle" src="http://fontmeme.com/embed.php?text=First-name%20*&name=HogwartsWizard.ttf&size=20&style_color=0C0C66" alt="Harry Potter Font"></a>
</br><input align ="middle" type="text" name="first_name" value="new first-name" /><br/>

<a id="f"><img  align ="middle" src="http://fontmeme.com/embed.php?text=Last-name%20*&name=HogwartsWizard.ttf&size=20&style_color=0C0C66" alt="Harry Potter Font"></a>
 </br><input type="text" align ="middle" name="last_name" value="new last-name"/><br />

<a id="f"><img align ="middle" src="http://fontmeme.com/embed.php?text=OLd%20Email%20*&name=HogwartsWizard.ttf&size=20&style_color=0C0C66" alt="Harry Potter Font"></a>
</br><input align ="middle" type="text" name="oldemail" value="Old email"/><br />

<a id="f"><img align ="middle" src="http://fontmeme.com/embed.php?text=Email%20*&name=HogwartsWizard.ttf&size=20&style_color=0C0C66" alt="Harry Potter Font"></a>
</br><input align ="middle" type="text" name="email" value="new email"/><br />

<a id="f"><img  align ="middle" src="http://fontmeme.com/embed.php?text=Password%20*&name=HogwartsWizard.ttf&size=20&style_color=0C0C66" alt="Harry Potter Font"></a>
 </br><input  align ="middle" type="password" name="password" value="new password"/><br/>

 <a id="f"><img align ="middle" src="http://fontmeme.com/embed.php?text=Avatar%20*&name=HogwartsWizard.ttf&size=20&style_color=0C0C66" alt="Harry Potter Font"></a>
 </br><input  align ="middle" type="file" name="image" value="Browse" id="image"></br></br>
<!-- <input type="file" name="image" value=""/><br /> -->
<input align ="middle" id = "btn" type= "submit" name = "edit" value="Update">
<a><img src="http://fontmeme.com/embed.php?text=*%20Required%20fields&name=HogwartsWizard.ttf&size=20&style_color=0C0C66" alt="Harry Potter Font"></a>
</br>
</br>

</br>
</form>
</h1>
<?php
 if(isset($_POST['submit'])) {
                echo 'data updated successfuly....EL&AMDOULAAAAAAAAAA !!!';
              }
              ?>
     </div>

	</body>
</html>