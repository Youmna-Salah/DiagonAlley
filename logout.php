<!DOCTYPE html>
<?php
	session_start();
?>
<html>
	<?php 
	if(session_status() !== PHP_SESSION_NONE) {
		session_destroy();
		//header("Location:Home.php");die;
	}
	
	?>
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
		body {
			background: url(../img/3.jpg) no-repeat center center fixed;
			background-size: cover;
		}
		header{
        	display: inline-block;

          	vertical-align: middle; 
      }
      header>ul>li {
        
        padding-right: 30px;
        padding-left: 30px;
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

      
      * {
        box-sizing: border-box;
        margin: 0px;
        padding: 0px;
        border: 0px;
      }
      #div1{
        margin-left: auto;
        vertical-align: middle;
        padding: 0px;
      }
	</style>
	<head>
		<title>Diagon Alley</title>
	</head>
	<body class="m-scene" id="main" >
		<header>
     <div id = "div1">
            <a href="Home.php">
             <img src="http://fontmeme.com/embed.php?text=Diagon%20Alley&name=Lumos.ttf&size=20&style_color=D4AF37" >
         </a>
        </div>
        <ul>
            <li><a href="Shop.php">Shop</a></li>
           
          </ul>
  </header>
    
	</body>
</html>
