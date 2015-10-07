<?php
  mysql_connect('localhost', "root");
  mysql_select_db('Diagon Alley');
  $categories = mysql_query('SELECT * FROM category;') or die(mysql_error());
  $products = array();
  $numRows = mysql_num_rows($categories);
  if ($numRows > 0) {
    while ($category = mysql_fetch_assoc($categories)) {
      $categoryProductsSQL = mysql_query("SELECT * FROM product WHERE category_id = ${category['id']}") or die(mysql_error());
       $numRowsProducts = mysql_num_rows($categoryProductsSQL);
       $categoryProducts = array();
       if ($numRowsProducts > 0) {
         while ($product = mysql_fetch_assoc($categoryProductsSQL)) {
           array_push($categoryProducts, $product);
         }
       }
      array_push($products, array('name' => $category['name'], 'products' => $categoryProducts));
    }
  }
?>
  <!DOCTYPE html>
  <html>

  <head>
    <link rel="shortcut icon" href="img/favicon.png">
    <link rel="stylesheet" type="text/css" href="css/normalize.css">
    <link rel="stylesheet" type="text/css" href="css/shop.css">
    <title>Diagon Alley</title>
  </head>

  <body>
    <header>
      <p class="logo">Diagon Alley</p><!--
   --><a href="#">Shop Home</a><!--
   --><a href="history.php">History</a><!--
   --><?php if(isset($_SESSION['email'])) {
     echo "Welcome ${_SESSION['email']}";
   } else {
     echo '<a href="Home.php">Login/Register</a>';
   }

   ?>
    </header>

    <div class="container">
      <section class="asideouter">
        <div class="aside" id="category-list">
        </div>
      </section><!--
   --><section id="outer"></section>
    </div>


    <div id="cover" onclick="hideCovers();" style="display: none;">
    </div>
    <div id="popup" style="display: none;">
     <div class="fullimagediv">
         <img class="fullimage" src="img/1.jpg">
     </div><!--
  --><div class="descriptiondiv">
       <h1 id="poptitle"></h1>
       <p id="popdescription"></p>
       <div id="popbottom">
         <form formaction="addtocart.php" method="post">
           <input name="id" type="hidden" id="popid" value="">
           Quantity: <input name="quantity" type="number" id="popnum"><br/><br/>
           <input type="submit" id="popbuy" value="Add to cart" class="buybutton"></button>
         </form>
       </div>
     </div>
     </div>

     <div id="message" onclick="hideMessage();" <?php if(!isset($_SESSION['message'])||$_SESSION['message']=='') {/*echo "style=\"display: none;\"";*/}?>>
       <?php if(isset($_SESSION['message']) && $_SESSION['message']!='') {
         echo $_SESSION['message'];
         $_SESSION['message'] = '';
       }?>
       hi
     </div>

    <!--Scripts-->
    <script src="js/shop.js"></script>
    <script>
    var merchandise = <?= json_encode($products)?>;
    var itemindex = {};
    var selected = "";
    populateShop();
    </script>
  </body>

  </html>