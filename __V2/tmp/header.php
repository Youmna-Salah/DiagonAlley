  <header><!--
 --><p class="fifth" id="logo">Diagon Alley</p><!--
 --><a class="navlink" href="shop.php">Shop</a><!--
 --><?php
      if(logged_in()) {
        echo "<a class=\"navlink\" href=\"cart.php\">Cart</a>";
        echo "<a class=\"navlink\" href=\"profile.php\">Profile</a>";
        echo "<a class=\"navlink\" href=\"logout.php\">Logout</a>";
      } else {
        echo "<a class=\"navlink\" href=\"welcome.php\">Login/Register</a>";
      }
    ?>
  </header>