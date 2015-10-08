<?php

function redirecttoshop(){
  header("Location: shop.php");
}

session_start();

if (!(isset($_SESSION['id']))) {
  header ("Location: Welcome.php");
}

$itemid = $_POST['id'];
$personid = $_SESSION['id'];
mysql_connect('localhost', "root");
mysql_select_db('Diagon Alley');
$productquantitySQL = mysql_query("SELECT quantity FROM product WHERE product.id = ${itemid};") or die(mysql_error());

if(mysql_num_rows($productquantitySQL) < 0) {
  $_SESSION['message'] = 'Product doesn\'t exist';
  redirecttoshop();
}

$productquantity = mysql_fetch_assoc($productquantitySQL)['quantity'];

if ($_POST['quantity'] > $productquantity) {
  $_SESSION['message'] = 'You requested to buy more of this item than we have in stock';
  redirecttoshop();
}

// TODO: check sql validity with maggie & youmna
mysql_query("UPDATE products WHERE id = ${itemid} SET quantity = quantity-${productquantity};") or die(mysql_error());
mysql_query("INSERT INTO cart values ('${personid}', ${itemid}, ${productquantity});") or die(mysql_error());

redirecttoshop();

?>