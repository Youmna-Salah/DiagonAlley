<html>
	<head>
	</head>
	<body>
		<h1>
      <?php
      echo "Diagon Alley </br>";
          $connection = mysql_connect('localhost', 'root');
          mysql_select_db('DigonAlley');
      ?>
      <form method="post" action="edit.php" enctype="multipart/form-data">
first_name: <input  type="text" name="first_name" value="your name" /><br />
email: <input type="text" name="email" value=""/><br />
password: <input type="password" name="password" value=""/><br />
Last_name: <input type="text" name="last_name" value=""/><br />
Avatar:<input type="file" name="image" value="Browse" id="image"></br>
<!-- <input type="file" name="image" value=""/><br /> -->
<input type= "submit" name = "edit" value="Update">
</form>
</h1>
<?php
 if(isset($_POST['submit'])) {
                echo 'data updated successfuly....EL&AMDOULAAAAAAAAAA !!!';
              }
              ?>
		<!-- 	<?php
//   				 echo "Diagon Alley </br>";
//   				 $connection = mysql_connect('localhost', 'root');
//   				 mysql_select_db('DigonAlley');
//            if(isset($_GET['submit'])){
//             $id =$_GET['did'];
//             $name =$_GET['dname'];
//             $email = $_GET['demail'];
//             $password =$_GET['dpassword'];
//             $query = mysql_query("
//               UPDATE `digonAlley`.`person` SET first_name = '$name',emial ='$email',
//               password='$password'  WHERE `person`.`id` = 1",$connection);}
//             $query = mysql_query("SELECT * from person",$connection);
//             while($row = mysql_fetch_array($query)){
//               echo  "<b><a href='editInfo.php?update={$row['id']}'>{$row['first_name']}</a></b>";
// echo "<br />";
  //          }
           ?>
           <?php
           // if (isset($_GET['update'])) {
           //    $update = $_GET['update'];
           //    $query1 = mysql_query("select * from person where id=$update", $connection);
           //    while ($row1 = mysql_fetch_array($query1)) {
           //        echo "<form class='form' method='get'>";
           //        echo "<h2>Update Form</h2>";
           //        echo "<hr/>";
           //        echo"<input class='input' type='hidden' name='did' value='{$row1['id']}' />";
           //        echo "<br />";
           //        echo "<label>" . "Name:" . "</label>" . "<br />";
           //        echo"<input class='input' type='text' name='dname' value='{$row1['first_name']}' />";
           //        echo "<br />";
           //        echo "<label>" . "Email:" . "</label>" . "<br />";
           //        echo"<input class='input' type='text' name='demail' value='{$row1['email']}' />";
           //        echo "<br />";
           //        echo "<label>" . "password:" . "</label>" . "<br />";
           //        echo"<input class='input' type='text' name='dpassword' value='{$row1['password']}' />";
           //        echo "<br />";
           //        echo "</textarea>";
           //        echo "<br />";
           //        echo "<input class='submit' type='submit' name='submit' value='update' />";
           //        echo "</form>";
           //      }
           //    }
           //    if(isset($_GET['submit'])) {
           //      echo 'data updated successfuly....EL&AMDOULAAAAAAAAAA !!!';
           //    }
           // ?>
           // <?php
           // mysql_close($connection);
           ?>
         } -->
          <!--?php 
      //      // $name name saved over sessions as well as token
      //      $query = "SELECT * FROM `person` where first_name ='youmna';";
      //       $result = mysql_query($query) or die(mysql_error());
      //      // for testing 
      //        while($token = mysql_fetch_assoc($result)) {
      //         echo "<h2>${token['access_token']}</h2>";
      //       }
      //      echo mysql_fetch_assoc($result)." </br>";

  				// // echo($numRows);
			?>
		<!-- </h1>
		<form action="editInfo.php " method="POST">
        Name: <input type="text" name="first_name">
      E-mail: <input type="text" name="email">
      oldpassword: <input type="text" name="oldpassword">
      password: <input type="text" name="password">
      avatar: <input type="text" name="avatar">
      <input type="submit"  name="fo" value="Update"/>
   <?php
         
    //        echo "Diagon Alley </br>";
    //        mysql_connect('localhost', 'root');
    //        mysql_select_db('DigonAlley');
    //        // $name name saved over sessions as well as token
    //        $query = "SELECT * FROM `person` where first_name ='youmna';";
    //         $result = mysql_query($query) or die(mysql_error());
    //        // for testing 
    //          while($token = mysql_fetch_assoc($result)) {
    //           echo "<h2>${token['access_token']}</h2>";
    //         }
    //        echo mysql_fetch_assoc($result)." </br>";

    //       // echo($numRows);
    // // if($oldpassword==$password){

    // // }  
    //        if($_POST['fo'])
    //       $name =isset($_POST['first_name'])?$_POST['ud_name']:'empty';
    //       $email =isset($_POST['email'])?$_POST['email']:'e';
    //       $oldpassword =isset($_POST['oldpassword'])?$_POST['oldpassword']:'e';
    //       $newpassword =isset($_POST['password'])?$_POST['password']:'e';
    //       $avatar =isset($_POST['avatar'])?$_POST['avatar']:'e';
    //       echo $newpassword;
    //        $query ="UPDATE `digonAlley`.`person` SET `password` = $newpassword WHERE `person`.`id` = 1";
    // $res = mysql_query($query) or die(mysql_error());
    // echo $res;
    ?>
 		
 		</form> -->
   

	</body>
</html>