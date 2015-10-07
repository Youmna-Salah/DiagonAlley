<?php
session_start();

global $pagename;

function set_page_name($newpagename) {
  $pagename = $newpagename;
}

function logged_in() {
  return isset($_SESSION['id']);
}
?>