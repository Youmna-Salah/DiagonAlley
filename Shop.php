<?php
  mysql_connect('localhost', 'root');
  mysql_select_db('Diagon Alley');
  $categories = mysql_query("SELECT * FROM category ORDER BY name;") or die(mysql_error());
  $products = array();
  $numRows = mysql_num_rows($result);
  if ($numRows > 0) {
    while ($category = mysql_fetch_assoc($categories)) {
      $categoryProducts = mysql_query("SELECT * FROM product WHERE category_id = ${category['id']} ORDER BY name") or die(mysql_error());
      array_push($products, array($categorie['name'] => $categoryProducts)); // $categoryProducts is passed by value fa eshta
    }
  }
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
  
  <script>var merchandise = <?=json_encode($products)?>;</script>
</body>

</html>