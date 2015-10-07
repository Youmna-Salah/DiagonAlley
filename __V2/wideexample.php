<?php
require('util/_common.php');
set_page_name('Wide Example');
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
        Title
      </div>
      <div class="card wide" id="message"hidden>
        Ew
      </div>
      <div class="card wide" id="dwide-top">
      </div>
      <div class="card wide" id="dwide-bottom">
      </div>
    </div>
  </body>
</html>