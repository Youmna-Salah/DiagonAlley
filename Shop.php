<?php
  mysql_connect('localhost', 'root');
  mysql_select_db('Diagon Alley');
  $categories = mysql_query("SELECT * FROM category ORDER BY name;") or die(mysql_error());
  $products = array();
  $numRows = mysql_num_rows($categories);
  if ($numRows > 0) {
    while ($category = mysql_fetch_assoc($categories)) {
      $categoryProducts = mysql_query("SELECT * FROM product WHERE category_id = ${category['id']} ORDER BY name") or die(mysql_error());
      array_push($products, array('name' => $category['name'], 'products' => $categoryProducts));
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
      <li><a href="#shophome">Shop Home</a></li>
      <li><a href="#history">History</a></li>
  </header>
  
  <aside id="category-list">
  </aside>
  
  <section id="item-section">
  </section>
  
  <!--Scripts-->
  <script src="js/shop.js"></script>
  <script>
    //dummy data
    var merchandise = [
      {
        "name": "Wands",
        "products": [
          {
            "id":"1",
            "name": "Elder Wand",
            "description": "Gamda awy ;) gamda awy ;) gamda awy ;) gamda awy ;) gamda awy ;) gamda awy ;)",
            "summary" : "3ammatan gamda awy",
            "image" : "img/1.jpg",
            "price" : "1999.99",
            "stock" : "1",
            "category_id" : "mesh khales awy begad"
          }
        ]
      }
    ];
    //<?//=json_encode($products)?>;
    populateShop();
  </script>
</body>

</html>