<?php
if(!logged_in()) {
  header("Location: welcome.php");
}
?>