<?php
require('util/_common.php');
//require('util/private.php');
set_page_name('Cart');
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
        Your Cart
      </div>
      <div class="card wide" id="message "hidden>
        <?php if(isset($_SESSION['message'])){echo $_SESSION['message']; unset($_SESSION['message']);}?>
      </div>
      <div class="card wide" id="dwide-main">
        <?php
        mysql_connect("localhost", "root");
        mysql_select_db("Diagon Alley");
        // to be continued
        ?>
    	</div>
    </div>
  </body>
</html>