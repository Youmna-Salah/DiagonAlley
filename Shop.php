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
  
  <!--TODO: CLEAR DUMMY DATA-->
  <body>
    <header>
      <p class="logo">Diagon Alley</p><!--
   --><a href="#shophome">Shop Home</a><!--
   --><a href="#history">History</a>
    </header>
    <div class="container">
      <section class="asideouter">
        <div class="aside" id="category-list">
        </div>
      </section><!--
   --><section class="outer">
        <section class="inner" id="cat-Wands">
          <div class="item">
            <div class="top">
              <p class="name">Chocolate filled wand</p>
              <img class="thumbnail" src="img/1.jpg" />
              <p class="summary">A wand that is filled with chocolate</p>
            </div>
            <div class="bottom">
              <div class="stock">
                In stock: 1 <br>
              </div>
              <span class="price">
                $12.00
              </span>
              <span class="buy">
                <button class="buybutton">Buy</button>
              </span>
            </div>
          </div><!--
       --></section>
      </section>
    </div>

    <div id="pagecovering"></div>
    <div id="invisible cover"></div>
    <!--TODO: finish these divs--> 

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
            "stock" : "0",
            "category_id" : "mesh khales awy begad"
          }
        ]
      }
    ];
    //<?//=json_encode($products)?>;
    var selected = "";
    populateShop();
    </script>
  </body>

  </html>