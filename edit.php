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
	$query = "UPDATE `digonAlley`.`person` SET first_name ='$udfirstName',last_name ='$udlastName',image ='$udavatar',password= '$udpassword', email = '$udemail' WHERE id=10";   			                

	if(FALSE. empty($query)){
		    mysql_query($query)or die(mysql_error());

	if (mysql_num_rows($query)==0)
	{
		    echo "<script>alert('Some thing went wrong');</script>";

		// echo 'something went wrong</br>';
		// header( 'Location: editinfo.php' ) ;

	}
else
{
	echo "<script>alert('data is updated successfuly EL7AMDOULAAAAAAAAAA .....:D');</script>";

}}
else
{
  echo "<script>alert('Invalid user_id');</script>";
}

}
 echo '<META HTTP-EQUIV="Refresh" Content="0; URL=editinfo.php">'
//redirect to location  page
//header( 'Location: editinfo.php' ) ;


?>
</h1>
<!-- <p>data updated successfuly....EL7AMDOULAAAAAAAAAA !!!</p> -->
</body>
</html>