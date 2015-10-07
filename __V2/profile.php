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
      </div>
      <div class="card wide" id="dwide-top">
      </div>
      <div class="card wide" id="dwide-bottom">
      </div>
    </div>
  </body>
</html>