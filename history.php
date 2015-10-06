<!-- view profile along with history  -->
<html>
	<head>
		<link rel="stylesheet" type="text/css" href="css/history.css">

		</head>
		<body ><!-- style="background-image:url(Public/products/snitch.jpg) -->
			 <div id = "div1">
      <a href="#home">
        <img id ="text" src="http://fontmeme.com/embed.php?text=Diagon%20Alley&name=Lumos.ttf&size=50&style_color=CFB53B" alt="Harry Potter Font"></a>
      </a>
    </div>
    <div id="space"></div>
    	<p><?php
      
    	$connection = mysql_connect('localhost', 'root');
          mysql_select_db('DigonAlley');
          $UserID = 1;// e7tyaty l3'ayet lma agibo mn session = $_SESSION["userID"]
          $query = "SELECT * from person WHERE id ='$UserID' ";
          $result = mysql_query($query)
            or die (mysql_error());
             $imagesDir = "Public/ProfilePictures/";
           while ($row = mysql_fetch_assoc($result)){
            $imagename = $row['id'].'.jpg';
           	echo '<img  id = "icon2" src="'.$imagesDir.$imagename.'" />';
           }

    	?>
    	</p>
      
    	<div id ="profile">
    		<?php
    		  $query = "SELECT * from person WHERE id ='$UserID' ";
          $result = mysql_query($query)
            or die (mysql_error());

    		$row = mysql_fetch_assoc($result);
    		echo $row['first_name']." ".$row['last_name']."</br>".$row['email']."</br>";

    		?>
        <a href="editinfo.php"><button id ="button">Edit Info</button></a>
      </br>
    </br>
    	</div>
    	<div id ="space"></div>
    	</d>
    	    <div id ="div2">

    	         <a><img id = "text" align = "middle" src="http://fontmeme.com/embed.php?text=History&name=HogwartsWizard.ttf&size=40&style_color=0C0C66" alt="Harry Potter Font"></a>

    	<table width=100%>
    		<tr id ="font">
          <td><a><img align = "middle" src="http://fontmeme.com/embed.php?text=Icon&name=HogwartsWizard.ttf&size=20&style_color=0C0C66" alt="Harry Potter Font"></a>
</td>
          <td><a><img align = "middle" src="http://fontmeme.com/embed.php?text=Summary&name=HogwartsWizard.ttf&size=20&style_color=0C0C66" alt="Harry Potter Font"></a>
</td>
          <td><a><img align = "middle" src="http://fontmeme.com/embed.php?text=Purchase Quantity&name=HogwartsWizard.ttf&size=20&style_color=0C0C66" alt="Harry Potter Font"></a>
</td>
          <td><a><img align = "middle" src="http://fontmeme.com/embed.php?text=Purchase Time&name=HogwartsWizard.ttf&size=20&style_color=0C0C66" alt="Harry Potter Font"></a>
</td>
          </tr>
			 <?php
          
          $query ="SELECT * FROM `purchase` WHERE person_id='$UserID'";
          $result = mysql_query($query)
            or die (mysql_error());
          // $loop = mysql_fetch_array($result);
          $imagesDir = "Public/products/";
          while ($row = mysql_fetch_assoc($result)){
          	echo"<tr id ='font' align = 'middle'>";
          	$product_id = $row['product_id'];
          	$subres = mysql_query("SELECT * FROM `product` WHERE id='$product_id'")
            or die (mysql_error());
            $res = mysql_fetch_assoc($subres);
          	$productName = $res['name'];
          	$product_summary = $res['summary'];
            echo '<td align = "middle"><img  id = "icon" src="'.$imagesDir.$productName.'.jpg" /></td>';
           echo  "<td align = 'middle'>".$product_summary."</td> <td align = 'middle'>". $row['quantity'] . "</td> <td align = 'middle'>"  . $row['purchase_time']."</td></tr>";

     }
               echo"";
 
     ?>
     </table>
     </div>
		</body>
		</html>