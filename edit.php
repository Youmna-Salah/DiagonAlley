<html>
	<head>
	</head>
	<body>
		<h1>
<?php

mysql_connect ('localhost', 'root');
          mysql_select_db('DigonAlley');
          

if (isset($_POST['edit'])) {

    $udfirstName = $_POST['first_name'];
    $udlastName = $_POST['last_name'];
    $udemail = $_POST['email'];
    $udpassword = $_POST['password'];
    $udavatar =isset($_POST['image'])?$_POST['image']:'';
	$query = "UPDATE `digonAlley`.`person` 
	SET first_name ='$udfirstName'
	,last_name ='$udlastName'
	,image ='$udavatar'
	,password= '$udpassword'
	, email = '$udemail'
	 WHERE id = 2 ";   			                

		    mysql_query($query)or die(mysql_error());
	// if(FALSE. empty($query)){

	if (FALSE. empty($query) && mysql_num_rows($query)==0)
	{
		    echo "<script>alert('Some thing went wrong');</script>";

		// echo 'something went wrong</br>';
		// header( 'Location: editinfo.php' ) ;

	}
else
{
	echo "<script>alert('data is updated successfuly EL7AMDOULAAAAAAAAAA .....:D');</script>";

}
	       if(array_key_exists('image', $_FILES)) {
            $target_dir = "/Applications/XAMPP/htdocs/DiagonAlley/Public/ProfilePictures/";
            $target_file = $target_dir . basename($_FILES["image"]["name"]);
            $imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
            //echo implode("hhh ",$_FILES);
            if (move_uploaded_file($_FILES["image"]["tmp_name"], $target_file)) {
              $upload_query = 'update person SET image = "'.$target_file.'" where email= "'.$_POST["email"].'";';
              $result = mysql_query($upload_query) or die(mysql_error());
              if($result) {
              echo "image updated successfuly.";
              }
              //echo "The file ". basename( $_POST["image"]). " has been uploaded.";
            } else {
              echo "Sorry, there was an error uploading your file.";
            }
          }
			}
            //echo implode("hhh ",$_FILES);
            // if (move_uploaded_file($_FILES["image"]["tmp_name"], $target_file)) {
            //   $upload_query = 'update person SET image = "'.$target_file.'" where email= "'.$_POST["email"].'";';
            //   $result = mysql_query($upload_query) or die(mysql_error());
            //   if($result) {
            //     header("Location:Login.php");die;
            //   }
            //   //echo "The file ". basename( $_POST["image"]). " has been uploaded.";
            // } else {
            //   echo "Sorry, there was an error uploading your file.";
            // }
          // }
          // else{
          // 	echo "string";
          // }
       //  }
// else
// {
//   echo "<script>alert('Invalid user_id');</script>";
// }

//}
 // echo '<META HTTP-EQUIV="Refresh" Content="0; URL=editinfo.php">'
//redirect to location  page
//header( 'Location: editinfo.php' ) ;


?>
</h1>
<!-- <p>data updated successfuly....EL7AMDOULAAAAAAAAAA !!!</p>
 --></body>
</html>