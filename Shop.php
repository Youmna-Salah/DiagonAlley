<?php
  mysql_connect('localhost', 'root');
  mysql_select_db('Diagon Alley');
  // $query = "SELECT";
  
?>
<!DOCTYPE html>
<html>

<head>
  <link rel="shortcut icon" href="img/favicon.png">
  <link rel="stylesheet" type="text/css" href="css/normalize.css">
  <link rel="stylesheet" type="text/css" href="css/Shop.css">
  <title>Diagon Alley</title>
</head>

<body>
  <header>
    <p class="logo">Diagon Alley</p>
    <ul>
      <li><a href="#shophome">Shop Home</a></li>
      <li><a href="#history">History</a></li>
    </ul>
  </header>
  
  <script>var merchandise = <?=json_encode($result)?>;</script>
</body>

</html>