<!DOCTYPE html>
<?php
	session_start();
?>
<html>
	<head>
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
		</style>
		<link rel="shortcut icon" href="img/favicon.png">
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
	</body>
</html>