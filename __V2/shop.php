<?php
require('util/_common.php');
set_page_name('Shop');
?>
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
    <?php require('tmp/headcontent.php');?>
  </head>
  <body>
    <?php require('tmp/header.php');?>
  </body>
</html>