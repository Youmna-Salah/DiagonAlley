<!DOCTYPE html>
<?php
	session_start();
	if (array_key_exists('Purchase', $_POST)) {
    	purchase();
    	return;
  	}
  	if (array_key_exists('delete', $_POST)) {
  		delete();
  		return;
  	}
?>
<html>
	<head>
		<script type="text/javascript">
			function confirm(form) {
				alert("Are you sure? " );
				return true;
			}
			// function delete() {
			// 	alert("Are you sure you want to delete this product from your cart? " );
			// 	return true;
			// }
		</script>
		<style type="text/css">
			body{
				background-image: url('./img/1.jpg');
				background-size: cover;
			}
			header{
				display: inline-block;
  				vertical-align: middle;	
			}
			header>ul>li {
  				margin: 0px 10px 0px 0px;
			}

			header>ul>li>a {
			  color: #ddd;
			  text-decoration: none;
			}

			header>ul>li>a:hover {
			  color: #fff;
			}
			header {
				width:100%;
			  background: #834;
			  vertical-align: middle;
			  box-shadow: 0px 2px 1px #222;
			}

			header * {
			  display: inline-block;
			  vertical-align: middle;
			}

			header .logo {
			  background: #311;
			  color: #fff;
			  font-size: 1.5em;
			  margin: 0px 10px 0px 0px;
			  padding: 10px;
			}
			* {
			  box-sizing: border-box;
			  margin: 0px;
			  padding: 0px;
			  border: 0px;
			}
			table,tr, th{
				border: 1px groove;
				border-color: #aaaaaa;
				font-size: 20px;
				margin: 10px;
        		font-variant: small-caps;
        		color: black;
        		height: 25px;
			}
			h3{
				color: white;
				font-size: 22px;
				padding-top: 20px;
				padding-bottom: 20px;
				padding-left: 20px;
			}
			#normal {
				font-size: 16px;
				font-family: sans-serif;
				font-variant: small-caps;
			}

			#table {
				vertical-align: center;
				position: absolute;
				border: 1px solid black;
				padding: 20px;
				top: 100px;
				left: 175px;
				width: 75%;
				min-height: 75px;
				background-color: rgba(255,255,255, 0.3);
				border-radius: 5px;
			}
			th.normal{
				border-radius: 2px;
				border-color: #cccccc;
				font-family: "Times New Roman", Times, serif;
				background-color: white;
			}
			div{

				padding: 40px;
			}
			input[type="submit"],button{
				background-color: rgb(50,50,50);
		        width: 80px;
		        height: 30px;
		        color: white;
		        text-align: center;
		        vertical-align: center;
		        border-radius: 5px;
		        
		        box-shadow: 20px 20px 20px #555555 inset;
			}
		</style>
	</head>
	<body>
		<header>
			<p class="logo">Diagon Alley</p>
	     	<ul>
		        <li><a href="#shophome">Shop Home</a></li>
		        <li><a href="#history">History</a></li>
	      	</ul>
		</header>
		<h3>Please confirm your purchase!</h3>
			<form  onsubmit = "return confirm(this);" action = "cart.php" method="POST">
				<table id = "table">
					<th class = 'normal'>Name</th>
					<th class = 'normal'>Summary</th>
					<th class = 'normal'>Price</th>
				
					<?php
						mysql_connect('localhost', "root");
			        	mysql_select_db('Diagon Alley');
			        	$id = $_SESSION['id'];
			        	$query = "select * from cart where person_id = ". $id;
			        	$result = mysql_query($query) or die(mysql_error());
			        	$numRows = mysql_num_rows($result);
			        	
			        	while ($id = mysql_fetch_assoc($result)) { 
			        		$query = 'select * from product where id = "'. $id['product_id'] .'" Limit 1;';
			        		$result = mysql_query($query) or die(mysql_error());
			        		$product = mysql_fetch_assoc($result);
			        		$_SESSION['product_id'] = $product['id'];
			        		$_SESSION['product_name'] = $product['name'];
			        		$_SESSION['product_summary'] = $product['summary'];
		
			        		$_SESSION['product_quantity'] = $product['quantity'];
			        		echo "<tr><th class = 'normal'>{$product['name']}</th> 
			        			  <th class = 'normal'>{$product['summary']}</th>
			        			  <th class= 'normal'> {$product['price']}$</th>
			        			  <th class = 'button'><input type = 'submit' name = 'Purchase' value = 'Purchase' />
			        			  <input type='submit'  name = 'delete' value = 'Delete' /> </th><tr>";
						}
					?>
				</table>
			</form>
		</div>
		<?php
			function purchase() {
				mysql_connect('localhost', "root");
			    mysql_select_db('Diagon Alley');
			    $query = 'delete  from cart where person_id ="'. $_SESSION['id']. '"and product_id ="'. $_SESSION['product_id'].'"';
			    $result = mysql_query($query) or die(mysql_error());
			    if($result) {
			    	$query = 'insert into purchase (person_id, product_id, quantity, purchase_time) 
			    				         values ("'. $_SESSION['id'].'", " '.$_SESSION['product_id'].'"," '.$_SESSION['product_quantity'].'", '.'NOW())';
			    
			    	$result = mysql_query($query) or die(mysql_error());
			    	if($result) {
			    		header("Location:cart.php");  die;
			    	}
			    	
			    }

			}
			function delete() {
				mysql_connect('localhost', "root");
			    mysql_select_db('Diagon Alley');
			    $query = 'delete  from cart where person_id ="'. $_SESSION['id']. '"and product_id ="'. $_SESSION['product_id'].'"';
			    $result = mysql_query($query) or die(mysql_error());
			    if($result) {	
			    	header("Location:cart.php");  die;
			    }
			}
		?>
	</body>
</html>
