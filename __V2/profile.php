<?php
require('util/_common.php');
//require('util/private.php');
set_page_name('Profile');
?>

<!DOCTYPE html>
<html>
  <head>
    <?php require('tmp/headcontent.php');?>
  </head>
  <body>
    <?php require('tmp/header.php');?>
    <div id="container">
      <div class="card wide" id="title">
        Your profile
      </div>
      <div class="card wide" id="message"hidden>
        <?php if(isset($_SESSION['message'])){echo $_SESSION['message']; unset($_SESSION['message']);}?>
      </div>
      <div class="card wide" id="dwide-top">
        <?php
        $connection = mysql_connect('localhost', 'root');
        mysql_select_db('Diagon Alley');
        $UserID = $_SESSION['id'];// e7tyaty l3'ayet lma agibo mn session = $_SESSION["userID"]
        $query = "SELECT * from person WHERE id ='$UserID' ";
        $result = mysql_query($query) or die (mysql_error());
        $imagesDir = "public/profile";
        while ($row = mysql_fetch_assoc($result)){
          $imagename = $imagesDir.$row['id'].'.jpg';
          echo "<img  id=\"avatar\" src=\"${imagename}\" />";
        }
        ?>
        <?php
    		$query = "SELECT * from person WHERE id ='$UserID' ";
        $result = mysql_query($query) or die (mysql_error());
    		$row = mysql_fetch_assoc($result);
    		echo $row['first_name']." ".$row['last_name']."</br>".$row['email']."</br>";
    		?>
        <a class="darkbutton" href="action/editinfo.php">Edit profile info</a>
    	</div>
      <div class="card wide" id="dwide-bottom">
        <?php
        $connection = mysql_connect('localhost', 'root');
        mysql_select_db('Diagon Alley');
        $UserID = $_SESSION['id'];// e7tyaty l3'ayet lma agibo mn session = $_SESSION["userID"]
        $query ="SELECT * FROM purchase WHERE person_id='${UserID}'";
        $result = mysql_query($query) or die (mysql_error());
        // $loop = mysql_fetch_array($result);
        $imagesDir = "Public/products/";
        while ($row = mysql_fetch_assoc($result)){
          echo"<tr id ='font' align = 'middle'>";
          $product_id = $row['product_id'];
          $subres = mysql_query("SELECT * FROM product WHERE id='${product_id}'") or die (mysql_error());
          $res = mysql_fetch_assoc($subres);
          $productName = $res['name'];
          $product_summary = $res['summary'];
          echo "<p>${product_summary}</p>";
          echo "<p>${row['quantity']}</p>";
          echo "<p>${row['purchase_time']}</p>";
          echo "<br/>";
        }
        ?>
      </div>
    </div>
  </body>
</html>