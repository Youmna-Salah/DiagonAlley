<html>
	<head>

	</head>
	<body>
		<h1>
<?php

mysql_connect ('localhost', 'root');
          mysql_select_db('DigonAlley');
          
$UserId =  2 ;///     session->   $_SESSION["userID"];
if (isset($_POST['edit'])) {
    $udfirstName = $_POST['first_name'];
    $udlastName = $_POST['last_name'];
    $udoldemail =$_POST['oldemail'];
    $udemail = $_POST['email'];
    $udpassword = $_POST['password'];
    $udavatar =isset($_POST['image'])?$_POST['image']:'';
    // Required field names
$required = array($_POST['first_name'], $_POST['last_name'],$_POST['oldemail'] , $_POST['email'],  $_POST['password'],$_FILES["image"]["name"]);

// Loop over field names, make sure each one exists and is not empty
$error = false;
foreach($required as $field) {
  if (empty($field) ) {
    $error = true;
    break;
  }
}

if ($error) {
  echo "<script>alert('All fields are required.');</script>";
} 
else {

  echo "<script>alert('Proceed...');</script>";
	$query = "UPDATE `digonAlley`.`person` 
	SET first_name ='$udfirstName'
	,last_name ='$udlastName'
	,image ='$udavatar'
	,password= '$udpassword'
	, email = '$udemail'
	 WHERE email = '$udoldemail' ";   			                

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
	echo "<script>alert('data is updated successfuly :D');</script>";

}
	       if(array_key_exists('image', $_FILES)) {
            $target_dir = "/Applications/XAMPP/htdocs/DiagonAlley/Public/ProfilePictures/";
            $target_file = $target_dir . basename($_FILES["image"]["name"]);
            $imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
            $newname =$UserId.".jpg";
            $newnamedir =$target_dir.$newname;
            // if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
            //   && $imageFileType != "gif" ) {
            //   echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
            //   $uploadOk = 0;
            //      }
            //      else{
            //echo implode("hhh ",$_FILES);
            if (move_uploaded_file($_FILES["image"]["tmp_name"], $newnamedir)) {
              $upload_query = 'update person SET image = "'.$newname.'" where email= "'.$_POST["email"].'";';
              $result = mysql_query($upload_query) or die(mysql_error());
              if($result) {
              echo "<script>alert('image updated successfuly.');</script>";
              }
              //echo "The file ". basename( $_POST["image"]). " has been uploaded.";
            } else {
              echo "<script>alert('Sorry, there was an error uploading your file.');</script>";
            }
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
 echo '<META HTTP-EQUIV="Refresh" Content="0; URL=editinfo.php">'
//redirect to location  page
//header( 'Location: editinfo.php' ) ;


?>
</h1>
<!-- <p>data updated successfuly....EL7AMDOULAAAAAAAAAA !!!</p>
 --></body>
</html>