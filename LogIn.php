<!DOCTYPE html>
<?php
	session_start();
?>
<html>
	<head>
		<style type="text/css">
			@keyframes fadeIn {
			  0% {
			    opacity: 0;
			  }

			  100% {
			    opacity: 1;
			  }
			}
			.m-scene {
			  /** Basic styles for an animated element */
			  
			    animation-duration: 3s;
			    transition-timing-function: ease-in;
			    animation-fill-mode: both;
			    animation-name: fadeIn;


			  
			}
			body{
				-webkit-transition: background-image 0.2s ease-in-out;
				animation-timing-function: ease-in-out;
				background-image: url('./img/4.png');
				background-size: cover;
			}
			body:after{
				 background: hsla(180,0%,50%,0.25);
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
				margin: 0px;
			  	background: #834;
			  	padding: 5px;
			  	box-shadow: 0px 0px 1px #222;
 				background: #834;
 				font-size: 20px;
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
	<body class="m-scene" id="main">
		 <header>
     <div id = "div1">
            <a href="Home.php">
             <img src="http://fontmeme.com/embed.php?text=Diagon%20Alley&name=Lumos.ttf&size=20&style_color=D4AF37" >
         </a>
        </div>
        <ul>
            <li><a href="Shop.php">Shop</a></li>
            <li><a href="#history">History</a></li>
            <li><a href="cart.php">Cart</a></li>
             <li><a href="logout.php">Log out</a></li>
          </ul>
  </header>
	</body>
</html>